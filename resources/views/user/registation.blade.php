<!doctype html>
<html lang="en">
  <head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">




    <!-- Bootstrap CSS -->
    <link
      href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css"
      rel="stylesheet"
    />

    <!-- Google Fonts -->


    <link rel="stylesheet" href="{{asset('css/login.css')}}" />
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link
      href="https://fonts.googleapis.com/css2?family=Libertinus+Keyboard&family=Rubik+Glitch&family=Story+Script&display=swap"
      rel="stylesheet"
    />
<link
  rel="stylesheet"
  href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css"
  crossorigin="anonymous"
  referrerpolicy="no-referrer"
/>
    <title>Log In Page</title>

    <style>
    
      html,
      body {
        height: 100%;
        margin: 0;
      }

      .foam {
        min-height: 100vh;
        padding: 2rem 1rem;
      }

      .box {
        width: 100%;
        max-width: 400px;
        margin: auto;
      }


      @media (max-width: 992px) {
        .col-lg-6.bg-img {
          display: none;
        }
      }

     
      @media (max-width: 576px) {
        .foam h1 {
          font-size: 1.8rem;

        }
      }
    </style>
  </head>
  <body>

    <div class="container-fluid h-100">
      <div class="row h-100">
        <!-- Form Section -->
        <div
          class="col-lg-6 foam d-flex flex-column justify-content-center align-items-center"
        >
          <div class="box">
            <h1 class="rubik-glitch-regular text-center mb-4">
              Welcome to Registration
            </h1>

            <form action="/register" method="POST" enctype="multipart/form-data" class="w-100">
              @csrf

              <div class="mb-3">
                <label for="name" class="form-label rubik-glitch-regular">Name</label>
                <input
                  type="text"
                  name="name"
                  class="form-control"
                  id="name"
                  placeholder="Enter your name"
                />
              </div>
@error('name')
<p class="alert alert-danger">{{$message}}</p>
@enderror

              <div class="mb-3">
                <label for="email" class="form-label rubik-glitch-regular">Email</label>
                <input
                  type="email"
                  name="email"
                  class="form-control"
                  id="email"
                  placeholder="Enter your email"
                />
              </div>
@error('email')
<p class="alert alert-danger">{{$message}}</p>
@enderror
              <div class="mb-3">
                <label for="password" class="form-label rubik-glitch-regular">Password</label>
                <input
                  type="password"
                  name="password"
                  class="form-control"
                  id="password"
                  placeholder="Enter your password"
                />
              </div>
@error('password')
<p class="alert alert-danger">{{$message}}</p>
@enderror
              <div class="mb-3">
                <label
                  for="password_confirmation"
                  class="form-label rubik-glitch-regular"
                >
                  Confirm Password
                </label>
                <input
                  type="password"
                  name="password_confirmation"
                  class="form-control"
                  id="password_confirmation"
                  placeholder="Confirm your password"
                />
              </div>
@error('password_confirmation')
<p class="alert alert-danger">{{$message}}</p>
@enderror
              <div class="d-grid">
                <button type="submit" class="btn btn-warning">Register</button>
              </div>
          <div class="d-flex justify-content-center mt-3">
  <a href="/" class="btn btn-google d-flex align-items-center justify-content-center gap-2 w-100">
    <i class="fab fa-google"></i> Continue with Google
  </a>
</div>
              <div class="text-center mt-3">
                <p class="register-text">
                  Already have an account? <a href="{{ route('login') }}">Login</a>
                </p>
              </div>

            </form>
          </div>
        </div>


        <!-- Image Section -->
        <div
          class="col-lg-6 bg-img d-none d-lg-block"
          style="
            background-image: url('images/beautiful-autumn-lifestyle.jpg');
            background-size: cover;
            background-position: center;
          "
        ></div>

      </div>
    </div>

    <script
      src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
    ></script>
  </body>
</html>
