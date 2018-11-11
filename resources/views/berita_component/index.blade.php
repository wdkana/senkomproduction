<!DOCTYPE html>
<html>
<head>
    @include('template.head_user')
    <script src="{{url('https://www.google.com/recaptcha/api.js')}}" async defer></script>
    <title>Apk berita</title>
</head>
<body>
    <div class="wrapper">
        <div class="main-panel" style="background-color: darkorange">
            <nav class="navbar navbar-default"  style="background-color: darkorange">
                <div class="container-fluid">
                    <div class="navbar-header">
                        
                        <a class="navbar-brand" href="#" style="color: white">
                            SENKOM
                        </a>

                        <a class="navbar-brand" href="#" style="float: right;">
                            <!-- <i class="ti-close"></i> -->
                            <!-- <p>Settings</p> -->
                        </a>
                    </div>
                </div>
            </nav>

        <div class="content">
            <div class="container-fluid">

                <div class="row">
                    <div class="col-lg-8 col-md-7">
                        <div class="card">
                            <div class="header">
                                <center><a href="#intro"><img src="{{url('public/web/img/logosenkom.png')}}" width="50" alt="" title="" /></a></center><br /> 
                                <h4 class="title">Input Berita</h4>
                            </div>
                            <div class="content">
                                <form action="{{url('/berita/kirim')}}" method="post" role="form">
                                {{ csrf_field() }}
                                <?php
                                  $tgl = date('Y-m-d');
                                  $Jam = date('h:s a');
                                  $tanggal = $tgl;
                                  $jam = $Jam;
                                ?>

                                    <div class="row">
                                        <div class="col-md-12">
                                            <div class="form-group">
                                                <label>Callsign *</label>
                                                <input type="hidden" name="tgl" value="<?php echo $tanggal ?>">
                                                <input type="hidden" name="jam" value="<?php echo $jam ?>">
                                                <input type="text" name="callsign" class="form-control border-input" id="callsign" data-rule="minlen:2" data-msg="Please enter at least 2 chars" />
                                                <div class="validation"></div>
                                            
                                            </div>
                                        </div>
                                    </div>

                                    <div class="row">
                                        <div class="col-md-12">
                                            <div class="form-group">
                                                <label>No TLP/HP</label>
                                                <input type="number" name="tlp" class="form-control border-input" id="tlp" data-rule="minlen:2" data-msg="Please enter at least 2 chars" />
                                                <div class="validation"></div>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="row">
                                        <div class="col-md-12">
                                            <div class="form-group">
                                                <label>Isi Berita</label>
                                                <textarea class="form-control border-input" name="pesan" rows="5" data-rule="required" data-msg="Please write something for us" placeholder="isi pesan..."></textarea>
                                                <div class="validation"></div>
                                            </div>
                                        </div>
                                    </div>
                                        <div class="form">
                                            <div class="g-recaptcha" data-sitekey="6LcsQ3UUAAAAAFIiE7FGOtBld2EZWTCBOuwm9vCw">
                                            </div>
                                        </div><br/>
                                    <div class="text-center">
                                        <button type="submit" class="btn btn-info btn-fill btn-wd">Submit</button>
                                    </div>
                                    <div class="clearfix"></div>
                                </form>
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