
<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <script src="{{url('https://www.google.com/recaptcha/api.js')}}" async defer></script>
 

    

    <!-- Bootstrap core CSS -->
  <!-- <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
 -->
   <!-- <link href="vendor/fontawesome-free/css/all.min.css" rel="stylesheet">
    <link rel="stylesheet" href="vendor/simple-line-icons/css/simple-line-icons.css">
    <link href="https://fonts.googleapis.com/css?family=Lato" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Catamaran:100,200,300,400,500,600,700,800,900" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Muli" rel="stylesheet">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.3.1/css/all.css" integrity="sha384-mzrmE5qonljUremFsqc01SB46JvROS7bZs3IO2EmfFsd15uHvIt+Y8vEf7N7fWAU" crossorigin="anonymous">
 -->

    <!-- Plugin CSS -->
    <link rel="stylesheet" href="{{url('device-mockups/device-mockups.min.css')}}">

    <!-- Custom styles for this template -->
    <link href="{{url('css/new-age.min.css')}}" rel="stylesheet">
    @include('template.head_home')
  </head>

  <body id="page-top">	
 @include('layouts.nav_home')

    <div class="container">
    	@yield ('content')
    </div>
	<!-- 
	@include ('layouts.footer')
     -->
   <!-- jQuery library -->

<!-- Latest compiled and minified Bootstrap JavaScript -->
<script src="{{url('https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js')}}" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>



  <!-- Bootstrap core JavaScript -->
    <script src="{{url('public/vendor/jquery/jquery.min.js')}}"></script>
    <script src="{{url('public/vendor/bootstrap/js/bootstrap.bundle.min.js')}}"></script>

    <!-- Plugin JavaScript -->
    <script src="{{url('public/vendor/jquery-easing/jquery.easing.min.js')}}"></script>

    <!-- Custom scripts for this template -->
    <script src="{{url('public/js/new-age.min.js')}}"></script>

    <!--  Scripts-->
    <script src="{{url('https://code.jquery.com/jquery-2.1.1.min.js')}}"></script>
    <script>if (!window.jQuery) { document.write('<script src="{{url('bin/jquery-2.1.1.min.js')}}"><\/script>'); }
    </script>
  
    <script src="{{url('public/materialize/js/jquery.timeago.min.js')}}"></script>  
    <script src="{{url('public/materialize/js/prism.js')}}"></script>
    <script src="{{url('public/materialize/bin/materialize.js')}}"></script>
    <script src="{{url('public/materialize/js/init.js')}}"></script>



  </body>
</html>
