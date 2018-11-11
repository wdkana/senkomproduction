<nav class="navbar navbar-expand-lg navbar-light fixed-top" id="mainNav">
  <div class="container">
    <a class="navbar-brand js-scroll-trigger" href="http://localhost/senkom/public">Senkom Polri</a>
    <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
      Menu
      <i class="fas fa-bars"></i>
    </button>
    <div class="collapse navbar-collapse" id="navbarResponsive">
      <ul class="navbar-nav ml-auto">
        <li class="nav-item">
          <a class="nav-link js-scroll-trigger" href="http://localhost/senkom/public#download">Download APK</a>
        </li>
        <li class="nav-item">
          <a class="nav-link js-scroll-trigger" href="http://localhost/senkom/public#fitur">Fitur</a>
        </li>
        <li class="nav-item">
          <a class="nav-link js-scroll-trigger" href="http://localhost/senkom/public#profil">Profil</a>
        </li>   
        <li class="nav-item">
          <a class="nav-link js-scroll-trigger" href="http://localhost/senkom/public#galeri">Galeri</a>
        </li>
        <li class="nav-item">
          <a class="nav-link js-scroll-trigger" href="http://localhost/senkom/public/berita">Berita</a>
        </li>
        <li class="nav-item">
          <a class="nav-link js-scroll-trigger" href="http://localhost/senkom/public/pemantauan">Pemantauan</a>
        </li>
        <li class="nav-item">
          @if(!Auth::check())
          <a class="nav-link js-scroll-trigger" href="http://localhost/senkom/public/user/login">Login</a>
          @else
          <a class="nav-link js-scroll-trigger" href="http://localhost/senkom/public/user/logout">logout</a>
          @endif
        </li>

      </ul>
    </div>
  </div>
</nav>
<header></header>