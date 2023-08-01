@extends('layouts.app')

@section('navbar')
    @include('layouts.nav-back-logout')
@endsection

@section('content')
    <div class="card bg-dark position-absolute top-50 start-50 translate-middle" style="width: 18rem;">
        <div class="card-body d-flex flex-column align-items-center">

        </div>
        <div class="card-body bg-secondary">
            <h5 class="text-white fw-bold text-center py-3 ">YOUR PROFILE</h5>
            <p class="bg-white text-center rounded py-2 mx-4 shadow bg-body-tertiary rounded">{{ $userdata->name }}</p>
            <p class="bg-white text-center rounded py-2 mx-4 shadow bg-body-tertiary rounded">{{ $userdata->email }}</p>
            <p class="bg-white text-center rounded py-2 mx-4 shadow bg-body-tertiary rounded">{{ $userdata->phone }}</p>
            <div class="d-flex justify-content-center">
                <form method="POST" action="{{ route('delete-account') }}">
                    @csrf
                    @method('DELETE')
                    <button type="submit" class="btn btn-danger mt-3 border"
                        onclick="return confirm('Are you sure you want to delete your account? This action cannot be undone.')">
                        Delete Account
                    </button>
                </form>
            </div>
        </div>
    </div>
@endsection
