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

                <div class="row">
                    <div class="col-md-12">

                        <div class="text-center mt-1">
                            <p style="font-size: 2vw;" class="c-title">Customer's Orders</p>

                            @foreach ($orders as $order)
                                {{-- show these info in a bootstrap card --}}
                                {{-- decorate the card --}}
                                <ul class="card my-5">
                                    <li class="card-title">Order id: {{ $order->id }}</li>
                                    <li>{{ $order->name }}</li>

                                    <li>{{ $order->email }}</li>
                                    <li>{{ $order->delivery_phone }}</li>
                                    <li>{{ $order->delivery_address }}</li>
                                    <li>{{ $order->event_date }}</li>
                                    <li>{{ $order->return_date }}</li>
                                    <li>{{ $order->payment_status }}</li>
                                    <li>{{ $order->delivery_status }}</li>
                                    <li>
                                        @if ($order->delivery_status == 'Processing')
                                            <a href="{{ url('delivered', $order->id) }}"
                                                onclick="return confirm('Are You Sure to Delivered this Item ? ')"
                                                class="btn btn-primary">Delivered</a>
                                        @else
                                            <p class="text-success">Delivered</p>
                                        @endif
                                    </li>


                                    <li>
                                        {{-- product info can be shown in a table --}}
                                        <span>Products info</span>
                                        <ul class="card-text">
                                            @foreach ($order->orderitems as $item)
                                                <li>{{ $item->product_title }}</li>
                                                <li>{{ $item->quantity }}</li>
                                                <li><img src="/productImage/{{ $item->image }}"
                                                        style="height:50px;width:50px;">
                                                </li>
                                            @endforeach


                                        </ul>

                                    </li>

                                </ul>
                            @endforeach


                            {{-- <table class="table table-striped table-responsive  tbl_center" id="myTable">
                                <thead class="bg-info" style="">
                                    <tr>
                                        <th style="color:white;text-align:center !important;"><b>Name<b></th>
                                        <th style="color:white;text-align:center !important;"><b>Rentals<b></th>
                                        <th style="color:white;text-align:center !important;"><b>Quantity<b></th>
                                        <th style="color:white;text-align:center !important;"><b>Image<b></th>
                                        <th style="color:white;text-align:center !important;"><b>Email<b></th>
                                        <th style="color:white;text-align:center !important;"><b>Phone<b></th>
                                        <th style="color:white;text-align:center !important;"><b>Delivery Address<b>
                                        </th>
                                        <th style="color:white;text-align:center !important;"><b>Event Date<b></th>
                                        <th style="color:white;text-align:center !important;"><b>Return Date<b></th>
                                        <th style="color:white;text-align:center !important;"><b>Payment Status<b></th>
                                        <th style="color:white;text-align:center !important;"><b>Delivery Status<b></th>
                                        <th style="color:white;text-align:center !important;"><b>Delivered<b></th>


                                    </tr>
                                </thead>
                                <tbody style="padding:0px;">
                                    @foreach ($orders as $item)
                                        <tr>
                                            <td>{{ $item->name }}</td>
                                            <td>{{ $item->product_title }}</td>
                                            <td>{{ $item->quantity }}</td>
                                            <td><img src="/productImage/{{ $item->image }}"
                                                    style="height:50px;width:50px;"></td>
                                            <td>{{ $item->email }}</td>
                                            <td>{{ $item->delivery_phone }}</td>
                                            <td>{{ $item->delivery_address }}</td>
                                            <td>{{ $item->event_date }}</td>
                                            <td>{{ $item->return_date }}</td>
                                            <td>{{ $item->payment_status }}</td>
                                            <td>{{ $item->delivery_status }}</td>
                                            <td>
                                                @if ($item->delivery_status == 'Processing')
                                                    <a href="{{ url('delivered', $item->id) }}"
                                                        onclick="return confirm('Are You Sure to Delivered this Item ? ')"
                                                        class="btn btn-primary">Delivered</a>
                                                @else
                                                    <p class="text-success">Delivered</p>
                                                @endif
                                            </td>

                                        </tr>
                                    @endforeach
                                </tbody>
                            </table> --}}

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
            $(document).ready(function() {
                $('#myTable').DataTable();
            });
        </script>
        <!-- End custom js for this page -->
</body>

</html>
