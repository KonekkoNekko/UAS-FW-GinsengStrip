@extends('layouts.app')


@section('content')
    <div class="card bg-dark position-absolute top-50 start-50 translate-middle" style="width: 18rem;">
        <div class="card-body d-flex flex-column align-items-center">
            <img src="{{ Vite::asset('resources/images/kepin.png') }}" class="card-img-top rounded-circle py-4" alt="..."
                style="width: 100px;">
        </div>
        <div class="card-body bg-secondary">
            <h5 class="text-white fw-bold text-center py-3 ">YOUR PROFILE</h5>
            <p class="bg-white text-center rounded py-2 mx-4 shadow bg-body-tertiary rounded">Kevin Surya</p>
            <p class="bg-white text-center rounded py-2 mx-4 shadow bg-body-tertiary rounded">huditara@gmail.com</p>
            <p class="bg-white text-center rounded py-2 mx-4 shadow bg-body-tertiary rounded">082244582243</p>
        </div>
    </div>
@endsection
