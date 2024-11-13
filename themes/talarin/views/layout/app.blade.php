<!DOCTYPE html>
<html lang="fa">
<head>
    <meta http-equiv="content-type" content="text/html;charset=utf-8" />

    @include('layout.head')
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
            @include('layout.navbar')
        </header>
        <!-- Page content -->
        @yield('content')



        <!-- Remove the slot if not needed -->



    </main>

    <!-- Footer -->
    <footer class="footer pt-lg-5 pt-4 bg-dark text-light">
        @include('layout.footer')
    </footer>

    @include('layout.metafooter')

    @livewireScripts <!-- اضافه کردن اسکریپت‌های Livewire -->
</body>
</html>
