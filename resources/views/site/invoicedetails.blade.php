<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <title>Invoice Details | TourAfrica</title>
    <link href="img/logo.jpeg" rel="icon">

    <meta name="viewport" content="width=device-width, initial-scale=1">
    <script src="https://code.jquery.com/jquery-1.10.2.min.js"></script>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/js/bootstrap.bundle.min.js"></script>

    <style>
        body {
            background: grey;
            margin-top: 120px;
            margin-bottom: 120px;
        }
    </style>

</head>
<body>

<div class="container">
    <div class="row">
        @foreach($mydetails as $details)
        <div class="col-12">
            <div class="card">
                <div class="card-body p-0">
                    <div class="row p-5">
                        <div class="col-md-6">
                            <img src="/img/logo.jpeg">
                        </div>

                        <div class="col-md-6 text-right">
                            <p class="font-weight-bold mb-1">Invoice: {!! $details->invoiceNumber !!}</p>
                            <p class="text-muted">{!! $details->invoicestatus !!}</p>
                        </div>
                    </div>

                    <hr class="my-5">

                    <div class="row pb-5 p-5">
                        <div class="col-md-6">
                            <p class="font-weight-bold mb-4">Client Information</p>
                            <p class="mb-1">{!! $details->c_fname !!} {!! $details->c_lname !!}</p>
                            <p>{!! $details->c_email !!}</p>
                            <p class="mb-1">{!! $details->c_phone !!}</p>
                        </div>

                        <div class="col-md-6 text-right">
                            <p class="font-weight-bold mb-4">Payment Details</p>
                            <p class="mb-1"><span class="text-muted">VAT: </span> 0 </p>
                            <p class="mb-1"><span class="text-muted">VAT ID: </span> {!! $details->amountpaid !!}</p>
                            <p class="mb-1"><span class="text-muted">Payment Type: </span> Mpesa</p>
                            <p class="mb-1"><span class="text-muted">Paid To: </span> {!! $details->fname !!}</p>
                        </div>
                    </div>

                    <div class="row p-5">
                        <div class="col-md-12">
                            <table class="table">
                                <thead>
                                <tr>
                                    <th class="border-0 text-uppercase small font-weight-bold">Item</th>
                                    <th class="border-0 text-uppercase small font-weight-bold">Description</th>
                                    <th class="border-0 text-uppercase small font-weight-bold">Capacity</th>
                                    <th class="border-0 text-uppercase small font-weight-bold">Daily Charges</th>
                                    <th class="border-0 text-uppercase small font-weight-bold">Driver</th>
                                </tr>
                                </thead>
                                <tbody>
                                <tr>
                                    <td>{!! $details->v_reg !!}</td>
                                    <td>{!! $details->v_make !!}</td>
                                    <td>{!! $details->v_capacity !!}</td>
                                    <td>{!! $details->v_charges !!}</td>
                                    <td>{!! $details->drivercode !!}</td>
                                </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>

                    <div class="d-flex flex-row-reverse bg-dark text-white p-4">
                        <div class="py-3 px-5 text-right">
                            <div class="mb-2">Grand Total</div>
                            <div class="h2 font-weight-light">{!! $details->amountpaid !!}</div>
                        </div>

                        <div class="py-3 px-5 text-right">
                            <div class="mb-2">Discount</div>
                            <div class="h2 font-weight-light">0</div>
                        </div>

                        <div class="py-3 px-5 text-right">
                            <div class="mb-2">Sub - Total amount</div>
                            <div class="h2 font-weight-light">{!! $details->amountpaid !!}</div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        @endforeach
    </div>

    <div class="text-light mt-5 mb-5 text-center small">by : <a class="text-light" href="#">tourafrica.com</a></div>
</div>
</body>
</html>
