<!DOCTYPE html>
<html>
    <head>
        @include('template.head')
    </head>
    <body>
      <div class="wrapper">
        @include('template.header')
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
                    <a class="navbar-brand" href="#">Tambah Data User</a>
                  </div>  
                </div>
              </nav>

              <div class="content">
                <div class="container-fluid">
                  <div class="row">
                    <div class="col-md-6">
                      <div class="card">
                        
                        <div class="header">
                          <h4 class="title">Data User</h4>
                        </div>
                        <hr/>

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
                          <form action="{{ url('/tambah') }}" method="post">
                          {{ csrf_field() }}

                          <div class="row">
                              
                          <div class="form-group col-lg-12">
                              <label>Nama Pengguna:</label>
                              <input type="text" name="nama" placeholder="Masukan Nama" class="form-control border-input" required>
                            </div>
                          </div>

                          <div class="row">
                            <div class="form-group col-lg-12">
                              <label>Username:</label>
                              <input type="text" name="username" placeholder="Masukan Username" class="form-control border-input cols-lg-6" required>
                            </div>
                          </div>

                          <div class="row">
                              <div class="form-group col-lg-12">
                                  <label>Password:</label>
                                  <input type="password" name="password" placeholder="Masukan Password" class="form-control border-input" id="pass" required>
                                </div>
                          </div>

                            <div class="row">
                                <div class="input-group col-lg-12">
                                    <div class="input-group-prepend">
                                      <div class="input-group-text">
                                    <input type="checkbox" class="form-check-input" id="show" onclick="myFunction()">
                                    <label class="form-check-label" for="show">Tampilkan Password</label>
                                    </div>
                                    </div>
                                  </div>
                            </div>

                            <div class="row">
                               
                            <div class="form-group col-lg-12">
                              <label>Hak Akses Sistem:</label>
                              <select class="form-control border-input" name="role">
                                <option value="">Pilih Role</option>
                                <option value="admin">Admin</option>
                                <option value="basic">Basic</option>
                              </select>
                            </div>
                            
                            </div>

                            <div class="row">
                                
                            <div class="form-group col-lg-12">
                              <input type="submit" value="Tambahkan" class="btn btn-fill btn-block btn-primary">
                            </div>
                            
                            </div>
                          
                          </form>

                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
          </div>
    </div>
    <style type="text/css">
      .icons{
        display: none;
      }
    </style>
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