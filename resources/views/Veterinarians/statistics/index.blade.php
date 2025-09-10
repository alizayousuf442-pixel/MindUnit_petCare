@extends('hospital.statistics.master')

@section('content')
<div class="container py-5">
    <!-- Page Header -->
    <div class="text-center mb-5">
        <h2 class="fw-bold text-info">
            <i class="bi bi-bar-chart-line-fill me-2"></i> Website Statistics
        </h2>
        <p class="text-white">A quick overview of platform performance and activities</p>
    </div>

    <!-- Stats Cards -->
    <div class="row g-4">
        <!-- Total Users -->
        <div class="col-md-4">
            <div class="card shadow border-0 h-100 stat-card">
                <div class="card-body text-center p-4" style="background: linear-gradient(135deg, #e0f7fa, #b2ebf2); border-radius: 15px;">
                    <div class="mb-3">
                        <i class="bi bi-people-fill fs-1 text-info"></i>
                    </div>
                    <h5 class="fw-bold text-dark">Total Users</h5>
                    <p class="fs-4 fw-bold text-info mb-0">1,230</p>
                </div>
            </div>
        </div>

        <!-- Blogs Posted -->
        <div class="col-md-4">
            <div class="card shadow border-0 h-100 stat-card">
                <div class="card-body text-center p-4" style="background: linear-gradient(135deg, #e0f7fa, #80deea); border-radius: 15px;">
                    <div class="mb-3">
                        <i class="bi bi-journal-text fs-1 text-info"></i>
                    </div>
                    <h5 class="fw-bold text-dark">Blogs Posted</h5>
                    <p class="fs-4 fw-bold text-info mb-0">85</p>
                </div>
            </div>
        </div>

        <!-- Vaccine Registrations -->
        <div class="col-md-4">
            <div class="card shadow border-0 h-100 stat-card">
                <div class="card-body text-center p-4" style="background: linear-gradient(135deg, #e0f7fa, #4dd0e1); border-radius: 15px;">
                    <div class="mb-3">
                        <i class="bi bi-syringe fs-1 text-info"></i>
                    </div>
                    <h5 class="fw-bold text-dark">Vaccine Registrations</h5>
                    <p class="fs-4 fw-bold text-info mb-0">560</p>
                </div>
            </div>
        </div>
    </div>

    <!-- Footer Note -->
    <div class="text-center mt-5">
        <small class="text-white">Data updates every 24 hours</small>
    </div>
</div>

<!-- Extra Hover Effect -->
<style>
    .stat-card:hover {
        transform: translateY(-5px);
        transition: 0.3s ease-in-out;
    }
</style>
@endsection
