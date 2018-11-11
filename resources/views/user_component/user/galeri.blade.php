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
                    <a class="navbar-brand" href="#">Data Gallery</a>
                  </div>  
            </div>
          </nav>

          <div class="content">
            <div class="container-fluid">
              <div class="row">
                <!-- FOTO UPLOAD START -->
                <div class="col-md-6">
                  <div class="card">
                      <div class="header" style="background:#596784">
                        <h4 class="title" style="color:white">Tambah Foto</h4>
                        <br/>  
                    </div>           
                      
                        <form action="{{ URL('/galeri') }}" class="form-image-upload" method="post" enctype="multipart/form-data">
                            {!! csrf_field() !!}


                            @if (count($errors) > 0)
                                <div class="alert alert-danger">
                                   
                                    <strong>Whoops!</strong> There were some problems with your input.<br><br>
                                    <ul>
                                        @foreach ($errors->all() as $error)
                                            <li>{{ $error }}</li>
                                        @endforeach
                                    </ul>
                                </div>
                            @endif


                            @if ($message = Session::get('success'))
                            <div class="alert alert-success alert-block">
                                <button type="button" class="close" data-dismiss="alert">×</button>
                                    <strong>{{ $message }}</strong>
                            </div>
                            @endif


                            <div class="row">
                                <div class="col-md-6"></div>
                                <div class="col-md-12">
                                    <strong>Pilih Foto:</strong>
                                    <input type="file" name="image" class="form-control border-input">
                                </div>
                                <div class="col-md-12">
                                        <strong>Deskripsi:</strong>
                                        <textarea type="text" name="title" class="form-control border-input"></textarea>
                                    </div>
                                <div class="col-md-4">
                                    <button type="submit" class="btn">SIMPAN FOTO</button>
                                </div>
                            </div>
                        </form>   
                </div>
            </div>
            <!-- FOTO UPLOAD END -->

            <!-- VIDEO UPLOAD START -->
            <div class="col-md-6">
                  <div class="card">
                      <div class="header" style="background:#596784">
                        <h4 class="title" style="color:white">Tambah Video</h4>
                        <br/>
                      </div>             
                        <form action="{{ URL('/galeri') }}" class="form-image-upload" method="post" enctype="multipart/form-data">
                            {!! csrf_field() !!}


                            @if (count($errors) > 0)
                                <div class="alert alert-danger">
                                   
                                    <strong>Whoops!</strong> There were some problems with your input.<br><br>
                                    <ul>
                                        @foreach ($errors->all() as $error)
                                            <li>{{ $error }}</li>
                                        @endforeach
                                    </ul>
                                </div>
                            @endif


                            @if ($message = Session::get('success'))
                            <div class="alert alert-success alert-block">
                                <button type="button" class="close" data-dismiss="alert">×</button>
                                    <strong>{{ $message }}</strong>
                            </div>
                            @endif


                            <div class="row">
                                <div class="col-md-12"></div>
                                <div class="col-md-12">
                                    <strong>Embedded URL link:</strong>
                                    <input type="text" name="videolink" class="form-control border-input" placeholder="contoh: https://you.tube/e332s">
                                </div>
                                <div class="col-md-12">
                                        <strong>Deskripsi Video:</strong>
                                        <textarea type="text" name="title" class="form-control border-input"></textarea>
                                </div>
                                <div class="col-md-4">
                                    <button type="submit" class="btn">SIMPAN VIDEO</button>
                                </div>
                            </div>
                        </form>   
                
                </div>
            </div>
            <!-- VIDEO UPLOAD END -->
            <style>
                .btn{
                    border:black;
                    background:#596784;
                    text-align: left;
                    color:white;
                }
                .btn:hover{
                    background:#425381;
                    color:white;
                }
            </style>
       
        </div>


                        <div class='list-group gallery'>
                          @if($galeris->count())
                          @foreach($galeris as $image)
                          <div class="col-md-4 col-xl-3 col-lg-3 col-xs-12">
                                <div class="shadow p-3 mb-5 rounded" style="background:white">
                              <a class="thumbnail" rel="ligthbox" href="public/images/{{ $image->image }}">
                                <img class="img-responsive" style="height:300px;width:720px" alt="" src="public/images/{{ $image->image }}" />
                            </a>
                                <h5 style="text-align:center">Deskripsi</h5>
                                <hr/>
                                <p style="color:black;margin-bottom:5px;padding:10px;height:100px">{{$image->title}}</p>    
                              <a href="{{ url('/galeri/set1',$image->id) }}" class="btn btn-block" style="text-align:center">Set Ke Slider 1</a>
                                <a href="{{ url('/galeri/set2',$image->id) }}" class="btn btn-block" style="text-align:center">Set Ke Slider 2</a>
                            </div>
                              <form action="{{ url('galeri',$image->image) }}" method="POST">
                                  <input type="hidden" name="_method" value="delete">
                                          {!! csrf_field() !!}
                                  <button type="submit" class="close-icon btn-fill btn btn-danger" onclick="return confirm('Yakin ingin menghapus data?')"><i class="ti-close"></i></button>
                              </form>
                          </div>
                          @endforeach
                          @endif
                        </div>
                
              </div>
            </div>
          </div>
        </div>
    </div>
  </body>
<style type="text/css">
  input[type=number]::-webkit-inner-spin-button, 
  input[type=number]::-webkit-outer-spin-button { 
  -webkit-appearance: none; 
}
</style>


<script type="text/javascript">
    $(document).ready(function(){
        $(".fancybox").fancybox({
            openEffect: "none",
            closeEffect: "none"
        });
    });
    $(".delete").on("submit", function(){
        return  confirm("Yakin ingin menghapus gambar?");
    })
</script>

<style type="text/css">
    .gallery
    {
        display: inline-block;
        margin-top: 20px;
    }
    .close-icon{
        border-radius: 50%;
        position: absolute;
        right: 5px;
        top: -10px;
        padding: 5px 8px;
    }
    .form-image-upload{
        background: #e8e8e8 none repeat scroll 0 0;
        padding: 15px;
    }
    </style>
</html>