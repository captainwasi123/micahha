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
                                            <label for="">Listing</label>
                                            <select class="form-control" >
                                                <option value="">select...</option>
                                                <option>list 1</option>
                                                <option>list 2</option>
                                                <option>list 3</option>
                                            </select>
                                        </div>
                                        <div class="form-group col-md-6">
                                            <label for="">User Name</label>
                                            <input type="text" class="form-control" id="inputEmail4" placeholder="enter user name">
                                        </div>
                                        <div class="form-group col-md-6">
                                            <label for="">Phone Number</label>
                                            <input type="text" class="form-control" id="inputPassword4" placeholder="enter phone number">
                                        </div>
                                        <div class="form-group col-md-6">
                                            <label for="">No of People</label>
                                            <input type="text" class="form-control" id="inputPassword4" placeholder="enter phone number">
                                        </div>
                                        <div class="form-group col-md-6">
                                            <label for="">Check-In</label>
                                            <input type="date" class="form-control" id="inputPassword4" placeholder="enter phone number">
                                        </div>
                                        <div class="form-group col-md-6">
                                            <label for="">Check-Out</label>
                                            <input type="date" class="form-control" id="inputPassword4" placeholder="enter phone number">
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