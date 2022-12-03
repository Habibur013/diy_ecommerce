<!DOCTYPE html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <base href="/public">

    @include('admin.css')
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <style type="text/css">
       label{
        display: inline-block;
        width:200px;
       }
       .cate-img-label{
        display: inline-block;
        width:200px;
       }
      
    </style>
  </head>
  <body>
    <div class="container-scroller">
      <!-- partial:partials/_sidebar.html -->
        @include('admin.sidebar')
      <!-- partial -->
      @include('admin.header')
        <!-- partial -->
        <div class="main-panel">
            <div class="content-wrapper">


             @if(session()->has('message'))
                <div class="alert alert-success">
                  <button type="button" class="close" data-dismiss="alert" aria-hidden="true">x</button>
                    {{session()->get('message')}}
                </div>
             @endif


                <div class="div_center">
                    <p class="mb-3" style="font-size:2vw"><strong>Edit Product</strong></p>

                <form action="{{ url('/edit_product_confirm', $product->id)}}" method="POST" enctype="multipart/form-data">
                    @csrf
                   
                    <div class="mb-3">
                        <label>Product Title :</label>
                        <input class="text_color" type="text" name="title" placeholder="Write Product title" required="" value="{{$product->title}}">
                    </div>
                    <div class="mb-3">
                        <label>Product Description :</label>
                        <input class="text_color" type="text" name="description" placeholder="Write Product description" required="" value="{{$product->description}}">
                    </div>
                    <div class="mb-3">
                        <label>Product Price :</label>
                        <input class="text_color" type="number" name="price" min="0" placeholder="Write Product price" required="" value="{{$product->price}}">
                    </div>
                    <div class="mb-3">
                        <label>Product Quantity :</label>
                        <input class="text_color" type="number" name="quantity" min="0" placeholder="Write Product quantity" required="" value="{{$product->quantity}}">
                    </div>
                    
                    <div class="mb-3">
                        <label>Product Category:</label>
                         <select class="text_color cate-img-label" name="category" required="">
                           <option value="{{$product->category}}" selected="">{{$product->category}}</option>
                           
                           @foreach($category as $item)
                           <option value="{{$item->category_name}}">{{$item->category_name}}</option>
                           @endforeach


                         </select>
                    </div>


                     
                     <div class="mb-3">
                        <label>Current Product Image :</label>
                        <img style="margin: auto;" height="80" width="80" src="/productImage/{{$product->image}}">
                    </div>

                    <div class="mb-3">
                        <label>Change Product Image :</label>
                        <input class="cate-img-label" type="file" name="image" >
                    </div>
                    <div class="mb-3">
                         <input type="submit" value="Update Product" class="btn btn-primary">
                    </div>
                    
                </form>

                </div>

            </div>
        </div>
    <!-- plugins:js -->
     @include('admin.script')
    <!-- End custom js for this page -->
  </body>
</html>