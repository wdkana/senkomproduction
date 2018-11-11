
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
                      <a class="navbar-brand" href="#">Berita</a>
                  </div>  
              </div>
            </nav>

            <div class="content">
              <div class="container-fluid">
                <div class="row">
                  <div class="col-md-12">
                      <div class="card">
                          <div class="header">
                            <h3 class="title">List Berita</h3>
                            <hr />   
                          </div>
                          <div class="content">
                             @if(\Session::has('alert-'))
                            <div class="alert alert-danger">
                            <div>Tidak Ada Berita</div>
                            </div>
                          @endif
                          <!-- table feed --> 
                              <form action="{{ url('/user/berita') }}" method="post">
                                    {{ csrf_field() }}
                                      <?php
                                      $tgl = date('Y-m-d');
                                      $tanggal = $tgl;
                                    ?>
                                
                                <div class="form-group">
                                  <label style="color:#222;"><i><small>Filter Berdasarkan Tanggal <i class="fa fa-calendar-check-o" aria-hidden="true"></i>
                                  </small></i></label>
                                  <br/>
                                  <input type="date" name="tgl" class="dates" value="<?php echo $tgl; ?>">
                                  <button style="background:#596784" class="btn btn-primary btn-fill btn-wd" type="submit"> Filter</button>
                                </div>
                              </form>

                              <hr />

                              <div class="row">
                                @foreach($data_berita as $datas)
                                  <div class="col-lg-6 col-sm-6">
                                      <div class="card">
                                        <div class="col-xs-5">
                                        </div>
                                        <div class="content">
                                          <p>{{$datas->callsign}} - {{$datas->tlp}} - {{$datas->jam}}<br/>
                                          {{$datas->pesan}}
                                          
                                          <span style="float:right"> <?php if($datas->status_tampil == "tampil"){?>
                                            <a href="{{url('/berita/shownhide',$datas->id)}}" role="button" class="btn btn-fill btn-primary"><i class="fa fa-close"></i> Sembunyikan</a>
                                            <?php } else {
                                              ?>
                                              <a href="{{url('/berita/shownhide',$datas->id)}}" role="button" class="btn btn-fill btn-primary"><i class="fa fa-check"></i> Tampilkan</a>
                                              <?php
                                            }
                                            ?></span>
                                            </p>
                                          </div>
                                      </div>   
                                    </div>
                                  @endforeach
                                </div>
                                {{ $data_berita->links() }}
                              </div>
                                
                          </div>
                      </div>
                    </div>
                </div>
              </div>
            </div>

          </div>
      </div>
      <style>
    .dates{
box-sizing: border-box;
background-color: transparent;
font-size: 14px;
font-weight: 500;
padding: 7px 18px;
-webkit-transition: all 150ms linear;
-moz-transition: all 150ms linear;
-o-transition: all 150ms linear;
-ms-transition: all 150ms linear;
transition: all 150ms linear;
    }
    </style>
    
  </body>  

</html>