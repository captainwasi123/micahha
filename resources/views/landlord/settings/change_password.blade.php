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
                                        <div class="form-group col-md-12">
                                            <label for="">Current Password</label>
                                            <input type="password" class="form-control" id="inputEmail4" placeholder="enter current password">
                                        </div>
                                        <div class="form-group col-md-12">
                                            <label for="">New Password</label>
                                            <input type="password" class="form-control" id="inputPassword4" placeholder="enter new password">
                                        </div>
                                        <div class="form-group col-md-12">
                                            <label for="">Conform Password</label>
                                            <input type="password" class="form-control" id="inputPassword4" placeholder="enter conform password">
                                        </div>
                                    </div>
                                    <button type="submit" class="btn btn-primary">Submit</button>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
</div>
@endsection