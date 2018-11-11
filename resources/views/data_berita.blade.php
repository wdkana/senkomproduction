@foreach($datas as $data)
<p><i class="ion-ios-list-outline"></i> {{$data->callsign}} - {{$data->tlp}}
<br/>
{{$data->pesan}}</p>
@endforeach