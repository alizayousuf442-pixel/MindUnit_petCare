<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" 
          integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

    <!-- Google Fonts -->
     <link rel="stylesheet" href="css/login.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Libertinus+Keyboard&family=Rubik+Glitch&family=Story+Script&display=swap" rel="stylesheet">

    <title>Log In Page</title>

    
  </head>
  <body>
    <!-- containers -->
    <div class="container-fluid" style="height:100vh; width:100vw;">
      <div class="row h-100">
        <!-- left side image -->
        <div class="col-lg-6 d-none d-lg-block" 
             style="background-image:url('images/beautiful-autumn-lifestyle.jpg'); 
                    background-size:cover; 
                    background-repeat:no-repeat; 
                    background-position:center;">
        </div>

        <!-- right side foam -->
        <div class="col-lg-6 foam d-flex flex-column justify-content-center align-items-center" 
             style="min-height:100vh;">

          <div class="box d-flex flex-column justify-content-center align-items-center">
            <h1 class="rubik-glitch-regular text-center mb-4">Welcome to Login</h1>

            <form action="" method="POST" class="w-100">
              @csrf

              <div class="mb-3">
                <label for="email" class="form-label rubik-glitch-regular">Email</label>
                <input type="email" class="form-controls" id="email" placeholder="Enter your email">
              </div>

              <div class="mb-3">
                <label for="password" class="form-label rubik-glitch-regular">Password</label>
                <input type="password" class="form-controls" id="password" placeholder="Enter your password">
              </div>

              <div class="d-flex justify-content-center">
                <button type="submit" class="btn btn-warning">Submit</button>
     
              </div>
              <div class="d-flex justify-content-center">
               
     <p class="register-text">Don’t have an account? <a href="/regis">Register</a></p>
              </div>
              
            </form>
          </div>

        </div>
      </div>
    </div>

    <!-- Bootstrap Bundle -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" 
            integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" 
            crossorigin="anonymous"></script>
  </body>
</html>
