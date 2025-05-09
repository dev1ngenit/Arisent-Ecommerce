<style type="text/css">
    @import url(https://fonts.googleapis.com/css?family=Open+Sans:400,700);

    body {
        margin: 0;
        padding: 0;
    }

    div,
    p,
    a,
    li,
    td {
        -webkit-text-size-adjust: none;
    }

    .ReadMsgBody {
        width: 100%;
        background-color: #ffffff;
    }

    .ExternalClass {
        width: 100%;
        background-color: #ffffff;
    }

    body {
        width: 100%;
        height: 100%;
        margin: 0;
        padding: 0;
        -webkit-font-smoothing: antialiased;
    }

    html {
        width: 100%;
    }

    p {
        padding: 0 !important;
        margin-top: 0 !important;
        margin-right: 0 !important;
        margin-bottom: 0 !important;
        margin-left: 0 !important;
    }

    .visibleMobile {
        display: none;
    }

    .hiddenMobile {
        display: block;
    }

    @media only screen and (max-width: 600px) {
        body {
            width: auto !important;
        }

        table[class=fullTable] {
            width: 96% !important;
            clear: both;
        }

        table[class=fullPadding] {
            width: 85% !important;
            clear: both;
        }

        table[class=col] {
            width: 45% !important;
        }

        .erase {
            display: none;
        }
    }

    @media only screen and (max-width: 420px) {
        table[class=fullTable] {
            width: 100% !important;
            clear: both;
        }

        table[class=fullPadding] {
            width: 85% !important;
            clear: both;
        }

        table[class=col] {
            width: 100% !important;
            clear: both;
        }

        table[class=col] td {
            text-align: left !important;
        }

        .erase {
            display: none;
            font-size: 0;
            max-height: 0;
            line-height: 0;
            padding: 0;
        }

        .visibleMobile {
            display: block !important;
        }

        .hiddenMobile {
            display: none !important;
        }
    }
</style>


<div class="container">
    <div class="row">
        <div class="col-lg-8 offset-lg-2">

            <!-- Header -->
            <table width="75%" border="0" cellpadding="0" cellspacing="0" align="center" class="fullTable">
                <tr>
                    <td height="20"></td>
                </tr>
                <tr>
                    <td>
                        <table width="600" border="0" cellpadding="0" cellspacing="0" align="center"
                            class="fullTable" bgcolor="#ffffff" style="border-radius: 10px 10px 0 0;">
                            <tr class="hiddenMobile">
                                <td height="40"></td>
                            </tr>
                            <tr class="visibleMobile">
                                <td height="30"></td>
                            </tr>

                            <tr>
                                <td>
                                    <table width="480" border="0" cellpadding="0" cellspacing="0" align="center"
                                        class="fullPadding">
                                        <tbody>
                                            <tr>
                                                <td>
                                                    <table width="220" border="0" cellpadding="0" cellspacing="0"
                                                        align="left" class="col">
                                                        <tbody>
                                                            <tr>
                                                                <td align="left"> <img
                                                                        src=""
                                                                        width="160" height="32" alt="logo"
                                                                        border="0" /></td>
                                                            </tr>
                                                            <tr class="hiddenMobile">
                                                                <td height="40"></td>
                                                            </tr>
                                                            <tr class="visibleMobile">
                                                                <td height="20"></td>
                                                            </tr>
                                                            <tr>
                                                                <td
                                                                    style="font-size: 12px; color: #5b5b5b; font-family: 'Open Sans', sans-serif; line-height: 18px; vertical-align: top; text-align: left;">
                                                                    Hello, {{ $order['billing_name'] }}.
                                                                    <br> Thank you for shopping from our store and for
                                                                    your order.
                                                                </td>
                                                            </tr>
                                                        </tbody>
                                                    </table>
                                                    <table width="220" border="0" cellpadding="0" cellspacing="0"
                                                        align="right" class="col">
                                                        <tbody>
                                                            <tr class="visibleMobile">
                                                                <td height="20"></td>
                                                            </tr>
                                                            <tr>
                                                                <td height="5"></td>
                                                            </tr>
                                                            <tr>
                                                                <td
                                                                    style="font-size: 21px; color: #ff0000; letter-spacing: -1px; font-family: 'Open Sans', sans-serif; line-height: 1; vertical-align: top; text-align: right;">
                                                                    Invoice
                                                                </td>
                                                            </tr>
                                                            <tr>
                                                            <tr class="hiddenMobile">
                                                                <td height="50"></td>
                                                            </tr>
                                                            <tr class="visibleMobile">
                                                                <td height="20"></td>
                                                            </tr>
                                                            <tr>
                                                                <td
                                                                    style="font-size: 12px; color: #5b5b5b; font-family: 'Open Sans', sans-serif; line-height: 18px; vertical-align: top; text-align: right;">
                                                                    <small>Invoice No</small>
                                                                    {{ $order['invoice_number'] }}<br />
                                                                    <small id="current-date"></small>
                                                                </td>
                                                            </tr>
                                                        </tbody>
                                                    </table>
                                                </td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </td>
                            </tr>
                        </table>
                    </td>
                </tr>
            </table>
            <!-- /Header -->

            <!-- Order Details -->
            <table width="75%" border="0" cellpadding="0" cellspacing="0" align="center" class="fullTable">
                <tbody>
                    <tr>
                        <td>
                            <table width="600" border="0" cellpadding="0" cellspacing="0" align="center"
                                class="fullTable" bgcolor="#ffffff">
                                <tbody>
                                    <tr>
                                    <tr class="hiddenMobile">
                                        <td height="60"></td>
                                    </tr>
                                    <tr class="visibleMobile">
                                        <td height="40"></td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <table width="480" border="0" cellpadding="0" cellspacing="0"
                                                align="center" class="fullPadding">
                                                <tbody>
                                                    <tr>
                                                        <th style="font-size: 12px; font-family: 'Open Sans', sans-serif; color: #5b5b5b; font-weight: normal; line-height: 1; vertical-align: top; padding: 0 10px 7px 0;"
                                                            width="52%" align="left">
                                                            Item
                                                        </th>
                                                        <th style="font-size: 12px; font-family: 'Open Sans', sans-serif; color: #5b5b5b; font-weight: normal; line-height: 1; vertical-align: top; padding: 0 0 7px;"
                                                            align="center">
                                                            Quantity
                                                        </th>
                                                        <th style="font-size: 12px; font-family: 'Open Sans', sans-serif; color: #1e2b33; font-weight: normal; line-height: 1; vertical-align: top; padding: 0 0 7px;"
                                                            align="right">
                                                            Subtotal
                                                        </th>
                                                    </tr>
                                                    <tr>
                                                        <td height="1" style="background: #bebebe;" colspan="4">
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td height="10" colspan="4"></td>
                                                    </tr>

                                                    @foreach ($carts as $key => $item)
                                                        <tr>
                                                            <td style="font-size: 12px; font-family: 'Open Sans', sans-serif; color: #ff0000; line-height: 18px; vertical-align: top; padding:10px 0;"
                                                                class="article">
                                                                {{ $item->name }} <!-- Dynamic Product Name -->
                                                            </td>
                                                            <td style="font-size: 12px; font-family: 'Open Sans', sans-serif; color: #646a6e; line-height: 18px; vertical-align: top; padding:10px 0;"
                                                                align="center">{{ $item->qty }}</td>
                                                            <td style="font-size: 12px; font-family: 'Open Sans', sans-serif; color: #1e2b33; line-height: 18px; vertical-align: top; padding:10px 0;"
                                                                align="right">Taka
                                                                {{ number_format($item->price * $item->qty, 2) }}</td>
                                                            <!-- Dynamic Subtotal per Item -->
                                                        </tr>
                                                    @endforeach

                                                    <tr>
                                                        <td height="1" colspan="4"
                                                            style="border-bottom:1px solid #e4e4e4"></td>
                                                    </tr>
                                                </tbody>
                                            </table>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td height="20"></td>
                                    </tr>
                                </tbody>
                            </table>
                        </td>
                    </tr>
                </tbody>
            </table>
            <!-- /Order Details -->

            <!-- Total -->
            <table width="75%" border="0" cellpadding="0" cellspacing="0" align="center" class="fullTable">
                <tbody>
                    <tr>
                        <td>
                            <table width="600" border="0" cellpadding="0" cellspacing="0" align="center"
                                class="fullTable" bgcolor="#ffffff">
                                <tbody>
                                    <tr>
                                        <td>
                                            <!-- Table Total -->
                                            <table width="480" border="0" cellpadding="0" cellspacing="0"
                                                align="center" class="fullPadding">
                                                <tbody>
                                                    <tr>
                                                        <td
                                                            style="font-size: 12px; font-family: 'Open Sans', sans-serif; color: #646a6e; line-height: 22px; vertical-align: top; text-align:right;">
                                                            Grand Total
                                                        </td>
                                                        <td
                                                            style="font-size: 12px; font-family: 'Open Sans', sans-serif; color: #646a6e; line-height: 22px; vertical-align: top; text-align:right; white-space:nowrap;">
                                                            Taka
                                                            {{ $order['total_amount'] }}
                                                            <!-- Subtotal -->
                                                        </td>
                                                    </tr>



                                                </tbody>
                                            </table>
                                            <!-- /Table Total -->
                                        </td>
                                    </tr>
                                </tbody>
                            </table>
                        </td>
                    </tr>
                </tbody>
            </table>
            <!-- /Total -->


            <!-- Information -->
            <table width="75%" border="0" cellpadding="0" cellspacing="0" align="center" class="fullTable">
                <tbody>
                    <tr>
                        <td>
                            <table width="600" border="0" cellpadding="0" cellspacing="0" align="center"
                                class="fullTable" bgcolor="#ffffff">
                                <tbody>
                                    <tr>
                                    <tr class="hiddenMobile">
                                        <td height="60"></td>
                                    </tr>
                                    <tr class="visibleMobile">
                                        <td height="40"></td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <table width="480" border="0" cellpadding="0" cellspacing="0"
                                                align="center" class="fullPadding">
                                                <tbody>
                                                    <tr>
                                                        <td>
                                                            <table width="220" border="0" cellpadding="0"
                                                                cellspacing="0" align="left" class="col">

                                                                <tbody>
                                                                    <tr>
                                                                        <td
                                                                            style="font-size: 11px; font-family: 'Open Sans', sans-serif; color: #5b5b5b; line-height: 1; vertical-align: top; ">
                                                                            <strong>BILLING INFORMATION</strong>
                                                                        </td>
                                                                    </tr>
                                                                    <tr>
                                                                        <td width="75%" height="10"></td>
                                                                    </tr>
                                                                    <tr>
                                                                        <td
                                                                            style="font-size: 12px; font-family: 'Open Sans', sans-serif; color: #5b5b5b; line-height: 20px; vertical-align: top; ">
                                                                            {{ $order['billing_name'] }}<br>
                                                                            {{ $order['billing_address_line1'] }} <br>
                                                                            {{ $order['billing_phone'] }}
                                                                        </td>
                                                                    </tr>
                                                                </tbody>
                                                            </table>


                                                            <table width="220" border="0" cellpadding="0"
                                                                cellspacing="0" align="right" class="col mt-2">
                                                                <tbody>
                                                                    <tr class="visibleMobile">
                                                                        <td height="20"></td>
                                                                    </tr>
                                                                    <tr>
                                                                        <td
                                                                            style="font-size: 11px; font-family: 'Open Sans', sans-serif; color: #5b5b5b; line-height: 1; vertical-align: top; ">
                                                                            <strong>PAYMENT METHOD</strong>
                                                                        </td>
                                                                    </tr>
                                                                    <tr>
                                                                        <td width="100%" height="10"></td>
                                                                    </tr>
                                                                    <tr>
                                                                        <td
                                                                            style="font-size: 12px; font-family: 'Open Sans', sans-serif; color: #5b5b5b; line-height: 20px; vertical-align: top; ">
                                                                            {{-- {{ $order['payment_method'] }} --}}Cash On Delivery
                                                                        </td>
                                                                    </tr>
                                                                </tbody>
                                                            </table>
                                                        </td>
                                                    </tr>
                                                </tbody>
                                            </table>
                                        </td>
                                    </tr>

                                    <tr class="hiddenMobile">
                                        <td height="60"></td>
                                    </tr>
                                    <tr class="visibleMobile">
                                        <td height="30"></td>
                                    </tr>
                                </tbody>
                            </table>
                        </td>
                    </tr>
                </tbody>
            </table>
            <!-- /Information -->

            <table width="75%" border="0" cellpadding="0" cellspacing="0" align="center" class="fullTable">

                <tr>
                    <td>
                        <table width="600" border="0" cellpadding="0" cellspacing="0" align="center"
                            class="fullTable" bgcolor="#ffffff" style="border-radius: 0 0 10px 10px;">
                            <tr>
                                <td>
                                    <table width="480" border="0" cellpadding="0" cellspacing="0"
                                        align="center" class="fullPadding">
                                        <tbody>
                                            <tr>
                                                <td
                                                    style="font-size: 12px; color: #5b5b5b; font-family: 'Open Sans', sans-serif; line-height: 18px; vertical-align: top; text-align: left;">
                                                    Thank You <br>
                                                    Sales Team
                                                </td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </td>
                            </tr>
                            <tr class="spacer">
                                <td height="50"></td>
                            </tr>

                        </table>
                    </td>
                </tr>
                <tr>
                    <td height="20"></td>
                </tr>
            </table>


        </div>
    </div>
</div>
