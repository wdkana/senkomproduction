<!DOCTYPE html>
<html>
<head>
   @include('template.head_home')
</head>

<body>

<!--==========================
Header
============================-->
<header id="header">
  <div class="container-fluid">

    <div id="logo" class="pull-left">
      <!--<h1><a href="#intro" class="scrollto">Senkom Polri</a></h1>-->
      <!-- Uncomment below if you prefer to use an image logo -->
      <a href="#intro"><img src="{{url('public/web/img/logosenkom.png')}}" width="40" alt="" title="" /></a>
    </div>

    <nav id="nav-menu-container">
      <ul class="nav-menu">
        <li class="menu-active"><a href="#intro">Home</a></li>
        <li><a href="#berita">Berita</a></li>
        <li><a href="./pemantauan">Pemantauan</a></li>
        <li><a href="#galeri">Galeri</a></li>
        <li class="menu-has-children"><a href="#!">Tentang Senkom</a>
          <ul>
            <li><a href="#visimisi">Visi &amp; Misi</a></li>
            <li><a href="#kontak">Kontak</a></li>
          </ul>
        </li>
      </ul>
    </nav><!-- #nav-menu-container -->
  </div>
</header><!-- #header -->

<!--==========================
Intro Section
============================-->
<section id="intro">
  <div class="intro-container">
    <div id="introCarousel" class="carousel  slide carousel-fade" data-ride="carousel">

      <ol class="carousel-indicators"></ol>

      <div class="carousel-inner" role="listbox">

        <div class="carousel-item active">
          <div class="carousel-background"><img src="{{url('public/web/img/intro-carousel/slider-image-1.jpg')}}" alt=""></div>
          <div class="carousel-container">
            <div class="carousel-content">
              <h2>Handal &amp; Profesional</h2>
              <p> membantu mewujudkan keamanaan dan ketertiban nasional melalui peningkatan kesadaran masyarakat</p>
              <a href="#berita" class="btn-get-started scrollto">Kirim Berita</a>
            </div>
          </div>
        </div>

        <div class="carousel-item">
          <div class="carousel-background"><img src="{{url('public/web/img/intro-carousel/slider-image-2.jpg')}}" alt=""></div>
          <div class="carousel-container">
            <div class="carousel-content">
              <h2>Memberikan Informasi</h2>
              <p>senkom selalu memberikan informasi kepada aparat berwajib termasuk juga Pemerintah di manapun anggota Senkom berada</p>
              <a href="#berita" class="btn-get-started scrollto">Kirim Berita</a>
            </div>
          </div>
        </div>

        <div class="carousel-item">
          <div class="carousel-background"><img src="{{url('public/web/img/intro-carousel/slider-image-3.jpg')}}" alt=""></div>
          <div class="carousel-container">
            <div class="carousel-content">
              <h2>Membangun kesadaran</h2>
              <p>memperluas peran masyarakat dalam ikut membantu pemerintah dan Polri guna menciptakan negara yang aman</p>
              <a href="#berita" class="btn-get-started scrollto">Kirim Berita</a>
            </div>
          </div>
        </div>

      </div>

      <a class="carousel-control-prev" href="#introCarousel" role="button" data-slide="prev">
        <span class="carousel-control-prev-icon ion-chevron-left" aria-hidden="true"></span>
        <span class="sr-only">Previous</span>
      </a>

      <a class="carousel-control-next" href="#introCarousel" role="button" data-slide="next">
        <span class="carousel-control-next-icon ion-chevron-right" aria-hidden="true"></span>
        <span class="sr-only">Next</span>
      </a>

    </div>
  </div>
</section><!-- #intro -->

<main id="main">

<!--==========================
Contact Section
============================-->
<section id="contact" class="section-bg wow fadeInUp">


    <div class="row about-cols offset-1">

      <div class="col-md-2 wow fadeInUp" id="berita">
         @include('user_component.login')
      </div>

      <!-- tengah -->
      <div class="col-md-6 wow fadeInUp">
       {{ csrf_field() }}
      <?php
      date_default_timezone_set("Asia/jakarta");
          $tgl = date('Y-m-d');
          $Jam = date('h:s a');
          $tanggal = $tgl;
          $jam = $Jam;
        ?>
          <table class="table table-striped w-auto">
   <!--Table body-->
      <tr>
        <th>BERITA</th>
        <th style="scoped">
        </th>
        <th>
        <input type="date" class="btn" name="tgl"
         value="<?php echo $tanggal; ?>" max="2018-12-31" />
         <button type="button" class="btn btn-warning">filter</button>
        </th>
      </tr>
      <tr>
        <td style="width:60%">
          <p id="showdata"></p>
        </td>
        <td style="scoped">
        </td>
        <td>
          <p id="showdatajam"></p>
        </td>
	<td>
	  <p id="showsms"></p>
	</td>
	<td>
	  <p id="showtelegram"></p>
	</td>
      </tr>
    <!--Table body-->
  </table>

  

  
  <!--Table-->
      </div>
      <!-- tengah -->

      <div class="col-md-2 wow fadeInUp">

        <div class="section-header">
          <h3 style="color:#888;"><i class="fa fa-edit"></i> Kirim Berita</h3>
        </div>
        <div class="form">
          @if(\Session::has('alert'))
              <div class="alert alert-danger">
                <div>{{ Session::get('alert')}}</div>
              </div>
            @endif
            @if(\Session::has('message'))
              <div class="alert alert-danger">
                <div>{{ Session::get('message')}}</div>
              </div>
            @endif
          <form action="{{url('/berita/kirim')}}" method="post" role="form">
              {{ csrf_field() }}
              <div class="form-group">
              <label>Callsign <span style="color:red">*</span></label>
                <input type="hidden" name="tgl" value="<?php echo $tanggal ?>">
                <input type="hidden" name="jam" value="<?php echo $jam ?>">
                <input type="text" name="callsign" class="form-control" id="callsign" data-rule="minlen:2" data-msg="Please enter at least 2 chars" />
                <div class="validation"></div>
              </div>
          
           <div class="form-group">
              <label>Tlp / HP <span style="color:red">*</span></label>
                <input type="number" name="tlp" class="form-control" id="tlp" data-rule="minlen:2" data-msg="Please enter at least 2 chars" />
                <div class="validation"></div>
              </div>

            <div class="form-group">
            <label>Pesan <span style="color:red">*</span> <small>(tanpa sandi di radio)</small></label>
              <textarea class="form-control" name="pesan" rows="5" data-rule="required" data-msg="Please write something for us" placeholder="isi pesan..."></textarea>
              <div class="validation"></div>
            </div>

            <div class="form" style="width:100px">
                <div class="g-recaptcha" data-sitekey="6Lf3uncUAAAAAFG9Kjj73nHywpvrgxDbBT0fEIu3">
                </div>
            </div>
            <br/>
            <div class="text-center"><button type="submit" class="btn-block" style="background:#EAEAEA;color:black;">Kirim Berita</button></div>
          </form>
        </div>
      </div>

    </div>
</section><!-- #contact -->


<!--==========================
` Us Section
============================-->
<section id="about">
  <div class="container">

    <header class="section-header" id="visimisi">
      <h3>Tentang Senkom</h3>
      <p>Senkom Mitra Polri adalah kelompok masyarakat yang ingin berperan dalam membantu menginformasikan dan membantu pengamanan lingkungan disekitarnya atau di mana saja berada serta memberikan informasi kepada masyarakat tentang pentingnya pengamanan swakarsa di lingkungan masing-masing sebagai wujud Bela Negara dengan semangat patriotisme dan nasionalisme dalam wadah NKRI.</p>
    </header>

    <div class="row about-cols">

      <div class="col-md-4 wow fadeInUp">
        <div class="about-col">
          <div class="img">
            <img src="{{url('public/web/img/about-mission.jpg')}}" alt="" class="img-fluid">
            <div class="icon"><i class="ion-ios-speedometer-outline"></i></div>
          </div>
          <h2 class="title"><a href="#">Visi</a></h2>
          <p>
            Menjadi lembaga yang handal dan profesional dalam membantu mewujudkan keamanaan dan ketertiban nasional melalui peningkatan kesadaran masyarakat.
          </p>
        </div>
      </div>

      <div class="col-md-4 wow fadeInUp" data-wow-delay="0.1s">
        <div class="about-col">
          <div class="img">
            <img src="{{url('public/web/img/about-plan.jpg')}}" alt="" class="img-fluid">
            <div class="icon"><i class="ion-ios-list-outline"></i></div>
          </div>
          <h2 class="title"><a href="#">Misi</a></h2>
          <p>
           Memperluas peran masyarakat dalam membantu pemerintah guna menciptakan negara tenteram dan damai serta terciptanya keamanan mandiri di lingkungan masyarakat.
          </p>
        </div>
      </div>

      <div class="col-md-4 wow fadeInUp" data-wow-delay="0.2s">
        <div class="about-col">
          <div class="img">
            <img src="{{url('public/web/img/about-vision.jpg')}}" alt="" class="img-fluid">
            <div class="icon"><i class="ion-ios-eye-outline"></i></div>
          </div>
          <h2 class="title"><a href="#">Tujuan</a></h2>
          <p>
            Memasyarakatkan kamtibmas, meningkatkan kesadaran masyarakat tentang hukum dan kamtibmas serta merupakan wujud partisipasi dalam pembinaan kamtibmas. this is easter egg
          </p>
        </div>
      </div>

    </div>

  </div>
</section><!-- #about -->

<!--==========================
Portfolio Section
============================-->
<section id="portfolio"  class="section-bg">
  <div class="container">

    <header class="section-header">
      <h3 class="section-title" id="galeri">Galeri</h3>
    </header>

    <div class="row">
      <div class="col-lg-12">
        <ul id="portfolio-flters">
          <li data-filter="*" class="filter-active">Semua</li>
          <li data-filter=".filter-app">Foto</li>
          <li data-filter=".filter-card">Video</li>
        </ul>
      </div>
    </div>

    <div class="row portfolio-container">
        @foreach($galeris as $image)
      <div class="col-lg-4 col-md-6 portfolio-item filter-app wow fadeInUp" data-wow-delay="0.2s">
          <div class="portfolio-wrap">
              
              <figure>
                <img src="public/images/{{ $image->image }}" class="img-fluid" alt="">
                <a href="public/images/{{ $image->image }}" class="link-preview" data-lightbox="portfolio" data-title="App 2" title="Preview"><i class="ion ion-eye"></i></a>
                <a href="#" class="link-details" title="More Details"><i class="ion ion-android-open"></i></a>
              </figure>
    
              <div class="portfolio-info">
                <p>{{$image->title}}</p>
              </div>
            </div>
           
              
      </div> @endforeach



    </div>

  </div>
</section><!-- #portfolio -->

<!--==========================
Clients Section
============================-->
<section id="clients" class="wow fadeInUp">
  <div class="container">

    <header class="section-header">
      <h3>Wilayah</h3>
    </header>

    <div class="owl-carousel clients-carousel">
      <img src="{{url('public/web/img/clients/client-1.png')}}" alt="" style="width:350px;height:150px;margin:30px">
      <img src="{{url('public/web/img/clients/client-2.png')}}" alt="" style="width:350px;height:150px;margin:30px">
      <img src="{{url('public/web/img/clients/client-3.png')}}" alt="" style="width:350px;height:150px;margin:30px">
      <img src="{{url('public/web/img/clients/client-4.png')}}" alt="" style="width:350px;height:150px;margin:30px">
      <img src="{{url('public/web/img/clients/client-5.png')}}" alt="" style="width:350px;height:150px;margin:30px">
      <img src="{{url('public/web/img/clients/client-6.png')}}" alt="" style="width:350px;height:150px;margin:30px">
    </div>

  </div>
</section><!-- #clients -->



</main>

<!--==========================
Footer
============================-->
<footer id="footer">
  <div class="footer-top">
    <div class="container">
      <div class="row"  id="kontak">

        <div class="col-lg-4 col-md-4 footer-info">
          <h3>Senkom</h3>
          <p>Senkom Mitra Polri adalah salah satu organisasi masyarakat sadar kamtibmas yang didirikan oleh anggota Mitra Kamtibmas Mabes Polri, pada hari Kamis tanggal 1 Januari 2004 di Jakarta.</p>
        </div>

         <div class="col-lg-4 col-md-4 footer-contact">
          <h4>Kontak</h4>
          <p>
            JL. Dr. Djunjunan, No. 150, Sukawarna, Sukajadi, Sukagalih, Sukajadi, Kota Bandung, Jawa Barat 40164
          </p>

          <div class="social-links">
            <a href="#" class="twitter"><i class="fa fa-twitter"></i></a>
            <a href="#" class="facebook"><i class="fa fa-facebook"></i></a>
            <a href="#" class="instagram"><i class="fa fa-instagram"></i></a>
          </div>

        </div>

        <div class="col-lg-4 col-md-4 footer-links">
          <h4>Links</h4>
          <ul>
              <li><i class="ion-ios-arrow-right"></i> <a href="https://www.polri.go.id/">Polri</a></li>
              <li><i class="ion-ios-arrow-right"></i> <a href="https://www.kemhan.go.id/">Kemhan</a></li>
              <li><i class="ion-ios-arrow-right"></i> <a href="https://bssn.go.id/">BSSN</a></li>
          </ul>
        </div>

      </div>
    </div>
  </div>

  <div class="container">
    <div class="copyright">
      &copy; Copyright <strong>Senkom</strong>. All Rights Reserved
    </div>
    <div class="credits">
</div>
</div>
</footer><!-- #footer -->

<a href="#" class="back-to-top"><i class="fa fa-chevron-up"></i></a>
<div id="preloader"></div>

<!-- JavaScript Libraries -->
<script src="{{url('public/web/lib/jquery/jquery.min.js')}}"></script>
<script src="{{url('public/web/lib/jquery/jquery-migrate.min.js')}}"></script>
<script src="{{url('public/web/lib/bootstrap/js/bootstrap.bundle.min.js')}}"></script>
<script src="{{url('public/web/lib/easing/easing.min.js')}}"></script>
<script src="{{url('public/web/lib/superfish/hoverIntent.js')}}"></script>
<script src="{{url('public/web/lib/superfish/superfish.min.js')}}"></script>
<script src="{{url('public/web/lib/wow/wow.min.js')}}"></script>
<script src="{{url('public/web/lib/waypoints/waypoints.min.js')}}"></script>
<script src="{{url('public/web/lib/counterup/counterup.min.js')}}"></script>
<script src="{{url('public/web/lib/owlcarousel/owl.carousel.min.js')}}"></script>
<script src="{{url('public/web/lib/isotope/isotope.pkgd.min.js')}}"></script>
<script src="{{url('public/web/lib/lightbox/js/lightbox.min.js')}}"></script>
<script src="{{url('public/web/lib/touchSwipe/jquery.touchSwipe.min.js')}}"></script>
<!-- Contact Form JavaScript File -->
<script src="{{url('public/web/contactform/contactform.js')}}"></script>

<!-- Template Main Javascript File -->
<script src="{{url('public/web/js/main.js')}}"></script>
<script>
  $(document).ready(function() {
      setInterval(function () {
        $('#showdata').load('{{ url('/databerita') }}')
      }, 1000);
    });
    $(document).ready(function() {
      setInterval(function () {
        $('#showdatajam').load('{{ url('/databeritajam') }}')
      }, 1000);
    });
    $(document).ready(function() {
      setInterval(function () {
        $('#showsms').load('{{ url('/sms') }}')
      }, 10000);
    });    
    $(document).ready(function() {
      setInterval(function () {
        $('#showsms').load('{{ url('/telegram') }}')
      }, 5000);
    });
    $(document).ready(function() {
      setInterval(function () {
        $('#showsms').load('{{ url('/telegramphoto') }}')
      }, 5000);
    });   
</script>
<style>
ul.pagination li a {

    color: black;
    padding: 8px 8px;
    text-decoration: none;
    border: 1px solid #ddd;
    margin: 4px;
}

ul.pagination li a.active {
    background-color: #4CAF50;
    padding: 8px 8px;
    margin: 0px;
    color: white;
    border: 1px solid black;
}

ul.pagination li.active {
    /*background-color: #4CAF50;*/
    background-color: #555;
    padding: 8px 8px;
    margin: 4px;
    color: white;
    border: 1px solid #777;
}

/*ul.pagination li a:hover:not(.active) {background-color: #ddd;}*/
ul.pagination li a:hover {background-color: #555;color:white;}

ul.pagination li.disabled {
    /*background-color: #cccccc;*/
    color: #ddd;
    padding: 8px 8px;
    border: 1px solid #ddd;
    margin: 4px;
}
}
</style>
</body>
</html>
