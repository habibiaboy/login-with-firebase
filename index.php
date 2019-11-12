 <html>
<head>
  <title>Firebase Login</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link href="https://fonts.googleapis.com/css?family=Nunito:400,600,700" rel="stylesheet">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
  <link rel="stylesheet" href="css/style.css" type="text/css" />
</head>
<body>


   <div id="login_div" class="container-fluid" >
    <div class="row justify-content-center">
      <section class="col-12 col-sm-6 col-md-3">
        
          <div class="form-container">
            <h3>Firebase Login Example 2</h3>
            <div class="form-group">
              <label for="exampleInputEmail1">Email address</label>
              <input type="email" placeholder="Email..." id="email_field" class="form-control" />
            </div>
            <div class="form-group">
              <label for="exampleInputPassword1">Password</label>
              <input type="password" placeholder="Password..." id="password_field" class="form-control" />
            </div>
            <button type="submit" class="btn btn-primary btn-block" onclick="login()">Login to Account</button>
          </div>
      </section>
    </div>
  </div>





  <div id="user_div" class="container-fluid">
    <div class="row justify-content-center">
      <section class="col-12 col-sm-6 col-md-3">
        <form class="form-container">
          <h3>Welcome User</h3>
          <p id="user_param">Welcome to Firebase web login Example. You're currently logged in.</p>
          <button onclick="logout()">Logout</button>
        </form>
      </section>
    </div>
  </div>
  
  
  <!----------------------------------------------------------------------- -->
  <!-- The core Firebase JS SDK is always required and must be listed first -->
  <script src="https://www.gstatic.com/firebasejs/7.3.0/firebase-app.js"></script>
  <!-- tambahan-->
  <script src="https://www.gstatic.com/firebasejs/7.3.0/firebase-auth.js"></script>
  <script>
    // Your web app's Firebase configuration
    var firebaseConfig = {
      apiKey: "",
      authDomain: "",
      databaseURL: "",
      projectId: "",
      storageBucket: "",
      messagingSenderId: "",
      appId: ""
    };
    // Initialize Firebase
    firebase.initializeApp(firebaseConfig);
  </script>
  <script src="js/index.js"></script>

</body>
</html>
