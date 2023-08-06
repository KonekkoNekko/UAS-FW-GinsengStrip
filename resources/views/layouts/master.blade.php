<!DOCTYPE html>
<html lang="en">

<head>
    <title>Dashboard Admin</title>
    <!-- Link Styles -->
    @vite(['resources/sass/admin.scss', 'resources/css/style.css', 'resources/js/admin.js'])
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
    <link rel="stylesheet" href="https://cdn.datatables.net/1.13.6/css/jquery.dataTables.css" />
    <!-- Add this to your HTML header section -->

    @vite('resources/sass/app.scss')
    <script src="https://cdn.datatables.net/1.13.6/js/jquery.dataTables.js"></script>

</head>

<body>
    <div class="sidebar">
        <div class="logo_details">
            <i class="bi bi-amd icon"></i>
            <div class="logo_name">Ginseng Strip</div>
            <i class="bi bi-list" id="btn"></i>
        </div>
        <ul class="nav-list">
            <li>
                <a href="{{ route('admin') }}">
                    <i class="bi bi-grid-fill"></i>
                    <span class="link_name">Dashboard</span>
                </a>
                <span class="tooltip">Dashboard</span>
            </li>
            <li>
                <a href="{{ route('productadms.index') }}">
                    <i class="bi bi-cart3"></i>
                    <span class="link_name">Product</span>
                </a>
                <span class="tooltip">Product</span>
            </li>
            <li>
                <a href="{{ route('transc.index') }}">
                    <i class="bi bi-cash-coin"></i>
                    <span class="link_name">Transaksi</span>
                </a>
                <span class="tooltip">Transaksi</span>
            </li>
            <li class="profile">
                <div class="profile_details">
                    <div class="profile_content">
                        <div class="name">{{ Auth::user()->name }}</div>
                        <div class="designation">Admin</div>
                    </div>
                </div>
                <i class="bx bx-log-out" id="log_out"></i>

                <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                    @csrf
                </form>

                <script>
                    document.getElementById('log_out').addEventListener('click', function() {
                        event.preventDefault();
                        document.getElementById('logout-form').submit();
                    });
                </script>

            </li>
        </ul>
    </div>
    <section class="home-section">
        <div class="text">Dashboard</div>

        <main class="m-3">
            @yield('content')
        </main>
    </section>
    <!-- Scripts -->
    {{-- @vite('resources/js/script.js') --}}
    @vite('resources/js/app.js')
    @include('sweetalert::alert')
    @stack('scripts')
</body>

</html>
