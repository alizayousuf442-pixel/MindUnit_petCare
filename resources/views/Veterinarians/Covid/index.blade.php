@extends('hospital.covid.master')

@section('content')
<div class="container mt-5">
    <h2 class="text-white">COVID-19 Test Records</h2>

    @if(session('success'))
        <div class="alert alert-success">{{ session('success') }}</div>
    @endif

    <div class="table-responsive">
        <table class="table table-dark table-bordered">
            <thead>
                <tr>
                    <th>ID</th>
                    <th>User ID</th>
                    <th>User Email</th>
                    <th>Name</th>
                    <th>CNIC</th>
                    <th>Phone</th>
                    <th>Test Date</th>
                    <th>Hospital</th>
                    <th>Status</th>
                    <th>CNIC Image</th>
                    <th>Actions</th>
                </tr>
            </thead>
            <tbody>
                @foreach($tests as $test)
                    <tr>
                        <td>{{ $test->id }}</td>
                        <td>{{ $test->user->id ?? 'N/A' }}</td>
                        <td>{{ $test->user->email ?? 'N/A' }}</td>
                        <td>{{ $test->fname }}</td>
                        <td>{{ $test->cnic }}</td>
                        <td>{{ $test->phone }}</td>
                        <td>{{ $test->test_date }}</td>
                        <td>{{ $test->hospital }}</td>
                        <td>
                            <span class="badge 
                                @if($test->status=='Pending') bg-warning 
                                @elseif($test->status=='Approved') bg-success 
                                @else bg-danger @endif">
                                {{ $test->status }}
                            </span>
                        </td>
                        <td>
                            @if($test->cnic_image)
                                <img src="{{ asset($test->cnic_image) }}" width="50" class="rounded">
                            @else
                                N/A
                            @endif
                        </td>
                        <td>
                           <a href="{{ route('covidtests.edit', $test->id) }}" class="btn btn-warning btn-sm">Edit</a>

                            <form action="{{ route('covidtests.destroy', $test->id) }}" method="POST" style="display:inline-block;">
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
