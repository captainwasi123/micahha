@section('addStyle')
<link href="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/css/select2.min.css" rel="stylesheet" />
@endsection
@extends('landlord.includes.master')
@section('title', $title)
@section('content')

<div class="row">
    <div class="col-12">
        <form method="post" action="{{route('landlord.listing.insert')}}" enctype="multipart/form-data">
            @csrf
            <div class="card">
                <div class="box_header m-0 mb-3">
                    <div class="main-title">
                        <h3 class="m-0">Add Listing</h3>
                    </div>
                </div>
                <div class="card-body">
                	<div class="form-row">
                        <div class="form-group col-md-12 mt-3">
                            <h6 class="card-subtitle mb-2 mb-2">Feature Image<code>*</code></h6>
                            <div class="form-group mb-0">
                                <img id="profileImage" src="{{URL::to('/public/user/')}}/img_placeholder.jpg">
                                <input type="file" class="form-control" name="main_img" id="imageUpload" style="display: none;" accept=".jpeg , .jpg" required>
                            </div>
                        </div>
                		<div class="form-group col-md-8 mt-3">
                			<h6 class="card-subtitle mb-2 mb-2">Title<code>*</code></h6>
                            <div class="form-group mb-0">
                                <input type="text" class="form-control" name="title" id="title" required>
                            </div>
                		</div>
                		<div class="form-group col-md-2 col-xs-8 mt-3">
                			<h6 class="card-subtitle mb-2 mb-2">Price<code>*</code></h6>
                            <div class="form-group mb-0">
                                <input type="number" class="form-control" name="price" id="price">
                            </div>
                		</div>
                        <div class="form-group col-md-2 col-xs-4 mt-3">
                            <h6 class="card-subtitle mb-2 mb-2">Price Unit</h6>
                            <div class="form-group mb-0">
                                <select class="form-control" name="price_unit" >
                                    <option>/ Night</option>
                                    <option>/ Month</option>
                                </select>
                            </div>
                        </div>
                        <div class="col-12">
                            <hr>
                        </div>
                		<div class="form-group col-md-4 mt-3">
                			<h6 class="card-subtitle mb-2 mb-2">Address<code>*</code></h6>
                            <div class="form-group mb-0">
                                <input type="text" class="form-control" name="address" required>
                            </div>
                		</div>
                        <div class="form-group col-md-3 mt-3">
                            <h6 class="card-subtitle mb-2 mb-2">City<code>*</code></h6>
                            <div class="form-group mb-0">
                                <input type="text" class="form-control" name="city" required>
                            </div>
                        </div>
                        <div class="form-group col-md-3 mt-3">
                            <h6 class="card-subtitle mb-2 mb-2">State / Province<code>*</code></h6>
                            <div class="form-group mb-0">
                                <input type="text" class="form-control" name="state" required>
                            </div>
                        </div>
                        <div class="form-group col-md-2 mt-3">
                            <h6 class="card-subtitle mb-2 mb-2">Zip / Postal Code<code>*</code></h6>
                            <div class="form-group mb-0">
                                <input type="text" class="form-control" name="post_code" required>
                            </div>
                        </div>
                        <div class="form-group col-md-4 mt-3">
                            <h6 class="card-subtitle mb-2 mb-2">Country<code>*</code></h6>
                            <div class="form-group mb-0">
                                <select class="form-control" name="country" >
                                    <option value="">Select...</option>
                                    @foreach($countries as $val)
                                        <option value="{{$val->id}}">{{$val->country}}</option>
                                    @endforeach
                                </select>
                            </div>
                        </div>
                        <div class="col-md-4"></div>
                        <div class="form-group col-md-2 mt-3">
                            <h6 class="card-subtitle mb-2 mb-2">Property Type<code>*</code></h6>
                            <div class="form-group mb-0">
                                <select class="form-control" name="property_type" >
                                    <option value="">Select...</option>
                                    @foreach($propertyType as $val)
                                        <option value="{{$val->id}}">{{$val->name}}</option>
                                    @endforeach
                                </select>
                            </div>
                        </div>
                        <div class="form-group col-md-2 mt-3">
                            <h6 class="card-subtitle mb-2 mb-2">Publish Duration<code>*</code></h6>
                            <div class="form-group mb-0">
                                <select class="form-control" name="publish_duration" >
                                    <option value="">Select...</option>
                                    <option value="15">15 days</option>
                                    <option value="30">1 month</option>
                                    <option value="90">3 months</option>
                                </select>
                            </div>
                        </div>
                        <div class="col-12">
                            <hr>
                        </div>
                        <div class="form-group col-md-12 mt-3">
                            <h6 class="card-subtitle mb-2 mb-2">Amenities<code>*</code></h6>
                            <div class="form-group mb-0">
                                <select class="form-control form-control-lg mt-3 js-example-basic-multiple" name="amenities[]" multiple="multiple">
                                    @foreach($amenities as $val)
                                        <option value="{{$val->id}}">{{$val->name}}</option>
                                    @endforeach
                                </select>
                            </div>
                        </div>
                		<div class="form-group col-12 mt-3">
                			<h6 class="card-subtitle mb-2 mb-2">Description<code>*</code></h6>
                            <div class="form-group mb-0">
                                <textarea class="form-control" name="description" id="description" rows="5"></textarea>
                            </div>
                		</div>
                	</div>
                    <div class="form-group mt-3">
                        <h6 class="card-subtitle mb-2 mb-2">Gallery Images</h6>
                        <div class="col-12 p-0">
                            <div class="row" id="coba">
                            </div>
                        </div>
                    </div>
                	<button type="submit" class="btn btn-primary">Submit</button>
                </div>
            </div>
        </form>
    </div>
</div>
@endsection

@section('addScript')
<script src="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/js/select2.min.js"></script>
<script type="text/javascript" src="{{URL::to('/public/user/')}}/spartan-multi-image-picker.js"></script>
<script type="text/javascript">
$(function(){    
    $("#profileImage").click(function(e) {
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

$("#imageUpload").change(function() {
  readURL(this);
});


})
</script>
<script type="text/javascript">
        $(function(){

            $("#coba").spartanMultiImagePicker({
                fieldName:        'fileUpload[]'
            });
        });
    </script>
<script>
$(document).ready(function() {
    $('.js-example-basic-multiple').select2();
});
</script>
@endsection