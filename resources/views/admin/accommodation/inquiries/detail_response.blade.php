<div class="row">
    <div class="col-md-6 col-xs-6 b-b b-r"> <strong>Name</strong>
        <br>
        <p class="text-muted m-b-0"><i class="mdi mdi-email-outline"></i> {{$data->username}}</p>
    </div>
    <div class="col-md-6 col-xs-6 b-b b-r"> <strong>Email</strong>
        <br>
        <p class="text-muted m-b-0"><i class="mdi mdi-email-outline"></i> {{$data->email}}</p>
    </div>
</div>
<div class="row p-t-10">
    <div class="col-md-6 col-xs-6 b-r"> <strong>Subject</strong>
        <br>
        <p class="text-muted m-b-0"><i class="mdi mdi-cellphone-android"></i> {{empty($data->type) ? '' : $data->type->name}}</p>
    </div>
    <div class="col-md-6 col-xs-6 b-r"> <strong>Inquiry To</strong>
        <br>
        <p class="text-muted m-b-0"><i class="fa fa-home"></i> {{$data->listing->title}}</p>
    </div>
</div>
<hr>
<p class="m-t-30">
    <strong>Description:</strong><br>
    {{$data->details}}
</p>