@extends('landlord.includes.master')
@section('title', $title)
@section('content')

<div class="row">
    <div class="col-lg-12">
                    <div class="white_card card_height_100 mb_30">
                        <div class="white_card_header">
                            <div class="box_header m-0">
                                <div class="main-title">
                                    <h3 class="m-0">{{$title}}</h3>
                                </div>
                            </div>
                        </div>
                        <div class="white_card_body">
                            <div class="card-body">
                                <form>
                                    <div class="form-row">
                                        <div class="form-group col-md-6">
                                            <label for="">First Name</label>
                                            <input type="text" class="form-control" id="inputEmail4" placeholder="enter first name">
                                        </div>
                                        <div class="form-group col-md-6">
                                            <label for="">Last Name</label>
                                            <input type="text" class="form-control" id="inputPassword4" placeholder="enter last name">
                                        </div>
                                        <div class="form-group col-md-6">
                                            <label for="">Email</label>
                                            <input type="email" class="form-control" id="inputPassword4" placeholder="enter email">
                                        </div>
                                        <div class="form-group col-md-6">
                                            <label for="">Country</label>
                                            <select class="form-control">
                                                <option>select...</option>
                                                <option>Pakistan</option>
                                                <option>USA</option>
                                                <option>UK</option>
                                            </select>
                                        </div>
                                        <div class="form-group col-md-6">
                                            <label for="">Address</label>
                                            <input type="text" class="form-control" id="inputPassword4" placeholder="enter address">
                                        </div>
                                        <div class="form-group col-md-6">
                                            <label for="">Company Name</label>
                                            <input type="text" class="form-control" id="inputPassword4" placeholder="enter company name">
                                        </div>
                                        <div class="form-group col-md-6">
                                            <label for="">Sunrub/City</label>
                                            <input type="text" class="form-control" id="inputPassword4" placeholder="enter sunrub/city">
                                        </div>
                                        <div class="form-group col-md-6">
                                            <label for="">State / Province</label>
                                            <input type="text" class="form-control" id="inputPassword4" placeholder="enter state / province">
                                        </div>
                                        <div class="form-group col-md-6">
                                            <label for="">Zip / Postal Code</label>
                                            <input type="text" class="form-control" id="inputPassword4" placeholder="enter zip / postal code">
                                        </div>
                                        <div class="form-group col-md-6">
                                            <label for="">Phone Number</label>
                                            <input type="text" class="form-control" id="inputPassword4" placeholder="enter phone number">
                                        </div>
                                        <div class="form-group col-md-6">
                                            <label for="">Newsletter Subscription</label> <br>
                                            <input type="checkbox"> <span>I agree to receive the Micahha newsletter.</span>
                                        </div>
                                    </div>
                                    <button type="submit" class="btn btn-primary">Sign in</button>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
</div>
@endsection