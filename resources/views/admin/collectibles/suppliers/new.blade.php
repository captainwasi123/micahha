@extends('admin.includes.master')
@section('title', 'Add New | Suppliers | Collectibles')
@section('content')

<div class="row">
    <div class="col-12">
        <div class="card">
            <div class="card-body">
                <div>
                    @if (session()->has('success'))
                        <div class="alert alert-success">
                            <strong>Success! </strong>{{ session('success') }}
                        </div>
                    @endif
                </div>
                <h6 class="card-subtitle"><code>*</code> Fields are required.</h6>
                <form class="form-material m-t-10" method="post">
                    @csrf
                    <div class="row">
                        <div class="col-md-4">
                            <div class="form-group">
                                <label>Supplier Name <code>*</code></label>
                                <input type="text" class="form-control form-control-line" name="name" required> 
                            </div>
                        </div>
                        <div class="col-md-2">
                            <div class="form-group">
                                <label>Phone</label>
                                <input type="text" class="form-control form-control-line" name="phone"> 
                            </div>
                        </div>
                        <div class="col-md-3">
                            <div class="form-group">
                                <label>Email <code>*</code></label>
                                <input type="email" class="form-control form-control-line" name="email" required> 
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-9">
                            <div class="form-group">
                                <label>Address</label>
                                <input type="text" class="form-control form-control-line" name="address"> 
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-6">
                            <div class="form-group">
                                <label>Description</label>
                                <textarea class="form-control" name="description" rows="4"></textarea>
                            </div>
                        </div>
                        <div class="col-md-3">
                            <div class="form-group">
                                <label>Shipping Countries <code>*</code></label>
                                <select class="form-control" name="country[]" multiple required>
                                    @foreach($countries as $val)
                                        <option value="{{$val->country_id}}">{{@$val->country->nicename}}</option>
                                    @endforeach
                                </select> 
                            </div>
                        </div>
                    </div>

                    <div class="row m-t-40">
                        <div class="col-md-12 text-right">
                            <button type="submit" class="btn btn-primary">&nbsp;&nbsp;&nbsp;Save&nbsp;&nbsp;</button>&nbsp;&nbsp;&nbsp;
                            <button type="reset" class="btn btn-default">&nbsp;&nbsp;&nbsp;Cancel&nbsp;&nbsp;&nbsp;</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>

@endsection