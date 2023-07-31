@extends('layouts.app')

@section('content')
    <div class="container text-center p-1 position-absolute top-50 start-50 translate-middle">
        <p class="mt-5">WELCOME TO</p>
        <div>
            <img src="{{ Vite::asset('resources/images/ginsengblack.png') }}" alt="image" width="170">
        </div>
    </div>
@endsection

@section('scriptstuff')
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script>
        $(document).ready(function() {
            // Delay before fading out and redirecting to 'landingpage1'
            setTimeout(function() {
                $('body').fadeOut(500, function() {
                    // After the fade out is complete, redirect to 'landingpage1'
                    window.location.href = '/landingpage1';
                });
            }, 1500); // 1500 milliseconds = 1.5 seconds
        });
    </script>
@endsection
