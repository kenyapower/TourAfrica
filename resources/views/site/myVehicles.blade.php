<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <title>My Vehicles | TourAfrica</title>

    <link href="img/logo.jpeg" rel="icon">

    <meta name="viewport" content="width=device-width, initial-scale=1">
    <script src="https://code.jquery.com/jquery-1.10.2.min.js"></script>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@4.1.1/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet" />

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.1.1/dist/js/bootstrap.bundle.min.js"></script>

{{--    <link rel="stylesheet" href="http://91.234.35.26/iwiki-admin/v1.0.0/admin/css/vendors/checkboxes.css">--}}
{{--    <script src="http://91.234.35.26/iwiki-admin/v1.0.0/admin/js/checkboxes.js"></script>--}}

    <style>
    body{
        margin-top:20px;
        background:#eee;
    }

    .decor-default {
        background-color: #ffffff;
    }
    .contacts-labels .title {
        font-size: 16px;
        line-height: 112px;
        background: url("http://91.234.35.26/iwiki-admin/v1.0.0/admin/img/icon-42.png") 0 50% no-repeat;
        padding: 0 0 0 32px;
        color: #333333;
        overflow: hidden;
    }
    .contacts-labels .title span {
        float: right;
    }
    .contacts-labels .settings {
        min-width: 70px;
        max-width: 70px;
        line-height: 38px;
        float: left;
        margin-right: 10px;
    }
    .btn-default {
        background-color: #ffffff;
        border: 1px solid #d8d8d8 !important;
        color: #333333;
        line-height: 46px;
    }
    .input-group {
        position: relative;
        display: table;
        border-collapse: separate;
    }
    .contacts-search {
        width: 100%;
        line-height: 38px;
        color: #333333;
        padding: 0 8px;
        border: 1px solid #ccc;
        border-right: 0;
    }
    input {
        -webkit-appearance: none;
        border-radius: 0;
    }
    .contacts-search + .input-group-addon {
        background: #fff;
        border-radius: 0;
    }
    .input-group-addon:last-child {
        border-left: 0;
    }
    .contacts-search + .input-group-addon button {
        background: transparent;
    }
    button {
        border: none;
        outline: none;
    }
    .contacts-labels .list .head {
        font-size: 20px;
        line-height: 32px;
        font-weight: bold;
        text-align: center;
        background: #39bee8;
        color: #ffffff;
        margin: 60px 0 40px;
    }
    .contacts-labels .list .unit {
        overflow: hidden;
        padding: 0 0 20px;
    }
    .contacts-labels .list .unit .lab-success {
        background: #46be8a;
    }
    .contacts-labels .list .unit .lab-primary {
        background: #7266ba;
    }
    .contacts-labels .list .unit .lab-danger {
        background: #ff69b4;
    }
    .contacts-labels .list .unit .lab-warning {
        background: #f2a654;
    }
    .btn-primary {
        background-color: #7266ba;
    }
    .contacts-labels .list .unit .lab {
        font-size: 16px;
        line-height: 32px;
        float: left;
        width: 112px;
        padding: 0 0 0 18px;
        color: #ffffff;
    }
    .contacts-labels .list .unit span {
        display: block;
        float: right;
        font-size: 16px;
        line-height: 32px;
        font-weight: bold;
    }
    .btn {
        min-width: 180px;
        font-size: 26px;
        line-height: 48px;
        font-weight: normal;
        color: #ffffff;
        padding: 0 24px;
        -webkit-transition: background false false, 0.25s false false, cubic-bezier(0.4, 1, 0.3, 1) false false;
        -moz-transition: background false false false, 0.25s false false false, cubic-bezier(0.4, 1, 0.3, 1) false false false;
        -o-transition: background false false false, 0.25s false false false, cubic-bezier(0.4, 1, 0.3, 1) false false false;
        transition: background, 0.25s, cubic-bezier(0.4, 1, 0.3, 1);
    }
    .btn {
        display: inline-block;
        margin-bottom: 0;
        text-align: center;
        vertical-align: middle;
        touch-action: manipulation;
        cursor: pointer;
        background-image: none;
        white-space: nowrap;
        -webkit-user-select: none;
        -moz-user-select: none;
        -ms-user-select: none;
        user-select: none;
        border: none;
    }
    .contacts-list {
        border-left: 1px solid #d8d8d8;
        margin: -20px 0 40px;
    }
    .contacts-list .title {
        padding: 0 0 0 20px;
        color: #7266ba;
        line-height: 124px;
    }
    .input-group {
        position: relative;
        display: table;
        border-collapse: separate;
    }
    .contacts-list-search {
        width: 100%;
        line-height: 60px;
        background: #585b9c;
        font-size: 24px;
        color: #fff;
        padding: 0 20px;
    }
    input {
        -webkit-appearance: none;
        border-radius: 0;
    }
    input {
        padding: 0;
        border: none;
        outline: none;
    }
    .contacts-list-search + .input-group-addon {
        background: #585b9c;
        border-radius: 0;
        border: 0;
    }
    .input-group-addon:last-child {
        border-left: 0;
    }
    .contacts-list-search + .input-group-addon button {
        background: transparent;
    }

    /************ Contact list*********************/
    .contacts-list .unit.head {
        font-size: 20px;
        color: #7266ba;
        padding-bottom: 10px;
        overflow: visible;
    }
    .contacts-list .unit {
        padding: 20px 0;
        margin-top: -7px;
        border-bottom: 1px solid #d8d8d8;
        display: inline-block;
        width: 100%;
        font-size: 16px;
        line-height: 40px;
        color: #333333;
        -webkit-transition: background false false, 0.3s false false;
        -moz-transition: background false false false, 0.3s false false false;
        -o-transition: background false false false, 0.3s false false false;
        transition: background, 0.3s;
    }
    .contacts-list .unit .field {
        float: left;
        overflow: hidden;
        white-space: nowrap;
        text-overflow: ellipsis;
    }
    .contacts-list .unit .name {
        width: 40%;
        padding: 0 0 0 80px;
        position: relative;
    }
    .contacts-list .unit .name .check {
        position: absolute;
        left: 5px;
        top: -8px;
    }
    .contacts-list .unit .phone {
        width: 30%;
        padding: 0 0 0 20px;
    }
    .contacts-list .unit .email {
        width: 30%;
        padding: 0 0 0 20px;
        overflow: visible;
    }
    .btn-group, .btn-group-vertical {
        position: relative;
        display: inline-block;
        vertical-align: middle;
    }
    .btn-group > .btn:first-child:not(:last-child):not(.dropdown-toggle) {
        border-bottom-right-radius: 0;
        border-top-right-radius: 0;
    }
    .contacts-list .unit .email .btn {
        min-width: 38px;
        max-width: 38px;
        font-size: inherit;
        padding: 0 8px;
        line-height: 36px;
    }
    .btn-group > .btn:first-child {
        margin-left: 0;
    }
    .btn-group > .btn, .btn-group-vertical > .btn {
        position: relative;
        float: left;
    }
    .btn-default {
        background-color: #ffffff;
        border: 1px solid #d8d8d8 !important;
        color: #333333;
        line-height: 46px;
    }
    .contacts-list .icons .icon-folder {
        background: url("http://91.234.35.26/iwiki-admin/v1.0.0/admin/img/icon-9.png") no-repeat 50% 50%;
    }
    .contacts-list .icons .icon-label {
        background: url("http://91.234.35.26/iwiki-admin/v1.0.0/admin/img/icon-5.png") no-repeat 50% 50%;
    }
    .contacts-list .icons .icon-trash {
        background: url("http://91.234.35.26/iwiki-admin/v1.0.0/admin/img/icon-10.png") no-repeat 50% 50%;
    }
    .contacts-list .icons .icon {
        display: inline-block;
        width: 20px;
        height: 20px;
        margin-top: 3px;
    }
    .contacts-list .unit .name .avatar {
        display: inline-block;
        width: 40px;
        height: 40px;
        border-radius: 20px;
        margin: 0 16px 0 0;
        vertical-align: top;
    }
    .contacts-list .lab {
        font-size: 14px;
        line-height: 21px;
        float: left;
        min-width: 75px;
        padding: 0 0 0 18px;
        color: #ffffff;
        margin-left: 60px;
    }
    /*.contacts-list .lab-info {*/
    /*    background: #f2a654;*/
    /*}*/
    .contacts-list .lab-warning {
        background: #f2a654;
    }
    .contacts-list .lab-success {
        background: #46be8a;
    }
    .contacts-list .lab-danger {
        background: #ff69b4;
    }
    .contacts-list .lab-primary {
        background: #7266ba;
    }
</style>
</head>
<body>
<div class="container bootstrap snippets bootdeys bootdey">
    <div class="row decor-default">
        <div class="col-lg-3 col-md-4 col-sm-12">
            <div class="contacts-labels">

                <div class="title">My Vehicles<span><b>{{$mycars->where('v_owner', $usercode)->count()}}</b></span></div>
                <div class="list">
                    <div class="input-group">
                        <input type="text" class="contacts-search" placeholder="Search">
                    </div>
                    <div class="head">Labels</div>
                    <div class="unit">
                        <div class="lab lab-success">Available</div><span>{{$mycars->where('v_status', 'Available')->count()}}</span>
                    </div>
                    <div class="unit">
                        <div class="lab lab-primary">At Work</div><span>{{$mycars->where('v_status', 'Booked')->count()}}</span>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-lg-9 col-md-8 col-sm-12">
            <div class="contacts-list">
                <h5 class="title">Vehicle List</h5>

                <form class="ac-custom ac-checkbox ac-checkmark" autocomplete="off">
                    <div class="input-group">
                        <input type="text" class="contacts-list-search" placeholder="Search">
                    </div>
                    <div class="unit head">
                        <div class="field name">
                            <div class="check">
                                <input id="cb1" name="cb1" type="checkbox">
                                <label for="cb1"></label>
                                <svg viewBox="0 0 100 100" xmlns="http://www.w3.org/2000/svg"></svg></div>
                            Reg Num
                        </div>
                        <div class="field phone">
                            Make
                        </div>
                        <div class="field email icons">
                            Rate/ per day
                        </div>
                    </div>
                    @foreach($mycars as $mycar)
                    <div class="unit">
                        <div class="field name">
                            <div>
                                <img src="/uploads/vehicles/{{$mycar->v_image}}" alt="image" class="avatar"> {!! $mycar->v_reg !!}
                            </div>
                            @if($mycar->v_status === 'Available')
                                <div class="lab lab-success">{{$mycar->v_status}}</div>
                            @elseif($mycar->v_status === 'Booked')
                                <div class="lab lab-primary">{{$mycar->v_status}}</div>
                            @endif
                        </div>
                        <div class="field phone">
                            {!! $mycar->v_make !!}
                        </div>
                        <div class="field email">
                           ${!! $mycar->v_charges !!}
                        </div>
                    </div>
                    @endforeach

                </form>
            </div>
        </div>
    </div>
</div>

</body>
</html>
