{{-- model form --}}

@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">

            <div class="col-md-8 bg-white p-4">
                <form action="{{ $user->id ? route('users.update', $user->id) : route('users.store') }}" method="POST">

                    {{-- if user has an id --}}
                    @if ($user->id)
                        @method('PUT')
                    @endif

                    @csrf
                    <div class="row">
                        <div class="col-12">
                            <h3>Authentication details</h3>
                        </div>
                        <hr>
                    </div>
                    <div class="row">
                        <div class="col-md-6">
                            <x-form-input id="name" name="name" label="Name" type="text"
                                value="{{ $user->name }}" help="Username" />
                        </div>
                        <div class="col-md-6">
                            <x-form-input id="email" name="email" label="Email" type="email"
                                value="{{ $user->email }}" help="Email address" />
                        </div>
                    </div>
                    <div class="row mb-2">
                        <div class="col-md-6">
                            <x-form-input id="password" name="password" label="Password" type="password" help="Password" />
                        </div>
                        <div class="col-md-6">
                            <x-form-input id="password_confirmation" name="password_confirmation" label="Confirm Password"
                                type="password" help="Confirm Password" />
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-12">
                            <h3>Personal details</h3>
                        </div>
                        <hr>
                    </div>
                    <div class="col-12">
                        <div class="row">
                            <div class="col-md-6">
                                <x-form-input id="first_name" name="first_name" label="First Name" type="text"
                                    value="{{ $user->first_name }}" help="First Name" />

                            </div>
                            <div class="col-md-6">
                                <x-form-input id="last_name" name="last_name" label="Last Name" type="text"
                                    value="{{ $user->last_name }}" help="Last Name" />
                            </div>
                        </div>
                    </div>
                    <div class="col-12">
                        <div class="row ">
                            <div class="col-md-6">
                                <x-form-input id="phone" name="phone" label="Phone" type="text"
                                    value="{{ $user->phone }}" help="Phone" />
                            </div>
                            <div class="col-md-6">
                                <x-form-input id="nic" name="nic" label="NIC" type="text"
                                    value="{{ $user->nic }}" help="NIC" />
                            </div>
                        </div>
                    </div>
                    <div class="mb-3">
                        <x-form-input id="address" name="address" label="Address" type="text"
                            value="{{ $user->address }}" help="Address" />
                    </div>

                    <div class="row">
                        <div class="col-md-6">
                            <x-form-input id="country" name="country" label="Country" type="text"
                                value="{{ $user->country }}" help="Country" />
                        </div>
                        <div class="col-md-6">
                            <x-form-input id="city" name="city" label="City" type="text"
                                value="{{ $user->city }}" help="City" />
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-6">
                            <x-form-input id="state" name="state" label="State" type="text"
                                value="{{ $user->state }}" help="State" />
                        </div>
                        <div class="col-md-6">
                            <x-form-input id="zip" name="zip" label="Zip" type="text"
                                value="{{ $user->zip }}" help="Zip" />
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-12">
                            <h3>User Role</h3>
                        </div>
                        <hr>
                    </div>
                    <div class="col-12">
                        <div class="row">
                            <div class="col-12">
                                <x-form-select id="role" name="role" label="Role" value="{{ $user->role }}"
                                    help="User Role" placeholder="User Role" :options="['admin', 'user', 'manager']" />
                            </div>
                        </div>
                    </div>


                    @if ($user->id)
                        <button type="submit" class="btn btn-primary">Update</button>
                    @else
                        <button type="submit" class="btn btn-primary">Create</button>
                    @endif


                </form>
            </div>
        </div>
    </div>
@endsection
