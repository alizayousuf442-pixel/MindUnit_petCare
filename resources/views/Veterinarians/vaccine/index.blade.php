@extends('hospital.vaccine.master')

@section('content')
<div class="container mt-5">
    <h2 class="text-white">Vaccine Registrations</h2>

    @if(session('success'))
        <div class="alert alert-success">{{ session('success') }}</div>
    @endif

    <div class="table-responsive">
        <table class="table table-bordered table-dark">
            <thead>
                <tr>
                    <th>ID</th>
                    <th>User ID</th>
                    <th>User Email</th>
                    <th>Name</th>
                    <th>CNIC</th>
                    <th>Age</th>
                    <th>Location</th>
                    <th>Vaccine</th>
                    <th>Date</th>
                    <th>CNIC Image</th>
                    <th>Actions</th>
                </tr>
            </thead>
            <tbody>
                @foreach($vaccines as $vaccine)
                    <tr>
                        <td>{{ $vaccine->id }}</td>
                        <td>{{ $vaccine->user ? $vaccine->user->id : 'N/A' }}</td>
                        <td>{{ $vaccine->user ? $vaccine->user->email : 'N/A' }}</td>
                        <td>{{ $vaccine->fname }} {{ $vaccine->lname }}</td>
                        <td>{{ $vaccine->cnic }}</td>
                        <td>{{ $vaccine->age }}</td>
                        <td>{{ $vaccine->location }}</td>
                        <td>{{ $vaccine->vaccine }}</td>
                        <td>{{ $vaccine->date }}</td>
                        <td>
                            @if($vaccine->cnic_image)
                                <img src="{{ asset($vaccine->cnic_image) }}" width="50" class="rounded">
                            @else
                                N/A
                            @endif
                        </td>
                        <td>
                            <a href="{{ route('hospital.vaccine.edit', $vaccine->id) }}" class="btn btn-warning btn-sm">Edit</a>
                            <form action="{{ route('hospital.vaccine.destroy', $vaccine->id) }}" method="POST" style="display:inline-block;">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="btn btn-danger btn-sm" onclick="return confirm('Delete this record?')">Delete</button>
                            </form>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</div>
@endsection
