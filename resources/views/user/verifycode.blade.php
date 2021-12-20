@extends('user.includes.master')
@section('title', 'Account Verify')
@section('content')

<div class="row">
    <div class="col-lg-12">
                    <div class="white_card card_height_100 mb_30">
                        <div class="white_card_header">
                            <div class="box_header m-0">
                                <div class="main-title">
                                    <h3 class="m-0">'Account Verify'</h3>
                                    @if ($errors->any())
                                        <div class="alert text-white bg-danger mb-0 mt-2" role="alert">
                                            <ul>
                                                @foreach ($errors->all() as $error)
                                                    <li>{{ $error }}</li>
                                                @endforeach
                                            </ul>
                                        </div>
                                    @endif
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
                                 <form action="{{route('web.verified')}}" method="post">
                                    @csrf
                                    {{--  <div class="form-row">
                                        <div class="form-group col-md-4">
                                            <label for="">Email</label>
                                            <input type="email" class="form-control" name="email" required>
                                        </div>
                                    </div>  --}}
                                    <div class="form-row">
                                        <div class="form-group col-md-4">
                                            <label for="">Code</label>
                                            <input type="Number" class="form-control" name="emailcodee" required>
                                        </div>
                                    </div>
                                    <br>
                                    <button type="submit" class="btn btn-primary">Verify</button>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
</div>
@endsection