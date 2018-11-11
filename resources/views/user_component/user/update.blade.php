<!DOCTYPE html>
<html>
    <head>
        @include('template.head_user')
    </head>
    <body>
      <div class="wrapper">
         @include('template.header_user')
      
          <div class="main-panel">

            <nav class="navbar navbar-default">
              <div class="container-fluid">
                  <div class="navbar-header">
                      <button type="button" class="navbar-toggle">
                        <span class="sr-only">Toggle navigation</span>
                        <span class="icon-bar bar1"></span>
                        <span class="icon-bar bar2"></span>
                        <span class="icon-bar bar3"></span>
                    </button>
                      <a class="navbar-brand" href="#">Profil</a>
                  </div>  
              </div>
            </nav>

            <div class="content">
              <div class="container-fluid">
                <div class="row">
                  <div class="col-md-12">
                      <div class="card">
                          <div class="header">
                            <h4 class="title">Informasi Data : {{ $data->nama }}</h4>
                                <!-- <p class="category">24 Hours performance</p> -->
                          </div>
                          <!-- Tambah User -->
                        
                          <div class="content">
                            @if(\Session::has('alert'))
                              <div class="alert alert-danger">
                                  <div>{{ Session::get('alert') }}</div>
                              </div>
                          @endif
                          @if(\Session::has('sukses'))
                              <div class="alert alert-success">
                                  <div>{{ Session::get('sukses') }}</div>
                              </div>
                          @endif
                            <form action="{{ url('/user/update') }}" method="post">
                            {{ csrf_field() }}
                              <div class="form-group">
                                <input type="hidden" name="id" value="{{ $data->id }}">
                                <input type="text" name="username" placeholder="Masukan Username" class="form-control border-input" value="{{ $data->username }}" required>
                              </div>
                              <div class="form-group">
                                <label class="form-check-label">Ubah Password </label><small><i>(Silahkan masukan password baru)</i></small>
                                <input type="password" name="password" id="pass" class="form-control border-input">
                                <style type="text/css">
                                  .icons{
                                    display: none;
                                  }
                                </style>
                                <input type="checkbox" class="form-check-input" id="show" onclick="myFunction()">
                                <span>Tampilkan Password</span>
                              </div>
                              <div class="form-group">
                                <input type="text" class="form-control border-input" value="{{ $data->role }}" disabled>
                              </div>
                              <div class="form-group">
                                <input type="text" name="nama" placeholder="Masukan Nama" class="form-control border-input" value="{{ $data->nama }}" required>
                              </div>
                              <div class="form-group">
                                <input type="submit" value="Update Data Saya" class="btn btn-primary" onclick="return confirm('Yakin ingin mengubah data?')">
                              </div>
                            </form>
                          
                        
                        <!-- /Tambah User -->
  
                          </div>
                          
                      </div>
                  </div>
                </div>
              </div>
            </div>
      </div>

           
  </body>

<script type="text/javascript">
  function myFunction() {
    var x = document.getElementById("pass");
    if (x.type === "password") {
        x.type = "text";
    } else {
        x.type = "password";
    }
  }
  function show(){
    var x = document.getElementById("pass2");
    if (x.type === "password") {
        x.type = "text";
    } else {
        x.type = "password";
    } 
  }
</script>
</html>