<div class="row">
    <div class="col-md-12">
        <form method="post" action="{{route('admin.settings.collectibles.editCategory')}}">
            @csrf
            <input type="hidden" name="type" value="{{base64_encode($data->id)}}">
            <div class="form-group">
                <label>Category</label>
                <input type="text" class="form-control" name="name" value="{{$data->name}}" required> 
            </div>
            <br><br>
            <button type="submit" class="btn btn-success waves-effect waves-light m-r-10">
                &nbsp;&nbsp;Update&nbsp;&nbsp;
            </button>
            <button type="reset" class="btn btn-inverse waves-effect waves-light">
                Cancel
            </button>
        </form>
    </div>
</div>