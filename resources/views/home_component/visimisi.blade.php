<!DOCTYPE html>
<html>
<head>
 @include('template.head_home')
	<title></title>
</head>
<body>
 @include('layouts.nav_home')

  <div class="container">
    <div class="section" style="margin-top: -7%"">
        <!-- details -->
    <section class="details-books py-5">
        <div class="container py-md-4 mt-md-3">
        <h2 class="heading-agileinfo">Tentang Senkom <span>Visi, Misi, tujuan Lingkup Dan Kegiatan</span></h2>
            <span class="w3-line black"></span>
            <div class="row mt-md-5 pt-4">
            <div class="col-lg-6 agileits_updates_grid_right">
                    <div id="accordion">
                      <div class="card w3l-acd">
                        <div class="card-header wl3_head" id="headingOne">
                          <h5 class="mb-0">
                            <button class="btn btn-link" data-toggle="collapse" data-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                             <span class="fa fa-check mr-2" aria-hidden="true"></span>
                                    VISI
                            </button>
                          </h5>
                        </div>
                        <div id="collapseOne" class="collapse show" aria-labelledby="headingOne" data-parent="#accordion">
                          <div class="card-body">
                            <p>Sentra Komunikasi (Senkom) Mitra Polri mempunyai visi menjadi lembaga yang handal dan profesional dalam membantu mewujudkan keamanaan dan ketertiban nasional melalui peningkatan kesadaran masyarakat.</p>
                          </div>
                        </div>
                      </div>
                      <div class="card w3l-acd">
                        <div class="card-header wl3_head" id="headingTwo">
                          <h5 class="mb-0">
                            <button class="btn btn-link collapsed" data-toggle="collapse" data-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                             <span class="fa fa-check mr-2" aria-hidden="true"></span>
                                     MISI
                            </button>
                          </h5>
                        </div>
                        <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo" data-parent="#accordion">
                          <div class="card-body">
                            <p> Sembangun kesadaran serta memperluas peran masyarakat dalam ikut membantu pemerintah dan Polri guna menciptakan negara yang aman, tenteram dan damai serta terciptanya keamanan mandiri di lingkungan masyarakat.</p>
                          </div>
                        </div>
                      </div>
                      <div class="card w3l-acd">
                        <div class="card-header wl3_head" id="headingThree">
                          <h5 class="mb-0">
                            <button class="btn btn-link collapsed" data-toggle="collapse" data-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                             <span class="fa fa-check mr-2" aria-hidden="true"></span>
                                    TUJUAN DAN lINGKUP KEGIATAN
                            </button>
                          </h5>
                        </div>
                        <div id="collapseThree" class="collapse" aria-labelledby="headingThree" data-parent="#accordion">
                          <div class="card-body">
                            <p>Memasyarakatkan kamtibmas, meningkatkan kesadaran masyarakat tentang hukum dan kamtibmas serta merupakan wujud partisipasi dalam pembinaan kamtibmas. Sebagai Mitra Polri, Senkom selalu berkoordinasi dan memberikan informasi kepada aparat berwajib baik Pemerintah Pusat, Pemerintah Daerah maupun TNI/Polri terhadap adanya gangguan kamtibmas, stabilitas Nasional, dan bencana alam yang dijumpai di manapun anggota Senkom berada.</p>
                          </div>
                        </div>
                      </div>
                    </div>
            </div>
            <div class="col-lg-6 details-w3l">
                <img class="img-fluid" src="{{url('public/img_senkom/ada3.jpg')}}">
            </div>
            </div>
        </div>
    </section>
    <!-- //details -->
    </div>
   </div>
</body>
</html>