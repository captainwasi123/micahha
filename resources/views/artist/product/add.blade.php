@extends('artist.includes.master')
@section('title', $title)
@section('content')

<div class="row">
    <div class="col-12">
        <form method="post" action="{{route('artist.product.insert')}}" enctype="multipart/form-data">
            @csrf
            <div class="card">
                <div class="box_header m-0 mb-3">
                    <div class="main-title">
                        <h3 class="m-0">Add Product</h3>
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
                <div class="card-body">
                	<div class="form-row">
                        <div class="form-group col-md-12 mt-3">
                            <h6 class="card-subtitle">Art Image<code>*</code></h6>
                            <span style="font-size: 11px;" class="mb-2">Please Upload high resolution image of your art.</span>
                            <div class="form-group mb-0 mt-3">
                                <img id="profileImage" src="{{URL::to('/public/user/')}}/img_placeholder.jpg">
                                <input type="file" class="form-control" name="main_img" id="imageUpload" style="display: none;" accept=".jpeg ,.png, .jpg" required>
                            </div>
                        </div>
                		<div class="form-group col-md-8 mt-3">
                			<h6 class="card-subtitle mb-2 mb-2">Title<code>*</code></h6>
                            <div class="form-group mb-0">
                                <input type="text" class="form-control" name="title" id="title" required>
                            </div>
                		</div>
                        <div class="col-md-8">
                            <hr>
                        </div>
                        <div class="col-md-4"></div>

                        <div class="form-group col-md-3 mt-3">
                            <h6 class="card-subtitle mb-2 mb-2">Dimension (px)<code>*</code></h6>
                            <div class="form-group mb-0 half_form float-right">
                                <input type="number" class="form-control" name="width" placeholder="Width" required>
                            </div>
                            <div class="form-group mb-0 half_form float-left">
                                <input type="number" class="form-control" name="height" placeholder="Height" required>
                            </div>
                        </div>
                        <div class="form-group col-md-2 col-xs-8 mt-3">
                            <h6 class="card-subtitle mb-2 mb-2">Price<code>*</code></h6>
                            <div class="form-group mb-0">
                                <input type="number" class="form-control" name="price" id="price" required>
                            </div>
                        </div>
                        <div class="form-group col-md-3 mt-3">
                            <h6 class="card-subtitle mb-2 mb-2">Category<code>*</code></h6>
                            <div class="form-group mb-0">
                                <select class="form-control" name="category" >
                                    <option value="">Select...</option>
                                    @foreach($categories as $val)
                                        <option value="{{$val->id}}">{{$val->name}}</option>
                                    @endforeach
                                </select>
                            </div>
                        </div>
                        <div class="col-md-8">
                            <hr>
                        </div>
                        <div class="col-md-4"></div>
                		<div class="form-group col-md-8 mt-3">
                			<h6 class="card-subtitle mb-2 mb-2">Description<code>*</code></h6>
                            <div class="form-group mb-0">
                                <textarea class="form-control" name="description" id="description" rows="5"></textarea>
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
                    /(jpeg|png|jpg)$/i; 
               
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
@endsection