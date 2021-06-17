@extends('admin.includes.master')
@section('title', 'Drafted | Products | Collectibles')
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
                <div class="table-responsive">
                    <table id="demo-foo-addrow" class="table m-t-10 table-hover contact-list" data-page-size="10">
                        <thead>
                            <tr>
                                <th>No</th>
                                <th>Title</th>
                                <th>Price</th>
                                <th>Category</th>
                                <th>Sub Category</th>
                                <th>Description</th>
                                <th>Orders</th>
                                <th>Created at</th>
                                <th>Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            @php $s=1; @endphp
                            @foreach($data as $val)
                                <tr>
                                    <td>{{$s}}</td>
                                    <td>
                                        <a href="javascript:void(0)"><img src="{{URL::to('/public/storage/products/feature/'.$val->feature_img)}}" alt="user" width="40" class="img-circle" />
                                            {{$val->title}}
                                        </a>
                                    </td>
                                    <td>${{number_format($val->price, 1)}}</td>
                                    <td><span class="label label-primary">{{$val->category->name}}</span> </td>
                                    <td><span class="label label-warning">{{$val->subCategory->name}}</span> </td>
                                    <td>
                                        <p class="cut-text" title="{{$val->description}}">
                                            {{$val->description}}
                                        </p>
                                    </td>
                                    <td>0</td>
                                    <td>{{date('d-M-Y h:i a', strtotime($val->created_at))}}</td>
                                    <td>
                                        <button type="button" class="btn btn-sm btn-primary publishProduct" data-toggle="tooltip" data-original-title="Publish" data-id="{{base64_encode($val->id)}}"><i class="fa fa-eye" aria-hidden="true"></i></button>
                                    </td>
                                </tr>
                                @php $s++; @endphp
                            @endforeach
                            @if(count($data) == '0')
                                <tr>
                                    <td colspan="9">No Products Found.</td>
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
@section('addStyle')
@endsection
@section('addScript')
@endsection