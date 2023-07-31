@extends('layouts.app')

@section('navbar')
    @include('layouts.nav-auth')
@endsection

@section('content')
    <div class="col-lg-10 mx-auto">
        <div class="d-flex" style="width: 40rem;">
            <img src="{{ Vite::asset('resources/images/mencuri.jpg') }}" alt="" class="img-thumbnail m-5">
            <img src="{{ Vite::asset('resources/images/dicuri.jpg') }}" alt="" class="img-thumbnail m-5">
        </div>
        <div class="d-flex" style="width: 40rem;">
            <img src="{{ Vite::asset('resources/images/big poppa.jpg') }}" alt="" class="img-thumbnail m-5">
            <img src="{{ Vite::asset('resources/images/welcome.jpg') }}" alt="" class="img-thumbnail m-5">
        </div>
    </div>
@endsection
