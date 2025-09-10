<!doctype html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Pet Doctor Dashboard</title>

  <!-- Bootstrap -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">

  <!-- Custom CSS -->
  <style>
    :root {
      --main-gold: #D4AF37;
      --main-orange: #FF8C00;
      --main-brown: #8B4513;
      --main-gradient: linear-gradient(45deg, #D4AF37, #FF8C00);
      --background: linear-gradient(to right, #8B4513, #D4AF37, #FF8C00);
    }

    body {
      margin: 0;
      overflow-x: hidden;
      background: var(--background);
      font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
    }

    /* Sidebar */
    .left-sidebar {
      width: 260px;
      position: fixed;
      top: 0;
      left: 0;
      height: 100%;
      background: var(--main-brown);
      color: #fff;
      padding: 1rem;
      transition: transform 0.3s ease;
      z-index: 9999;
      box-shadow: 3px 0 8px rgba(0, 0, 0, 0.3);
    }

    .left-sidebar h4 {
      color: var(--main-gold);
    }

    .left-sidebar a {
      color: #fff;
      text-decoration: none;
      display: block;
      padding: 0.6rem 0;
      border-radius: 8px;
      transition: background 0.3s, color 0.3s;
    }

    .left-sidebar a:hover {
      background: var(--main-gradient);
      color: #fff;
    }

    /* Content wrapper */
    .content-wrapper {
      margin-left: 260px;
      padding: 1rem;
      transition: margin-left 0.3s ease;
      min-height: 100vh;
    }

    /* Navbar */
    .navbar {
      background: var(--main-gradient) !important;
      position: sticky;
      top: 0;
      z-index: 1000;
    }

    .navbar-brand {
      color: #fff !important;
      font-weight: bold;
    }

    /* Responsive adjustments */
    @media (max-width: 991px) {
      .left-sidebar {
        transform: translateX(-100%);
      }
      .left-sidebar.active {
        transform: translateX(0);
      }
      .content-wrapper {
        margin-left: 0 !important;
      }
    }
  </style>
</head>
<body>

<!-- Sidebar -->
<aside class="left-sidebar" id="sidebar">
  <h4 class="mb-4">🐾 Pet Doctor</h4>
  <nav class="sidebar-nav">
    <a href="#"><i data-feather="home" class="me-2"></i> Dashboard</a>
    <a href="#"><i data-feather="activity" class="me-2"></i> Pet Health Records</a>
    <a href="#"><i data-feather="file-text" class="me-2"></i> Vaccination Records</a>
    <a href="#"><i data-feather="bar-chart-2" class="me-2"></i> Statistics</a>
    <a href="{{ url('/') }}"><i data-feather="arrow-left" class="me-2"></i> Back to Website</a>
  </nav>
</aside>

<!-- Content -->
<div class="content-wrapper">
  <!-- Top Navbar -->
  <nav class="navbar navbar-dark mb-4">
    <div class="container-fluid d-flex justify-content-between align-items-center">
      <div class="d-flex align-items-center">
        <button class="btn btn-outline-light d-lg-none me-3" id="sidebarToggle">
          <i data-feather="menu"></i>
        </button>
        <span class="navbar-brand mb-0 h1">Pet Doctor Dashboard</span>
      </div>

      <!-- Right Side (Admin Info) -->
      <div class="d-flex align-items-center">
        <span class="text-white me-2 fw-semibold">Admin</span>
        <img src="{{ asset('user/images/admin.jpg') }}"
             alt="Admin"
             class="rounded-circle"
             style="width:40px; height:40px; object-fit:cover;"
             onerror="this.onerror=null;this.src='https://ui-avatars.com/api/?name=Admin&background=0D8ABC&color=fff';">
      </div>
    </div>
  </nav>

  <!-- Page Content -->
  <div class="container-fluid">
    @yield('content')
  </div>
</div>

<!-- Scripts -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
<script src="https://unpkg.com/feather-icons"></script>
<script>
  feather.replace();

  // Sidebar toggle
  document.getElementById("sidebarToggle").addEventListener("click", function() {
    document.getElementById("sidebar").classList.toggle("active");
  });
</script>
</body>
</html>
