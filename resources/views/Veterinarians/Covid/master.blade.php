<!doctype html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Admin Panel - COVID-19 Management</title>

  <!-- Bootstrap -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">

  <!-- Custom Admin Dashboard CSS -->
  <link rel="stylesheet" href="{{ asset('admindashboard/assets/css/style.css') }}">
</head>

<body>
<div class="page-wrapper" id="main-wrapper">

  <!-- Overlay -->
  <div class="overlay" id="overlay"></div>

  <!-- Sidebar -->
  <aside class="left-sidebar">
 <nav class="sidebar-nav">
  <ul id="sidebarnav">
    <li class="nav-small-cap mt-3">Home</li>

    <li class="sidebar-item">
      <a class="sidebar-link active" href="#">
        <i data-feather="home" class="me-2"></i> Dashboard Overview
      </a>
    </li>

    <li class="nav-small-cap mt-3">Records</li>
 <li class="sidebar-item">
      <a class="sidebar-link" href="{{ route('hospital.dashboard') }}">
        <i data-feather="activity" class="me-2"></i> Hospital Dashboard
      </a>
    </li>
    <li class="sidebar-item">
      <a class="sidebar-link" href="{{ route('hospital.covidtests.index') }}">
        <i data-feather="file-text" class="me-2"></i> Hospital Records
      </a>
    </li>
    <li class="sidebar-item">
      <a class="sidebar-link" href="{{ route('hospital.vaccine.index') }}">
        <i data-feather="check-circle" class="me-2"></i> Vaccine Register Records
      </a>
    </li>
    
    <li class="sidebar-item">
    <a class="sidebar-link" href="{{ route('hospital.statistics.index') }}">
        <i data-feather="bar-chart-2" class="me-2"></i> Statistics
    </a>
</li>
   
    <li class="sidebar-item">
      <a class="sidebar-link" href="{{ url('/') }}">
        <i data-feather="home" class="me-2"></i> Home
      </a>
    </li>
  </ul>
</nav>
  </aside>

  <!-- Header -->
  <header class="app-header">
    <nav class="navbar navbar-expand-lg navbar-light w-100 d-flex justify-content-between">

      <!-- Logo -->
      <div class="navbar-brand text-white">
        <a class="navbar-brand" href="{{ route('index') }}">
          <span class="emoji">🦠</span><span class="text-white">Covid</span>
        </a>
      </div>

      <!-- Right Section (Admin Profile) -->
      <ul class="navbar-nav ms-auto align-items-center">
        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle d-flex align-items-center" href="#" id="userDropdown" role="button"
             data-bs-toggle="dropdown" aria-expanded="false">

            <img src="{{ asset('user/images/Covid.jpeg') }}" alt="Profile"
                 style="width:40px; height:40px; object-fit:cover; border-radius:50%;" class="me-2">

            <div class="d-flex flex-column text-start">
              <span class="text-white fw-semibold">{{ Auth::user()->name }}</span>
              <small class="text-light">{{ Auth::user()->email }}</small>
            </div>
          </a>

          <!-- Dropdown Menu -->
          <ul class="dropdown-menu dropdown-menu-end" aria-labelledby="userDropdown">
            <li>
              <form method="POST" action="{{ route('logout') }}">
                @csrf
                <button type="submit" class="dropdown-item text-danger">Logout</button>
              </form>
            </li>
          </ul>
        </li>
      </ul>

      <!-- Sidebar Toggle for Mobile -->
      <ul class="navbar-nav d-lg-none">
        <li class="nav-item">
          <a class="nav-link sidebartoggler nav-icon-hover toggler-btn" id="headerCollapse" href="javascript:void(0)">
            <i data-feather="menu" class="toggler-icon"></i>
          </a>
        </li>
      </ul>
    </nav>
  </header>

  <!-- Page Content -->
  <div class="container-fluid">
      @yield('content')
  </div>

</div> <!-- page-wrapper -->

<!-- Scripts -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
<script src="https://unpkg.com/feather-icons"></script>
<script>feather.replace()</script>
<script src="{{ asset('admindashboard/assets/js/script.js') }}"></script>
</body>
</html>
