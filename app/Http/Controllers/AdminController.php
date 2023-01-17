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
use PDF;


class AdminController extends Controller
{
    public function view_category()
    {   
        $data = Category::all();
        return view('admin.category', compact('data'));
    }
    
    public function add_category( Request $request)
    {
        $data = new Category();
        $data->category_name = $request->category;
        $data->save();
        return redirect()->back()->with('message', 'Category Added Successfully');
    }

    
    public function delete_category($id)
    {   
        $data = Category::find($id);
        $data->delete();
        return redirect()->back()->with('message', 'Category Deleted Successfully');
    }
   
    



    public function view_product()
    {   $category = Category::all();
        return view('admin.product', compact('category'));
    }

    public function  add_product(Request $request)
    {  
        $products = new Product();
        $products->title = $request->title;
        $products->description = $request->description;
        $products->price = $request->price;
        $products->quantity = $request->quantity;
        $products->category = $request->category;

         $image = $request->image;
        $imagename = time().'.'.$image->getClientOriginalExtension();
        $request->image->move('productImage',$imagename);
        $products->image = $imagename;

        $products->save();
        
        return redirect()->back()->with('message', 'Product Added Successfully');
    }

    public function show_product()
    {   
        $products = Product::all();
        return view('admin.show_product', compact('products'));
    }
    
    public function delete_product($id)
    {   
        $product = Product::find($id);
        $product->delete();
        return redirect()->back()->with('message', 'Product Deleted Successfully');
    }

    public function edit_product($id)
    {   
        $product = Product::find($id);
        $category = Category::all();
        return view('admin.edit_product', compact('product', 'category'));
    }



    public function edit_product_confirm(Request $request, $id)
    {   
        $product = Product::find($id);

        $product->title = $request->title;
        $product->description = $request->description;
        $product->price = $request->price;
        $product->quantity = $request->quantity;
        $product->category = $request->category;


         $image = $request->image;

        if($image)
        {
            $imagename = time().'.'.$image->getClientOriginalExtension();
            $request->image->move('productImage',$imagename);
            $product->image = $imagename;
        }

        $product->save();

        return redirect('/show_product')->with('message', 'Product Updated Successfully');
    
    }


    public function view_order()
    {
        $orders = Order::all();
        return view('admin.view_order', compact('orders'));
    }


    public function delivered($id)
    {
        $order = Order::find($id);
        $order->delivery_status="Delivered";
        $order->payment_status="Paid";
        $order->save();
        return redirect()->back();
    }
    


    public function print_pdf($id)
    {
        $orders = Order::find($id);
        $pdf = PDF::loadView('admin.pdf' ,compact('orders'));
        return $pdf->download('order_details.pdf');
    }
 

}
