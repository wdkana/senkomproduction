
<html>

<head>
   @include('template.head_home')
    
  <style>


/* style inputs and link buttons */
input,
.btn {
  width: 100%;
  padding: 12px;
  border: none;
  border-radius: 4px;
  margin: 5px 0;
  opacity: 0.85;
  display: inline-block;
  font-size: 17px;
  line-height: 20px;
  text-decoration: none; /* remove underline from anchors */
}

input:hover,
.btn:hover {
  opacity: 1;
}



/* style the submit button */
input[type=submit] {
  background-color: #4CAF50;
  color: white;
  cursor: pointer;
}

input[type=submit]:hover {
  background-color: #45a049;
}

/* Two-column layout */
.col {
  float: left;
  width: 50%;
  margin: auto;
  padding: 0 50px;
  margin-top: 6px;
}

/* Clear floats after the columns */
.row:after {
  content: "";
  display: table;
  clear: both;
}

/* vertical line */
.vl {
  position: absolute;
  left: 50%;
  transform: translate(-50%);
  border: 2px solid #ddd;
  height: 175px;
}

/* text inside the vertical line */
.vl-innertext {
  position: absolute;
  top: 50%;
  transform: translate(-50%, -50%);
  background-color: #f1f1f1;
  border: 1px solid #ccc;
  border-radius: 50%;
  padding: 8px 10px;
}

/* hide some text on medium and large screens */
.hide-md-lg {
  display: none;
}

/* bottom container */
.bottom-container {
  text-align: center;
  background-color: #cccccc;
  border-radius: 0px 0px 4px 4px;
}

/* Responsive layout - when the screen is less than 650px wide, make the two columns stack on top of each other instead of next to each other */
@media screen and (max-width: 650px) {
  .col {
    width: 100%;
    margin-top: 0;
  }
  /* hide the vertical line */
  .vl {
    display: none;
  }
  /* show the hidden text on small screens */
  .hide-md-lg {
    display: block;
    text-align: center;
  }
}
  </style>
</head>

<body>

<!-- Navigation -->
<body id="page-top">  
 @include('layouts.nav_home')

 <!--  Form Login -->
<!--  <center>     
      <div class="section">
      <div class="container">
        <div class="z-depth-1 grey lighten-4 row" style="display: inline-block; padding: 32px 48px 0px 48px; border: 1px solid #EEE;">

          <form method="post" action="{{ url('/loginPost') }}" class="class="col s12"">
           {{ csrf_field() }}  
            <div class='row'>
              <div class='col s12'>
              </div>
            </div>

            <div class='row'>
              <div class='input-field col s12'>
                <input type="text" id="inputUsername" class="validate" name="username" required>
              <label for="username">Username</label>
              </div>
            </div>

            <div class='row'>
              <div class='input-field col s12'>
                <input type="password" id="inputPassword" class="validate" name="password" required>
                <label for="Password">Password</label>
              </div>
            </div>

            <br />
            <center>
              <div class='row'>
                <button type='submit' name='btn_login' class='col s12 btn btn-large waves-effect indigo'>Login</button>
                <hr/>
              </div>
            </center>
          </form>
        </div>
      </div>
</center> -->

  <div class="container">
        <div class="section" style="margin-top: 7%">
          <form method="post" action="{{ url('/loginPost') }}">
            {{ csrf_field() }}  
            <div class="row">
              
              <div class="col-sm-3"></div>
              <div class="col-sm-6 center" style="background-color:#cccccc ">
              <div class="container py-md-4 mt-md-3">
                   <center><img src="{{url('public/img_senkom/index.png')}}" style="width: 15%"> 
                   <h3>Masuk Akun</h3></center>
                        <span class="w3-line black"></span>
                    </div>
                <input type="text" id="inputUsername" name="username"  placeholder="Username" required>
                <input type="password" id="inputPassword" name="password" placeholder="Password" required>
                <input type="submit" value="Login" name='btn_login'>
              </div>
              <div class="col-sm-3"></div>

            </div>
          </form>      

        </div>
  </div>


</body>
</html>

