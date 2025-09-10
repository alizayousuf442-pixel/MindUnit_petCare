@extends('admin.contacts.master')

@section('content')
<div class="container mt-5">
    <h2 class="text-white mb-4">Contact Messages</h2>

    @if(session('success'))
        <div class="alert alert-success">{{ session('success') }}</div>
    @endif

    <div class="table-responsive">
        <table class="table table-bordered table-hover">
            <thead class="table-info text-white">
                <tr>
                    <th>ID</th>
                    <th>User ID</th>
                    <th>User Email</th>
                    <th>Name</th>
                    <th>Email</th>
                    <th>Subject</th>
                    <th>Message</th>
                    <th>Action</th>
                </tr>
            </thead>
            <tbody style="background-color:white;">
                @foreach($contacts as $contact)
                <tr>
                    <td class="text-white">{{ $contact->id }}</td>
                    <td class="text-white">{{ $contact->user ? $contact->user->id : 'N/A' }}</td>
                    <td class="text-white">{{ $contact->user ? $contact->user->email : 'N/A' }}</td>
                    <td class="text-white">{{ $contact->fname }} {{ $contact->lname }}</td>
                    <td class="text-white">{{ $contact->email }}</td>
                    <td class="text-white">{{ $contact->subject }}</td>
                    <td class="text-white">{{ Str::limit($contact->message, 40) }}</td>
                    <td>
                        <form action="{{ route('admin.contacts.destroy', $contact->id) }}" method="POST" style="display:inline-block;">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="btn btn-danger btn-sm" onclick="return confirm('Delete this message?')">
                                Delete
                            </button>
                        </form>
                    </td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>

    <div class="mt-3">
        {{ $contacts->links('pagination::bootstrap-5') }}
    </div>
</div>
@endsection
