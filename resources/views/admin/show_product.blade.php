<!DOCTYPE html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    @include('admin.css')
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="//cdn.datatables.net/1.13.1/css/jquery.dataTables.min.css">
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


              <div class="row">
                 <div class="col-md-12">
                 
                <div class="text-center mt-1">
                    <p style="font-size: 2vw;" class="c-title">Show Product</p>

                <table class="table table-striped  tbl_center" id="myTable">
                  <thead class="bg-info" style="text-align:center !important;">
                    <tr>
                      <th style="color:white;text-align:center !important;"><b>Product Name<b></th>
                      <th style="color:white;text-align:center !important;"><b>Description<b></th>
                      <th style="color:white;text-align:center !important;"><b>Quantity<b></th>
                      <th style="color:white;text-align:center !important;"><b>Category<b></th>
                      <th style="color:white;text-align:center !important;"><b>Price<b></th>
                      <th style="color:white;text-align:center !important;"><b>Image<b></th>
                      <th style="color:white;text-align:center !important;"><b>Action<b></th>
                    </tr>
                  </thead>
                  <tbody>
                  @foreach( $products as $item)
                    <tr>
                      <td>{{$item->title}}</td>
                      <td>{{$item->description}}</td>
                      <td>{{$item->quantity}}</td>
                      <td>{{$item->category}}</td>
                      <td>{{$item->price}}</td>
                      <td>
                      <img  src="/productImage/{{$item->image}}"  style="height:50px;width:50px;">
                      </td>
                      <td>
                         <a href="{{ url('edit_product', $item->id)}}" class="btn btn-primary">Edit</a>
                         <a onclick="return confirm('Are You Sure to Delete this Product ? ')" href="{{ url('delete_product', $item->id)}}" class="btn btn-danger">Delete</a>
                      </td>
                    </tr>
                  @endforeach
                  </tbody>
                </table>

                </div>
                
                 </div>
              </div> 




            </div>
        </div>
    <!-- container-scroller -->
    <!-- plugins:js -->
     @include('admin.script')
     <script src="//cdn.datatables.net/1.13.1/js/jquery.dataTables.min.js"></script>
     <script>
       $(document).ready( function () {
           $('#myTable').DataTable();
       } );
     </script>
    <!-- End custom js for this page -->
  </body>
</html>