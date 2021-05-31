@extends('landlord.includes.master')
@section('title', $title)
@section('content')

<div class="row">
    <div class="col-12">
        <div class="card">
            <div class="card-body">
            	<div class="form-row">
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
            			<h6 class="card-subtitle mb-2 mb-2">Availabilities<code>*</code></h6>
                        <div class="form-group mb-0">
                            <input type="date" class="form-control" name="availabilities" id="availabilities">
                        </div>
            		</div>
            		<div class="form-group col-4">
            			<h6 class="card-subtitle mb-2 mb-2">Amenities<code>*</code></h6>
                        <div class="form-group mb-0">
                            <select class="form-control" name="amenities" >
                            	<option>Select...</option>
                            	<option>option 1</option>
                            	<option>option 2</option>
                            	<option>option 3</option>
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
            		<div class="form-group col-4">
            			<h6 class="card-subtitle mb-2 mb-2">Main Image<code>*</code></h6>
                        <div class="form-group mb-0">
                            <input type="file" class="form-control" name="main_img">
                        </div>
            		</div>
            		<div class="form-group col-4">
            			<h6 class="card-subtitle mb-2 mb-2">Picture Attachment</h6>
                        <div class="form-group mb-0">
                            <input type="file" class="form-control" name="imgs[]">
                        </div>
            		</div>
            	</div>
            	<button type="submit" class="btn btn-primary">Submit</button>
            </div>
        </div>
    </div>
</div>
@endsection