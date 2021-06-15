@extends('admin.includes.master')
@section('title', 'Processing | Sales | Collectibles')
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
                                <th>Customer</th>
                                <th>Email</th>
                                <th>Phone</th>
                                <th>Products</th>
                                <th>Price</th>
                                <th>Created at</th>
                                <th class="text-right">Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td>1</td>
                                <td>
                                    <a href="javascript:void(0)">Genelia Deshmukh</a>
                                </td>
                                <td><a href="mailto:abc@gmail.com">abc@gmail.com</a></td>
                                <td><a href="tel:121212122">121212122</a></td>
                                <td>2</td>
                                <td>$50.0</td>
                                <td>14-Jun-2021 11:05 pm</td>
                                <td class="text-right">
                                    <a href="{{URL::to('/admin/collectibles/sales/orderDetail')}}" class="btn btn-sm btn-warning" data-toggle="tooltip" data-original-title="View Details"><i class="fa fa-list" aria-hidden="true"></i></a>

                                    <button type="button" class="btn btn-sm btn-info" data-toggle="tooltip" data-original-title="Delivered"><i class="mdi mdi-clipboard-check" aria-hidden="true"></i></button>
                                </td>
                            </tr>
                            <tr>
                                <td>2</td>
                                <td>
                                    <a href="javascript:void(0)">Genelia Deshmukh</a>
                                </td>
                                <td><a href="mailto:abc@gmail.com">abc@gmail.com</a></td>
                                <td><a href="tel:121212122">121212122</a></td>
                                <td>2</td>
                                <td>$50.0</td>
                                <td>14-Jun-2021 11:05 pm</td>
                                <td class="text-right">
                                    <a href="{{URL::to('/admin/collectibles/sales/orderDetail')}}" class="btn btn-sm btn-warning" data-toggle="tooltip" data-original-title="View Details"><i class="fa fa-list" aria-hidden="true"></i></a>

                                    <button type="button" class="btn btn-sm btn-info" data-toggle="tooltip" data-original-title="Delivered"><i class="mdi mdi-clipboard-check" aria-hidden="true"></i></button>
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