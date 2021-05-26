@extends('admin.includes.master')
@section('title', 'Statistics | Accommodation')
@section('content')

<div class="row">
    <!-- Column -->
    <div class="col-lg-3 col-md-6">
        <div class="card">
            <div class="card-body mb-0">
                <!-- Row -->
                <div class="row">
                    <div class="col-12 db-heading"><h2>2376</h2>
                        <h6>Members</h6></div>
                </div>
            </div>
        </div>
    </div>
    <!-- Column -->
    <div class="col-lg-3 col-md-6">
        <div class="card">
            <div class="card-body mb-0">
                <!-- Row -->
                <div class="row">
                    <div class="col-12 db-heading"><h2>2376</h2>
                        <h6>Listings</h6></div>
                </div>
            </div>
        </div>
    </div>
    <!-- Column -->
    <div class="col-lg-3 col-md-6">
        <div class="card">
            <div class="card-body mb-0">
                <!-- Row -->
                <div class="row">
                    <div class="col-12 db-heading"><h2>2376</h2>
                        <h6>Bookings</h6></div>

                </div>
            </div>
        </div>
    </div>
    <!-- Column -->
    <div class="col-lg-3 col-md-6">
        <div class="card">
            <div class="card-body mb-0">
                <!-- Row -->
                <div class="row">
                    <div class="col-12 db-heading"><h2>2376</h2>
                        <h6>Inquiries</h6></div>
                </div>
            </div>
        </div>
    </div>

    <div class="col-md-4">
        <div class="card card-default">
            <div class="card-header">
                <div class="card-actions">
                    <a class="" data-action="collapse"><i class="ti-minus"></i></a>
                    <a class="btn-minimize" data-action="expand"><i class="mdi mdi-arrow-expand"></i></a>
                    <a class="btn-close" data-action="close"><i class="ti-close"></i></a>
                </div>
                <h4 class="card-title m-b-0">Member Statistics</h4>
            </div>
            <div class="card-body collapse show">
                <div id="members-chart" class="ecomm-donute" style="height: 317px;"></div>
                <ul class="list-inline m-t-20 text-center">
                    <li >
                        <h6 class="text-muted"><i class="fa fa-circle text-info"></i> Pending</h65>
                        <h4 class="m-b-0">8500</h4>
                    </li>
                    <li>
                        <h6 class="text-muted"><i class="fa fa-circle text-success"></i> Approved</h6>
                        <h4 class="m-b-0">3630</h4>
                    </li>
                    <li>
                        <h6 class="text-muted"> <i class="fa fa-circle text-danger"></i> Rejected</h6>
                        <h4 class="m-b-0">4870</h4>
                    </li>
                </ul>
            </div>
        </div>
    </div>

    <div class="col-md-4">
        <div class="card card-default">
            <div class="card-header">
                <div class="card-actions">
                    <a class="" data-action="collapse"><i class="ti-minus"></i></a>
                    <a class="btn-minimize" data-action="expand"><i class="mdi mdi-arrow-expand"></i></a>
                    <a class="btn-close" data-action="close"><i class="ti-close"></i></a>
                </div>
                <h4 class="card-title m-b-0">Listing Statistics</h4>
            </div>
            <div class="card-body collapse show">
                <div id="listing-chart" class="ecomm-donute" style="height: 317px;"></div>
                <ul class="list-inline m-t-20 text-center">
                    <li >
                        <h6 class="text-muted"><i class="fa fa-circle text-info"></i> Pending</h65>
                        <h4 class="m-b-0">8500</h4>
                    </li>
                    <li>
                        <h6 class="text-muted"><i class="fa fa-circle text-success"></i> Completed</h6>
                        <h4 class="m-b-0">3630</h4>
                    </li>
                    <li>
                        <h6 class="text-muted"> <i class="fa fa-circle text-danger"></i> Cancelled</h6>
                        <h4 class="m-b-0">4870</h4>
                    </li>
                </ul>
            </div>
        </div>
    </div>

    <div class="col-md-4">
        <div class="card card-default">
            <div class="card-header">
                <div class="card-actions">
                    <a class="" data-action="collapse"><i class="ti-minus"></i></a>
                    <a class="btn-minimize" data-action="expand"><i class="mdi mdi-arrow-expand"></i></a>
                    <a class="btn-close" data-action="close"><i class="ti-close"></i></a>
                </div>
                <h4 class="card-title m-b-0">Booking Statistics</h4>
            </div>
            <div class="card-body collapse show">
                <div id="booking-chart" class="ecomm-donute" style="height: 317px;"></div>
                <ul class="list-inline m-t-20 text-center">
                    <li >
                        <h6 class="text-muted"><i class="fa fa-circle text-info"></i> Pending</h65>
                        <h4 class="m-b-0">8500</h4>
                    </li>
                    <li>
                        <h6 class="text-muted"><i class="fa fa-circle text-success"></i> Completed</h6>
                        <h4 class="m-b-0">3630</h4>
                    </li>
                    <li>
                        <h6 class="text-muted"> <i class="fa fa-circle text-danger"></i> Cancelled</h6>
                        <h4 class="m-b-0">4870</h4>
                    </li>
                </ul>
            </div>
        </div>
    </div>
</div>


@endsection


@section('addScript')
<script src="{{URL::to('/public/admin/')}}/assets/plugins/morrisjs/morris.min.js"></script>
<script type="text/javascript">
	$(function () {
    "use strict";

		Morris.Donut({
	        element: 'members-chart',
	        data: [{
	            label: "Pending",
	            value: 8500,

	        }, {
	            label: "Approved",
	            value: 3630
	        }, {
	            label: "Rejected",
	            value: 4870
	        }],
	        resize: true,
	        colors:['#1976d2', '#26dad2', '#ef5350']
	    });

	    Morris.Donut({
	        element: 'listing-chart',
	        data: [{
	            label: "Pending",
	            value: 8500,

	        }, {
	            label: "Publish",
	            value: 3630
	        }, {
	            label: "Reject",
	            value: 4870
	        }],
	        resize: true,
	        colors:['#1976d2', '#26dad2', '#ef5350']
	    });

	    Morris.Donut({
	        element: 'booking-chart',
	        data: [{
	            label: "Pending",
	            value: 8500,

	        }, {
	            label: "Completed",
	            value: 3630
	        }, {
	            label: "Cancelled",
	            value: 4870
	        }],
	        resize: true,
	        colors:['#1976d2', '#26dad2', '#ef5350']
	    });
	});
</script>
@endsection