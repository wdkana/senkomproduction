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
                <a class="navbar-brand" href="#">Data User</a>
              </div>  
            </div>
          </nav>

            <div class="content">
              <div class="container-fluid">
                <div class="row">
                                <div class="col-sm-6 col-md-12 col-xl-12">
                                  <div class="card">
                                    <div class="card-body" style="margin:25px;padding:15px">
                                      <h3 class="card-title">Konfigurasi Data User</h3>
                                      <p class="card-text">Anda dapat menambahkan dan mengelola user yang ada di sistem ini, silahkan klik tombol dibawah</p>
                                      <br/>
                                    <a href="{{url('/datauser')}}" style="background:#596784" class="btn btn-primary btn-fill"><i class="fa fa-search"></i> Lihat User</a>
                                      <a href="{{url('/tambahuser')}}" style="background:#596784" class="btn btn-primary btn-fill"><i class="fa fa-plus-square"></i> Tambah User</a>
                                      <br/>
                                      <br/>
                                    </div>
                                  </div>
                                </div> 
                </div>
              </div>
            </div>

        </div>
    </div>


 
  </body> 
</html>