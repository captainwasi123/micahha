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
                                    @if(session()->has('success'))
                                        <div class="alert text-white bg-success mb-0 mt-2" role="alert">
                                        <div class="alert-text"><b>Success!</b> {{ session()->get('success') }}</div>
                                        </div>
                                    @endif
                                    @if(session()->has('error'))
                                        <div class="alert text-white bg-danger mb-0 mt-2" role="alert">
                                        <div class="alert-text"><b>Alert!</b> {{ session()->get('error') }}</div>
                                        </div>
                                    @endif
                                </div>
                            </div>
                        </div>
                        <div class="white_card_body">
                            <div class="card-body">
                                <div class="row">
                                    <div class="col-8">
                                <form method="post" action="{{route('landlord.reservation.save')}}">
                                    @csrf
                                    <div class="form-row">
                                        <div class="form-group col-md-12">
                                            <label for="">Listing</label>
                                            <select class="form-control" name="list_id" required>
                                                <option value="">select...</option>
                                                @foreach($listing_data as $data)
                                                <option value="{{$data->id}}">{{$data->title}}</option>
                                                @endforeach
                                            </select>
                                        </div>
                                        <div class="form-group col-md-6">
                                            <label for="">User Name</label>
                                            <input type="text" class="form-control" name="user_name" required>
                                        </div>
                                        <div class="form-group col-md-6">
                                            <label for="">Phone Number</label>
                                            <input type="text" class="form-control" name="ph_number" required>
                                        </div>
                                        <div class="form-group col-md-4">
                                            <label for="">No of People</label>
                                            <input type="text" class="form-control" name="no_of_people" required>
                                        </div>
                                        <div class="form-group col-md-8">
                                            <label for="">Check-In | Check-Out</label>
                                            <input type="text" class="form-control datepicker-here  digits" data-range="true" data-multiple-dates-separator="-" data-language="en" name="check_id_date" required>
                                        </div>
                                    </div>
                                    <button type="submit" class="btn btn-primary">Sign in</button>
                                </form>
                                   </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
</div>
@endsection
@section('addScript')
<script src="{{URL::to('/public/user/')}}/vendors/datepicker/datepicker.js"></script>
<script src="{{URL::to('/public/user/')}}/vendors/datepicker/datepicker.en.js"></script>
<script src="{{URL::to('/public/user/')}}/vendors/datepicker/datepicker.custom.js"></script>
@endsection