<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('head') - @yield('akun')</title>

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
                            <a href="/"><img src="{{ asset('image/logo.png') }}" alt="logo"
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
                            class="sidebar-item {{ request()->is('admin/dashboard*') || request()->is('super/dashboard*') ? 'active' : '' }}">
                            <a href="{{ auth()->user()->roles == 'admin' ? '/admin/dashboard' : '/super/dashboard' }}"
                                class='sidebar-link'>
                                <i class="bi bi-grid-fill"></i>
                                <span>Dashboard</span>
                            </a>
                        </li>
                        @if (auth()->user()->roles == 'super')
                            <li class="sidebar-item {{ request()->is('super/user*') ? 'active' : '' }}">
                                <a href="/super/user" class='sidebar-link'>
                                    <i class="fas fa-user"></i>
                                    <span>Admin Lapangan</span>
                                </a>
                            </li>
                        @endif

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

                        <li class="sidebar-item {{ request()->is('admin/jenis*') || request()->is('super/jenis*') ? 'active' : '' }}">
                            <a href="{{ auth()->user()->roles == 'admin' ? '/admin/jenis' : '/super/jenis' }}" class='sidebar-link'>
                                <i class="fas fa-futbol"></i>
                                <span>Jenis Olahraga</span>
                            </a>
                        </li>

                        <li class="sidebar-item {{ request()->is('admin/lapangan*') || request()->is('super/lapangan*') ? 'active' : '' }}">
                            <a href="{{ auth()->user()->roles == 'admin' ? '/admin/lapangan' : '/super/lapangan' }}" class='sidebar-link'>
                                <i class="fas fa-running"></i>
                                <span>Daftar Lapangan</span>
                            </a>
                        </li>

                        <li class="sidebar-title">Info</li>

                        <li class="sidebar-item {{ request()->is('admin/jadwal*') || request()->is('super/jadwal*') ? 'active' : '' }}">
                            <a href="{{ auth()->user()->roles == 'admin' ? '/admin/jadwal' : '/super/jadwal' }}" class='sidebar-link'>
                                <i class="fas fa-calendar-alt"></i>
                                <span>Jadwal</span>
                            </a>
                        </li>

                        <li class="sidebar-item {{ request()->is('admin/transaksi*') || request()->is('super/transaksi*') ? 'active' : '' }}">
                            <a href="{{ auth()->user()->roles == 'admin' ? '/admin/transaksi' : '/super/transaksi' }}" class='sidebar-link'>
                                <i class="fas fa-file-invoice"></i>
                                <span>Transaksi</span>
                            </a>
                        </li>

                    </ul>
                </div>
            </div>
        </div>
        <div id="main" class='layout-navbar'>
            <header class='mb-3'>
                <nav class="navbar navbar-expand navbar-light navbar-top">
                    <div class="container-fluid">
                        <a href="#" class="burger-btn d-block">
                            <i class="bi bi-justify fs-3"></i>
                        </a>

                        <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                            data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent"
                            aria-expanded="false" aria-label="Toggle navigation">
                            <span class="navbar-toggler-icon"></span>
                        </button>
                        <div class="collapse navbar-collapse" id="navbarSupportedContent">
                            <ul class="navbar-nav ms-auto mb-lg-0">
                                <li class="nav-item dropdown me-3">
                                    <a class="nav-link active dropdown-toggle text-gray-600" href="#"
                                        data-bs-toggle="dropdown" data-bs-display="static" aria-expanded="false">
                                        <i class='bi bi-bell bi-sub fs-4'></i>
                                    </a>
                                    <ul class="dropdown-menu dropdown-menu-end notification-dropdown"
                                        aria-labelledby="dropdownMenuButton">
                                        <li class="dropdown-header">
                                            <h6>Notifications</h6>
                                        </li>
                                        <li class="dropdown-item notification-item">
                                            <a class="d-flex align-items-center" href="#">
                                                <div class="notification-icon bg-primary">
                                                    <i class="bi bi-cart-check"></i>
                                                </div>
                                                <div class="notification-text ms-4">
                                                    <p class="notification-title font-bold">Transaksi Sukses</p>
                                                    <p class="notification-subtitle font-thin text-sm">Order ID #256
                                                    </p>
                                                </div>
                                            </a>
                                        </li>
                                        <li class="dropdown-item notification-item">
                                            <a class="d-flex align-items-center" href="#">
                                                <div class="notification-icon bg-primary">
                                                    <i class="bi bi-cart-check"></i>
                                                </div>
                                                <div class="notification-text ms-4">
                                                    <p class="notification-title font-bold">Transaksi Belum Dibayar</p>
                                                    <p class="notification-subtitle font-thin text-sm">Order ID #256
                                                    </p>
                                                </div>
                                            </a>
                                        </li>
                                        <li>
                                            <p class="text-center py-2 mb-0"><a href="#">See all
                                                    notification</a></p>
                                        </li>
                                    </ul>
                                </li>
                            </ul>
                            <div class="dropdown">
                                <a href="#" data-bs-toggle="dropdown" aria-expanded="false">
                                    <div class="user-menu d-flex">
                                        <div class="user-name text-end me-3">
                                            <h6 class="mb-0 text-gray-600">{{ auth()->user()->nama }}</h6>
                                            <p class="mb-0 text-sm text-gray-600">{{ auth()->user()->roles }}</p>
                                        </div>
                                        <div class="user-img d-flex align-items-center">
                                            <div class="avatar avatar-md">
                                                <img src="{{ asset('assets/images/faces/1.jpg') }}">
                                            </div>
                                        </div>
                                    </div>
                                </a>
                                <ul class="dropdown-menu dropdown-menu-end" aria-labelledby="dropdownMenuButton"
                                    style="min-width: 11rem;">
                                    <li>
                                        <h6 class="dropdown-header">Hello, {{ auth()->user()->nama }}</h6>
                                    </li>
                                    <li><a class="dropdown-item" href="/admin/dashboard"><i
                                                class="fas fa-user me-2"></i> My
                                            Profile</a></li>
                                    <li><a class="dropdown-item" href="/admin/transaksi"><i
                                                class="fas fa-file-invoice me-2"></i>
                                            Transaksi</a></li>
                                    <li>
                                        <hr class="dropdown-divider">
                                    </li>
                                    <li><a class="dropdown-item" href="{{ auth()->user()->roles == 'admin' ? '/logout' : '/logoutsuper' }}"><i
                                                class="fas fa-sign-out-alt me-2"></i> Logout</a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </nav>
            </header>
            <div id="main-content">

                <div class="page-heading">
                    <div class="page-title">
                        <div class="row">
                            <div class="col-12 col-md-6 order-md-1 order-last">
                                <h3>@yield('head')</h3>
                            </div>
                            <div
                                @if (request()->is('admin/dashboard*') || request()->is('super/dashboard*')) class="d-none" @else class="col-12 col-md-6 order-md-2 order-first" @endif>
                                <nav aria-label="breadcrumb" class="breadcrumb-header float-start float-lg-end">
                                    <ol class="breadcrumb">
                                        <li class="breadcrumb-item"><a href="{{ auth()->user()->roles == 'admin' ? '/admin/dashboard' : '/super/dashboard' }}">@yield('akun')</a>
                                        </li>
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
    </div>

    {{-- Script --}}
    <script src="{{ asset('assets/js/bootstrap.js') }}"></script>
    <script src="{{ asset('assets/js/app.js') }}"></script>
    <script src="{{ asset('assets/js/pages/dashboard.js') }}"></script>
    {{-- End Script --}}

</body>

</html>
