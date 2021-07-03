@extends('artist.includes.master')
@section('title', 'Processing | Orders | Portrait Customization')
@section('content')
<div class="container-fluid p-0">
            <div class="row justify-content-center">
                <div class="col-lg-12">
                    <div class="white_card card_height_100 mb_30">
                        <div class="white_card_header">
                            <div class="box_header m-0">
                                <div class="main-title">
                                    <h3 class="m-0">Processing | Orders | Portrait Customization</h3>
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
                        <div class="white_card_body pt-3">
                            <div class="QA_section">
                                <div class="QA_table mb_10">
                                    <!-- table-responsive -->
                                    <table class="table">
                                        <thead>
                                            <tr>
                                                <th>S#</th>
                                                <th>Order#</th>
                                                <th>Buyer</th>
                                                <th>Products</th>
                                                <th>Total Price</th>
                                                <th>Commission</th>
                                                <th>Earning</th>
                                                <th>Order at</th>
                                                <th>Action</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                        @php $s=1; @endphp
                                        @foreach($data as $val) 
                                            <tr>
                                                <td>{{$s}}</td>
                                                <td>{{$val->id}}</td>
                                                <td>
                                                    <a href="{{URL::to('/admin/art/members/profile/'.base64_encode($val->artist_id))}}" target="_blank" data-toggle="tooltip" data-original-title="View Profile">
                                                        {{empty($val->buyer) ? '' : $val->buyer->first_name}} 
                                                        {{empty($val->buyer) ? '' : $val->buyer->last_name}} 
                                                    </a>
                                                </td>
                                                <td>
                                                    <p>
                                                        <img src="{{URL::to('/public/storage/art/portfolio/')}}/{{$val->product->image}}"  width="40px" />
                                                        {{$val->product->title}}
                                                    </p>
                                                </td>
                                                <td>
                                                    <strong>{{'$'.number_format($val->price, 2)}}</strong> 
                                                </td>
                                                <td>
                                                    <strong>{{'$'.number_format((($val->price/100)*$com), 2)}}</strong> 
                                                </td>
                                                <td>
                                                    <strong>{{'$'.number_format(($val->price - (($val->price/100)*$com)), 2)}}</strong> 
                                                </td>
                                                <td>{{date('d-M-Y h:i a', strtotime($val->created_at))}}</td>
                                                <td>
                                                    <a href="javascript:void(0)" title="Deliver" class="btn btn-sm btn-primary artistPOrderDeliver" data-id="{{base64_encode($val->id)}}">
                                                        <span class="fa fa-check"></span>
                                                    </a>
                                                    &nbsp;
                                                    <a href="javascript:void(0)" title="Buyer Details" class="btn btn-sm btn-info artistPOrderDetails" data-id="{{base64_encode($val->id)}}">
                                                        <span class="fa fa-list"></span>
                                                    </a>
                                                </td>
                                            </tr>
                                            @php $s++; @endphp
                                        @endforeach
                                        @if(count($data) == '0')
                                            <tr>
                                                <td colspan="9">No Orders Found.</td>
                                            </tr>
                                        @endif    
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

    <div class="modal fade bd-example-modal-lg" id="orderDetails" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
      <div class="modal-dialog modal-lg">
        <div class="modal-content" id="order_content">
            
        </div>
      </div>
    </div>

    <div class="modal fade bd-example-modal-lg" id="orderDeliver" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
      <div class="modal-dialog modal-lg">
        <div class="modal-content" id="deliver_content">
            <div class="modal-header">
              <h5 class="modal-title" id="exampleModalLongTitle">Order#: <strong id="order_no"></strong></h5>
              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">×</span>
              </button>
            </div>
            <div class="modal-body">
              <div class="row">
                <div class="col-12">
                    
                </div>
              </div>
            </div>
        </div>
      </div>
    </div>

	<!-- This is data table -->
    <script src="{{URL::to('/public/admin/')}}/assets/plugins/datatables/jquery.dataTables.min.js"></script>
    <script src="https://opoloo.github.io/jquery_upload_preview/assets/js/jquery.uploadPreview.min.js"></script>
    <script type="text/javascript">
    $(function(){    
        $(document).on('click','#profileImage', function(e) {
            $("#imageUpload").click();
        });
        function readURL(input) {
      if (input.files && input.files[0]) {
        var fileInput = document.getElementById('imageUpload'); 
        var filePath = fileInput.value; 
        var allowedExtensions =  
                        /(jpeg|jpg)$/i; 
                   
                if (!allowedExtensions.exec(filePath)) { 
                    $('#file_error').append('File format is not supported, Please upload a file in JPEG or JPG format');
                    $('#submit').attr('disabled', true);
                    fileInput.value = ''; 
                    return false; 
                }else{ 
                    $('#file_error').empty();
                    $('#submit').attr('disabled', false);
                }


        var reader = new FileReader();
        
        reader.onload = function(e) {
          $('#profileImage').attr('src', e.target.result);
        }
        
        reader.readAsDataURL(input.files[0]); // convert to base64 string
      }
    }

    $(document).on('change', '#imageUpload', function() {
      readURL(this);
    });


    })
    </script>
    <script>
    $(document).ready(function() {

        $('#myTable').DataTable();

        $(document).on('click', '.artistPOrderDetails', function(){
            var id = $(this).data('id');
            $.get( "{{URL::to('/artist/portrait_orders/details')}}/"+id, function( data ) {
                $('#order_content').html(data);
                $('#orderDetails').modal('show');
            });
        });

        $(document).on('click', '.artistPOrderDeliver', function(){
            var id = $(this).data('id');
            $.get( "{{URL::to('/artist/portrait_orders/deliver')}}/"+id, function( data ) {
                $('#deliver_content').html(data);
                $('#orderDeliver').modal('show');
            });
        });
    });
    </script> 
@endsection