@extends('admin.includes.master')
@section('title', 'Drafted | Products | Collectibles')
@section('content')

<div class="row">
    <div class="col-12">
        <div class="card">
            <div class="card-body">
                <div class="table-responsive">
                    <table id="demo-foo-addrow" class="table m-t-10 table-hover contact-list" data-page-size="10">
                        <thead>
                            <tr>
                                <th>No</th>
                                <th>Title</th>
                                <th>Price</th>
                                <th>Category</th>
                                <th>Description</th>
                                <th>Orders</th>
                                <th>Created at</th>
                                <th>Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td>1</td>
                                <td>
                                    <a href="javascript:void(0)"><img src="{{URL::to('/public/admin')}}/assets/images/users/4.jpg" alt="user" width="40" class="img-circle" /> Genelia Deshmukh</a>
                                </td>
                                <td>$50.0</td>
                                <td><span class="label label-primary">Furniture</span> </td>
                                <td>
                                    <p class="cut-text" title="">
                                        test description
                                    </p>
                                </td>
                                <td>0</td>
                                <td>14-Jun-2021 11:05 pm</td>
                                <td>
                                    <button type="button" class="btn btn-sm btn-icon btn-pure btn-outline delete-row-btn" data-toggle="tooltip" data-original-title="Un-Publish"><i class="ti-close" aria-hidden="true"></i></button>
                                </td>
                            </tr>
                            <tr>
                                <td>2</td>
                                <td>
                                    <a href="javascript:void(0)"><img src="{{URL::to('/public/admin')}}/assets/images/users/4.jpg" alt="user" width="40" class="img-circle" /> Genelia Deshmukh</a>
                                </td>
                                <td>$50.0</td>
                                <td><span class="label label-primary">Furniture</span> </td>
                                <td>
                                    <p class="cut-text" title="">
                                        test description
                                    </p>
                                </td>
                                <td>0</td>
                                <td>14-Jun-2021 11:05 pm</td>
                                <td>
                                    <button type="button" class="btn btn-sm btn-icon btn-pure btn-outline delete-row-btn" data-toggle="tooltip" data-original-title="Un-Publish"><i class="ti-close" aria-hidden="true"></i></button>
                                </td>
                            </tr>
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