<table class="table table-filter">
         
          @foreach($data_berita as $datas)
            <tr>
              <td>
                <div class="media">
                <div class="media-body text-white">
                    <h4 class="title">
                      {{$datas->callsign}} - {{$datas->tlp}}
                    </h4>
                    <p class="summary">{{$datas->pesan}}</p>
                  </div>
                </div>
              </td>
            </tr>
          @endforeach
        </table>
        {{ $data_berita->links() }}