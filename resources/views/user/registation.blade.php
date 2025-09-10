<!doctype html>
<html lang="en">
  <head>
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

    <title>Registration Page</title>

    <style>
      html, body {
        height: 100%;
      }

      .foam {
        background-color: #fff8f0; /* optional background */
        padding: 2rem;
      }

      .form-controls {
        width: 100%;
        padding: 0.5rem 1rem;
        border: 1px solid #ccc;
        border-radius: 0.25rem;
      }

      .box {
        max-width: 450px;
        width: 100%;
        padding: 2rem;
        background: #ffffff;
        border-radius: 10px;
        box-shadow: 0 0 20px rgba(0,0,0,0.1);
      }

      .btn-warning {
        width: 100%;
        padding: 0.75rem;
      }

      .register-text {
        margin-top: 1rem;
      }

      @media (max-width: 992px) {
        .col-lg-6.d-none.d-lg-block {
          display: none !important;
        }

        .foam {
          min-height: auto;
          padding: 3rem 1rem;
        }
      }
    </style>
  </head>
  <body>

    <div class="container-fluid h-100">
      <div class="row h-100">

        <!-- Registration Form -->
        <div class="col-12 col-lg-6 d-flex flex-column justify-content-center align-items-center foam">
          <div class="box text-center">
            <h1 class="rubik-glitch-regular mb-4">Welcome to Registration</h1>

            <form action="" method="POST" enctype="multipart/form-data">
              @csrf

              <div class="mb-3 text-start">
                <label for="name" class="form-label rubik-glitch-regular">Name</label>
                <input type="text" name="name" class="form-controls" id="name" placeholder="Enter your name" required>
              </div>

              <div class="mb-3 text-start">
                <label for="image" class="form-label rubik-glitch-regular">Profile Image</label>
                <input type="file" name="image" class="form-controls" id="image" accept="image/*">
              </div>

              <div class="mb-3 text-start">
                <label for="email" class="form-label rubik-glitch-regular">Email</label>
                <input type="email" name="email" class="form-controls" id="email" placeholder="Enter your email" required>
              </div>

              <div class="mb-3 text-start">
                <label for="password" class="form-label rubik-glitch-regular">Password</label>
                <input type="password" name="password" class="form-controls" id="password" placeholder="Enter your password" required>
              </div>

              <div class="mb-3 text-start">
                <label for="password_confirmation" class="form-label rubik-glitch-regular">Confirm Password</label>
                <input type="password" name="password_confirmation" class="form-controls" id="password_confirmation" placeholder="Confirm your password" required>
              </div>

              <button type="submit" class="btn btn-warning mb-3">Register</button>

              <p class="register-text">Already have an account? <a href="{{ route('login') }}">Login</a></p>
            </form>
          </div>
        </div>

        <!-- Left Image (hidden on small screens) -->
        <div class="col-lg-6 d-none d-lg-block" 
             style="background-image:url('images/beautiful-autumn-lifestyle.jpg'); 
                    background-size:cover; 
                    background-position:center;">
        </div>
      </div>
    </div>

    <!-- Bootstrap Bundle -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" 
            integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" 
            crossorigin="anonymous"></script>
  </body>
</html>
