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
                    <p class="mb-3" style="font-size:2vw"><strong>Add Event Gallary Photo</strong></p>
       
                <form action="{{ url('/add_gallary_photo')}}" method="POST" enctype="multipart/form-data">
                    @csrf

                    <div class="mb-3">
                        <label>Product Image :</label>
                        <input class="cate-img-label" type="file" name="image" required="" >
                    </div>
                    <div class="mb-3">
                         <input type="submit" value="Add Photo" class="btn btn-primary">
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