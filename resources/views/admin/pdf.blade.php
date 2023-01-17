<head>
<title>invoice</title>
<style>
#customers {
  font-family: Arial, Helvetica, sans-serif;
  border-collapse: collapse;
  width: 100%;
  
}

#customers td, #customers th {
  border: 1px solid #ddd;
  padding: 8px;
  text-align: center !important;
}



#customers th {
  padding-top: 12px;
  padding-bottom: 12px;
  text-align: left;
  background-color: #04AA6D;
  color: white;
}
.tbl {
  width: 100%;
 
}
</style>
</head>
<body>
       <span>
        </span>

         <div>
            <table class="tbl">
                <tr>
                    <td style="text-align: left !important;">
                      <img src="images/logo.png" alt="image here" width="210px" style="padding-bottom: 15px;">
                       <p><strong>D.I.Y Rentals Nyc.llc</strong></p>
                        <p>1(929)-602-6324 </p>
                        <p>diyrentalsnyc@gmail.com </p>
                        <p>Queens New York City, USA</p>
                        <h2><strong>Invoice No: #1000{{$orders->id}}</strong></h2>
                    </td>
                    <td style="text-align: left !important;">
                       <p><b>Name: <span style="color:#04AA6D;">{{ $orders->name }}<span></b></p>
                        <p><b>Email: </b>{{ $orders->email }}</p>
                        <p><b>Phone: </b>{{ $orders->delivery_phone }}</p>
                        <p><b>Delivery Address: </b>{{ $orders->delivery_address }}</p>
                        <p><b>Event Date: </b>{{ $orders->event_date }}</p>
                        <p><b>Return Date: </b>{{ $orders->return_date }}</p>
                        <p><b>Payment Status: </b>{{ $orders->payment_status }}</p>
                        <p><b>Delivery Status: </b>{{ $orders->delivery_status }}</p>
                    </td>
                </tr>
            </table> 
        </div>


         <div style="margin-top:15px;">
            <table id="customers">
                    <tr>
                        <th>Rental Name</th>
                        <th>Qty</th>
                        <th>Image</th>
                        <th>Ammount</th>
                    </tr>
                            
                    @foreach ($orders->orderitems as $item)
                    <tr>
                        <td>{{ $item->product_title }}</td>
                        <td>{{ $item->quantity }}</td>
                        <td><img class="c" src="productImage/{{ $item->image }}"style="height:30px;width:30px;margin:auto;"></td>
                        <td>$ 0</td>
                    <tr>
                     @endforeach
                     <tr>
                        <td colspan="3" style="text-align: right !important;">
                            <p>
                                <p>Total Amount: </p>
                                <p>Late Fees: </p>
                                <p>Payable Amount: </p>
                                <p>Balance Due: </p>
							</td>
                            <td>
                                <p>$ 0</p>
                                <p>$ 0</p>
                                <p>$ 0</p>
                                <p>$ 0</p>
							</td>
                     </tr>         
            </table>
            <div style="text-align: right;margin-right:90px; color: #04AA6D; ">
               <h3>Total = $ 0.00</h3>
            </div>
       </div>
</body>
</html>