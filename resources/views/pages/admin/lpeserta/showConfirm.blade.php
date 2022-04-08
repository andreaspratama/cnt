<table class="table table-bordered">
    <tr>
        <th>Firstname</th>
        <td>{{$item->name}}</td>
    </tr>
    <tr>
        <th>No. Whatsapp</th>
        <td>{{$item->wa}}</td>
    </tr>
    <tr>
        <th>Email</th>
        <td>{{$item->email}}</td>
    </tr>
    <tr>
        <th>Status</th>
        <td>{{$item->status}}</td>
    </tr>
</table>
<div class="row">
    <div class="col-4">
        <a href="{{route('statusConf', $item->id)}}?status=Confirm" class="btn btn-success btn-block">
            Confirm
        </a>
    </div>
</div>