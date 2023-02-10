<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title')</title>

    <link rel="stylesheet" href="{{ asset('assets/css/main/app.css') }}">
    <link rel="icon" type="image/x-icon" href="{{ asset('image/icon.png') }}" />

    <link rel="stylesheet" href="{{ asset('assets/css/shared/iconly.css') }}">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.1/css/all.min.css"
        integrity="sha512-+4zCK9k+qNFUR5X+cKL9EIR+ZOhtIloNl9GIKS57V1MyNsYpYcUrUeQc9vNfzsWfV28IaLL3i96P9sdNyeRssA=="
        crossorigin="anonymous" />

</head>

<body>
    <div id="app">
        <div id="sidebar" class="active">
            <div class="sidebar-wrapper active">
                <div class="sidebar-header position-relative">
                    <div class="d-flex justify-content-between align-items-center">
                        <div class="logo">
                            <a href=""><img src="{{ asset('image/logo.png') }}" alt="logo"
                                    style="width: 110px; height: 50px; padding-top: 5px;"></a>
                        </div>
                        <div class="theme-toggle d-flex gap-2  align-items-center mt-2">
                            <div class="form-check form-switch fs-6">
                                <input class="form-check-input me-0" type="hidden" id="toggle-dark">
                            </div>
                        </div>
                        <div class="sidebar-toggler  x">
                            <a href="#" class="sidebar-hide d-xl-none d-block"><i
                                    class="bi bi-x bi-middle"></i></a>
                        </div>
                    </div>
                </div>
                <div class="sidebar-menu">
                    <ul class="menu">
                        <li class="sidebar-title">Menu</li>

                        <li
                            @if (request()->route()->uri == 'admin/dashboard') class="sidebar-item active" @else class="sidebar-item" @endif>
                            <a href="dashboard" class='sidebar-link'>
                                <i class="bi bi-grid-fill"></i>
                                <span>Dashboard</span>
                            </a>
                        </li>
                        {{-- <li @if (request()->route()->uri == 'super/user') class="sidebar-item active" @else class="sidebar-item" @endif>
                            <a href="/super/user" class='sidebar-link'>
                                <i class="fas fa-user"></i>
                                <span>User</span>
                            </a>
                        </li> --}}

                        {{-- <li class="sidebar-item  has-sub">
                            <a href="#" class='sidebar-link'>
                                <i class="bi bi-collection-fill"></i>
                                <span>Extra Components</span>
                            </a>
                            <ul class="submenu ">
                                <li class="submenu-item ">
                                    <a href="extra-component-avatar.html">Avatar</a>
                                </li>
                                <li class="submenu-item ">
                                    <a href="extra-component-sweetalert.html">Sweet Alert</a>
                                </li>
                            </ul>
                        </li> --}}

                        <li class="sidebar-title">Lapangan</li>

                        <li @if (request()->route()->uri == 'admin/jenis') class="sidebar-item active" @else class="sidebar-item" @endif>
                            <a href="jenis" class='sidebar-link'>
                                <i class="fas fa-futbol"></i>
                                <span>Jenis Olahraga</span>
                            </a>
                        </li>

                        <li @if (request()->route()->uri == 'admin/lapangan') class="sidebar-item active" @else class="sidebar-item" @endif>
                            <a href="lapangan" class='sidebar-link'>
                                <i class="fas fa-running"></i>
                                <span>Daftar Lapangan</span>
                            </a>
                        </li>

                        <li class="sidebar-title">Info</li>

                        <li @if (request()->route()->uri == 'admin/jadwal') class="sidebar-item active" @else class="sidebar-item" @endif>
                            <a href="jadwal" class='sidebar-link'>
                                <i class="fas fa-calendar-alt"></i>
                                <span>Jadwal</span>
                            </a>
                        </li>

                        <li @if (request()->route()->uri == 'admin/transaksi') class="sidebar-item active" @else class="sidebar-item" @endif>
                            <a href="transaksi" class='sidebar-link'>
                                <i class="fas fa-file-invoice"></i>
                                <span>Transaksi</span>
                            </a>
                        </li>

                    </ul>
                </div>
            </div>
        </div>
        <div id="main">
            <header class="mb-3">
                <a href="#" class="burger-btn d-block d-xl-none">
                    <i class="bi bi-justify fs-3"></i>
                </a>
            </header>

            <div class="page-heading">
                <div class="page-title">
                    <div class="row">
                        <div class="col-12 col-md-6 order-md-1 order-last">
                            <h3>@yield('head')</h3>
                        </div>
                        <div @if (request()->route()->uri == 'admin/dashboard') class="d-none" @else class="col-12 col-md-6 order-md-2 order-first" @endif>
                            <nav aria-label="breadcrumb" class="breadcrumb-header float-start float-lg-end">
                                <ol class="breadcrumb">
                                    <li class="breadcrumb-item"><a href="dashboard">Admin</a></li>
                                    <li class="breadcrumb-item active" aria-current="page">@yield('head')</li>
                                </ol>
                            </nav>
                        </div>
                    </div>
                </div>
                <section class="section">
                    @yield('content')
                </section>
            </div>

            <footer>
                <div class="footer clearfix mb-0 text-muted">
                    <div class="d-flex justify-content-center">
                        <p>2023 &copy; Bolang</p>
                    </div>
                </div>
            </footer>
        </div>
    </div>

    {{-- Script --}}
    <script src="assets/js/bootstrap.js"></script>
    <script src="assets/js/app.js"></script>
    <!-- Need: Apexcharts -->
    <script src="assets/extensions/apexcharts/apexcharts.min.js"></script>
    <script src="assets/js/pages/dashboard.js"></script>
    {{-- End Script --}}

</body>

</html>
