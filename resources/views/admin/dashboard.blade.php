<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <title>Elegance - Men's Hair Salon Admin Panel</title>
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <meta content="" name="keywords">
    <meta content="" name="description">

    <!-- Favicon -->
    <link href="{{ asset('public/img/logo (2).png') }}" rel="icon">

    <!-- Google Web Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link
        href="https://fonts.googleapis.com/css2?family=Open+Sans:wght@400;600&family=Roboto:wght@500;700&display=swap"
        rel="stylesheet">

    <!-- Icon Font Stylesheet -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0/css/all.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.4.1/font/bootstrap-icons.css" rel="stylesheet">

    <!-- Library Stylesheet -->
    <link href="{{ asset('admin/lib/owlcarousel/assets/owl.carousel.min.css') }}" rel="stylesheet">
    <link href="{{ asset('admin/lib/tempusdominus/css/tempusdominus-bootstrap-4.min.css') }}" rel="stylesheet">

    <!-- Customized Bootstrap Stylesheet -->
    <link href="{{ asset('admin/css/bootstrap.min.css') }}" rel="stylesheet">

    <!-- Template Stylesheet -->
    <link href="{{ asset('admin/css/style.css') }}" rel="stylesheet">

    <!-- Custom Styles for Elegant Men's Hair Salon -->
    <link href="{{ asset('admin/css/style2.css') }}" rel="stylesheet">


<body>
    <div class="container-fluid position-relative d-flex p-0">
        <!-- Spinner Start -->
        <div id="spinner" class="show bg-dark position-fixed translate-middle w-100 vh-100 top-50 start-50 d-flex align-items-center justify-content-center">
            <div class="spinner-border text-primary" style="width: 3rem; height: 3rem;" role="status">
                <span class="sr-only">Loading...</span>
            </div>
        </div>
        <!-- Spinner End -->


        <!-- Sidebar Start -->
        <div class="sidebar pe-4 pb-3">
            <nav class="navbar bg-secondary navbar-dark">
                <a href="index" class="navbar-brand mx-4 mb-3">
                    <h3> <img src="{{ asset('img/logo (2).png') }}" style="margin-left: 20px; height: 100px;"  alt=""></h3>
                </a>
                 <div class="d-flex align-items-center ms-4 mb-4">
                    <div class="position-relative">
                        <img class="rounded-circle" src="{{ asset('img/logo (2).png') }}" alt="" style="width: 40px; height: 40px;">
                        <div class="bg-success rounded-circle border border-2 border-white position-absolute end-0 bottom-0 p-1"></div>
                    </div>
                <!-- Display user's name dynamically -->
                <span class="d-none d-lg-inline-flex">{{ auth()->user()->name }}</span>

            </a>
                </div>
                <div class="navbar-nav w-100 mt-0">
                    <a href="/index" class="nav-item nav-link active"><i class="fa fa-tachometer-alt me-2"></i>Dashboard</a>
                    <div class="nav-item dropdown">
                        <a href="#" class="nav-link dropdown-toggle" data-bs-toggle="dropdown"><i class="fa fa-laptop me-2"></i>User</a>
                        <div class="dropdown-menu bg-transparent border-0">

                            <a href="/getUser" class="dropdown-item">showUser</a>
                            @if (Auth::user()->role == '0')

                            <a href="/createUser" class="dropdown-item">addUser</a>
                            @endif

                        </div>
                    </div>
                    <div class="nav-item dropdown">
                        <a href="#" class="nav-link dropdown-toggle" data-bs-toggle="dropdown"><i class="fa fa-laptop me-2"></i>Services</a>
                        <div class="dropdown-menu bg-transparent border-0">

                            <a href="/admin/services" class="dropdown-item">showService</a>
                            @if (Auth::user()->role == '0')
                            <a href="/adminServicesCreate" class="dropdown-item">addService</a>
                            @endif

                        </div>
                    </div>
                    <div class="nav-item dropdown">
                        <a href="#" class="nav-link dropdown-toggle" data-bs-toggle="dropdown"><i class="fa fa-laptop me-2"></i>Inventory</a>
                        <div class="dropdown-menu bg-transparent border-0">

                            <a href="{{Route('admin.products.index')}}" class="dropdown-item">showProducts</a>
                            @if (Auth::user()->role == '0')
                            <a href="/adminInventoryCreate" class="dropdown-item">addProducts</a>
                            @endif

                        </div>
                    </div>
                    @if (Auth::user()->role == '0')
                    <a href="/showAppointments" class="dropdown-item">Appointments</a>
                    <a href="/showFeedbacks" class="dropdown-item">Feedbacks</a>
                    @endif








                </div>
            </nav>
        </div>
        <!-- Sidebar End -->


        <!-- Content Start -->
        <div class="content">
          <!-- Navbar Start -->
          <nav class="navbar navbar-expand bg-secondary navbar-dark sticky-top px-4 py-0">
    <a href="index" class="navbar-brand d-flex d-lg-none me-4">
        <h2 class="text-primary mb-0"><i class="fa fa-user-edit"></i></h2>
    </a>
    <a href="#" class="sidebar-toggler flex-shrink-0">
        <i class="fa fa-bars"></i>
    </a>
    <form class="d-none d-md-flex ms-4">
        <input class="form-control bg-dark border-0" type="search" placeholder="Search">
    </form>
    <div class="navbar-nav align-items-center ms-auto">

        <div class="nav-item dropdown">
            <a href="#" class="nav-link dropdown-toggle" data-bs-toggle="dropdown">
                <img class="rounded-circle me-lg-2" src="{{ asset('img/logo (2).png') }}" alt="" style="width: 40px; height: 40px;">
                <!-- Display user's name dynamically -->
                <span class="d-none d-lg-inline-flex">{{ auth()->user()->name }}</span>

            </a>
            <div class="dropdown-menu dropdown-menu-end" aria-labelledby="navbarDropdown">
                <a class="dropdown-item" href="{{ route('logout') }}"
                onclick="event.preventDefault();
                            document.getElementById('logout-form').submit();">
                    {{ __('Logout') }}
                </a>

                <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                    @csrf
                </form>
            </div>
        </div>
    </div>
</nav>

<!-- Navbar End -->

            <!-- Navbar End -->


            @yield('content')





<br>
            <!-- Footer Start -->
            <div class="container-fluid pt-4 px-4">
                <div class="bg-secondary rounded-top p-4">
                    <div class="row">
                        <div class="col-12 col-sm-6 text-center text-sm-start">
                            &copy; <a href="#">Elegance</a>, All Right Reserved.
                        </div>

                    </div>
                </div>
            </div>
            <!-- Footer End -->
        </div>
        <!-- Content End -->


        <!-- Back to Top -->
        <a href="#" class="btn btn-lg btn-primary btn-lg-square back-to-top"><i class="bi bi-arrow-up"></i></a>
    </div>

  <!-- JavaScript Libraries -->
  <script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/js/bootstrap.bundle.min.js"></script>
  <script src="{{ asset('admin/lib/chart/chart.min.js') }}"></script>
  <script src="{{ asset('admin/lib/easing/easing.min.js') }}"></script>
  <script src="{{ asset('admin/lib/waypoints/waypoints.min.js') }}"></script>
  <script src="{{ asset('admin/lib/owlcarousel/owl.carousel.min.js') }}"></script>
  <script src="{{ asset('admin/lib/tempusdominus/js/moment.min.js') }}"></script>
  <script src="{{ asset('admin/lib/tempusdominus/js/moment-timezone.min.js') }}"></script>
  <script src="{{ asset('admin/lib/tempusdominus/js/tempusdominus-bootstrap-4.min.js') }}"></script>

  <!-- Template JavaScript -->
  <script src="{{ asset('admin/js/main.js') }}"></script>
</body>

</html>
