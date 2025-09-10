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
    body {
      margin: 0;
      overflow-x: hidden;
    }
    /* Sidebar */
    .left-sidebar {
      width: 250px;
      position: fixed;
      top: 0;
      left: 0;
      height: 100vh;
      background: #212529;
      color: #fff;
      padding: 1rem;
      transition: transform 0.3s ease;
    }
    .left-sidebar a {
      color: #fff;
      text-decoration: none;
      display: block;
      padding: 0.5rem 0;
    }
    .left-sidebar a:hover {
      color: #0d6efd;
    }

    /* Content wrapper */
    .content-wrapper {
      margin-left: 250px;
      padding: 1rem;
      transition: margin-left 0.3s ease;
    }

    /* Collapse sidebar on mobile */
    @media (max-width: 991px) {
      .left-sidebar {
        transform: translateX(-100%);
      }
      .left-sidebar.active {
        transform: translateX(0);
      }
      .content-wrapper {
        margin-left: 0;
      }
    }
  </style>
</head>
<body>

<!-- Sidebar -->
<aside class="left-sidebar" id="sidebar">
  <h4 class="text-white mb-4">🐾 Pet Doctor</h4>
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
  <nav class="navbar navbar-dark bg-dark mb-4">
    <div class="container-fluid">
      <button class="btn btn-outline-light d-lg-none" id="sidebarToggle">
        <i data-feather="menu"></i>
      </button>
      <span class="navbar-brand mb-0 h1">Pet Doctor Dashboard</span>
    </div>
  </nav>

  <!-- Page Content -->
  @yield('content')
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
