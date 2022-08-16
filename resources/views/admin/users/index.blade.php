{{-- list file --}}

@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        {{-- <div class="col-md-8">
            Model List
        </div> --}}
        <div class="col-md-8 bg-white ">
            <table class="table table-striped">
                <thead>
                  <tr>
                    <th scope="col">#</th>
                    <th scope="col">Name</th>
                    <th scope="col">Email</th>
                    <th scope="col">Created At</th>
                    <th scope="col">Actions</th>
                  </tr>
                </thead>
                <tbody>
                    @foreach ($users as $user)
                        <tr>
                            <th scope="row">{{ $user->id }}</th>
                            <td>{{ $user->name }}</td>
                            <td>{{ $user->email }}</td>
                            <td>{{ $user->created_at }}</td>
                            <td>
                                <a href="{{ route('users.show', $user->id) }}" class="btn btn-sm btn-success">View</a>
                                <a href="{{ route('users.edit', $user->id) }}" class="btn btn-sm btn-primary">Edit</a>
                                {{-- <a href="{{ route('users.destroy', $user->id) }}" class="btn btn-sm btn-danger">Delete</a> --}}

                                {{-- to send the delete request via a form otherwise it goes as a get request --}}
                                <form id="model-delete-{{ $user->id }}" action="{{ route('users.destroy', $user->id) }}" method="POST" class="d-inline">
                                    @csrf
                                    @method('DELETE')
                                    <button type="button"
                                        onclick="confirm('Are you sure? ') ? document.getElementById('model-delete-{{ $user->id }}').submit() : ''"
                                        class="btn btn-sm btn-danger"
                                    >
                                        Delete
                                    </button>

                                </form>

                            </td>
                        </tr>
                    @endforeach

                </tbody>
            </table>
            {{-- print the  paginated links--}}
            {{-- then go to app service provider in providers and add the bootstrap 5 pagination method in the boot method --}}
            {{ $users->links() }}
              {{-- to check if data is coming --}}
              {{-- {{ dd($users) }} --}}
        </div>
    </div>
</div>

@endsection
