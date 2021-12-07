@extends('admin.includes.master')
@section('title', 'Shipping Countries | Settings')
@section('content')

<div class="row">
    <div class="col-12">
        <div class="card">
            <div class="card-body">
                <div class="row">
                    <div class="col-md-12"> 
                        @if ($errors->any())
                            <div class="alert alert-danger">
                                <ul class="m-b-0">
                                    @foreach ($errors->all() as $error)
                                        <li>{{ $error }}</li>
                                    @endforeach
                                </ul>
                            </div>
                        @endif
                        @if (session()->has('success'))
                            <div class="alert alert-success">
                                <strong>Success! </strong>{{ session('success') }}
                            </div>
                        @endif
                        @if (session()->has('error'))
                            <div class="alert alert-danger">
                                <strong>Warning! </strong>{{ session('error') }}
                            </div>
                        @endif
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-4">
                        <form method="post" action="{{route('admin.settings.shippingCountries.add')}}">
                            @csrf
                            <div class="form-group">
                                <label>Country *</label>
                                <select class="form-control" name="country_id" required>
                                    <option value="">Select</option>
                                    @foreach($countries as $val)
                                        <option value="{{$val->id}}">{{$val->nicename}}</option>
                                    @endforeach
                                </select> 
                            </div>
                    </div>
                    <div class="col-md-2">
                        <div class="form-group">
                            <label>Max Value *</label>
                            <input type="number" step="any" class="form-control" name="max_value" required>
                        </div> 
                    </div>
                    <div class="col-md-2">
                        <div class="form-group">
                            <label>GST <small>(%)</small> *</label>
                            <input type="number" step="any" class="form-control" name="gst" required>
                        </div> 
                    </div>
                    <div class="col-md-2 m-t-30">
                            <button type="submit" class="btn btn-success waves-effect waves-light m-r-10">
                                &nbsp;&nbsp;Save&nbsp;&nbsp;
                            </button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="col-12">
        <div class="card">
            <div class="card-body">
                <div class="table-responsive">
                    <table id="myTable" class="table table-bordered table-striped">
                        <thead>
                            <tr>
                                <th width="10%">S#</th>
                                <th width="45%">Country</th>
                                <th width="15%">Max Value</th>
                                <th width="15%">GST</th>
                                <th width="15%"></th>
                            </tr>
                        </thead>
                        <tbody>
                            @php $s=1; @endphp
                            @foreach($data as $val)
                                <tr>
                                    <td>{{$s}}</td>
                                    <td>{{@$val->country->nicename}}</td>
                                    <td>{{number_format($val->max_value)}}</td>
                                    <td>{{$val->gst}} <small>%</small></td>
                                    <td>
                                        <a href="javascript:void(0)" data-toggle="tooltip" data-original-title="Delete" class="btn btn-danger btn-sm deleteShippingCountry" data-id="{{base64_encode($val->id)}}">
                                            <i class="fa fa-trash"></i>
                                        </a>
                                    </td>
                                </tr>
                                @php $s++; @endphp
                            @endforeach
                            @if(count($data) == 0)
                                <tr>
                                    <td colspan="3">No Item Found.</td>
                                </tr>
                            @endif
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection