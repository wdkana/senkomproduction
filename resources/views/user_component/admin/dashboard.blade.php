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
            <a class="navbar-brand" href="#">Dashboard</a>
          </div>  
        </div>
      </nav>


      <main id="main">
        
            <div class="container-fluid">
              <h1 class="jumbotron">Welcome to dashboard admin</h1>
            </div>
            <section class="section-bg wow fadeInUp">
                <div class="row about-cols">
            
                    <div class="col-md-6 wow fadeInUp">
                      <div class="container">
                        <h5><i class="fa fa-key"></i> Panduan Penggunaan</h5>
                      </div>
                        <ul class="list-group list-group-flush">
                            <li class="list-group-item" data-toggle="modal" data-target="#faq1" type="button">Bagaimana Cara Melihat Data Pengguna Sistem?</li>
                            <li class="list-group-item" data-toggle="modal" data-target="#faq2" type="button">Bagaimana Cara Mengganti Gambar Slider Pada Halaman Pemantauan?</li>
                            <li class="list-group-item" data-toggle="modal" data-target="#faq3" type="button">Bagaimana Cara Mengelola Berita?</li>
                          </ul>
                    </div>
                    <div class="col-md-6 wow fadeInUp">
                      
                        <!--==========================
Footer
============================-->
<footer id="footer">
    <div class="footer-top">
      <div class="container">
        <div class="row"  id="kontak">
  
          <div class="col-lg-4 col-md-4 footer-info">
            <h3>Senkom</h3>
            <p>Senkom Mitra Polri adalah salah satu organisasi masyarakat sadar kamtibmas yang didirikan oleh anggota Mitra Kamtibmas Mabes Polri, pada hari Kamis tanggal 1 Januari 2004 di Jakarta.</p>
          </div>
        </div>

        <div class="row"  id="kontak">
        <div class="col-lg-4 col-md-4 footer-links">
            <h4>Links</h4>
            <ul>
              <li><i class="ion-ios-arrow-right"></i> <a href="#">Polri</a></li>
              <li><i class="ion-ios-arrow-right"></i> <a href="#">Basarnas</a></li>
              <li><i class="ion-ios-arrow-right"></i> <a href="#">Kemenkeu</a></li>
            </ul>
          </div>
        </div>

      </div>
    </div>
  
    <div class="container">
      <div class="copyright">
        &copy; Copyright <strong>Senkom</strong>. All Rights Reserved
      </div>
      <div class="credits">
  </div>
  </div>
  </footer><!-- #footer -->
      
                      </div>
           
                  </div>  
            </section>  
      </div>
    
    
    </div>

    <!-- FAQ 1 -->
    <div class="modal fade" id="faq1" tabindex="-1" role="dialog" aria-labelledby="exampleModalLong" aria-hidden="true">
        <div class="modal-dialog" role="document">
          <div class="modal-content">
            <div class="modal-header">
              <h5 class="modal-title" id="exampleModalLongTitle">Cara Melihat Daftar Pengguna Sistem</h5>
              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
              </button>
            </div>
            <div class="modal-body">
              <ol>
                <li>Cari menu "Data User" yang ada pada Side Menu Program</li>
                <li>Klik menu tersebut</li>
                <li>Anda akan melihat 2 buah tombol
                  <ul>
                    <li>
                      tombol untuk melihat semua data user
                    </li>
                    <li>
                      tombol untuk menambahkan user baru
                    </li>
                  </ul>
                </li>
                <li>Klik tombol lihat user</li>
                <li>Anda berhasil masuk ke menu semua data user</li>
              </ol>
              <hr/>
              <center><b>Anda dapat menggunakan fitur ini untuk</b></center>
              <br/>
              <small>
              <ul>
                 <li>melihat seluruh data pengguna</li>
                 <li>menambahkan user baru kedalam sistem</li>
                 <li>menghapus user yang sudah terdaftar</li>
                 <li>mengelola data user</li>
               </ul>
              </small>
            </div>
            <div class="modal-footer">
              <button type="button" class="btn btn-secondary" data-dismiss="modal">Tutup</button>
            </div>
          </div>
        </div>
      </div>
      <!-- end FAQ 1 -->

      <!-- FAQ 2 -->
    <div class="modal fade" id="faq2" tabindex="-1" role="dialog" aria-labelledby="exampleModalLong" aria-hidden="true">
      <div class="modal-dialog" role="document">
        <div class="modal-content">
          <div class="modal-header">
            <h5 class="modal-title" id="exampleModalLongTitle">Bagaimana Cara Mengganti Slider Gambar Pada Halaman Pemantauan?</h5>
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
              <span aria-hidden="true">&times;</span>
            </button>
          </div>
          <div class="modal-body">
            <ol>
              <li>Cari menu "Galeri" yang ada pada Side Menu Program</li>
              <li>Klik menu tersebut</li>
              <li>Anda akan melihat 2 buah tombol di setiap gambar
                <ul>
                  <li>
                    tombol "set ke slider 1" untuk memasukan foto ke slider pertama yang ada di pemantauan
                  </li>
                  <li>
                    tombol "set ke slider 2" untuk memasukan foto ke slider kedua yang ada di pemantauan
                  </li>
                </ul>
              </li>
              <li>Lalu akan muncul pemberitahuan konfirmasi tindakan</li>
              <li>Klik "Ok" jika anda ingin melakukan perubahan</li>
            </ol>
            <hr/>
            <center><b>Anda dapat menggunakan fitur ini untuk</b></center>
            <br/>
            <small>
            <ul>
               <li>Menambahkan gambar atau video ke dalam sistem</li>
               <li>Menghapus gambar yang sudah ada di sistem</li>
               <li>Mengatur slider yang ada pada halaman pemantauan</li>
             </ul>
            </small>
          </div>
          <div class="modal-footer">
            <button type="button" class="btn btn-secondary" data-dismiss="modal">Tutup</button>
          </div>
        </div>
      </div>
    </div>
    <!-- end FAQ 2 -->

     <!-- FAQ 3 -->
     <div class="modal fade" id="faq3" tabindex="-1" role="dialog" aria-labelledby="exampleModalLong" aria-hidden="true">
      <div class="modal-dialog" role="document">
        <div class="modal-content">
          <div class="modal-header">
            <h5 class="modal-title" id="exampleModalLongTitle">Bagaimana Cara Mengelola Berita?</h5>
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
              <span aria-hidden="true">&times;</span>
            </button>
          </div>
          <div class="modal-body">
            <ol>
              <li>Cari menu "Berita" yang ada pada Side Menu Program</li>
              <li>Klik menu tersebut</li>
              <li>Filter berdasarkan tanggal berfungsi untuk menyeleksi berita berdasarkan tanggal yang anda pilih</li>
              <li>Di setiap berita sebuah tombol yang berfungsi untuk:
                <ul>
                  <li>
                    tombol "tampilkan" untuk menampilkan berita di halaman pemantauan
                  </li>
                  <li>
                    tombol "sembunyikan" untuk menyembunyikan berita dari halaman pemantauan
                  </li>
                </ul>
              </li>
              <li>Lalu akan muncul pemberitahuan konfirmasi tindakan</li>
              <li>Klik "Ok" jika anda ingin melakukan perubahan</li>
            </ol>
            <hr/>
          </div>
          <div class="modal-footer">
            <button type="button" class="btn btn-secondary" data-dismiss="modal">Tutup</button>
          </div>
        </div>
      </div>
    </div>
    <!-- end FAQ 3 -->

  </main>
  <script>

  </script>
</body>
</html>