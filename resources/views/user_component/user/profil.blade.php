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
                  <div class="col-md-6">
                      <div class="card">
                          <div class="header">
                            <h4 class="title">Informasi Data User</h4>
                                <!-- <p class="category">24 Hours performance</p> -->
                          </div>
                          <div class="content">
                            <div class="box-body">
                              <div class="form-group">
                                <input type="hidden" name="id" value="{{ $data->id }}">
                                Username :
                                <input type="text" name="username" placeholder="Masukan Username" class="form-control border-input" value="{{ $data->username }}" required>
                              </div>
                              <div class="form-group">
                                Role :
                                <input type="text" name="username" placeholder="Masukan Username" class="form-control border-input" value="{{ $data->role }}" required Disabled>
                              </div>
                              <div class="form-group">
                                Nama :
                                <input type="text" name="nama" placeholder="Masukan Nama" class="form-control border-input" value="{{ $data->nama }}" required>
                              </div>
                              <div class="form-group">
                                <a href="{{ url('/user/ubah',$data->id)  }}" class="btn btn-primary">Ubah Data</a>
                              </div>
                          </div>
            
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