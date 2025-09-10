<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />

   <link
      href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css"
      rel="stylesheet"
    />

<link rel="stylesheet" href="{{asset('css/style.css')}}">
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link
      href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;600;700&display=swap"
      rel="stylesheet"
    />


    <link
      rel="stylesheet"
      href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css"
      crossorigin="anonymous"
      referrerpolicy="no-referrer"
    />

    <title>Select Role</title>

   

  </head>

  <body>
    <h1>Select Your Role</h1>

    <div class="roles-container">
      <div class="role-card" onclick="location.href='/pet-owner'">
        <i class="fas fa-paw role-icon"></i>
        <h3 class="role-title">Pet Owner</h3>
        <p class="role-description">
          Book an appointment for your injured pet or find a new companion.
        </p>
        <a href="/petowner" class="btn-role" tabindex="0">Choose Pet Owner</a>
      </div>

      <div class="role-card" onclick="location.href='/veterinarian'">
        <i class="fas fa-stethoscope role-icon"></i>
        <h3 class="role-title">Veterinarian</h3>
        <p class="role-description">
          Providing medical care and advice to pets and their owners.
        </p>
        <a href="/veterinarian" class="btn-role" tabindex="0">Choose Veterinarian</a>
      </div>

      <div class="role-card" onclick="location.href='/animal-shelter'">
        <i class="fas fa-dog role-icon"></i>
        <h3 class="role-title">Animals Shelter</h3>
        <p class="role-description">
          Helping pets find loving new homes and providing shelter support.
        </p>
        <a href="/animalshelter" class="btn-role" tabindex="0">Choose Animal Shelter</a>
      </div>
    </div>

    <script
      src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
    ></script>
  </body>
</html>
