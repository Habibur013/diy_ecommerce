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


                {{-- New work here --}}
                <div class="row">
                    <div class="col-md-12">
                        <div class="text-center mt-1">
                            <p style="font-size: 2vw;" class="c-title">Customer's Orders</p>
                        </div>

                        <div>
                            <table class="table table-striped " id="myTable">
                                <thead class="bg-info" style="">
                                    <tr>
                                        <th style="color:white;text-align:center !important;"><b>Name<b></th>

                                        <th style="color:white;text-align:center !important;"><b>Delivery address<b>
                                        </th>
                                        <th style="color:white;text-align:center !important;"><b>Event Date<b></th>
                                        <th style="color:white;text-align:center !important;"><b>Return Date<b></th>

                                        <th style="color:white;text-align:center !important;"><b>Delivered<b></th>
                                        <th style="color:white;text-align:center !important;"><b>Product Information<b>
                                        </th>
                                        <th style="color:white;text-align:center !important;"><b>Invoice<b></th>

                                    </tr>
                                </thead>


                                @foreach ($orders as $item)
                                    <tbody>
                                        <tr>
                                            <td>{{ $item->name }}</td>

                                            <td>{{ $item->delivery_address }}</td>
                                            <td>{{ $item->event_date }}</td>
                                            <td>{{ $item->return_date }}</td>

                                            <td>
                                                @if ($item->delivery_status == 'Processing')
                                                    <a href="{{ url('delivered', $item->id) }}"
                                                        onclick="return confirm('Are You Sure to Delivered this Item ? ')"
                                                        class="btn btn-primary">Delivered</a>
                                                @else
                                                    <p class="text-success">Delivered</p>
                                                @endif
                                            </td>
                                            {{-- <td>
                                                <table>
                                                    <thead>
                                                        <tr>
                                                            <th style="color:white;">Name</th>
                                                            <th style="color:white;text-align:center !important;">Qty</th>
                                                            <th style="color:white;text-align:center !important;">Image</th>
                                                            <th style="color:white;text-align:center !important;">U_Price</th>


                                                        </tr>
                                                    </thead>
                                                    <tbody style="margin: 0px !important;">
                                                        @foreach ($item->orderitems as $data)
                                                          <tr>
                                                                <td>{{ $data->product_title }}</td>
                                                                <td>{{ $data->quantity }}</td>
                                                                <td><img src="/productImage/{{ $data->image }}"style="height:30px;width:40px;"></td>
                                                                <td>
                                                                    <form action="{{ url('/add_invoice_price')}}" method="POST" enctype="multipart/form-data">
                                                                        @csrf

                                                                            <input class="text_color" style="width: 80px;height: 20px;" type="number" name="u_price" min="0" required="">
                                                                            <span class="text-light">
                                                                                <input type="submit" value="Save" class="btn btn-primary">
                                                                            </span>
                                                                    </form>
                                                                </td>
                                                          </tr>
                                                          @endforeach
                                                    </tbody>
                                                </table>

                                            </td> --}}
                                            <td>
                                                <a href="{{ url('update_order', $item->id) }}"
                                                    class="btn btn-info center py-2">Update Order</a>
                                            </td>
                                            <td>
                                                <a href="{{ url('print_pdf', $item->id) }}"
                                                    class="btn btn-info center py-2">Print PDF</a>
                                            </td>
                                        </tr>

                                    </tbody>
                                @endforeach
                            </table>
                        </div>


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
