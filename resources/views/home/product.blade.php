<section class="product_section layout_padding">
    <div class="container">
       <div class="heading_container heading_center">
          <h2>
             Our <span>Rentals</span>
          </h2>
       </div>

         <div class="row">

              @foreach($products as $items)
               <div class="col-sm-6 col-md-4 col-lg-4">
                  <div class="box">
                     <div class="option_container">
                        <div class="options">
                        <a href="{{ url('product_details',$items->id) }}" class="option1">
                           Product Details
                           </a>
                          
                        <form action="{{ url('add_cart',$items->id)}}" method="POST">
                          @csrf
                          <div class="row" style="pading-right:15px !important;" id="q_control">

                                <div class=" col-sm-3 col-md-3 ml-5">
                                  <input class="text-center" type="number" name="quantity" value="1" min="1" style=" border:1px solid black; border-radius: 20px; height:38px;">
                               </div>
                               <div class="col-sm-3 col-md-3">
                                 <input type="submit" value="Add to Cart"  style="padding:10px;border-radius: 50px;">
                               </div>
                              
                          </div>
                        </form>


                        </div>
                     </div>
                     <div class="img-box">
                        <img src="productImage/{{$items->image}}" alt="">
                     </div>
                     <div class="text-center">
                        <strong>
                           {{$items->title}}
                        </strong>
                        <div>
                        <b class="text-danger">Rent for Email/Call</b>
                        <p class="text-success mb-0">diyrentalsnyc@gmail.com</p>
                        <p class="text-success">1(929)-602-6324</p>
                        </div>
                     </div>
                  </div>
               </div>

            @endforeach
            
         </div>
         <span class="mt-5" style="display: inline-block;">
              {!!$products->withQueryString()->links('pagination::bootstrap-5')!!}
         </span>
    </div>
 </section>



