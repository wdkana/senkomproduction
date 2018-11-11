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
                    <a class="navbar-brand" href="#">List Data User</a>
                  </div>  
                </div>
              </nav>

              <div class="content">
                <div class="container-fluid">
                  <div class="row">
                     <div class="col-md-12">
                        <div class="card">
                          <div class="header">
                            <h4 class="title">Data User</h4>
                                <!-- <p class="category">24 Hours performance</p> -->
                          </div>
                          <div class="content">
                            @if(\Session::has('hapus'))
                              <div class="alert alert-success">
                                <div>{{ Session::get('hapus') }}</div>
                              </div>
                            @endif
                          <!-- table feed -->
                          <div class="table-responsive"> 
                          <table class="table table-striped" style="font-size: 12px">
                            <!-- Table head -->
                                <thead class="blue-grey lighten-4">
                                  <tr>
                                    <th class="text-center">No</th>
                                    <th class="text-center">Username</th>
                                    <th class="text-center">Password</th>
                                    <th class="text-center">Role</th>
                                    <th class="text-center">Nama</th>
                                    <th class="text-center">Di Buat</th>
                                    <th class="text-center">Terakhir Di Ubah</th>
                                    <th></th>
                                    <th></th>
                                  </tr>
                                </thead>
                                <!-- Table head -->
                                 <!-- Table body -->
                                <tbody>
                                @php $no = 1; @endphp
                                @foreach($data_user as $data)
                                <form action="{{ url('/delete') }}" method="post">
                                    {{ csrf_field() }}
                                    {{ method_field('DELETE') }}
                                  <tr>
                                    <td>{{ $no++ }}<input type="hidden" name="id" value="{{ $data->id }}"></td>
                                    <td>{{$data->username}}</td>
                                    <td>{{$data->password}}</td>
                                    <td>{{$data->role}}</td>
                                    <td>{{$data->nama}}</td>
                                    <td>{{$data->created_at}}</td>
                                    <td>{{$data->update_at}}</td>
                                    <td>
                                      <a href="{{ url('/admin/id',$data->id)}}" role="button" class="btn btn-fill btn-primary"><!-- <i class="ti-pencil-alt"></i> --> Edit</a>

                                      <!-- <a role="button" type="submit" class="btn btn-danger" value="Hapus" onclick="return confirm('Yakin ingin menghapus data?')">Hapus</a>
 -->
                                       <input type="submit" class="btn btn-fill btn-danger" value="Hapus" onclick="return confirm('Yakin ingin menghapus data?')"></input>

                                    </td>
                                  </tr>
                                </form>
                                @endforeach
                                </tbody>
                                <!-- Table body -->
                          </table>
                          </div>
                            
                           <!-- /table feed -->
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