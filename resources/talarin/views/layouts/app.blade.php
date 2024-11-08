<!DOCTYPE html>
<html lang="fa">
<head>
    <meta http-equiv="content-type" content="text/html;charset=utf-8" />

    @include('layouts.head')
    @livewireStyles
</head>
<body dir="rtl">
    <!-- Demo switcher (offcanvas) -->

    <!-- Page loading spinner -->
    @include('components.loadingspinner')
    <!-- end Page loading spinner -->

    <main class="page-wrapper">
        <!-- Sign -Signup In Modal -->
        @include('components.auth')
        <!-- Navbar -->
        <header class="navbar navbar-expand-lg navbar-light bg-light fixed-top" data-scroll-header>
            @include('layouts.navbar')
        </header>
        <!-- Page content -->
        @yield('content')
        {{ $slot }}
    </main>

    <!-- Footer -->
    <footer class="footer pt-lg-5 pt-4 bg-dark text-light">
        @include('layouts.footer')
    </footer>

    @include('layouts.metafooter')

    @livewireScripts <!-- اضافه کردن اسکریپت‌های Livewire -->
</body>
</html>
