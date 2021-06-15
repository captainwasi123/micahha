<div class="row">
    <div class="col-md-12">
        <form method="post" action="{{route('admin.settings.collectibles.editSubCategory')}}">
            @csrf
            <input type="hidden" name="id" value="{{base64_encode($data->id)}}">
            <div class="form-group">
                <label>Sub Category</label>
                <input type="text" class="form-control" name="name" value="{{$data->name}}" required> 
            </div>
            <div class="form-group">
                <label>Category</label>
                <select class="form-control" name="cat_id" required>
                    <option value="">Select</option>
                    @foreach($cat as $val)
                        <option value="{{$val->id}}"
                            {{$val->id == $data->cat_id ? 'selected' : ''}}
                        >{{$val->name}}</option>
                    @endforeach
                </select> 
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