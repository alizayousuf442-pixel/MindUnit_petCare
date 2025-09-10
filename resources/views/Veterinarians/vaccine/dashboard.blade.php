@extends('Veterinarians.master')
@section('content')

<div class="container-fluid">
  <h2 class="section-title text-center mb-5">Pet Doctor Dashboard Overview</h2>

  <!-- Metric Cards -->
  <div class="row justify-content-center g-4">
    <div class="col-lg-3 col-md-6">
      <div class="card text-center">
        <div class="card-body">
          <div class="icon-wrapper text-danger mb-2"><i data-feather="heart"></i></div>
          <h4 class="text-danger">120</h4>
          <p>Active Pets</p>
        </div>
      </div>
    </div>
    <div class="col-lg-3 col-md-6">
      <div class="card text-center">
        <div class="card-body">
          <div class="icon-wrapper text-warning mb-2"><i data-feather="users"></i></div>
          <h4 class="text-warning">85</h4>
          <p>Registered Owners</p>
        </div>
      </div>
    </div>
    <div class="col-lg-3 col-md-6">
      <div class="card text-center">
        <div class="card-body">
          <div class="icon-wrapper text-success mb-2"><i data-feather="calendar"></i></div>
          <h4 class="text-success">42</h4>
          <p>Appointments</p>
        </div>
      </div>
    </div>
    <div class="col-lg-3 col-md-6">
      <div class="card text-center">
        <div class="card-body">
          <div class="icon-wrapper text-info mb-2"><i data-feather="shield"></i></div>
          <h4 class="text-info">310</h4>
          <p>Vaccinations</p>
        </div>
      </div>
    </div>
  </div>

  <!-- Table + Announcements -->
  <div class="row mt-5 g-4">
    <div class="col-lg-7">
      <div class="card">
        <div class="card-body">
          <h5 class="card-title text-primary mb-4">Recent Pet Activities</h5>
          <div class="table-responsive">
            <table class="table text-nowrap mb-0 align-middle">
              <thead>
                <tr>
                  <th>Pet</th>
                  <th>Activity</th>
                  <th>Time</th>
                  <th>Status</th>
                </tr>
              </thead>
              <tbody>
                <tr>
                  <td>Bella (Dog)</td>
                  <td>Vaccination</td>
                  <td>10:30 AM</td>
                  <td><span class="badge bg-success">Completed</span></td>
                </tr>
                <tr>
                  <td>Milo (Cat)</td>
                  <td>Check-up</td>
                  <td>09:15 AM</td>
                  <td><span class="badge bg-warning">Pending</span></td>
                </tr>
                <tr>
                  <td>Rocky (Dog)</td>
                  <td>Surgery</td>
                  <td>Yesterday</td>
                  <td><span class="badge bg-info">In Progress</span></td>
                </tr>
                <tr>
                  <td>Luna (Rabbit)</td>
                  <td>Dental Cleaning</td>
                  <td>Yesterday</td>
                  <td><span class="badge bg-primary">Scheduled</span></td>
                </tr>
              </tbody>
            </table>
          </div>
          <a href="#" class="btn btn-outline-primary mt-3">Manage Appointments</a>
        </div>
      </div>
    </div>

    <div class="col-lg-5">
      <div class="card">
        <div class="card-body">
          <h5 class="card-title text-primary mb-4">Latest Announcements</h5>
          <ul class="list-group list-group-flush">
            <li class="list-group-item d-flex justify-content-between">
              <span>Free Vaccination Camp</span>
              <span class="badge bg-success">Published</span>
            </li>
            <li class="list-group-item d-flex justify-content-between">
              <span>Pet Adoption Drive</span>
              <span class="badge bg-primary">Upcoming</span>
            </li>
            <li class="list-group-item d-flex justify-content-between">
              <span>Tips for Healthy Pets</span>
              <span class="badge bg-info">Draft</span>
            </li>
          </ul>
          <a href="#" class="btn btn-primary mt-4">Manage Announcements</a>
        </div>
      </div>
    </div>
  </div>
</div>

@endsection
