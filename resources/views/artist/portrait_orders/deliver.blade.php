<form method="post" action="{{route('artist.portrait_orders.deliver.submit')}}" enctype="multipart/form-data">
  @csrf
  <input type="hidden" name="oid" value="{{base64_encode($data->id)}}">
  <div class="modal-header">
    <h5 class="modal-title" id="exampleModalLongTitle">Order#: <strong>{{$data->id}}</strong></h5>
    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
      <span aria-hidden="true">×</span>
    </button>
  </div>
  <div class="modal-body">
      <div class="row">
        <div class="col-6">
            <img src="{{URL::to('/public/storage/art/order_attachment/')}}/{{$data->attachment}}" style="width:100%;">
        </div>
        <div class="col-6">
            <h6 class="card-subtitle">Portrait Attachment<code>*</code></h6>
            <span style="font-size: 11px;" class="mb-2">Please Upload high resolution image of your art.</span>
            <div class="form-group mb-0 mt-3">
                <img id="profileImage" src="{{URL::to('/public/user/')}}/img_placeholder.jpg">
                <input type="file" class="form-control" name="main_img" id="imageUpload" style="display: none;" accept=".jpeg , .jpg" required>
            </div>
        </div>
      </div>
      <div class="">
        <div class="col-12 mt-3">
            <h6>Requirments:</h6>
            <p>
              {{$data->requirements}}
            </p>
        </div>
      </div>
  </div>
  <div class="modal-footer">
    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
    <button type="submit" class="btn btn-primary">Deliver</button>
  </div>
</form>