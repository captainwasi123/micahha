@extends('landlord.includes.master')
@section('title', $title)
@section('content')
<div class="container-fluid p-0">
            <div class="row justify-content-center">
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
                            <div class="QA_section">
                                <div class="white_box_tittle list_header">
                                    <div class="box_right d-flex lms_block">
                                        <div class="serach_field_2">
                                            <!-- <div class="search_inner">
                                                <form Active="#">
                                                    <div class="search_field">
                                                        <input type="text" placeholder="Search content here...">
                                                    </div>
                                                    <button type="submit"> <i class="ti-search"></i> </button>
                                                </form>
                                            </div> -->
                                        </div>
                                    </div>
                                </div>

                                <div class="QA_table mb_30">
                                    <!-- table-responsive -->
                                    <table class="table lms_table_active ">
                                        <thead>
                                            <tr>
                                                <th>S#</th>
                                                <th style=" width: 100px; ">List Name</th>
                                                <th>User Name</th>
                                                <th>Phone Number</th>
                                                <th>No of People</th>
                                                <th>Check-In</th>
                                                <th>Check-Out</th>
                                                <th>Action</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            @foreach($reservation_data as $key => $data)
                                            <tr>
                                                <td>{{++$key}}</td>
                                                <td><a  data-toggle="tooltip" data-original-title="View Details" title="{{empty($data->listing) ? '' : $data->listing->title}}">{{empty($data->listing) ? '' : substr($data->listing->title,0,10)}}...</a></td>
                                                <td><p class="cut-text">{{$data->user_name}}</p></td>
                                                <td>{{$data->ph_number}}</td>
                                                <td>
                                                    {{$data->no_of_people}}
                                                </td>
                                                <td>{{date('d-M-Y', strtotime($data->check_in))}}</td>
                                                <td>{{date('d-M-Y', strtotime($data->check_out))}}</td>
                                                <td>
                                                    <a href="{{route('landlord.reservation.edit', base64_encode($data->id))}}" class="btn btn-info text-white btn-sm" title="Edit"><i class="fas fa-edit"></i></a>
                                                    <a href="{{route('landlord.reservation.chat', base64_encode($data->id))}}" class="btn btn-primary text-white btn-sm" title="Order Chat"><i class="fas fa-comment"></i></a>

                                                    @if($title == 'Pending')
                                                        <a href="{{route('landlord.reservation.edit_status', base64_encode($data->id))}}" class="btn btn-success text-white btn-sm" title="Approve"><i class="fas fa-check"></i></a>
                                                    @endif
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
                <div class="col-12">

                </div>
            </div>
        </div>
@endsection

@section('addScript')
    <!-- This is data table -->
    <script src="{{URL::to('/public/admin/')}}/assets/plugins/datatables/jquery.dataTables.min.js"></script>
    <script>
    $(document).ready(function() {
        $('#myTable').DataTable();
    });
    </script>
@endsection
