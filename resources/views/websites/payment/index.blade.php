{{-- stylesheet --}}
@push('websites-css')
    {{-- custom css --}}
    <link rel="stylesheet" href="{{asset('css/websites/service/web-hosting.css')}}">
    <link rel="stylesheet" href="{{asset('css/websites/payment/payment.css')}}">

@endpush

{{-- layout --}}
@extends('layouts.web')

{{-- title --}}
@section('title', 'Payment')

{{-- BEING: payment container --}}
@section('content')

<div class="container-fluid" id="payment">
    {{-- service title --}}
    <div class="d-flex flex-row">
        <div class="icon-arrow-back pt-2"><span class="material-icons color-gray font-weight-bold">arrow_back_ios</span></div>
        <div class="hosting-heading text-uppercase color-blue" style="margin: 0 auto;">Payment</div>
    </div>

    {{-- description --}}
    <div class="row text-center text-uppercase color-blue margin-top">
        <div class="col-lg-12 col-md-12 col-sm-12">
            <div class="hosting-description mt-2">
                Choose payment method below
            </div>
        </div>
    </div>
    
    <div class="addcontainer">
        <div class="row" id="card-icon">
            {{-- cradit card --}}
            <div class="col-lg-6 col-md-12 col-sm-12 remove-backgroup backgroup-mobile mt-5">
                <div class="addcard border-radius">
                    <div class="card-body text-center p-5">
                        <div class="card-image">
                            <img src="images/payment/credit-card-blue.png" alt="cradit card" id="cradit-card" width="100%">
                        </div>
                        <div class="card-description mt-3">PAY WITH CREDIT CARD</div>
                    </div>
                </div>
            </div>

            {{-- paypal card --}}
            <div class="col-lg-6 col-md-12 col-sm-12 remove-backgroup backgroup-mobile mt-5">
                <div class="addcard border-radius">
                    <div class="card-body text-center p-5">
                        <div class="paypal-icon mt-3">
                            <img src="images/payment/paypal.png" alt="cradit card" width="100%">
                        </div>
                        <div class="card-description mt-4">PAY WITH PAYPAL</div>
                    </div>
                </div>
            </div>
        </div>

    </div>

    <div class="container mt-5">
        {{-- form --}}
        <form action="#" method="POST">
            <div class="row ">
                {{-- credit card payment --}}
                <div class="col-lg-6 col-md-12 col-sm-12">
                    <div class="card">
                        <div class="card-body">
                            <div class="card-title">
                                <div class="d-inline">
                                    <span class="d-inline-block text-white bg-blue circles">1</span>
                                </div>
                                <p class="d-inline pl-3">Billing Info</p>
                            </div>
                            {{-- full name --}}
                            <div class="form-grop mt-4">
                                <label for="full-name" class="color-gray">FULL NAME</label>
                                <input type="text" name="full-name" placeholder="John Doe" class="form-control">
                            </div>
                            {{-- billing address --}}
                            <div class="form-grop mt-3">
                                <label for="billing" class="color-gray">BILLING ADDRESS</label>
                                <input type="text" name="billing" placeholder="Cambodia" class="form-control">
                            </div>
        
                            <div class="row row-space">
                                {{-- city --}}
                                <div class="col-lg-6 col-md-12 col-sm-12">
                                    <label for="city" class="color-gray mt-3">CITY</label>
                                    <div class="input-group">
                                        <select class="form-control" name="city" id="city">
                                            <option disabled selected>Choose your city</option>
                                            <option value="pp">Phnom Penh</option>
                                            <option value="kpc">Kompong Cham</option>
                                            <option value="pv">Prey Veang</option>
                                        </select>
                                    </div>
                                </div>
                                {{-- zip code --}}
                                <div class="col-lg-6 col-md-12 col-sm-12">
                                    <label for="zip-code" class="color-gray mt-3">ZIP CODE</label>
                                    <div class="input-group">
                                        <input type="number" placeholder="121212" name="zip-code" id="zip-code" class="form-control">
                                    </div>
                                </div>
        
                            </div>

                                {{-- conutry --}}
                            <div class="form-grop mt-3">
                                <label for="billing" class="color-gray">COUNTRY</label>
                                <input type="text" name="billing" placeholder="Cambodia" class="form-control">
                            </div>
                        </div>
                    </div>

                </div>
        
                {{-- paypal payment --}}
                <div class="col-lg-6 col-md-12 col-sm-12">
                    <div class="card">
                        <div class="card-body">
                            <div class="card-title">
                                <div class="d-inline">
                                    <span class="d-inline-block text-white bg-blue circles">2</span>
                                </div>
                                <p class="d-inline pl-3">Credit Card Info</p>
                            </div>
                            {{-- cradholder's name --}}
                            <div class="form-grop mt-4">
                                <label for="name" class="color-gray">CARDHOLDER’S NAME</label>
                                <input type="text" name="name" placeholder="John Doe" class="form-control">
                            </div>
                            {{-- card number --}}
                            <div class="form-grop mt-3">
                                <label for="card-number" class="color-gray">CARD NUMBER</label>
                                <input type="number" name="card-number" placeholder="123456789" class="form-control">
                            </div>
        
                            <div class="row row-space">
                                {{-- EXP. MONTH --}}
                                <div class="col-lg-6 col-md-12 col-sm-12">
                                    <label for="exp-m" class="color-gray mt-3">EXP. MONTH</label>
                                    <div class="input-group">
                                        <select class="form-control" name="exp-m" id="exp-m">
                                            <option value="12">12</option>
                                            <option value="11">11</option>
                                            <option value="10">10</option>
                                        </select>
                                    </div>
                                </div>
                                {{-- EXP. YEAR --}}
                                <div class="col-lg-6 col-md-12 col-sm-12">
                                    <label for="exp-y" class="color-gray mt-3">EXP. YEAR</label>
                                    <div class="input-group">
                                        <select class="form-control" name="exp-y" id="exp-y">
                                            <option value="12">12</option>
                                            <option value="11">11</option>
                                            <option value="10">10</option>
                                        </select>
                                    </div>
                                </div>
        
                            </div>
                            {{-- CVC NUMBER --}}
                            <div class="form-grop mt-3">
                                <label for="billing" class="color-gray">CVC NUMBER</label>
                                <input type="number" name="billing" placeholder="123" class="form-control">
                            </div>
        
                            {{-- btn --}}
                            <div class="form-grop mt-4">
                                <button class="btn bg-blue text-white float-right">PROCESS</button>
                            </div>
                            
                        </div>
                    </div>
                </div>
                
            </div>
        {{-- end form --}}
        </form>
    </div>

</div>

@endsection
{{-- END: payment container --}}

{{-- script --}}
@section('script')
    {{-- custom script--}}
    <script src="{{asset('js/websites/client_detail.js')}}"></script>
    <script src="{{asset('js/websites/payment.js')}}"></script> 

@endsection