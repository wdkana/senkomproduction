  @if($galeris->count())
 @foreach($galeris as $image)
  <div class="portfolio-wrap">
          <figure>
            <img src="public/images/{{ $image->image }}" class="img-fluid" alt="">
            <a href="public/images/{{ $image->image }}" class="link-preview" data-lightbox="portfolio" data-title="App 2" title="Preview"><i class="ion ion-eye"></i></a>
            <a href="#" class="link-details" title="More Details"><i class="ion ion-android-open"></i></a>
          </figure>

          <div class="portfolio-info">
            <h4><a href="#">{{$image->title}}</a></h4>
            <p>Mengadakan berita acara 5.0</p>
          </div>
        </div>
        @endforeach
  @endif

