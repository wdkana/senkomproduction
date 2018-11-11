    
    <div class="sidebar" data-background-color="white" data-active-color="danger">

    <!--
        Tip 1: you can change the color of the sidebar's background using: data-background-color="white | black"
        Tip 2: you can change the color of the active button using the data-active-color="primary | info | success | warning | danger"
    -->

        <div class="sidebar-wrapper">
            <div class="logo">
               <center><img src="{{url('public/admin/img/index.png')}}" class="img-fluid text-center" alt="senkom polri">
                <a href="/" class="simple-text">
                    Senkom
                </a>
              </center>
            </div>

            <ul class="nav">
                <li>
                    <a href="{{ url('/user/dashboard') }}">
                        <p><i class="fa fa-btn fa-th"></i> Dashboard</p>
                    </a>
                </li>
                <li>
                    <a href="{{ url('/user/profile') }}">
                        <i class="ti-user"></i>
                        <p>Profil</p>
                    </a>
                </li>
                <li>
                    <a href="{{ url('/user') }}">
                        <i class="ti-book"></i>
                        <p>Berita</p>
                    </a>
                </li>
                <li>
                    <a href="{{ url('/galeri') }}">
                        <i class="ti-image"></i>
                        <p>Galeri</p>
                    </a>
                </li>
                <li class="active-pro">
                    <a href="{{ url('/logout') }}" id="logout">
                        <i class="ti-export"></i>
                        <p>Log Out</p>
                    </a>
                </li>
            </ul>
        </div>
    </div>
    
    <script type="text/javascript">
        $(function(){
    $('a#logout').click(function(){
        if(confirm('Are you sure to logout')) {
            return true;
        }

        return false;
    });
});
    </script>