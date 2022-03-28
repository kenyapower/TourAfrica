<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <title>Invoices | TourAfrica</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <script src="https://code.jquery.com/jquery-1.10.2.min.js"></script>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/js/bootstrap.bundle.min.js"></script>

    <style>
        body{
            background:#f5f5f5;
            margin-top:20px;
        }
        .card {
            border: none;
            -webkit-box-shadow: 1px 0 20px rgba(96,93,175,.05);
            box-shadow: 1px 0 20px rgba(96,93,175,.05);
            margin-bottom: 30px;
        }
        .table th {
            font-weight: 500;
            color: #827fc0;
        }
        .table thead {
            background-color: #f3f2f7;
        }
        .table>tbody>tr>td, .table>tfoot>tr>td, .table>thead>tr>td {
            padding: 14px 12px;
            vertical-align: middle;
        }
        .table tr td {
            color: #8887a9;
        }
        .thumb-sm {
            height: 32px;
            width: 32px;
        }
        .badge-soft-warning {
            background-color: rgba(248,201,85,.2);
            color: #f8c955;
        }

        .badge {
            font-weight: 500;
        }
        .badge-soft-primary {
            background-color: rgba(96,93,175,.2);
            color: #605daf;
        }
    </style>

</head>
<body>
<div class="container">
    <div class="row">
        <div class="col-xl-12">
            <div class="card">
                <div class="card-body">
                    <h5 class="header-title pb-3 mt-0">Invoices</h5>
                    <div class="table-responsive">
                        <table class="table table-hover mb-0">
                            <thead>
                            <tr class="align-self-center">
                                <th>Vehicle</th>
                                <th>Client Name</th>
                                <th>Invoice Number</th>
                                <th>Paid Date</th>
                                <th>Amount</th>
                                <th>Status</th>
                            </tr>
                            </thead>
                            <tbody>
                            @foreach($myinvoices as $myinvoice)
                                <tr>
                                    <td><a href="/invoicedetails/{!! $myinvoice->invoiceNumber!!}">{!! $myinvoice->vehicle_reg !!}</a></td>
                                    <td>{!! $myinvoice->c_fname !!} {!! $myinvoice->c_lname !!}</td>
                                    <td>{!! $myinvoice->invoiceNumber !!}</td>
                                    <td>{{Carbon\Carbon::parse($myinvoice->created_at)->diffForHumans()  }}</td>
                                    <td>${!! $myinvoice->amountpaid !!}</td>
                                    @if($myinvoice->invoicestatus === 'Expired')
                                        <td><span class="badge badge-boxed badge-soft-warning">{!! $myinvoice->invoicestatus !!}</span></td>
                                    @elseif($myinvoice->invoicestatus === 'Open & Valid')
                                        <td><span class="badge badge-boxed badge-soft-warning">{!! $myinvoice->invoicestatus !!}</span></td>
                                    @endif
                                </tr>
                            @endforeach
                            </tbody>
                        </table>
                    </div>
                    <!--end table-responsive-->
                    <hr>
                    <div class="text-center">
                        <ul class="pagination">
                            {!! $myinvoices->links() !!}
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

</body>
</html>
