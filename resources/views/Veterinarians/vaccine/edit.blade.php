@extends('hospital.vaccine.master')

@section('content')
<div class="container mt-5">
    <h2 class="text-white mb-4">Edit Vaccine Registration</h2>

    <form action="{{ route('hospital.vaccine.update', $vaccine->id) }}" method="POST" enctype="multipart/form-data" class="bg-dark p-4 rounded shadow">
        @csrf
        @method('PUT')

        <div class="row">
            <div class="col-md-6 mb-3">
                <label class="text-white">First Name</label>
                <input type="text" name="fname" class="form-control" value="{{ old('fname', $vaccine->fname) }}">
                @error('fname') <small class="text-danger">{{ $message }}</small> @enderror
            </div>

            <div class="col-md-6 mb-3">
                <label class="text-white">Last Name</label>
                <input type="text" name="lname" class="form-control" value="{{ old('lname', $vaccine->lname) }}">
                @error('lname') <small class="text-danger">{{ $message }}</small> @enderror
            </div>

            <div class="col-md-6 mb-3">
                <label class="text-white">CNIC</label>
                <input type="text" name="cnic" class="form-control" value="{{ old('cnic', $vaccine->cnic) }}">
                @error('cnic') <small class="text-danger">{{ $message }}</small> @enderror
            </div>

            <div class="col-md-6 mb-3">
                <label class="text-white">Age</label>
                <input type="number" name="age" class="form-control" value="{{ old('age', $vaccine->age) }}">
                @error('age') <small class="text-danger">{{ $message }}</small> @enderror
            </div>

            <div class="col-md-6 mb-3">
                <label class="text-white">Location</label>
                <input type="text" name="location" class="form-control" value="{{ old('location', $vaccine->location) }}">
                @error('location') <small class="text-danger">{{ $message }}</small> @enderror
            </div>

            <div class="col-md-6 mb-3">
                <label class="text-white">Vaccine</label>
                <select name="vaccine" class="form-control">
                    <option value="Pfizer" {{ $vaccine->vaccine == 'Pfizer' ? 'selected' : '' }}>Pfizer</option>
                    <option value="Moderna" {{ $vaccine->vaccine == 'Moderna' ? 'selected' : '' }}>Moderna</option>
                    <option value="AstraZeneca" {{ $vaccine->vaccine == 'AstraZeneca' ? 'selected' : '' }}>AstraZeneca</option>
                    <option value="Sinopharm" {{ $vaccine->vaccine == 'Sinopharm' ? 'selected' : '' }}>Sinopharm</option>
                </select>
                @error('vaccine') <small class="text-danger">{{ $message }}</small> @enderror
            </div>

            <div class="col-md-6 mb-3">
                <label class="text-white">Date</label>
                <input type="date" name="date" class="form-control" value="{{ old('date', $vaccine->date) }}">
                @error('date') <small class="text-danger">{{ $message }}</small> @enderror
            </div>

            <div class="col-md-6 mb-3">
                <label class="text-white">CNIC Image (Optional)</label>
                <input type="file" name="cnic_image" class="form-control">
                @if($vaccine->cnic_image)
                    <small class="d-block text-white mt-1">Current: <img src="{{ asset($vaccine->cnic_image) }}" width="50" class="rounded"></small>
                @endif
                @error('cnic_image') <small class="text-danger">{{ $message }}</small> @enderror
            </div>
        </div>

        <div class="d-flex justify-content-between mt-4">
            <a href="{{ route('hospital.vaccine.index') }}" class="btn btn-secondary">Cancel</a>
            <button type="submit" class="btn btn-success">Update</button>
        </div>
    </form>
</div>
@endsection
