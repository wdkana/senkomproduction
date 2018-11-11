<div class="" style="background: #f7f7f7;opacity:0.9;">
	<div class="container">
		<br/>
		@foreach($data_berita as $datas)
		<div class="konten" style="margin-top:5px">
			<i class="ion-ios-contact"></i>
			<span class="title">
				<b>{{$datas->callsign}} - {{$datas->tlp}}</b>
			</span>
			<p style="float:right">{{$datas->tgl}} - {{$datas->jam}}</p>
			<p>{{$datas->pesan}}</p>
		</div>
		<br/>
		@endforeach
	</div>
</div>	

