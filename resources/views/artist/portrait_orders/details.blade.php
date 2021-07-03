<div class="modal-header">
  <h5 class="modal-title" id="exampleModalLongTitle">Order#: <strong>{{$data->id}}</strong></h5>
  <button type="button" class="close" data-dismiss="modal" aria-label="Close">
    <span aria-hidden="true">×</span>
  </button>
</div>
<div class="modal-body">
  <div class="row">
    <div class="col-12">
        <img src="{{URL::to('/public/storage/art/order_attachment/')}}/{{$data->attachment}}" style="width:100%;">
    </div>
    <div class="col-12 mt-3">
        <h6>Requirments:</h6>
        <p>
          {{$data->requirements}}
        </p>
    </div>
  </div>
</div>