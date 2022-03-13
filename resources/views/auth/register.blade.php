@extends('layouts.app')

@section('content')
    <div class="wrapper">

        <section class="h-100 h-custom">

            <div class="mask d-flex align-items-center h-100 gradient-custom-3">
                <div class="container h-100">
                    <div class="row d-flex justify-content-center align-items-center h-100">
                        <div class="col-12 col-md-9 col-lg-7 col-xl-6">
                            <div class="card" style="border-radius: 15px;">
                                <div class="card-body p-5">
                                    <h2 class="text-uppercase text-center mb-5">Request an account</h2>

                                    <form action="{{ route('register') }}" method="POST" enctype="multipart/form-data">

                                        <div class="form-outline form-white mb-4">
                                            <input type="text" id="form3Example1cg" name="fname" class="form-control form-control-lg" required/>
                                            <label class="form-label" for="form3Example1cg">Your First Name</label>
                                        </div>

                                        <div class="form-outline form-white mb-4">
                                            <input type="text" id="form3Example1cg" name="sname" class="form-control form-control-lg" required/>
                                            <label class="form-label" for="form3Example1cg">Your Second Name</label>
                                        </div>

                                        <div class="form-outline form-white mb-4">
                                            <input type="number" id="form3Example4cg" name="phone" class="form-control form-control-lg" required />
                                            <label class="form-label" for="form3Example4cg">Phone Number</label>
                                        </div>

                                        <div class="form-outline form-white mb-4">
                                            <input type="email" id="form3Example3cg" name="email" class="form-control form-control-lg @error('email') is-invalid @enderror" required />
                                            @error('email')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                            @enderror

                                            <label class="form-label" for="form3Example3cg">Your Email</label>
                                        </div>

                                        <div class="form-outline form-white mb-4">
                                            <input type="password" id="form3Example3cg" name="password" class="form-control form-control-lg @error('password') is-invalid @enderror" required />

                                            @error('password')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                            @enderror

                                            <label class="form-label" for="form3Example3cg">Your password</label>
                                        </div>

{{--                                        <h2 class="text-uppercase text-center mb-5">Provide Vehicle info</h2>--}}

{{--                                        <div class="form-outline form-white mb-4">--}}
{{--                                            <input type="text" id="form3Example3cg" name="v_reg" class="form-control form-control-lg" required />--}}
{{--                                            <label class="form-label" for="form3Example3cg">Vehicle registration Number</label>--}}
{{--                                        </div>--}}

{{--                                        <div class="form-outline form-white mb-4">--}}
{{--                                            <input type="text" id="form3Example3cg" name="v_make" class="form-control form-control-lg" placeholder="eg: Toyota Noah" required />--}}
{{--                                            <label class="form-label" for="form3Example3cg">Vehicle Make</label>--}}
{{--                                        </div>--}}

{{--                                        <div class="form-outline form-white mb-4">--}}
{{--                                            <input type="number" id="form3Example3cg" name="v_capacity" class="form-control form-control-lg" placeholder="eg: 7 seater" required />--}}
{{--                                            <label class="form-label" for="form3Example3cg">Vehicle capacity</label>--}}
{{--                                        </div>--}}

{{--                                        <div class="form-outline form-white mb-4">--}}
{{--                                            <label class="form-label" for="form3Example3cg">Operation Region</label>--}}

{{--                                            <select  class="form-control form-control-lg" name="v_region">--}}
{{--                                                <option  selected>Choose Region</option>--}}
{{--                                                <option value="North Eastern">Central Africa</option>--}}
{{--                                                <option value="Central Africa">Central Africa</option>--}}
{{--                                                <option value="Sub-Sahara">Sub-Sahara</option>--}}
{{--                                                <option value="South-Africa">South-Africa</option>--}}
{{--                                            </select>--}}

{{--                                        </div>--}}

{{--                                        <div class="form-outline form-white mb-4">--}}
{{--                                            <input type="number" id="form3Example3cg" name="v_charges" class="form-control form-control-lg" placeholder="Curency USD" required />--}}
{{--                                            <label class="form-label" for="form3Example3cg">Charges Per Day</label>--}}
{{--                                        </div>--}}

{{--                                        <div class="form-outline form-white mb-4">--}}
{{--                                            <label class="form-label" for="form3Example3cg">Upload Logbook/ Insurance</label>--}}

{{--                                            <input  id="formFileLg" name="v_logbook" type="file" accept="application/pdf" class="form-control form-control-lg" required />--}}
{{--                                            <div class="small text-muted mt-2">Upload vehicle Logbook/Insurance to justify owning the car. Max file size 25 MB</div>--}}

{{--                                        </div>--}}

{{--                                        <div class="form-outline form-white mb-4">--}}
{{--                                            <label class="form-label" for="form3Example3cg">Upload valid Driving License</label>--}}

{{--                                            <input  id="formFileLg" name="driver_license" type="file" accept="image/jpeg,png" class="form-control form-control-lg" required />--}}
{{--                                            <div class="small text-muted mt-2">Upload copy of Driving License. Max file size 25 MB</div>--}}

{{--                                        </div>--}}

{{--                                        <div class="form-outline form-white mb-4">--}}
{{--                                            <label class="form-label" for="form3Example3cg">Upload Vehicle Image</label>--}}

{{--                                            <input  id="formFileLg" name="v_image" type="file" accept="image/jpeg,png" class="form-control form-control-lg" required />--}}
{{--                                            <div class="small text-muted mt-2">Upload Vehicle Image. Max file size 25MB</div>--}}

{{--                                        </div>--}}

                                        <input type="text" name="position" value="driver" hidden>

                                        <div class="form-check d-flex justify-content-center mb-5">
                                            <p><input class="form-check-input me-2" type="checkbox" name="tos"  id="form2Example3cg" required/> </p>
                                            <label class="form-check-label" for="form2Example3g">
                                                I agree all statements in <a href="#!" class="text-body"><u>Terms of service</u></a>
                                            </label>
                                        </div>


                                        <div class="d-flex justify-content-center">
                                            <button type="submit" class="btn btn-success btn-block btn-lg gradient-custom-4 text-body">Request</button>
                                        </div>

                                        <p class="text-center text-muted mt-5 mb-0">Have already an account? <a href="login" class="fw-bold text-body"><u>Login here</u></a></p>

                                    </form>

                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

    </div>

@endsection
