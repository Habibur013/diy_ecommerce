<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\User;
use App\Models\Category;
use App\Models\Product;
use App\Models\Cart;
use App\Models\Order;
use App\Models\OrderItems;


class HomeController extends Controller
{
    public function index()
    {
        $products = Product::paginate(6);
        return view('home.userpage', compact('products'));
    }


    public function view_event_galary()
    {
        return view('home.gallary');
    }



    public function redirect()
    {
        $usertype = Auth::user()->usertype;
        if ($usertype == '1') {
            return view('admin.home');
        } else {
            $products = Product::paginate(6);
            return view('home.userpage', compact('products'));
        }
    }

    function product_details($id)
    {
        $product = Product::find($id);
        return view('home.product_details', compact('product'));
    }

    public function add_cart(Request $request, $id)
    {
        if (Auth::id()) {
            $user = Auth::user();
            $product = Product::find($id);
            $cart = new Cart();

            $cart->name = $user->name;
            $cart->email = $user->email;
            $cart->phone = $user->phone;
            $cart->address = $user->address;
            $cart->user_id = $user->id;
            $cart->product_title = $product->title;
            $cart->price = $product->price * $request->quantity;
            $cart->image = $product->image;
            $cart->product_id = $product->id;
            $cart->quantity = $request->quantity;
            $cart->save();
            return redirect()->back();
        } else {
            return redirect('login');
        }
    }

    public function show_cart()
    {
        if (Auth::id()) {
            $id = Auth::user()->id;
            $cart = Cart::where('user_id', '=', $id)->get();
            return view('home.show_cart', compact('cart'));
        } else {
            return redirect('login');
        }
    }

    public function remove_cart($id)
    {
        $cart = Cart::find($id);
        $cart->delete();
        return redirect()->back();
    }


    public function add_order(Request $request)
    {

        $user = Auth::user();
        $cart = Cart::where('user_id', '=', $user->id)->get();

        // don't need name email phpne address field in cart table
        // just like order and order-item table cart can be devided by cart and cartitem table
        // but for simplicity it can be ok for now.

        $order = new Order();
        $order->name = $user->name;
        $order->email = $user->email;
        $order->phone = $user->phone;
        $order->address = $user->address;
        $order->user_id = $user->id;
        $order->delivery_address = $request->delivery_address;
        $order->event_date = $request->event_date;
        $order->return_date = $request->return_date;
        $order->delivery_phone = $request->delivery_phone;
        $order->payment_status = 'Cash on delivery';
        $order->delivery_status = 'Processing';
        $order->save();

        foreach ($cart as $cart) {
            $orderitems = new OrderItems();
            $orderitems->order_id = $order->id;
            $orderitems->user_id = $order->user_id;

            $orderitems->product_title = $cart->product_title;
            $orderitems->price = $cart->price;
            $orderitems->quantity = $cart->quantity;
            $orderitems->image = $cart->image;
            $orderitems->product_id = $cart->product_id;

            $orderitems->save();

            $cart_id = $cart->id;
            $cat = Cart::find($cart_id);
            $cat->delete();
        }
        $order->save();

        return redirect()->back()->with('message', 'We Have Received Your Order. We Will Contact With You as Soon as Possible!!');
    }
}
