<!DOCTYPE html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    @include('admin.css')
    <meta name="viewport" content="width=device-width, initial-scale=1">
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


             
                <div class="text-center mt-2">
                    <p style="font-size: 2vw;" class="c-title mb-3">Add Category</p>

                    <form action="{{ url('/add_category')}}" method="POST">
                     @csrf
                       <input class="input_color" type="text" name="category" placeholder="Write category name">
                       <input class=" btn btn-primary bp" type="submit" name="submit" value="Add Category">
                    </form>
                </div>

                <table class="table table-striped  tbl_center">
                  <thead>
                    <tr>
                      <th style="color:white;"><b>Category Name<b></th>
                      <th style="color:white;"><b>Action<b></th>
                    </tr>
                  </thead>
                  <tbody>
                  @foreach( $data as $items)
                    <tr>
                      <td>{{$items->category_name}}</td>
                      <td><a onclick="return confirm('Are You Sure to Delete this Category? ')" href="{{ url('delete_category', $items->id)}}" class="btn btn-danger" >Delete</a></td>
                    </tr>
                  @endforeach
                  </tbody>
                </table>
                
            </div>
        </div>
    <!-- container-scroller -->
    <!-- plugins:js -->
     @include('admin.script')
    <!-- End custom js for this page -->
  </body>
</html>