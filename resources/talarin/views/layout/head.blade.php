<meta charset="utf-8" />

<title>
    قالب Finder | قالب چند منظوره فایندر راهنما سفر | خانه - نسخه 2
</title>

<!-- SEO Meta Tags-->
<!-- SEO Meta Tags-->
<meta name="description" content="" />
<meta name="keywords" content="" />
<meta name="author" content="" />

<!-- Viewport-->
<meta name="viewport" content="width=device-width, initial-scale=1" />
<!-- Favicon and Touch Icons-->
<link rel="apple-touch-icon" sizes="180x180" href="apple-touch-icon.png" />
<link rel="icon" type="image/png" sizes="32x32" href="favicon-32x32.png" />
<link rel="icon" type="image/png" sizes="16x16" href="favicon-16x16.png" />
<link rel="manifest" href="site.webmanifest" />
<link rel="mask-icon" color="#5bbad5" href="safari-pinned-tab.svg" />
<meta name="msapplication-TileColor" content="#766df4" />
<meta name="theme-color" content="#ffffff" />
<!-- Page loading styles-->

<style>
    .page-loading {
        position: fixed;
        top: 0;
        right: 0;
        bottom: 0;
        left: 0;
        width: 100%;
        height: 100%;
        -webkit-transition: all 0.4s 0.2s ease-in-out;
        transition: all 0.4s 0.2s ease-in-out;
        background-color: #fff;
        opacity: 0;
        visibility: hidden;
        z-index: 9999;
    }

    .page-loading.active {
        opacity: 1;
        visibility: visible;
    }

    .page-loading-inner {
        position: absolute;
        top: 50%;
        left: 0;
        width: 100%;
        text-align: center;
        -webkit-transform: translateY(-50%);
        transform: translateY(-50%);
        -webkit-transition: opacity 0.2s ease-in-out;
        transition: opacity 0.2s ease-in-out;
        opacity: 0;
    }

    .page-loading.active>.page-loading-inner {
        opacity: 1;
    }

    .page-loading-inner>span {
        display: block;
        font-size: 1rem;
        font-weight: normal;
        color: #666276;
    }

    .page-spinner {
        display: inline-block;
        width: 2.75rem;
        height: 2.75rem;
        margin-bottom: 0.75rem;
        vertical-align: text-bottom;
        border: 0.15em solid #bbb7c5;
        border-right-color: transparent;
        border-radius: 50%;
        -webkit-animation: spinner 0.75s linear infinite;
        animation: spinner 0.75s linear infinite;
    }

    @-webkit-keyframes spinner {
        100% {
            -webkit-transform: rotate(360deg);
            transform: rotate(360deg);
        }
    }

    @keyframes spinner {
        100% {
            -webkit-transform: rotate(360deg);
            transform: rotate(360deg);
        }
    }
</style>
<!-- Page loading scripts-->
<script>
    (function() {
        window.onload = function() {
            var preloader = document.querySelector(".page-loading");
            preloader.classList.remove("active");
            setTimeout(function() {
                preloader.remove();
            }, 2000);
        };
    })();
</script>

<!-- Vendor Styles-->
<link rel="stylesheet" media="screen" href="{{ asset('talarin/vendor/simplebar/dist/simplebar.min.css') }}" />
<link rel="stylesheet" media="screen" href="{{ asset('talarin/vendor/tiny-slider/dist/tiny-slider.css') }}" />
<link rel="stylesheet" media="screen" href="{{ asset('talarin/vendor/flatpickr/dist/flatpickr.min.css') }}" />
<link rel="stylesheet" media="screen" href="{{ asset('talarin/vendor/persain-date/persian-datepicker.min.css') }}" />
<!-- Main Theme Styles + Bootstrap-->
<link rel="stylesheet" media="screen" href="{{ asset('talarin/css/theme.min.css') }}" />



<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css" /> <!-- Added Flaticon via Font Awesome CDN -->
