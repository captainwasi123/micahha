@extends('admin.includes.master')
@section('title', 'Pending | Members | Accommodation')
@section('content')

<div class="row">
    <div class="col-12">
        <div class="card">
            <div class="card-body">
                <div class="table-responsive">
                    <table id="myTable" class="table table-bordered table-striped">
                        <thead>
                            <tr>
                                <th>S#</th>
                                <th style="width:35px">Image</th>
                                <th>Name</th>
                                <th>Phone</th>
                                <th>Email</th>
                                <th>Address</th>
                                <th>Reg. at</th>
                                <th>Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td>1</td>
                                <td style="width:35px"><img src="{{URL::to('/public/admin/')}}/assets/images/dp-placeholder.jpg" alt="user" class="thumbnail" /></td>
                                <td>Peter</td>
                                <td>12121212121</td>
                                <td><a href="mailto:peter@gmail.com">peter@gmail.com</a></td>
                                <td><p class="cut-text" title="Murree, Khyber Pakhtunkhwa, Pakistan">Murree, Khyber Pakhtunkhwa, Pakistan</p></td>
                                <td>29-May-2021 8:11 pm</td>
                                <td> 
                                	<a href="#" data-toggle="tooltip" data-original-title="Approve"> 
                                		<i class="fa fa-check text-success"></i> 
                                	</a>
                                	&nbsp;&nbsp;
                                    <a href="#" data-toggle="tooltip" data-original-title="Reject">
                                     	<i class="fa fa-close text-danger"></i> 
                                 	</a>
                             	</td>
                            </tr>
                            <tr>
                                <td>2</td>
                                <td style="width:35px"><img src="{{URL::to('/public/admin/')}}/assets/images/dp-placeholder.jpg" alt="user" class="thumbnail" /></td>
                                <td>Peter</td>
                                <td>12121212121</td>
                                <td><a href="mailto:peter@gmail.com">peter@gmail.com</a></td>
                                <td><p class="cut-text" title="Murree, Khyber Pakhtunkhwa, Pakistan">Murree, Khyber Pakhtunkhwa, Pakistan</p></td>
                                <td>29-May-2021 8:11 pm</td>
                                <td> 
                                    <a href="#" data-toggle="tooltip" data-original-title="Approve"> 
                                        <i class="fa fa-check text-success"></i> 
                                    </a>
                                    &nbsp;&nbsp;
                                    <a href="#" data-toggle="tooltip" data-original-title="Reject">
                                        <i class="fa fa-close text-danger"></i> 
                                    </a>
                                </td>
                            </tr>
                            <tr>
                                <td>3</td>
                                <td style="width:35px"><img src="{{URL::to('/public/admin/')}}/assets/images/dp-placeholder.jpg" alt="user" class="thumbnail" /></td>
                                <td>Peter</td>
                                <td>12121212121</td>
                                <td><a href="mailto:peter@gmail.com">peter@gmail.com</a></td>
                                <td><p class="cut-text" title="Murree, Khyber Pakhtunkhwa, Pakistan">Murree, Khyber Pakhtunkhwa, Pakistan</p></td>
                                <td>29-May-2021 8:11 pm</td>
                                <td> 
                                    <a href="#" data-toggle="tooltip" data-original-title="Approve"> 
                                        <i class="fa fa-check text-success"></i> 
                                    </a>
                                    &nbsp;&nbsp;
                                    <a href="#" data-toggle="tooltip" data-original-title="Reject">
                                        <i class="fa fa-close text-danger"></i> 
                                    </a>
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

@section('addScript')
	<!-- This is data table -->
    <script src="{{URL::to('/public/admin/')}}/assets/plugins/datatables/jquery.dataTables.min.js"></script>
    <script>
    $(document).ready(function() {
        $('#myTable').DataTable();
    });
    </script>
@endsection