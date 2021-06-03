@extends('landlord.includes.master')
@section('title', $title)
@section('content')

<div class="row">
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
                            <div class="card-body">
                                <form method="post" enctype="multipart/form-data">
                                    @csrf
                                    <div class="form-row">
                                        <div class="form-group col-md-12">
                                            <div class="form-group mb-3 profileImageBlock">
                                                <img id="profileImage" class="profile_picture" src="{{URL::to('/public/storage/users/'.Auth::user()->profile_image)}}" onerror="this.src = '{{URL::to('/public/user/img/')}}/user.jpg';">
                                                <span class="ti-pencil-alt" id="profilePicIcon"></span>
                                                <input type="file" class="form-control" name="main_img" id="imageUpload" style="display: none;" accept=".jpeg , .jpg">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="form-row mt-2">
                                        <div class="form-group col-md-4">
                                            <label for="">First Name</label>
                                            <input type="text" class="form-control" name="first_name" value="{{Auth::user()->first_name}}" required>
                                        </div>
                                        <div class="form-group col-md-4">
                                            <label for="">Last Name</label>
                                            <input type="text" class="form-control" name="last_name" value="{{Auth::user()->last_name}}" required>
                                        </div>
                                    </div>
                                    <div class="form-row mt-2">
                                        <div class="form-group col-md-5">
                                            <label for="">Email</label>
                                            <input type="email" class="form-control" disabled value="{{Auth::user()->email}}" required>
                                        </div>
                                        <div class="form-group col-md-3">
                                            <label for="">Phone Number</label>
                                            <input type="text" class="form-control" name="phone" value="{{Auth::user()->phone}}">
                                        </div>
                                    </div>
                                    <div class="form-row mt-2">
                                        <div class="form-group col-md-4">
                                            <label for="">Address</label>
                                            <input type="text" class="form-control" name="address" value="{{Auth::user()->address}}">
                                        </div>
                                        <div class="form-group col-md-4">
                                            <label for="">Country</label>
                                            <select class="form-control" name="country" required>
                                                <option value="">Select</option>
                                                @foreach($countries as $val)
                                                    <option value="{{$val->id}}"
                                                        {{Auth::user()->country_id == $val->id ? 'selected' : ''}}
                                                    >{{$val->country}}</option>
                                                @endforeach
                                            </select>
                                        </div>
                                    </div>
                                    <div class="form-row mt-2">
                                        <div class="form-group col-md-3">
                                            <label for="">Sunrub/City</label>
                                            <input type="text" class="form-control" name="city" value="{{Auth::user()->city}}">
                                        </div>
                                        <div class="form-group col-md-3">
                                            <label for="">State / Province</label>
                                            <input type="text" class="form-control" name="state" value="{{Auth::user()->state}}">
                                        </div>
                                        <div class="form-group col-md-2">
                                            <label for="">Zip / Postal Code</label>
                                            <input type="text" class="form-control" name="post_code" value="{{Auth::user()->post_code}}">
                                        </div>
                                    </div>
                                    <button type="submit" class="btn btn-primary mt-3">Update</button>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
</div>
@endsection
@section('addScript')
<script type="text/javascript">
$(document).ready(function(){    
    $(document).on('click', '#profilePicIcon', function() {
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

});
</script>
@endsection