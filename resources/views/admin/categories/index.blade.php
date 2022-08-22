{{-- list file --}}

@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        {{-- <div class="col-md-8">
            Model List
        </div> --}}
        <div class="col-md-8 bg-white ">
            <x-model-list :columns="[
                'title',
                'url',
                'summary',
                'content',
                'sort_order',
                'status'
            ]"
            :models="$categories"/>

        </div>
    </div>
</div>

@endsection
