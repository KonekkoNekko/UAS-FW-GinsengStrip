<!DOCTYPE html>
<html lang="en">
<head>
  <title>Dashboard Admin</title>
  <!-- Link Styles -->
  @vite(['resources/sass/admin.scss', 'resources/js/app.js', 'resources/css/style.css'])
  <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
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
        <i class="bx bx-search"></i>
        <input type="text" placeholder="Search...">
         <span class="tooltip">Search</span>
      </li>
      <li>
        <a href="{{url('/')}}">
          <i class="bi bi-grid-fill"></i>
          <span class="link_name">Dashboard</span>
        </a>
        <span class="tooltip">Dashboard</span>
      </li>
      <li>
        <a href="#">
            <i class="bi bi-cart3"></i>
          <span class="link_name">Product</span>
        </a>
        <span class="tooltip">Product</span>
      </li>
      <li>
        <a href="#">
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
  </section>
  <!-- Scripts -->
  @vite('resources/js/script.js')
</body>
</html>
