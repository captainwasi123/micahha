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
                                </div>
                            </div>
                        </div>
                        <div class="white_card_body">
                            <div class="QA_section">
                                <div class="white_box_tittle list_header">
                                    <div class="box_right d-flex lms_block">
                                        <div class="serach_field_2">
                                            <div class="search_inner">
                                                <form Active="#">
                                                    <div class="search_field">
                                                        <input type="text" placeholder="Search content here...">
                                                    </div>
                                                    <button type="submit"> <i class="ti-search"></i> </button>
                                                </form>
                                            </div>
                                        </div>
                                    </div>
                                </div>
        
                                <div class="QA_table mb_30">
                                    <!-- table-responsive -->
                                    <table class="table lms_table_active ">
                                        <thead>
                                            <tr>
                                                <th>S#</th>
                                                <th>List Name</th>
                                                <th>User Name</th>
                                                <th>Phone Number</th>
                                                <th>No of People</th>
                                                <th>Check-In</th>
                                                <th>Check-Out</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr>
                                                <td>1</td>
                                                <td><a href="{{route('landlord.listing.details')}}" data-toggle="tooltip" data-original-title="View Details">Khawaja house</a></td>
                                                <td><p class="cut-text" title="Murree, Khyber Pakhtunkhwa, Pakistan">Murree, Khyber Pakhtunkhwa, Pakistan</p></td>
                                                <td>$50.0</td>
                                                <td>
                                                    <p class="cut-text" title="">2</p>
                                                </td>
                                                <td>29-May-2021 8:11 pm</td>
                                                <td>29-May-2021 8:11 pm</td>
                                            </tr>
                                            <tr>
                                                <td>1</td>
                                                <td><a href="{{route('landlord.listing.details')}}" data-toggle="tooltip" data-original-title="View Details">Khawaja house</a></td>
                                                <td><p class="cut-text" title="Murree, Khyber Pakhtunkhwa, Pakistan">Murree, Khyber Pakhtunkhwa, Pakistan</p></td>
                                                <td>$50.0</td>
                                                <td>
                                                    <p class="cut-text" title="3">3.</p>
                                                </td>
                                                <td>29-May-2021 8:11 pm</td>
                                                <td>29-May-2021 8:11 pm</td>
                                            </tr>
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