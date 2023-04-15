<!DOCTYPE html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <base href="/public">
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
                            <p style="font-size: 2vw;" class="c-title lead">Update Order</p>
                        </div>

                        <div>

                            {{-- @dd($order, $order->orderitems) --}}

                            <div>
                                <div>
                                    <div class="card-body">
                                        <h5 class="lead">Client Name: {{ $order->name }}</h5>
                                        <p class="lead"><b>Delivery Address:</b>{{ $order->delivery_address }}</p>

                                        <ul class="list-group list-group-flush" style="background: #000; color: #fff;">
                                            <li class="list-group-item"
                                                style="padding: 0; background: #000; color: #fff;"><b>Event
                                                    Date:</b> {{ $order->event_date }}</li>
                                            <li class="list-group-item"
                                                style="padding: 0; background: #000; color: #fff;"><b>Return
                                                    Date:</b> {{ $order->return_date }}
                                            </li>
                                            <li class="mt-4">
                                                @if ($order->delivery_status == 'Processing')
                                                    <a href="{{ url('delivered', $order->id) }}"
                                                        onclick="return confirm('Are You Sure to Delivered this Item ? ')"
                                                        class="btn btn-primary">Make Delivered</a>
                                                @else
                                                    <p class="text-success">Delivered</p>
                                                @endif
                                            </li>
                                        </ul>
                                    </div>

                                </div>
                                <form action="{{ url('/add_rent_price') }}" method="POST"
                                    enctype="multipart/form-data">
                                    @csrf
                                    <table class="mt-5 table align-middle">
                                        <thead>
                                            <tr>
                                                <th style="color:white;">Name</th>
                                                <th style="color:white;text-align:center !important;">Qty</th>
                                                <th style="color:white;text-align:center !important;">Image</th>
                                                <th style="color:white;text-align:center !important;">Rent Price</th>


                                            </tr>
                                        </thead>


                                        <tbody style="margin: 0px !important;">
                                            @foreach ($order->orderitems as $data)
                                                <tr>
                                                    <td>{{ $data->product_title }}</td>
                                                    <td style="text-align: center;">{{ $data->quantity }}</td>
                                                    <td><img
                                                            src="/productImage/{{ $data->image }}"style="height:30px;width:40px;margin: 0 auto;">
                                                    </td>
                                                    <td>
                                                        <input class="text_color form-control" type="number"
                                                            style="width: 200px; margin: 0 auto;"
                                                            name="price-{{ $data->id }}" min="0"
                                                            required=""
                                                            @if ($data->price) value="{{ $data->price }}" @endif>
                                                    </td>
                                                </tr>
                                            @endforeach
                                            <tr>
                                                <td></td>
                                                <td></td>
                                                <td></td>
                                                <td>
                                                    <input type="submit" value="Save"
                                                        style="width: 200px; margin: 0 auto;"
                                                        class="d-block btn btn-primary">
                                                </td>
                                            </tr>
                                        </tbody>
                                    </table>

                                </form>




                            </div>
                        </div>

                    </div>
                </div>
            </div>
            <!-- container-scroller -->
            <!-- plugins:js -->
            @include('admin.script')

            <!-- End custom js for this page -->
</body>

</html>
