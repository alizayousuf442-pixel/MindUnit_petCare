@extends('hospital.covid.master')

@section('content')
<div class="container mt-5">
    <h2 class="text-white">Update Test Status</h2>

    <form action="{{ route('covidtests.update' , $covidtest->id) }}" method="POST">
        @csrf
        @method('PUT')

        <div class="form-group mb-3">
            <label class="text-white">Status</label>
            <select name="status" class="form-control">
                <option value="Pending" {{ $covidtest->status == 'Pending' ? 'selected' : '' }}>Pending</option>
                <option value="Approved" {{ $covidtest->status == 'Approved' ? 'selected' : '' }}>Approved</option>
                <option value="Rejected" {{ $covidtest->status == 'Rejected' ? 'selected' : '' }}>Rejected</option>
            </select>
        </div>

        <button type="submit" class="btn btn-primary">Update</button>
    </form>
</div>
@endsection
