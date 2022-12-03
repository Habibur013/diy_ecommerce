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
                    <p style="font-size: 2vw;" class="c-title mb-3">Invoice</p>
                </div>

                <table class="table table-striped  tbl_center">
                  <thead>
                    <tr>
                      <th style="color:white;"><b>Rental Name<b></th>
                      <th style="color:white;"><b>Quantity<b></th>
                    </tr>
                  </thead>
                  <tbody>
                  @foreach( $invoice as $items)
                    <tr>
                      <td>{{$items->product_title}}</td>
                      <td>{{$items->quantity}}</td>
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