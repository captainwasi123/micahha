@section('addStyle')
<link href="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/css/select2.min.css" rel="stylesheet" />
@endsection
@extends('landlord.includes.master')
@section('title', $title)
@section('content')

<div class="row">
    <div class="col-12">
        <div class="card">
            <div class="card-body">
            	<div class="form-row">
                    <div class="form-group col-12">
                        <h6 class="card-subtitle mb-2 mb-2">Main Image<code>*</code></h6>
                        <div class="form-group mb-0">
                            <img id="profileImage" src="{{URL::to('/public/user/')}}/img_placeholder.jpg" style="width:150px">
                            <input type="file" class="form-control" name="main_img" id="imageUpload" style="display: none;" accept=".jpeg , .jpg">
                        </div>
                    </div>
            		<div class="form-group col-4">
            			<h6 class="card-subtitle mb-2 mb-2">Title<code>*</code></h6>
                        <div class="form-group mb-0">
                            <input type="text" class="form-control" name="title" id="title" placeholder="enter title">
                        </div>
            		</div>
            		<div class="form-group col-4">
            			<h6 class="card-subtitle mb-2 mb-2">Location<code>*</code></h6>
                        <div class="form-group mb-0">
                            <input type="text" class="form-control" name="location" id="location" placeholder="enter location">
                        </div>
            		</div>
            		<div class="form-group col-4">
            			<h6 class="card-subtitle mb-2 mb-2">Price<code>*</code></h6>
                        <div class="form-group mb-0">
                            <input type="number" class="form-control" name="price" id="price" placeholder="enter price">
                        </div>
            		</div>
            		<div class="form-group col-4">
            			<h6 class="card-subtitle mb-2 mb-2">Amenities<code>*</code></h6>
                        <div class="form-group mb-0">
                            <select class="form-control js-example-basic-multiple" name="states[]" multiple="multiple">
                              <option value="AL">Alabama</option>
                                ...
                              <option value="WY">Wyoming</option>
                            </select>
                        </div>
            		</div>
            		<div class="form-group col-4">
            			<h6 class="card-subtitle mb-2 mb-2">Listing options<code>*</code></h6>
                        <div class="form-group mb-0">
                            <select class="form-control" name="listing_options" >
                            	<option>Select...</option>
                            	<option>15 days</option>
                            	<option>30 days</option>
                            	<option>45 days</option>
                            </select>
                        </div>
            		</div>
            		<div class="form-group col-4">
            			<h6 class="card-subtitle mb-2 mb-2">Description<code>*</code></h6>
                        <div class="form-group mb-0">
                            <textarea class="form-control" name="description" id="description" placeholder="enter description"></textarea>
                        </div>
            		</div>
            	</div>
                <div class="form-group">
                    <h6 class="card-subtitle mb-2 mb-2">Picture Attachment</h6>
                    <div class="col-12">
                        <div class="row">
                            <div id="coba"></div>
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