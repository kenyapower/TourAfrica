<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title> My Invoice | TourAfrica </title>

    <!-- Favicons -->
    <link href="img/logo.jpeg" rel="icon">

    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.1.3/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" ></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.14.3/dist/umd/popper.min.js" ></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.1.3/dist/js/bootstrap.min.js" ></script>
    <style>
        .receipt-content .logo a:hover {
            text-decoration: none;
            color: #7793C4;
        }

        .receipt-content .invoice-wrapper {
            background: #FFF;
            border: 1px solid #CDD3E2;
            box-shadow: 0px 0px 1px #CCC;
            padding: 40px 40px 60px;
            margin-top: 40px;
            border-radius: 4px;
        }

        .receipt-content .invoice-wrapper .payment-details span {
            color: #A9B0BB;
            display: block;
        }
        .receipt-content .invoice-wrapper .payment-details a {
            display: inline-block;
            margin-top: 5px;
        }

        .receipt-content .invoice-wrapper .line-items .print a {
            display: inline-block;
            border: 1px solid #9CB5D6;
            padding: 13px 13px;
            border-radius: 5px;
            color: #708DC0;
            font-size: 13px;
            -webkit-transition: all 0.2s linear;
            -moz-transition: all 0.2s linear;
            -ms-transition: all 0.2s linear;
            -o-transition: all 0.2s linear;
            transition: all 0.2s linear;
        }

        .receipt-content .invoice-wrapper .line-items .print a:hover {
            text-decoration: none;
            border-color: #333;
            color: #333;
        }

        .receipt-content {
            background: #ECEEF4;
        }
        @media (min-width: 1200px) {
            .receipt-content .container {width: 900px; }
        }

        .receipt-content .logo {
            text-align: center;
            margin-top: 50px;
        }

        .receipt-content .logo a {
            font-family: Myriad Pro, Lato, Helvetica Neue, Arial;
            font-size: 36px;
            letter-spacing: .1px;
            color: #555;
            font-weight: 300;
            -webkit-transition: all 0.2s linear;
            -moz-transition: all 0.2s linear;
            -ms-transition: all 0.2s linear;
            -o-transition: all 0.2s linear;
            transition: all 0.2s linear;
        }

        .receipt-content .invoice-wrapper .intro {
            line-height: 25px;
            color: #444;
        }

        .receipt-content .invoice-wrapper .payment-info {
            margin-top: 25px;
            padding-top: 15px;
        }

        .receipt-content .invoice-wrapper .payment-info span {
            color: #A9B0BB;
        }

        .receipt-content .invoice-wrapper .payment-info strong {
            display: block;
            color: #444;
            margin-top: 3px;
        }

        @media (max-width: 767px) {
            .receipt-content .invoice-wrapper .payment-info .text-right {
                text-align: left;
                margin-top: 20px; }
        }
        .receipt-content .invoice-wrapper .payment-details {
            border-top: 2px solid #EBECEE;
            margin-top: 30px;
            padding-top: 20px;
            line-height: 22px;
        }


        @media (max-width: 767px) {
            .receipt-content .invoice-wrapper .payment-details .text-right {
                text-align: left;
                margin-top: 20px; }
        }
        .receipt-content .invoice-wrapper .line-items {
            margin-top: 40px;
        }
        .receipt-content .invoice-wrapper .line-items .headers {
            color: #A9B0BB;
            font-size: 13px;
            letter-spacing: .3px;
            border-bottom: 2px solid #EBECEE;
            padding-bottom: 4px;
        }
        .receipt-content .invoice-wrapper .line-items .items {
            margin-top: 8px;
            border-bottom: 2px solid #EBECEE;
            padding-bottom: 8px;
        }
        .receipt-content .invoice-wrapper .line-items .items .item {
            padding: 10px 0;
            color: #696969;
            font-size: 15px;
        }
        @media (max-width: 767px) {
            .receipt-content .invoice-wrapper .line-items .items .item {
                font-size: 13px; }
        }
        .receipt-content .invoice-wrapper .line-items .items .item .amount {
            letter-spacing: 0.1px;
            color: #84868A;
            font-size: 16px;
        }
        @media (max-width: 767px) {
            .receipt-content .invoice-wrapper .line-items .items .item .amount {
                font-size: 13px; }
        }

        .receipt-content .invoice-wrapper .line-items .total {
            margin-top: 30px;
        }

        .receipt-content .invoice-wrapper .line-items .total .extra-notes {
            float: left;
            width: 40%;
            text-align: left;
            font-size: 13px;
            color: #7A7A7A;
            line-height: 20px;
        }

        @media (max-width: 767px) {
            .receipt-content .invoice-wrapper .line-items .total .extra-notes {
                width: 100%;
                margin-bottom: 30px;
                float: none; }
        }

        .receipt-content .invoice-wrapper .line-items .total .extra-notes strong {
            display: block;
            margin-bottom: 5px;
            color: #454545;
        }

        .receipt-content .invoice-wrapper .line-items .total .field {
            margin-bottom: 7px;
            font-size: 14px;
            color: #555;
        }

        .receipt-content .invoice-wrapper .line-items .total .field.grand-total {
            margin-top: 10px;
            font-size: 16px;
            font-weight: 500;
        }

        .receipt-content .invoice-wrapper .line-items .total .field.grand-total span {
            color: #20A720;
            font-size: 16px;
        }

        .receipt-content .invoice-wrapper .line-items .total .field span {
            display: inline-block;
            margin-left: 20px;
            min-width: 85px;
            color: #84868A;
            font-size: 15px;
        }

        .receipt-content .invoice-wrapper .line-items .print {
            margin-top: 50px;
            text-align: center;
        }



        .receipt-content .invoice-wrapper .line-items .print a i {
            margin-right: 3px;
            font-size: 14px;
        }

        .receipt-content .footer {
            margin-top: 40px;
            margin-bottom: 110px;
            text-align: center;
            font-size: 12px;
            color: #969CAD;
        }
    </style>
</head>
<body>
@include('sweetalert::alert')



<div class="receipt-content">
    <div class="container bootstrap snippets bootdey">
        <br>
        <form class="example" action="{{route('search')}}" method="POST">
            @csrf
            <div class="input-group">
            <input type="search" value="{{request()->input('query')}}" name="query" id="query" class="form-control rounded" placeholder="Search" aria-label="Search" aria-describedby="search-addon" />
            <button type="submit" class="btn btn-outline-primary">search</button>
        </div>
        </form>

        <br>
        <hr>

{{--        @if(!$isEmpty)--}}
        <div class="row">
            <div class="col-md-12">
                <div class="invoice-wrapper">
                    <div class="intro">
                        Hi <strong>John McClane</strong>,
                        <br>
                        This is the receipt for a payment of <strong>$312.00</strong> (USD) for your works
                    </div>

                    <div class="payment-info">
                        <div class="row">
                            <div class="col-sm-6">
                                <span>Payment No.</span>
                                <strong>434334343</strong>
                            </div>
                            <div class="col-sm-6 text-right">
                                <span>Payment Date</span>
                                <strong>Jul 09, 2014 - 12:20 pm</strong>
                            </div>
                        </div>
                    </div>

                    <div class="payment-details">
                        <div class="row">
                            <div class="col-sm-6">
                                <span>Client</span>
                                <strong>
                                    Andres felipe posada
                                </strong>
                                <p>
                                    989 5th Avenue <br>
                                    City of monterrey <br>
                                    55839 <br>
                                    USA <br>
                                    <a href="#">
                                        jonnydeff@gmail.com
                                    </a>
                                </p>
                            </div>
                            <div class="col-sm-6 text-right">
                                <span>Payment To</span>
                                <strong>
                                    Juan fernando arias
                                </strong>
                                <p>
                                    344 9th Avenue <br>
                                    San Francisco <br>
                                    99383 <br>
                                    USA <br>
                                    <a href="#">
                                        juanfer@gmail.com
                                    </a>
                                </p>
                            </div>
                        </div>
                    </div>

                    <div class="line-items">
                        <div class="headers clearfix">
                            <div class="row">
                                <div class="col-xs-4">Description</div>
                                <div class="col-xs-3">Quantity</div>
                                <div class="col-xs-5 text-right">Amount</div>
                            </div>
                        </div>
                        <div class="items">
                            <div class="row item">
                                <div class="col-xs-4 desc">
                                    Html theme
                                </div>
                                <div class="col-xs-3 qty">
                                    3
                                </div>
                                <div class="col-xs-5 amount text-right">
                                    $60.00
                                </div>
                            </div>
                            <div class="row item">
                                <div class="col-xs-4 desc">
                                    Bootstrap snippet
                                </div>
                                <div class="col-xs-3 qty">
                                    1
                                </div>
                                <div class="col-xs-5 amount text-right">
                                    $20.00
                                </div>
                            </div>
                            <div class="row item">
                                <div class="col-xs-4 desc">
                                    Snippets on bootdey
                                </div>
                                <div class="col-xs-3 qty">
                                    2
                                </div>
                                <div class="col-xs-5 amount text-right">
                                    $18.00
                                </div>
                            </div>
                        </div>
                        <div class="total text-right">
                            <p class="extra-notes">
                                <strong>Extra Notes</strong>
                                Please send all items at the same time to shipping address by next week.
                                Thanks a lot.
                            </p>
                            <div class="field">
                                Subtotal <span>$379.00</span>
                            </div>
                            <div class="field">
                                Shipping <span>$0.00</span>
                            </div>
                            <div class="field">
                                Discount <span>4.5%</span>
                            </div>
                            <div class="field grand-total">
                                Total <span>$312.00</span>
                            </div>
                        </div>

                        <div class="print">
                            <div id="editor"></div>
                            <button onclick="print()">
                                <i class="fa fa-print"></i>
                                Print My Invoice
                            </button>
                        </div>
{{--                        <div class="print">--}}
{{--                            <div id="editor"></div>--}}
{{--                            <a href="#" id="pdf">--}}
{{--                                <i class="fa fa-print"></i>--}}
{{--                                Print My Invoice--}}
{{--                            </a>--}}
{{--                        </div>--}}
                    </div>
                </div>

                <div class="footer">
                    Copyright © <?php echo date("Y"); ?>. Tour Africa
                </div>
            </div>
        </div>
{{--        @endif--}}
    </div>
</div>
<script>
    let print = () => {
        let objFra = document.getElementById('myFrame');
        objFra.contentWindow.focus();
        objFra.contentWindow.print();
    }

    // Using regular js features.

    function print() {
        var objFra = document.getElementById('myFrame');
        objFra.contentWindow.focus();
        objFra.contentWindow.print();
    }
</script>

{{--<script>--}}
{{--    var doc = new jsPDF();--}}
{{--    var specialElementHandlers = {--}}
{{--        '#editor': function (element, renderer) {--}}
{{--            return true;--}}
{{--        }--}}
{{--    };--}}

{{--    $('#invoice').click(function () {--}}
{{--        doc.fromHTML($('#content').html(), 15, 15, {--}}
{{--            'width': 170,--}}
{{--            'elementHandlers': specialElementHandlers--}}
{{--        });--}}
{{--        doc.save('sample-file.pdf');--}}
{{--    });--}}

{{--</script>--}}
{{--<script>--}}
{{--    function printPDF() {--}}
{{--        var printDoc = new jsPDF();--}}
{{--        printDoc.fromHTML($('#pdf').get(0), 10, 10, {'width': 180});--}}
{{--        printDoc.autoPrint();--}}
{{--        // printDoc.output("dataurlnewwindow"); // this opens a new popup,  after this the PDF opens the print window view but there are browser inconsistencies with how this is handled--}}
{{--        printDoc.save('sample-file.pdf'); // this opens a new popup,  after this the PDF opens the print window view but there are browser inconsistencies with how this is handled--}}
{{--    }--}}
{{--</script>--}}
</body>
</html>