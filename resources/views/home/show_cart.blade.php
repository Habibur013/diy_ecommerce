<!DOCTYPE html>
<html>
   <head>
    <base href="/public">
      <!-- Basic -->
      <meta charset="utf-8" />
      <meta http-equiv="X-UA-Compatible" content="IE=edge" />
      <!-- Mobile Metas -->
      <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
      <!-- Site Metas -->
      <meta name="keywords" content="" />
      <meta name="description" content="" />
      <meta name="author" content="" />
      <link rel="shortcut icon" href="images/fav_icon.png" type="">
      <title>D.I.Y-Rentals-nyc.iic</title>
      <!-- bootstrap core css -->
      <link rel="stylesheet" type="text/css" href="home/css/bootstrap.css" />
      <!-- font awesome style -->
      <link href="home/css/font-awesome.min.css" rel="stylesheet" />
      <!-- Custom styles for this template -->
      <link href="home/css/style.css" rel="stylesheet" />
      <!-- responsive style -->
      <link href="home/css/responsive.css" rel="stylesheet" />
        <!------ Include the above in your HEAD tag ---------->
       <link href="home/css/product-details.css" rel="stylesheet" />
      
   </head>
   <body>
   
     <!-- header section strats -->
     @include('home.header')
    <!-- end header section -->
    

	<div class="container mb-5" style="margin-top:-40px !important;">
		<div class="card">
			<div class="container-fliud">
				
					@if(session()->has('message'))
                <div class="alert alert-success">
                  <button type="button" class="close" data-dismiss="alert" aria-hidden="true">x</button>
                    {{session()->get('message')}}
                </div>
             @endif


                    
            <div class="row">
                 <div class="col-md-12">
                 
                <div class="text-center mt-1">
                    <p style="font-size: 2vw;" class="c-title"><b>Cart Items</b></p>

                <table class="table table-striped table-bordered tbl_center mt-5">
                  <thead class="bg-info">
                    <tr>
                      <th style="color:white;"><b>Product Name<b></th>
                      <th style="color:white;"><b>Quantity<b></th>
                      <th style="color:white;"><b>Price<b></th>
                      <th style="color:white;"><b>Image<b></th>
                      <th style="color:white;"><b>Action<b></th>
                    </tr>
                  </thead>
                  <tbody>
                  @foreach( $cart as $item)
                    <tr>
                      <td>{{$item->product_title}}</td>
                      <td>{{$item->quantity}}</td>
                      <td>{{$item->price}}</td>
                      <td class="text-center">
                      <img  src="/productImage/{{$item->image}}"  style="height:40px;width:60px; margin:auto !important;">
                      </td>
                      <td>
                         <a onclick="return confirm('Are You Sure to Remove this Item ? ')" href="{{ url('remove_cart', $item->id)}}" class="btn btn-danger">Remove Item</a>
                      </td>
                    </tr>
                  @endforeach
                  </tbody>
                </table>


              <form action="{{ url('add_order/')}}" method="POST">
                   @csrf
                <div class="row">
                    <div class=" col-md-3 mb-3">
                        <label>Delivery Address:</label>
                        <input class=" " type="text" name="delivery_address" placeholder="Write Delivery Address" required="">
                    </div>
                    <div class=" col-md-3 mb-3">
                        <label for="event_date">Event Date:</label>
                        <input type="date" id="event_date" name="event_date" placeholder="YYYY-Mn-Dd" required=""> 
                    </div>
                    <div class=" col-md-3 mb-3">
                        <label for="return_date">Return Date:</label>
                        <input type="date" id="return_date" name="return_date" placeholder="YYYY-Mn-Dd" required=""> 
                    </div>
                    <div class=" col-md-3 mb-3">
                        <label>Phone No :</label>
                        <input class=" " type="number" name="delivery_phone" placeholder="Whrite phone no" required="">
                    </div>
                </div>
              


                <div class="my-4 text-danger">
                  <strong>Proceed to Order</strong>
                </div>

                 <div class="row" style="width:70% !important; margin:auto;">
                   <div class="col-md-4">
                      <input class="btn btn-primary" type="submit" value="Cash On Delivery">
                   </div>
                   <div class="col-md-4">
                      <input class="btn btn-danger" type="submit" value="Cash On Check">
                   </div>
                   <div class="col-md-4">
                         <input class="btn btn-info" type="submit" value="Pay Using Card">
                   </div>
                </div>

   
             </form>





                </div>
                
                 </div>
            </div> 






				
			</div>
		</div>
	</div>



      @include('home.footer')
      <!-- footer end -->
      <!-- jQery -->
      <script src="home/js/jquery-3.4.1.min.js"></script>
      <!-- popper js -->
      <script src="home/js/popper.min.js"></script>
      <!-- bootstrap js -->
      <script src="home/js/bootstrap.js"></script>
      <!-- custom js -->
      <script src="home/js/custom.js"></script>
   </body>
</html>