
<body>

  <!-- header -->
  <header>
  <div class="top" style="background-color: gray">
      <div class="container" >
        <div class="t-op row">
          <div class="col-sm-6 top-middle">
            <ul>
              <li><a href="#"><i class="fab fa-facebook-f"></i></a></li>
              <li><a href="#"><i class="fab fa-twitter"></i></a></li>
              <li><a href="#"><i class="fab fa-google-plus-g"></i></a></li>
              <li><a href="#"><i class="fab fa-linkedin-in"></i></a></li>
            </ul>
          </div>
          <div class="col-sm-6 top-left">
            <!-- <ul>
              <li><i class="fas fa-phone"></i> +021 365 777</li>
            </ul> -->
          </div>
        </div>
      </div>
    </div>
    <div class="container">
      <nav class="navbar navbar-expand-lg navbar-light">
        <h1>
          <a class="navbar-brand text-capitalize" href="index.html">
            <img class="responsive-img" src="{{url('public/img_senkom/SenkomHead.png')}}">
          </a>
        </h1>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent"
            aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarSupportedContent">
          <ul class="navbar-nav text-center  ml-lg-auto">
            <li class="nav-item active  mr-3">
              <a class="nav-link" href="{{url('/')}}">Beranda
                <span class="sr-only">(current)</span>
              </a>
            </li>
             <li class="nav-item dropdown mr-3">
              <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true"
                  aria-expanded="false">
                Over View
              </a>
              <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                <a class="dropdown-item" href="{{ url('/fitur')}}">Fitur</a>
                <a class="dropdown-item" href="{{ url('/privasi')}}">Profil</a>
                <a class="dropdown-item" href="{{ url('/terms')}}">Galeri</a>
              </div>
            </li>
            <li class="nav-item dropdown mr-3">
              <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true"
                  aria-expanded="false">
                Tentang Senkom
              </a>
              <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                <a class="dropdown-item" href="{{ url('/sejarah')}}">Sejarah</a>
                <a class="dropdown-item" href="{{ url('/struktur')}}">Struktur <br />Organisasi</a>
                <a class="dropdown-item" href="{{ url('/visimisi')}}">Visi dan Misi</a>
                <a class="dropdown-item" href="{{ url('/kontak')}}">Kontak</a>
              </div>
            </li>
            <li class="nav-item  mr-3">
              <a class="nav-link" href="{{ url('/berita')}}">Berita</a>
            </li>
            <li class="nav-item  mr-3">
              <a class="nav-link" href="{{ url('pemantauan')}}">Pemantauan</a>
            </li>
           
            <li class="nav-item">
              <a class="nav-link" href="{{url('/login')}}">Login</a>
            </li>
          </ul>
        </div>
      </nav>
    </div>
  </header>
  <!-- //header -->
      
</body>
   
