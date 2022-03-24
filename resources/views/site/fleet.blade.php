<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <!--  This file has been downloaded from bootdey.com @bootdey on twitter -->
    <!--  All snippets are MIT license http://bootdey.com/license -->
    <title>Full Fleet | TourAfrica</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <script src="https://code.jquery.com/jquery-1.10.2.min.js"></script>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/js/bootstrap.bundle.min.js"></script>
</head>
<body>
<div class="container">
    <div class="row">
        <div class="col-xl-12">
            <div class="card">
                <div class="card-body">
                    <h5 class="header-title pb-3 mt-0">Fleet List</h5>
                    <div class="table-responsive">
                        <table class="table table-hover mb-0">
                            <thead>
                            <tr class="align-self-center">
                                <th>Car Type</th>
                                <th>Reg No.s</th>
                                <th>Capacity</th>
                                <th>Owner</th>
                                <th>Rate</th>
                                <th>Status</th>
                            </tr>
                            </thead>
                            <tbody>
                            @if($motors->count() > 0)
                            @foreach($motors as $motor)
                            <tr>
                                <td>{!! $motor->v_make !!}</td>
                                <td><img src="/uploads/vehicles/{!! $motor->v_image !!}" alt="" class="thumb-sm rounded-circle mr-2">
                                    {!! $motor->v_reg !!}</td>
                                <td>{!! $motor->v_capacity !!}</td>
                                <td>{!! $motor->fname !!}</td>
                                <td>${!! $motor->v_charges !!}</td>

                                @if($motor->v_status === 'Available')
                                <td><span class="badge badge-boxed badge-soft-primary">{!! $motor->v_status !!}</span></td>
                                @elseif($motor->v_status === 'Booked')
                                <td><span class="badge badge-boxed badge-soft-warning">{!! $motor->v_status !!}</span></td>
                                @endif
                            </tr>
                            @endforeach
                            @else
                                <td style="text-align: center">
                                    <span class="text-muted">
                                        <i class="fa fa-frown-o" style="font-size:48px;color: orangered"></i>
                                       <br>
                                        <b>Oops.. No vehicles Available.</b>
                                    </span>
                                </td>
                            @endif
                            </tbody>
                        </table>
                    </div>
                    <!--end table-responsive-->
                    <div class="pt-3 border-top text-right">
                        <ul class="pagination">
                            {!! $motors->links() !!}
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

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

<script type="text/javascript">

</script>
</body>
</html>
