<html>

<head>
  <!--Let browser know website is optimized for mobile-->
  <meta content='width=device-width, initial-scale=1, maximum-scale=1' name='viewport'/>
   <meta http-equiv="Content-Type" content="text/html; charset=UTF-8"/>
 
  <link href="{{url('https://fonts.googleapis.com/icon?family=Material+Icons')}}" rel="stylesheet">


  <!--Import materialize.css-->
  <link href="{{url('public/materialize/css/prism.css')}}" rel="stylesheet">
  <link href="{{url('public/materialize/css/ghpages-materialize.css')}}" type="text/css" rel="stylesheet" media="screen,projection">
  
  <link rel="icon" type="image/png" href="img/index.png">
  <title>POLRI | Website Resmi Kepolisian Negara Republik Indonesia</title>
    
  <style>
    body {
      display: flex;
      min-height: 100vh;
      flex-direction: column;
    }

    main {
      flex: 1 0 auto;
    }

    body {
      background: #fff;

    }

    .input-field input[type=date]:focus + label,
    .input-field input[type=text]:focus + label,
    .input-field input[type=email]:focus + label,
    .input-field input[type=password]:focus + label {
      color: #e91e63;
    }

    .input-field input[type=date]:focus,
    .input-field input[type=text]:focus,
    .input-field input[type=email]:focus,
    .input-field input[type=password]:focus {
      border-bottom: 2px solid #e91e63;
      box-shadow: none;
    }

    html, body{
      height: 100%;
      background-color: #eee;
      position: relative;
      z-index: 1;
      font-family: "Comic Sans MS", cursive, sans-serif;
    }

    nav{
      height: 64px;
      line-height: 61px;
      box-shadow: 0 0 0 0;

    }


    header{
      height: 50%
      background-color: #03a9f4
    }
  .holder{
     position: relative;
    height: 100%;
    z-index: 0;
  }
 
#typedtext{
  font-family: "Comic Sans MS", cursive, sans-serif;
  font-size: 2em;
  width: 629px //611px;
  height: 60px;;
  position: fixed
  top: 50%;
  left: 50%;
  margin: -30px 0 0 -305.5px;
  color: #fff;
}



  }
  </style>
</head>

<body>

  <!-- Navigation -->

<!-- Dropdown Structure -->
<nav >
     <!--dropdown structure-->
     <ul id="dropdown1" class="dropdown-content">
      <li><a href="#!" style=" font-size: 10pt;">Fitur</a></li>
      <li><a href="#!" style=" font-size: 10pt;">Profil</a></li>
      <li><a href="#!" style=" font-size: 10pt;">Galeri</a></li>
    </ul>
    <ul id="dropdown2" class="dropdown-content">
      <li><a href="#!" style=" font-size: 10pt;">Struktur <br /> Organisasi</a></li>
      <li><a href="#!" style=" font-size: 10pt;">Visi dan Misi</a></li>
      <li><a href="#!" style=" font-size: 10pt;">Tujuan</a></li>
      <li><a href="#!" style=" font-size: 10pt;">Kontak</a></li>
    </ul>
    <ul id="dropdown3" class="dropdown-content">
    <li><a href="#" style=" font-size: 10pt;">Gues</a></li>
    <li><a href="#" style=" font-size: 10pt;">User</a></li>
     <li><a href="Login.php" style=" font-size: 10pt;">Admin</a></li>
    </ul>

    <div class="nav-wrapper grey darken-3">
      <a href="#" data-activates="mobile-demo" class="button-collapse"><i class="material-icons">menu</i></a>
      <ul class="right hide-on-med-and-down">
        <!--dropdown button-->
        <li><a href="index.php" style=" font-size: 10pt;">Branda</a></li>
        <li><a class="dropdown-button" href="#!" data-activates="dropdown1" style=" font-size: 10pt;">Over View<i class="material-icons right">arrow_drop_down</i></a></li>
        <li><a class="dropdown-button" href="#!" data-activates="dropdown2" style=" font-size: 10pt;">Tentang Senkom<i class="material-icons right">arrow_drop_down</i></a></li>
        <li><a href="badges.html" style=" font-size: 10pt;">Berita</a></li>
        <li><a href="badges.html" style=" font-size: 10pt;">Pemantauan</a></li>
        <li><a class="dropdown-button" href="#!" data-activates="dropdown3" style=" font-size: 10pt;">Login<i class="material-icons right">arrow_drop_down</i></a></li>
      </ul>
      <ul id="mobile-demo" class="side-nav">
        <li class="no-padding">
          <ul class="collapsible collapsible-accordion">
            <li class="bold"><a href="index.php" class="waves-effect waves-teal">Beranda</a></li>
            <li class="bold"><a class="collapsible-header  waves-effect waves-teal">Over view</a>
              <div class="collapsible-body" style="">
                <ul>
                  <li><a href="#">Fitur</a></li>
                  <li><a href="#">Profil</a></li>
                  <li><a href="#">Galeri</a></li>
                </ul>
              </div>
            </li>
            <li class="bold"><a class="collapsible-header  waves-effect waves-teal">Tentang Semkom</a>
              <div class="collapsible-body" style="">
                <ul>
                  <li><a href="#!">Struktur Organisasi</a></li>
                  <li><a href="#!">Visi dan Misi</a></li>
                  <li><a href="#!">Tujuan</a></li>
                  <li><a href="#!">Kontak</a></li>
                </ul>
              </div>
            </li>
             <li class="bold"><a href="getting-started.html" class="waves-effect waves-teal">Berita</a></li>
               <li class="bold"><a href="getting-started.html" class="waves-effect waves-teal">Pemantauan</a></li>
            <li class="bold"><a class="collapsible-header  waves-effect waves-teal">Login</a>
              <div class="collapsible-body" style="">
                <ul>
                  <li><a href="#">Gues</a></li>
                  <li><a href="Login.php">Admin</a></li>
                  <li><a href="#">User</a></li>
                </ul>
              </div>
            </li>
          </ul>
        </li>     
      </ul>
    </div>
  </nav>
 <center>
      <div class="section">
      <div class="container">
      <img class="responsive-img" style="width: 100px;" src="img/index.png" />
      </div>
      </div>
      
      <div class="section">
      <div class="container">
        <div class="z-depth-1 grey lighten-4 row" style="display: inline-block; padding: 32px 48px 0px 48px; border: 1px solid #EEE;">

          <form class="col s12" method="post">
            <div class='row'>
              <div class='col s12'>
            
              </div>
            </div>

            <div class='row'>
              <div class='input-field col s12'>
                <input class='validate' type='email' name='email' id='email' />
                <label for='email'>Enter your email</label>
              </div>
            </div>

            <div class='row'>
              <div class='input-field col s12'>
                <input class='validate' type='password' name='password' id='password' />
                <label for='password'>Enter your password</label>
              </div>
              <label style='float: right;'>
								<a class='pink-text' href='#!'><b>Forgot Password?</b></a>
							</label>
            </div>

            <br />
            <center>
              <div class='row'>
                <button type='submit' name='btn_login' class='col s12 btn btn-large waves-effect indigo'>Login</button>
              </div>
            </center>
          </form>
        </div>
      </div>
      <a href="#!">Create account</a>
</center>
  <!--  Scripts-->
   <script src="{{url('https://code.jquery.com/jquery-2.1.1.min.js')}}"></script>
    <script>if (!window.jQuery) { document.write('<script src="bin/jquery-2.1.1.min.js"></script>'); }
    </script>
  
  <script src="{{url('public/materialize/js/jquery.timeago.min.js')}}"></script>  
  <script src="{{url('public/materialize/js/prism.j')}}"></script>
  <script src="{{url('public/materialize/bin/materialize.js')}}"></script>
  <script src="{{url('public/materialize/js/init.js')}}"></script>

  <script type="text/javascript">
    

  $(".dropdown-trigger").dropdown();


  $(document).ready(function(){
    $('.sidenav').sidenav();
  })
        
        
  </script>
</body>

</html>