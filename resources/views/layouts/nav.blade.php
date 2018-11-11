<nav class="navbar navbar-expand-lg navbar-light fixed-top" id="mainNav">
  <div class="container">
    <a class="navbar-brand js-scroll-trigger" href="{{ url('/') }}">Senkom Polri</a>
    <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
      Menu
      <i class="fas fa-bars"></i>
    </button>
    <div class="collapse navbar-collapse" id="navbarResponsive">
      <ul class="navbar-nav ml-auto">
        <li class="nav-item">
          <a class="nav-link js-scroll-trigger" href="#download">Download APK</a>
        </li>
        <li class="nav-item">
          <a class="nav-link js-scroll-trigger" href="#fitur">Fitur</a>
        </li>
        <li class="nav-item">
          <a class="nav-link js-scroll-trigger" href="#profil">Profil</a>
        </li>   
        <li class="nav-item">
          <a class="nav-link js-scroll-trigger" href="#galeri">Galeri</a>
        </li>
        <li class="nav-item">
         <a href="" class="nav-link js-scroll-trigger" data-toggle="modal" data-target="#basicExampleModal">Kontak</a>
        </li>
        <li class="nav-item">
          <a class="nav-link js-scroll-trigger" href="{{ url('/berita') }}">Berita</a>
        </li>
        <li class="nav-item">
          <a class="nav-link js-scroll-trigger" href="{{ url('/pemantauan') }}">Pemantauan</a>
        </li>
        <li class="nav-item">
          <a class="nav-link js-scroll-trigger" href="{{ url('/login') }}">Login</a>
        </li>
      </ul>
    </div>
  </div>
</nav>

<header class="masthead">
  <div class="container h-100">
    <div class="row h-100">
      <div class="col-lg-7 my-auto">
        <div class="header-content mx-auto">
          <h1 class="mb-5">Kini masyarakat dapat berperan membantu pemerintah dimana saja dan kapan saja! </h1>
          <a href="{{ url('/berita') }}" class="btn btn-outline btn-xl js-scroll-trigger">KIRIM BERITA!</a>
        </div>
      </div>
      <div class="col-lg-5 my-auto">
        <div class="device-container">
          <div class="device-mockup iphone6_plus portrait white">
            <div class="device">
              <div class="screen">
                <!-- Demo image for screen mockup, you can put an image here, some HTML, an animation, video, or anything else! -->
                <img src="img/spanduk-1.jpg" class="img-fluid" alt="">
              </div>
              <div class="button">
                <!-- You can hook the "home button" to some JavaScript events or just remove it -->
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>


  <!-- modal kontak -->
  <div class="modal fade" id="basicExampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true" style="color:black; text-color:black">
    <div class="modal-dialog" role="document">
      <div class="modal-content" style="text-color:black">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLabel">Kontak Senkom Polri</h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <div class="modal-body">
          <div class="list-group">
            <a class="list-group-item list-group-item-action flex-column align-items-start">
              <div class="d-flex w-100 justify-content-between">
              <h5 class="mb-1">Sekretariat Kab. Bulungan</h5>
              <small class="text-muted">Kaltim</small>
              </div>
              <p class="mb-1" style="font-size:14px">
              Jl.Duku RT15/RW05 Tanjungselor 77212
              <br/>
              Kabupaten Bulungan Kalimantan Timur
              <br/>
              Telepon: 055222354 085246596354
              <br/>
              Email: senkom.kaltim11@yahoo.com senkomtanjungselor@gmail.com
              <br/>
              Website / Blog: senkomtanjungselor.blogspot.com
              <br/>
              Instant Messenger:
              </p>
            </a>
            <a class="list-group-item list-group-item-action flex-column align-items-start">
              <div class="d-flex w-100 justify-content-between">
              <h5 class="mb-1">Sekretariat Kab. Badung</h5>
              <small class="text-muted">Bali</small>
              </div>
              <p class="mb-1" style="font-size:14px">
              Jl Muding Buit No.5 Kerobokan Kec.Kuta Utara Kab.Badung-Bali
              <br/>
              Kabupaten Badung Bali
              <br/>
              Telepon: 0361-7414611, 085338223100
              <br/>
              Email: senkom.bali02@yahoo.com
              <br/>
              Website / Blog: senkombadung.wordpress.com
              <br/>
              Instant Messenger: senkom.bali01
              </p>
            </a>
            <a class="list-group-item list-group-item-action flex-column align-items-start">
              <div class="d-flex w-100 justify-content-between">
              <h5 class="mb-1">Sekretariat Kab. Berau</h5>
              <small class="text-muted">Kaltim</small>
              </div>
              <p class="mb-1" style="font-size:14px">
              Jl.Gn.Panjang RT.04 kel.Gn.Panjang kec.Tanjung Redeb 
              <br/>
              Kabupaten Berau Kalimantan Timur
              <br/>
              Telepon: 0554-2028124
              <br/>
              Email: kab-berau@mail.senkom.or.id
              <br/>
              Website / Blog:
              <br/>
              Instant Messenger:
              </p>
            </a>
            <a class="list-group-item list-group-item-action flex-column align-items-start">
              <div class="d-flex w-100 justify-content-between">
              <h5 class="mb-1">Sekretariat Kep. Riau</h5>
              <small class="text-muted"></small>
              </div>
              <p class="mb-1" style="font-size:14px">
              Ruko Tembesi Center Blok A4 No 09 
              <br/>
              Kota Batam Kepulauan Riau
              <br/>
              Telepon: 0778-7054454 Fax.0778-7029700
              <br/>
              Email: senkom.kepri@yahoo.com
              <br/>
              Website / Blog:
              <br/>
              Instant Messenger:
              </p>
            </a>
            <a class="list-group-item list-group-item-action flex-column align-items-start">
              <div class="d-flex w-100 justify-content-between">
              <h5 class="mb-1">Sekretariat Kota Denpasar</h5>
              <small class="text-muted">Bali</small>
              </div>
              <p class="mb-1" style="font-size:14px">
              Jl. Taman Pancing No.100
              <br/>
              Kota Denpasar Bali
              <br/>
              Telepon: 08124605053
              <br/>
              Email: senkom.bali01@yahoo.com
              <br/>
              Website / Blog: www.senkomdenpasar.wordpress.com
              <br/>
              Instant Messenger: senkom.bali01
              </p>
            </a>
            <a class="list-group-item list-group-item-action flex-column align-items-start">
              <div class="d-flex w-100 justify-content-between">
              <h5 class="mb-1">Sekretariat Provinsi Papua</h5>
              <small class="text-muted"></small>
              </div>
              <p class="mb-1" style="font-size:14px">
              Jln. Dunlop No. 96 Sentani Kota, Papua
              <br/>
              Kota Jayapura Papua
              <br/>
              Telepon: 085343190195 
              <br/>
              Email: senkom.papua@yahoo.com
              <br/>
              Website / Blog:
              <br/>
              Instant Messenger: SAR.4622_rahadijaya@gmail.com / pin BB Sekretaris 22C3447E
              </p>
            </a>
             <a class="list-group-item list-group-item-action flex-column align-items-start">
              <div class="d-flex w-100 justify-content-between">
              <h5 class="mb-1">Sekretariat Provinsi Riau</h5>
              <small class="text-muted"></small>
              </div>
              <p class="mb-1" style="font-size:14px">
              Jl. Imam Munandar No.49
              <br/>
              Kota Pekanbaru Riau
              <br/>
              Telepon: 0761 31465
              <br/>
              Email:  senkom.riau@yahoo.com
              <br/>
              Website / Blog: www.senkomriau.com
              <br/>
              Instant Messenger:
              </p>
            </a>
            <a class="list-group-item list-group-item-action flex-column align-items-start">
              <div class="d-flex w-100 justify-content-between">
              <h5 class="mb-1">Sekretariat Provinsi NTB</h5>
              <small class="text-muted"></small>
              </div>
              <p class="mb-1" style="font-size:14px">
              Jl. Meninting Raya no.56 BTN Kekalik Kel.Pagesangan Barat Kec.Mataram 
              <br/>
              Kota Mataram Nusa Tenggara Barat
              <br/>
              Telepon: 0370-624658, 081916316767
              <br/>
              Email: senkom.ntb01@yahoo.com
              <br/>
              Website / Blog: www.senkomNTB.woodpres.com
              <br/>
              Instant Messenger:
              </p>
            </a>
            <a class="list-group-item list-group-item-action flex-column align-items-start">
              <div class="d-flex w-100 justify-content-between">
              <h5 class="mb-1">Sekretariat Provinsi Bali</h5>
              <small class="text-muted"></small>
              </div>
              <p class="mb-1" style="font-size:14px">
              Jl. Gunung Batukaru Gg.Padang I No 3 Tegal Kertha
              <br/>
              Kota Denpasar Bali
              <br/>
              Telepon: 0361-480799, 08123962357 
              <br/>
              Email: senkom.bali@yahoo.com
              <br/>
              Website / Blog: senkombali.blog.com
              <br/>
              Instant Messenger: senkom.bali
              </p>
            </a>
            <a class="list-group-item list-group-item-action flex-column align-items-start">
              <div class="d-flex w-100 justify-content-between">
              <h5 class="mb-1">Sekretariat Prov. Sulawesi Barat</h5>
              <small class="text-muted"></small>
              </div>
              <p class="mb-1" style="font-size:14px">
              Jl. Bruno No.45 Kebunsari Kec. Wonomulyo Kab. Polman Prov. Sulbar KP 91352
              <br/>
              Kabupaten Polewali Mandar Sulawesi Barat
              <br/>
              Telepon: 085255882721
              <br/>
              Email: ivan_irgi@yahoo.co.id
              <br/>
              Website / Blog:
              <br/>
              Instant Messenger:
              </p>
            </a>
            <a class="list-group-item list-group-item-action flex-column align-items-start">
              <div class="d-flex w-100 justify-content-between">
              <h5 class="mb-1">Sekretariat Sumetera Utara</h5>
              <small class="text-muted"></small>
              </div>
              <p class="mb-1" style="font-size:14px">
              Jl. Alfalah Kampung Baru
              <br/>
              Kota Medan Sumatera Utara
              <br/>
              Telepon: 081361626010
              <br/>
              Email: iwayan_suada@yahoo.co.id
              <br/>
              Website / Blog:
              <br/>
              Instant Messenger:
              </p>
            </a>
            <a class="list-group-item list-group-item-action flex-column align-items-start">
              <div class="d-flex w-100 justify-content-between">
              <h5 class="mb-1">Sekretariat Sumsel</h5>
              <small class="text-muted"></small>
              </div>
              <p class="mb-1" style="font-size:14px">
              Jl. Sapta Marga Komp. PLN No. 9B Bukit Sangkal 30114
              <br/>
              Kabupaten Palembang Sumatera Selatan
              <br/>
              Telepon: 
              <br/>
              Email: 
              <br/>
              Website / Blog:
              <br/>
              Instant Messenger:
              </p>
            </a>
            <a class="list-group-item list-group-item-action flex-column align-items-start">
              <div class="d-flex w-100 justify-content-between">
              <h5 class="mb-1">Sekretariat Kota Mojokerto</h5>
              <small class="text-muted"></small>
              </div>
              <p class="mb-1" style="font-size:14px">
              Jl. KH. Usman no. 6 Kel. Surodinawan. Kec. Prajuritkulon 
              <br/>
              Kota Mojokerto Jawa Timur
              <br/>
              Telepon: 0321-325740 081554116036
              <br/>
              Email: senkom.mojokerto@gmail.com
              <br/>
              Website / Blog: senkom-mojokerto.blogspot.com
              <br/>
              Instant Messenger:
              </p>
            </a>
           <a class="list-group-item list-group-item-action flex-column align-items-start">
              <div class="d-flex w-100 justify-content-between">
              <h5 class="mb-1">Sekretariat Provinsi Aceh</h5>
              <small class="text-muted"></small>
              </div>
              <p class="mb-1" style="font-size:14px">
              Jl. Ateuk Jawo Ir. Bahagia No. 126
              <br/>
              Kabupaten Banda Aceh Aceh
              <br/>
              Telepon: 0651 7406 900 /08136045180/085260108883
              <br/>
              Email: senkomaceh@ymail.com
              <br/>
              Website / Blog:
              <br/>
              Instant Messenger:
              </p>
            </a>
          </div>
        </div>
      </div>
    </div>
  </div>
<!-- end modal kontak -->
</header>