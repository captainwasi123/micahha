@extends('admin.includes.master')
@section('title', 'Add New | Products | Collectibles')
@section('content')

<div class="row">
    <div class="col-12">
        <div class="card">
            <div class="card-body">
                <h6 class="card-subtitle"><code>*</code> Fields are required.</h6>
                <form class="form-material m-t-10">
                    <div class="row">
                        <div class="col-md-3 m-b-30">
                            <h4 class="card-title">Feature Image</h4>
                            <input type="file" id="input-file-now" name="feature_img" class="featureimage" />
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-5">
                            <div class="form-group">
                                <label>Product Title <code>*</code></label>
                                <input type="text" class="form-control form-control-line" required> 
                            </div>
                        </div>
                        <div class="col-md-2">
                            <div class="form-group">
                                <label>Price <code>*</code></label>
                                <input type="number" class="form-control form-control-line" step="any" required> 
                            </div>
                        </div>

                        <div class="col-md-3">
                            <div class="form-group">
                                <label>Category <code>*</code></label>
                                <select class="form-control">
                                    <option>1</option>
                                    <option>2</option>
                                    <option>3</option>
                                    <option>4</option>
                                    <option>5</option>
                                </select> 
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-10">
                            <div class="form-group">
                                <label>Description</label>
                                <textarea class="form-control" rows="5"></textarea>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-4">
                            <h4 class="card-title">Gallery Images</h4>
                            <input class="form-control" name="file" id="galleryImages" type="file" multiple />
                        </div>
                    </div>
                    <div class="row p-t-10" id="galleryPreview"></div>

                    <div class="row m-t-40">
                        <div class="col-md-10 text-right">
                            <button type="submit" class="btn btn-primary">&nbsp;&nbsp;&nbsp;Save&nbsp;&nbsp;</button>&nbsp;&nbsp;&nbsp;
                            <button type="reset" class="btn btn-default">&nbsp;&nbsp;&nbsp;Cancel&nbsp;&nbsp;&nbsp;</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>

@endsection
@section('addStyle')
    <link rel="stylesheet" href="{{URL::to('/public/admin')}}/assets/plugins/dropify/dist/css/dropify.min.css">

@endsection
@section('addScript')
    <script src="{{URL::to('/public/admin')}}/assets/plugins/dropify/dist/js/dropify.min.js"></script>
    <script>
        $(document).ready(function() {
            // Basic
            $('.featureimage').dropify();

            // Multiple images preview in browser
            var imagesPreview = function(input, placeToInsertImagePreview) {

                if (input.files) {
                    var filesAmount = input.files.length;

                    for (i = 0; i < filesAmount; i++) {
                        var reader = new FileReader();

                        reader.onload = function(event) {
                            $(placeToInsertImagePreview).append('<div class="col-md-3"><img class="img-responsive" src="'+event.target.result+'"></div>');
                        }

                        reader.readAsDataURL(input.files[i]);
                    }
                }

            };

            $('#galleryImages').on('change', function() {
                imagesPreview(this, '#galleryPreview');
            });
        });
    </script>
@endsection