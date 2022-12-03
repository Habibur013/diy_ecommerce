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
				<div class="wrapper row">
					<div class="preview col-md-6">
						
			         <img src="productImage/{{$product->image}}" alt="" width="400" style="height:300px !important;">
						
					</div>
					<div class="details col-md-6">
						<Strong class="mb-0">Name: {{$product->title}}</strong>
                  <span class="">Category: <i>{{$product->category}}</i></span>
						<p class="product-description"> Description: {{$product->description}}</p>
                  <div>
                     <b class="text-danger">Rent for Email/Call</b>
                     <p class="text-success mb-0">diyrentalsnyc@gmail.com</p>
                     <p class="text-success">1(929)-602-6324</p>
                  </div>
						<div>
                            
               <form action="{{ url('add_cart',$product->id)}}" method="POST">
                   @csrf
                      <div class="row mt-2" >
                          <div class=" col-sm-3 col-md-3">
                              <input class="text-center" type="number" name="quantity" value="1" min="1" style="padding:0px;border:1px solid black;border-radius:10px;height:38px;">
                           </div>
                            <div class="col-sm-3 col-md-3">
                                <input type="submit" value="Add to Cart"  style="padding:10px;border-radius: 50px;">
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