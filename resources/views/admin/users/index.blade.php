{{-- list file --}}

@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        {{-- <div class="col-md-8">
            Model List
        </div> --}}
        <div class="col-12">
            <a href="{{ route('users.create') }}" class="btn btn-primary">
                Add User
            </a>
        </div>
        <div class="col-md-8 bg-white ">
            {{-- : to identify the content within the quotation as a dynamic attribute / executable content --}}
            <x-model-list :columns="[
                'name',
                'email',
                'created_at'
            ]"
            {{-- from the controllers view we are passing the users and here we get that and  send the users into and argument called models--}}
            :models="$users"/>


        </div>
    </div>
</div>

@endsection
