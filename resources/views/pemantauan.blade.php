<!DOCTYPE html>
<html>
    <head>
        @include('template.head_home')
    </head>
    <body>
  <header id="header" style="background: #222; opacity:0.8">
    <div class="container-fluid">
  
      <div id="logo" class="pull-left">
        <!--<h1><a href="#intro" class="scrollto">Senkom Polri</a></h1>-->
        <!-- Uncomment below if you prefer to use an image logo -->
        <a href="#intro"><img src="{{url('public/web/img/logosenkom.png')}}" width="40" alt="" title="" /></a>
      </div>
  
      <nav id="nav-menu-container">
        <ul class="nav-menu">
          <li><a href="./#intro">Home</a></li>
          <li><a href="./#berita">Berita</a></li>
          <li class="menu-active"><a href="#">Pemantauan</a></li>
          <li><a href="./#galeri">Galeri</a></li>
          <li class="menu-has-children"><a href="./#tentang">Tentang Senkom</a>
            <ul>
              <li><a href="./#visimisi">Visi &amp; Misi</a></li>
              <li><a href="./#kontak">Kontak</a></li>
            </ul>
          </li>
        </ul>
      </nav><!-- #nav-menu-container -->
    </div>
  </header><!-- #header -->   


<main id="main" style="">

    <section id="pemantauan" class="section-bg wow fadeInUp">
        <div class="row about-cols">
            
            <div class="col-md-7 wow fadeInUp offset-1 text-left" id="berita">
               <h3 style="color:bisque">Pemantauan Berita <small class="badge badge-pill badge-warning">Live <i class="fa fa-wifi"></i></small></h3>
                <div id="show"></div>
            </div>
                
            <div class="col-md-3 wow fadeInUp">
                <div style="margin-top:62px">
                    <!-- slider -->

                            <div class="col-lg-12 col-md-6 col-xs-6">
                            <div id="carouselExampleFade" class="carousel slide carousel-fade" data-ride="carousel">
                                    <div class="carousel-inner">
                                      <div class="carousel-item active">
                                          <!-- foreach galeri disini 3 gambar -->
                                        @foreach($photo as $poto)
                                          <?php 
                                            if($poto->slider1 == "tampil"){
                                          ?>
                                        <img class="d-block w-100" src="public/images/{{ $poto->image }}"" alt="First slide">
                                        <div class="carousel-caption d-none d-md-block">
                                                <h5>{{ $poto->title }}</h5>
                                              </div>
                                          <!-- end foreach galeri -->
                                            <?php } ?>
                                      </div>
                                        @endforeach
                                    </div>
                                    <a class="carousel-control-prev" href="#carouselExampleFade" role="button" data-slide="prev">
                                      <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                                      <span class="sr-only">Previous</span>
                                    </a>
                                    <a class="carousel-control-next" href="#carouselExampleFade" role="button" data-slide="next">
                                      <span class="carousel-control-next-icon" aria-hidden="true"></span>
                                      <span class="sr-only">Next</span>
                                    </a>
                                  </div>
                            </div>
                            <!-- slider 1 end -->
                            <br/>
                            <!-- slider 2 start -->
                            <div class="col-lg-12 col-md-6 col-xs-6">
                            <div id="carouselExampleFade" class="carousel slide carousel-fade" data-ride="carousel">
                                    <div class="carousel-inner">
                                      <div class="carousel-item active">
                                          <!-- foreach galeri disini 3 gambar -->
                                          @foreach($photo as $poto)
                                          <?php 
                                            if($poto->slider2 == "tampil"){
                                          ?>
                                        <img class="d-block w-100" src="public/images/{{ $poto->image }}" alt="First slide">
                                        <div class="carousel-caption d-none d-md-block">
                                                <h5>{{ $poto->title }}</h5>
                                              </div>  
                                        <!-- end foreach galeri -->
                                            <?php } ?>
                                      </div>
                                        @endforeach
                                    </div>
                                    <a class="carousel-control-prev" href="#carouselExampleFade" role="button" data-slide="prev">
                                      <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                                      <span class="sr-only">Previous</span>
                                    </a>
                                    <a class="carousel-control-next" href="#carouselExampleFade" role="button" data-slide="next">
                                      <span class="carousel-control-next-icon" aria-hidden="true"></span>
                                      <span class="sr-only">Next</span>
                                    </a>
                                  </div>
                            </div>
                            <!-- slider 2 end -->
                            
                    <!-- slider end-->
                </div>
            </div>
        </div>
    </section>


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
              <li><i class="ion-ios-arrow-right"></i> <a href="#">Polri</a></li>
              <li><i class="ion-ios-arrow-right"></i> <a href="#">Basarnas</a></li>
              <li><i class="ion-ios-arrow-right"></i> <a href="#">Kemenkeu</a></li>
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
</body>
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


<script type="text/javascript">

  function show(){
    var x = document.getElementById("pass2");
    if (x.type === "password") {
        x.type = "text";
    } else {
        x.type = "password";
    } 
  }
  $(document).ready(function() {
      setInterval(function () {
        $('#show').load('{{ url('/data') }}')
      }, 500);
    });
</script>

<style>
    #main, #pemantauan{
    background: url(https://www.pixelstalk.net/wp-content/uploads/2016/05/Colorful-Gradient-Wallpaper-HD.jpg) center top no-repeat fixed;
    background-size: cover;
    padding: 60px 0 40px 0;
    position: relative;
    }
</style>
</body>
</html>