@extends('admin.includes.master')
@section('title', 'Sales | Settings')
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
                                <label>GST (%) <code>*</code></label>
                                <input type="number" class="form-control form-control-line" value="{{$data->gst}}" name="gst" required> 
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-4">
                            <div class="form-group">
                                <label>Site Commission (%) <code>*</code></label>
                                <input type="number" class="form-control form-control-line" value="{{$data->commission}}" name="commission" required> 
                            </div>
                        </div>
                    </div>
                    <div class="row p-t-10" id="galleryPreview"></div>

                    <div class="row m-t-40">
                        <div class="col-md-12 text-right">
                            <button type="submit" class="btn btn-primary">&nbsp;&nbsp;&nbsp;Update&nbsp;&nbsp;</button>&nbsp;&nbsp;&nbsp;
                            <button type="reset" class="btn btn-default">&nbsp;&nbsp;&nbsp;Cancel&nbsp;&nbsp;&nbsp;</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>

@endsection