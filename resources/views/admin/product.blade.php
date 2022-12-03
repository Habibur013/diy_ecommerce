<!DOCTYPE html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
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
                    <p class="mb-3" style="font-size:2vw"><strong>Add Product</strong></p>
       
                <form action="{{ url('/add_product')}}" method="POST" enctype="multipart/form-data">
                    @csrf
                   
                    <div class="mb-3">
                        <label>Product Title :</label>
                        <input class="text_color" type="text" name="title" placeholder="Write Product title" required="">
                    </div>
                    <div class="mb-3">
                        <label>Product Description :</label>
                        <input class="text_color" type="text" name="description" placeholder="Write Product description" required="">
                    </div>
                    <div class="mb-3">
                        <label>Product Price :</label>
                        <input class="text_color" type="number" name="price" min="0" placeholder="Write Product price" required="">
                    </div>
                    <div class="mb-3">
                        <label>Product Quantity :</label>
                        <input class="text_color" type="number" name="quantity" min="0" placeholder="Write Product quantity" required="">
                    </div>
                    
                    <div class="mb-3">
                        <label>Product Category:</label>
                         <select class="text_color cate-img-label" name="category" required="">
                           <option value="" selected="">Select a Category</option>
                           @foreach($category as $item)
                           <option value="{{$item->category_name}}">{{$item->category_name}}</option>
                           @endforeach
                         </select>
                    </div>
                    <div class="mb-3">
                        <label>Product Image :</label>
                        <input class="cate-img-label" type="file" name="image" required="" >
                    </div>
                    <div class="mb-3">
                         <input type="submit" value="Add Product" class="btn btn-primary">
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