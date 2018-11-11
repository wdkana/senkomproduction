<!DOCTYPE html>
<html>
<head>
 @include('template.head_home')
	<title></title>
</head>
<body>
 @include('layouts.nav_home')

  
 <div class="container">
   <section class="wthree-row w3-about py-5" style="margin-top: -7%">
		<div class="container py-md-4 mt-md-3">
			<h3 class="heading-agileinfo">Over View<span>Galeri Kegiatan</span></h3>
			<span class="w3-line black"></span>
			<div class="card-deck mt-md-5 pt-5">
				  <div class="card">
					<img src="{{url('public/img_senkom/img1.jpg')}}" class="img-fluid" alt="Card image cap">
					<div class="card-body w3ls-card">
					  <h5 class="card-title">Evakuasi korban Pesawat Lion Air Penerbangan JT – 610</h5>
					  <p class="card-text mb-3 ">Karawang, Kecelakaan Pesawat Lion Air Penerbangan JT – 610. Kecelakaan Pesawat Terbang Lion Air yang terjadi di Tanjung Pakis Kabupaten Karawang pada </p>
					</div>
					<div class="card-footer">
					  <small class="text-muted">Senin (29/10/18) </small>
					</div>
				  </div>
				  <div class="card">
					<img src="{{url('public/img_senkom/ada2.jpg')}}" class="img-fluid" alt="Card image cap">
					<div class="card-body w3ls-card">
					  <h5 class="card-title">Bakti sosial “Citarum Harum"</h5>
					   <p class="card-text mb-3 ">Bandung, Dalam rangka memperingati Hari Sumpah Pemuda Ke 90 Tahun 2018, SENKOM Mitra POLRI Kec. Cibeunying Kaler Kota Bandung bekerja sama dengan Koramil Cikutra 0618BS melaksanakan bakti sosial mensukseskan Satgas Citarum Harum yang merupakan program pemerintah dalam upaya merawat aliran sungai citarum, pada </p>
					</div>
					<div class="card-footer">
					  <small class="text-muted">Sabtu (27/10/18)</small>
					</div>
				  </div>
				  <div class="card">
					<img src="{{url('public/img_senkom/ada3.jpg')}}" class="img-fluid" alt="Card image cap">
					<div class="card-body w3ls-card">
					  <h5 class="card-title">Is Now the Time to Fix?</h5>
					   <p class="card-text mb-3">This is a longer card with supporting text below as a natural lead-in to additional content.</p>
					</div>
					<div class="card-footer">
					  <small class="text-muted">Last updated on May 18, 2018</small>
					</div>
				  </div>
				</div>
            </div>
        </section>
    </div>
</body>
<style type="text/css">
	.main {
  width: 500px;
  margin: 30px;
}
</style>
</html>