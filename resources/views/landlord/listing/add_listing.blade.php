@section('addStyle')
<link href="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/css/select2.min.css" rel="stylesheet" />
@endsection
@extends('landlord.includes.master')
@section('title', $title)
@section('content')

<div class="row">
    <div class="col-12">
        <div class="card">
            <div class="box_header m-0 mb-3">
                <div class="main-title">
                    <h3 class="m-0">Add Listing</h3>
                </div>
            </div>
            <div class="card-body">
            	<div class="form-row">
                    <div class="form-group col-12 mt-3">
                        <h6 class="card-subtitle mb-2 mb-2">Feature Image<code>*</code></h6>
                        <div class="form-group mb-0">
                            <img id="profileImage" src="{{URL::to('/public/user/')}}/img_placeholder.jpg">
                            <input type="file" class="form-control" name="main_img" id="imageUpload" style="display: none;" accept=".jpeg , .jpg">
                        </div>
                    </div>
            		<div class="form-group col-6 mt-3">
            			<h6 class="card-subtitle mb-2 mb-2">Title<code>*</code></h6>
                        <div class="form-group mb-0">
                            <input type="text" class="form-control" name="title" id="title">
                        </div>
            		</div>
            		<div class="form-group col-6 mt-3">
            			<h6 class="card-subtitle mb-2 mb-2">Location<code>*</code></h6>
                        <div class="form-group mb-0">
                            <input type="text" class="form-control" name="location" id="location">
                        </div>
            		</div>
            		<div class="form-group col-4 mt-3">
            			<h6 class="card-subtitle mb-2 mb-2">Price<code>*</code></h6>
                        <div class="form-group mb-0">
                            <input type="number" class="form-control" name="price" id="price">
                        </div>
            		</div>
            		<div class="form-group col-4 mt-3">
            			<h6 class="card-subtitle mb-2 mb-2">Amenities<code>*</code></h6>
                        <div class="form-group mb-0">
                            <select class="form-control form-control-lg mt-3 js-example-basic-multiple" name="states[]" multiple="multiple">
                              <option value="AL">Alabama</option>
                                ...
                              <option value="WY">Wyoming</option>
                            </select>
                        </div>
            		</div>
            		<div class="form-group col-4 mt-3">
            			<h6 class="card-subtitle mb-2 mb-2">Publish Duration<code>*</code></h6>
                        <div class="form-group mb-0">
                            <select class="form-control" name="listing_options" >
                            	<option>Select...</option>
                            	<option>15 days</option>
                            	<option>30 days</option>
                            	<option>45 days</option>
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
                fieldName:        'fileUpload[]',
                directUpload : {
                    status: true,
                    loaderIcon: '<i class="fas fa-sync fa-spin"></i>',
                    url: '../c.php',
                    additionalParam : {
                        name : 'My Name'
                    },
                    success : function(data, textStatus, jqXHR){
                    },
                    error : function(jqXHR, textStatus, errorThrown){
                    }
                }
            });
        });
    </script>
<script>
$(document).ready(function() {
    $('.js-example-basic-multiple').select2();
});
</script>
@endsection