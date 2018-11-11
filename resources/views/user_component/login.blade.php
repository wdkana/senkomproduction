<div class="section-header">
  <h3 style="color:#888;"><span class="icon"><i class="ion-ios-contact"></i></span> Login</h3>
</div>

<div class="form">
  <div id="sendmessage">Anda berhasil masuk</div>
  <div id="errormessage"></div>
  <form action="{{url('/loginPost')}}" method="post" role="form">
    {{ csrf_field() }} 

    <div class="form-group">
      <label>username:</label>
      <input type="text" name="username" class="form-control" id="inputUsername" data-rule="minlen:4" required>
      <!-- <div class="validation"></div> -->
    </div>

    <div class="form-group">
      <label>password:</label>
      <input type="password" class="form-control" name="password" id="inputPassword" data-rule="minlen:4" required>
      <!-- <div class="validation"></div> -->
    </div>

    <div class="text-center"><button type="submit" class="btn-block" style="background:#EAEAEA;color:black" value="Login">Masuk Akun</button></div>
  </form>
</div>
