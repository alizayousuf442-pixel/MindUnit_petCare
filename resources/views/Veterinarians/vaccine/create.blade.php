@extends('hospital.vaccine.master')

@section('content')
<div class="container py-5">
    <div class="row justify-content-center">
        <div class="col-lg-8">
            <div class="card shadow-lg border-0 rounded-4">
                <div class="card-header bg-info text-white">
                    <h4 class="mb-0"><i class="bi bi-capsule me-2"></i> Add New Vaccine</h4>
                </div>

                <div class="card-body" style="background-color:#e0f7fa;">
                    <form action="{{ route('hospital.vaccine.store') }}" method="POST">
                        @csrf

                        <!-- Vaccine Name -->
                        <div class="mb-3">
                            <label class="form-label fw-bold text-dark">Vaccine Name</label>
                            <input 
                                type="text" 
                                name="name" 
                                class="form-control border-info shadow-sm text-dark" 
                                style="background-color:#e0f7fa;" 
                                placeholder="Enter vaccine name" 
                                required>
                        </div>

                        <!-- Manufacturer -->
                        <div class="mb-3">
                            <label class="form-label fw-bold text-dark">Manufacturer</label>
                            <input 
                                type="text" 
                                name="manufacturer" 
                                class="form-control border-info shadow-sm text-dark" 
                                style="background-color:#e0f7fa;" 
                                placeholder="Enter manufacturer name" 
                                required>
                        </div>

                        <!-- Description -->
                        <div class="mb-3">
                            <label class="form-label fw-bold text-dark">Description</label>
                            <textarea 
                                name="description" 
                                rows="4" 
                                class="form-control border-info shadow-sm text-dark" 
                                style="background-color:#e0f7fa;" 
                                placeholder="Enter vaccine details" 
                                required></textarea>
                        </div>

                        <!-- Buttons -->
                        <div class="d-flex justify-content-end gap-2">
                            <a href="{{ route('hospital.vaccine.index') }}" class="btn btn-outline-info">
                                <i class="bi bi-arrow-left"></i> Cancel
                            </a>
                            <button type="submit" class="btn btn-info text-white shadow-sm">
                                <i class="bi bi-save"></i> Save Vaccine
                            </button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
