@extends('admin.includes.master')
@section('title', 'Inquiries | Accommodation')
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
                                <th>Name</th>
                                <th>Phone</th>
                                <th>Email</th>
                                <th>Category</th>
                                <th>Description</th>
                                <th>Inquiry to</th> 
                                <th>Timestamp</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td>1</td>
                                <td>Peter</td>
                                <td>12121212121</td>
                                <td><a href="mailto:peter@gmail.com">peter@gmail.com</a></td>
                                <td>Request a Tour</td>
                                <td><p class="cut-text" title="Situated at the most prime location of Kashmir point in Murree. Full secure, safe and peaceful surrounding . Majestic views from the apartment. All daily use amenities near by. All desi and continental food at the walking distance.">Situated at the most prime location of Kashmir point in Murree. Full secure, safe and peaceful surrounding . Majestic views from the apartment. All daily use amenities near by. All desi and continental food at the walking distance.</td>
                                <td>Khawaja house</td>
                                <td>29-May-2021 8:11 pm</td>
                            </tr>
                            <tr>
                                <td>2</td>
                                <td>Peter</td>
                                <td>12121212121</td>
                                <td><a href="mailto:peter@gmail.com">peter@gmail.com</a></td>
                                <td>Request a Tour</td>
                                <td><p class="cut-text" title="Situated at the most prime location of Kashmir point in Murree. Full secure, safe and peaceful surrounding . Majestic views from the apartment. All daily use amenities near by. All desi and continental food at the walking distance.">Situated at the most prime location of Kashmir point in Murree. Full secure, safe and peaceful surrounding . Majestic views from the apartment. All daily use amenities near by. All desi and continental food at the walking distance.</td>
                                <td>Khawaja house</td>
                                <td>29-May-2021 8:11 pm</td>
                            </tr>
                            <tr>
                                <td>3</td>
                                <td>Peter</td>
                                <td>12121212121</td>
                                <td><a href="mailto:peter@gmail.com">peter@gmail.com</a></td>
                                <td>Request a Tour</td>
                                <td><p class="cut-text" title="Situated at the most prime location of Kashmir point in Murree. Full secure, safe and peaceful surrounding . Majestic views from the apartment. All daily use amenities near by. All desi and continental food at the walking distance.">Situated at the most prime location of Kashmir point in Murree. Full secure, safe and peaceful surrounding . Majestic views from the apartment. All daily use amenities near by. All desi and continental food at the walking distance.</td>
                                <td>Khawaja house</td>
                                <td>29-May-2021 8:11 pm</td>
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