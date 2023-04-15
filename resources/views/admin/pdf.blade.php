<head>
    <title>invoice</title>
    <style>
        #customers {
            font-family: Arial, Helvetica, sans-serif;
            border-collapse: collapse;
            width: 100%;

        }

        #customers td,
        #customers th {
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
                    <h2><strong>Invoice No: #1000{{ $orders->id }}</strong></h2>
                </td>
                <td style="text-align: left !important;">
                    <p><b>Name: <span style="color:#04AA6D;">{{ $orders->name }}<span></b></p>
                    <p><b>Email: </b>{{ $orders->email }}</p>
                    <p><b>Phone: </b>{{ $orders->delivery_phone }}</p>
                    <p><b>Delivery Address: </b>{{ $orders->delivery_address }}</p>
                    <p><b>Event Date: </b>{{ $orders->event_date }}</p>
                    <p><b>Return Date: </b>{{ $orders->return_date }}</p>
                    <p><b>Payment Status: </b>{{ $orders->payment_status }}</p>
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
                <th>Amount</th>
            </tr>

            @foreach ($orders->orderitems as $item)
                <tr>
                    <td>{{ $item->product_title }}</td>
                    <td>{{ $item->quantity }}</td>
                    <td><img class="c"
                            src="productImage/{{ $item->image }}"style="height:30px;width:30px;margin:auto;"></td>
                    <td>$ {{ $item->price }}</td>
                <tr>
            @endforeach
            <tr>
                <td colspan="3" style="text-align: right !important;">
                    <p>
                    <p>Total Amount: </p>
                    <p>Trucking + Labor </p>
                    <p>Tax (6.625%) </p>
                </td>
                <td>
                    <p>$ {{ $orders->totalAmount($orders->id) }}</p>
                    <p>$ $995 </p>
                    <p>$ {{ $orders->tax($orders->id) }}</p>

                </td>
            </tr>
        </table>
        <div style="text-align: right;margin-right:90px; color: #04AA6D; ">
            <h3>Total = $ {{ $orders->finalTotal($orders->id) }}</h3>
        </div>
    </div>

    <div class="terms">
        <b style="font-size: 10px;">TERMS AND CONDITIONS</b>
        <p style="font-size: 8px;">
            <br>
            Subject to the following terms and conditions ("Client") has hired Luxe Event Rentals, to provide furniture
            and
            other
            items listed on this Rental Agreement for the price set forth, plus applicable sales tax (the "Price"). The
            Furniture and
            Price are based on current availability, and will only be guaranteed with a completed Payment Form and a
            mutually
            signed agreement. Delivery and pickup of the "Furniture" by Luxe Event Rentals to and from the Event Site is
            in
            accordance with venue regulations and the attached Delivery Instructions. The set up and strike schedule
            must
            allow
            sufficient time for the delivery and removal of the Furniture.
            1. The Price shall be paid by Client to Luxe Event Rentals in the following manner:
            This price is for a single event. The Furniture shall not be out of Luxe Event Rentals warehouses for more
            than
            4
            days without incurring additional charges. 50% of the "Price" is due to hold the date, the balance shall be
            paid
            at least
            14 days prior to delivery. In the event Client fails to pay any portion of the Price by the due date as set
            forth above,
            such action shall constitute Client's election to terminate this agreement with no further obligation to
            either
            party
            except as stated in Paragraph 2 below.
            2. In the event Client fails to pay any portion of the Price by the due date as defined in Paragraph 1, Luxe
            Event
            Rentals at its own discretion, may elect to proceed with the agreed upon order as scheduled even if the
            above
            conditions are not met. The Client must receive the "Furniture", unless this agreement has been mutually
            terminated
            in writing. Orders may be canceled up to 21 days prior to delivery with full refund. Cancellation within 21
            days
            and
            prior to loading is subject to 50% staging fee. Custom furniture and orders already loaded for delivery are
            not
            subject
            to cancellation and will require full payment.
            3. All Furniture shall be delivered to the Event Site in an "as is" condition. At the time of delivery,
            Client
            authorized
            personnel shall inspect jointly with a Luxe Event Rentals representative for both the quality and quantity
            of
            the
            Furniture. Any damage, imperfections, or missing Furniture shall be noted in writing at the time of such
            delivery. Upon
            receipt of the Furniture by Client's authorized personnel, except for discrepancies or imperfections
            specifically noted,
            Luxe Event Rentals shall have fulfilled its obligations for delivery of the Furniture, both as to quality
            and
            quantity.
            4. From the time of delivery through the time of removal, Client shall be responsible for all lost or
            damaged
            Furniture.
            Client shall protect the Furniture from vandalism, theft, damage, or other similar risks. Prior to removal
            of
            the
            Furniture from the Event Site, an authorized representative of Luxe Event Rentals and the authorized
            representative
            of Client shall inspect the Furniture, both as to quality and quantity. Any damage to the Furniture, or
            missing
            items of
            Furniture, which were not included in the delivery slip will be noted at pick up. By signing this agreement,
            i.e., the
            Terms and Conditions, you are authorizing Luxe Event Rentals LLC ("Luxe") to charge your credit card for the
            replacement value of Furniture that is not returned or for the cost of repairing Furniture damaged by
            Client.
            Within 30
            days following the Furniture removal, Luxe Event Rentals shall provide an itemized invoice for repair or
            replacement
            cost. Client shall pay the amount submitted by Luxe Event Rentals within 30 days of receipt.
            5. Any logos, graphics, and or images that are affixed to the furniture and not removed prior to strike by
            the
            client,
            shall incur a $50.00 per piece removal fee.
            6. Waiting Time - a fee of $20.00 per staff member will be applied to all deliveries and pickups after 1
            hour
            from the
            scheduled time of delivery and/or pick up.
            7. This Agreement may be executed in multiple counterparts, each of which shall be deemed an original but
            all of
            which shall constitute but one Agreement, a facsimile of an executed counterpart shall be deemed to be an
            original.
            8. ORDER CONFIRMATION: Orders MUST be confirmed with a signature on the reservation and full payment to
            initiate preparation of the order. Orders will not be pulled or prepped until client's signed reservation is
            received along
            with a signed copy of this rental agreement and payment. Luxe Event Rentals reserves the right to charge a
            rush
            fee
            for orders not confirmed within (5) days of the scheduled ship date.
            9. INSPECTION: Client is responsible for inspecting furniture immediately upon taking possession, including
            instances where a client has subcontracted an outside carrier to manage pickup and delivery. Client or their
            agent is
            to report any discrepancies immediately to the Luxe Event Rentals sales staff. Luxe Event Rentals will make
            best
            possible effort to remedy the situation as soon as discrepancies are reported. However, Luxe Event Rentals
            shall
            not
            be liable to lessee for any loss, damage or liability resulting from the use of its rental property or from
            the
            condition of
            said property.
            10. PACKING MATERIALS: Client is responsible for return of all slipcovers, blankets, dollies and pallets or
            replacement charge will be billed on final invoice.

            <br>
            <br><br>

            <b>I HAVE READ THIS CONTRACT AND AGREE & UNDERSTAND THE CONTENT.</b> <br>
            Thank you & Kind Regards,<br>
            Manisha Rawal <br>
            Wedding planner/Designer/Florist <br>
            Kaotic Soundz Events/Designs/DJs <br>
            Cell:(347) 833-1703 <br>
            Email: Manisha.planner@gmail.com <br>
            “Don't save something for a special occasion. Every day of your life is a special occasion.” -Thomas S
            Monson
        </p>
    </div>
</body>

</html>
