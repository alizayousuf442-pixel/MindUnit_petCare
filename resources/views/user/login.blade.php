<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />

    <!-- Bootstrap CSS -->
    <link
      href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css"
      rel="stylesheet"
      integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC"
      crossorigin="anonymous"
    />

    <!-- Google Fonts -->
    <link rel="stylesheet" href="css/login.css" />
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link
      href="https://fonts.googleapis.com/css2?family=Libertinus+Keyboard&family=Rubik+Glitch&family=Story+Script&display=swap"
      rel="stylesheet"
    />

    <title>Log In Page</title>

    <!-- Font Awesome -->
    <link
      rel="stylesheet"
      href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css"
      crossorigin="anonymous"
      referrerpolicy="no-referrer"
    />
  </head>
  <body>
    <div class="container-fluid h-100">
      <div class="row h-100">
        <!-- Left Image (hidden on small screens) -->
        <div
          class="col-lg-6 d-none d-lg-block"
          style="
            background-image: url('images/beautiful-autumn-lifestyle.jpg');
            background-size: cover;
            background-position: center;
          "
        ></div>

        <!-- Right Form -->
        <div
          class="col-12 col-lg-6 d-flex flex-column justify-content-center align-items-center foam"
          style="min-height: 100vh"
        >
          <div class="box text-center w-100 px-3 px-lg-5" style="max-width: 400px">
            <h1 class="rubik-glitch-regular mb-4">Welcome to Login</h1>

            @if(session()->has('success'))
            <p class="alert alert-success">{{ session()->get('success') }}</p>
            @endif
            @if(session()->has('danger'))
            <p class="alert alert-danger">{{ session()->get('danger') }}</p>
            @endif

            <form action="/loginUser" method="POST" class="w-100">
              @csrf

              <div class="mb-3 text-start">
                <label for="email" class="form-label rubik-glitch-regular"
                  >Email</label
                >
                <input
                  type="email"
                  class="form-controls form-control"
                  id="email"
                  placeholder="Enter your email"
                  name="email"
                />
              </div>
              @error('email')
              <p class="alert alert-danger">{{ $message }}</p>
              @enderror

              <div class="mb-3 text-start">
                <label for="password" class="form-label rubik-glitch-regular"
                  >Password</label
                >
                <input
                  type="password"
                  class="form-controls form-control"
                  id="password"
                  placeholder="Enter your password"
                  name="password"
                />
              </div>
              @error('password')
              <p class="alert alert-danger">{{ $message }}</p>
              @enderror

              <div class="d-flex justify-content-center mb-3">
                <button type="submit" class="btn btn-warning w-100">
                  Submit
                </button>
              </div>

              <div class="d-flex justify-content-center mb-3">
                <a
                  href="/"
                  class="btn btn-google d-flex align-items-center justify-content-center gap-2 w-100"
                 
                >
                  <i class="fab fa-google"></i> Continue with Google
                </a>
              </div>

              <div class="d-flex justify-content-center">
                <p class="register-text">
                  Don’t have an account? <a href="/regis">Register</a>
                </p>
              </div>
            </form>
          </div>
        </div>
      </div>
    </div>

    <!-- Bootstrap Bundle -->
    <script
      src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
      integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM"
      crossorigin="anonymous"
    ></script>
  </body>
</html>
