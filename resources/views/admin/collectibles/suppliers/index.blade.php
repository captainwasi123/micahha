@extends('admin.includes.master')
@section('title', 'Suppliers | Collectibles')
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
                                <th>Name</th>
                                <th>Email</th>
                                <th>Phone</th>
                                <th>Shipping Countries</th>
                                <th>Created at</th>
                                <th>Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            @php $s=1; @endphp
                            @foreach($data as $val)
                                <tr>
                                    <td>{{$s}}</td>
                                    <td>{{$val->name}}</td>
                                    <td>{{$val->email}}</td>
                                    <td>{{$val->phone}}</td>
                                    <td>
                                        @foreach($val->countries as $c)
                                            <span class="badge badge-info">{{$c->country->nicename}}</span>
                                        @endforeach
                                    </td>
                                    <td>{{date('d-M-Y h:i a', strtotime($val->created_at))}}</td>
                                    <td>
                                        <button type="button" class="btn btn-sm btn-primary editSupplier" data-toggle="tooltip" data-original-title="Edit" data-href="{{route('admin.collectibles.suppliers.edit', base64_encode($val->id))}}"><i class="fa fa-edit" aria-hidden="true"></i></button>

                                        <button type="button" class="btn btn-sm btn-danger deleteSupplier" data-toggle="tooltip" data-original-title="Delete" data-href="{{route('admin.collectibles.suppliers.delete', base64_encode($val->id))}}"><i class="fa fa-trash" aria-hidden="true"></i></button>
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
<script type="text/javascript">
    $(document).ready(function(){

        $(document).on('click', '.deleteSupplier', function(){
            var link = $(this).data('href');
            if(confirm('Are you sure?')){
                window.location.href = link;
            }
        });

        $(document).on('click', '.editSupplier', function(){
            var link = $(this).data('href');
            if(confirm('Are you sure?')){
                window.location.href = link;
            }
        });
    });
</script>
@endsection