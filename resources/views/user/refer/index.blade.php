@extends('user.includes.master')
@section('title', 'Refer a Friend')
@section('content')
<div class="container-fluid p-0">
            <div class="row justify-content-center">
                <div class="col-lg-12">
                    <div class="white_card card_height_100 mb_30">
                        <div class="white_card_header">
                            <div class="box_header m-0">
                                <div class="main-title">
                                    <h3 class="m-0">Refer a Friend</h3>
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
                        <div class="white_card_body pt-3">
                            <div class="QA_section">
                                <div class="row">
                                    <div class="col-lg-5">
                                        <label>Referral Link</label>
                                        <input type="text" name="referral_link" class="form-control" style="margin-bottom: 7px; padding-right: 90px;" value="{{route('user.register.refer', base64_encode(base64_encode(Auth::id())))}}">
                                        <button type="button" class="btn btn-primary" id="copy_referral"><span class="fa fa-copy"></span> Copy</button>
                                        <span id="copied"></span>
                                    </div>
                                    <div class="col-lg-3 pt-4">
                                    </div>
                                </div>
                                <br>
                                <div class="row">
                                    <div class="col-lg-12">
                                        <h4>Referral Gifts</h4>
                                    </div>
                                    <div class="col-lg-12">
                                        <table class="table table-striped">
                                            <thead>
                                                <tr>
                                                    <th>#</th>
                                                    <th style="width: 60%">Gift Amount</th>
                                                    <th>Status</th>
                                                    <th>Created at</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                @foreach($coupons as $key => $val)
                                                    <tr>
                                                        <td>{{++$key}}</td>
                                                        <td><strong>{{'$'.number_format($val->amount, 2)}}</strong></td>
                                                        <td>
                                                            @if($val->status == '0')
                                                                <span class="badge badge-success">Available</span>
                                                            @else
                                                                <span class="badge badge-warning">Used</span>
                                                            @endif
                                                        </td>
                                                        <td>
                                                            {{date('d-M-Y h:i a', strtotime($val->created_at))}}
                                                        </td>
                                                    </tr>
                                                @endforeach
                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-12">
                    
                </div>
            </div>
        </div>
@endsection

@section('addScript')
	<!-- This is data table -->
    <script src="{{URL::to('/public/user/js/')}}/accommodation.js"></script> 
    <script type="text/javascript">
        $(document).ready(function(){
            'use strict'

            $(document).on('click', '#copy_referral', function(){
                $('input[name="referral_link"]').select();
                document.execCommand("copy");
                $('#copied').html('Copied!');
            });
        });
    </script>
@endsection