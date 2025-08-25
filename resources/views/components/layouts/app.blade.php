<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <title>{{ $title ?? 'Page Title' }}</title>
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=5">
    <meta name="description" content="This is meta description">
    <meta name="author" content="Themefisher">
    <link rel="shortcut icon" href="{{asset('front/images/favicon.png')}}" type="image/x-icon">
    <link rel="icon" href="{{asset('front/images/favicon.png')}}" type="image/x-icon">

    <!-- # Google Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Rubik:wght@400;500;700&display=swap" rel="stylesheet">

    <!-- # CSS Plugins -->
    <link rel="stylesheet" href="{{asset('front/plugins/slick/slick.css')}}">
    <link rel="stylesheet" href="{{asset('front/plugins/font-awesome/fontawesome.min.css')}}">
    <link rel="stylesheet" href="{{asset('front/plugins/font-awesome/brands.css')}}">
    <link rel="stylesheet" href="{{asset('front/plugins/font-awesome/solid.css')}}">

    <link rel="stylesheet" href="{{asset('front/css/style.css')}}">
    @livewireStyles
    <style>
        /* Site Navbar (original design style) */
        .site-nav{ position:fixed; top:0; left:0; right:0; z-index:1030; background:transparent; transition: background .2s ease, box-shadow .2s ease; }
        .site-nav.nav-solid{ background:rgba(2,6,23,.85); backdrop-filter: blur(6px); box-shadow:0 8px 24px rgba(0,0,0,.25); }
        .site-nav .navbar{ padding:10px 0; }
        .site-nav .navbar-brand img{ height:auto; max-height:42px; }
        /* Hide stray text (e.g., 'WEB APP') if present inside brand */
        .site-nav .navbar-brand{ font-size:0; line-height:0; }
        .site-nav .navbar-brand *{ font-size:initial; line-height:initial; }
        .site-nav .nav-link{ color:#ffffff !important; font-weight:600; padding:.5rem .9rem; position:relative; }
        .site-nav .nav-link:hover{ color:#ffffff !important; opacity:.95; }
        .site-nav .nav-link.active::after{ content:''; position:absolute; left:10px; right:10px; bottom:2px; height:3px; background:#ef4444; border-radius:3px; }
        .site-nav .btn-contact{ background:#22c55e; color:#052e1a; border:0; padding:.45rem 1rem; border-radius:999px; font-weight:600; }
        .site-nav .btn-contact:hover{ background:#16a34a; color:#eafff4; }
        /* Provide top offset on non-hero pages if needed */
        body.with-fixed-nav{ padding-top:72px; }

        /* Global dark canvas */
        body{ background:#0b0f14; color:#e5e7eb; }
        .section, .bg-tertiary{ background:transparent !important; }
        /* Typography overrides to ensure white content like original design */
        body h1, body h2, body h3, body h4, body h5, body h6{ color:#ffffff !important; }
        body p, body li, body dt, body dd, body span, body small, body .text-muted, body .lead{ color:#cbd5e1 !important; }
        body a{ color:#93c5fd; }
        body a:hover{ color:#ffffff; }
        /* Avoid stray white blocks from theme */
        .bg-white, .white-bg, .bg-light{ background-color:transparent !important; }
        .text-dark, .text-black, .text-body{ color:#e5e7eb !important; }
        .card{ background:#0f172a; border-color:rgba(148,163,184,.15); color:#e5e7eb; }

        /* Footer (original design style) */
        .footer-dark{ background:#1f2937; color:#cbd5e1; border-top:1px solid rgba(148,163,184,.2); padding:20px 0 12px !important; }
        .footer-dark .footer-widget h5{ color:#ffffff !important; font-weight:700; }
        .footer-dark .footer-widget h5.mb-4{ margin-bottom:.5rem !important; }
        .footer-dark .footer-widget p, .footer-dark .footer-widget li{ color:#cbd5e1 !important; }
        .footer-dark .footer-widget a{ color:#cfe3ff !important; }
        .footer-dark .footer-widget a:hover{ color:#ffffff !important; }
        .footer-dark .footer-widget li a{ color:#cfe3ff !important; }
        .footer-bottom{ border-top:1px solid rgba(148,163,184,.15); color:#94a3b8; padding-top:12px; }
        .footer-dark .mb-4{ margin-bottom:.5rem !important; }
        .footer-dark .container{ padding-top:0 !important; padding-bottom:0 !important; }
    </style>
</head>

<body>

<!-- navigation -->
<header class="site-nav">
    <nav class="navbar navbar-expand-xl navbar-dark text-center">
        <div class="container">
            <a class="navbar-brand" href="{{ route('home') }}">
                <img loading="prelaod" decoding="async" class="img-fluid" width="160" src="{{asset('front/images/logo.png')}}" alt="Wallet">
            </a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation"> <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav m-auto mb-2 mb-lg-0">
                    <li class="nav-item"> <a wire:navigate  class="nav-link {{ request()->routeIs('home') ? 'active' : '' }}" href="{{route('home')}}">Home</a></li>
                    <li class="nav-item "> <a class="nav-link {{ request()->is('about*') ? 'active' : '' }}" href="about.html">About Us</a></li>
                    <li class="nav-item "> <a wire:navigate  class="nav-link {{ request()->routeIs('service.page') ? 'active' : '' }}" href="{{route('service.page')}}">Services</a></li>
                    <li class="nav-item "> <a wire:navigate class="nav-link {{ request()->routeIs('team.page') ? 'active' : '' }}" href="{{route('team.page')}}">Our Team</a></li>
                    <li class="nav-item "><a wire:navigate class="nav-link {{ request()->routeIs('articles.*') ? 'active' : '' }}" href="{{ route('articles.index') }}">Blog</a></li>
                    <li class="nav-item "><a wire:navigate class="nav-link {{ request()->routeIs('faqs.page') ? 'active' : '' }}" href="{{ route('faqs.page') }}">FAQs</a></li>
                </ul>
                <a href="#contact" class="btn btn-contact">Contact Us</a>
            </div>
        </div>
    </nav>
</header>
<!-- /navigation -->

<div class="modal applyLoanModal fade" id="applyLoan" tabindex="-1" aria-labelledby="applyLoanLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content">
            <div class="modal-header border-bottom-0">
                <h4 class="modal-title" id="exampleModalLabel">How much do you need?</h4>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <form action="#!" method="post">
                    <div class="row">
                        <div class="col-lg-6 mb-4 pb-2">
                            <div class="form-group">
                                <label for="loan_amount" class="form-label">Amount</label>
                                <input type="number" class="form-control shadow-none" id="loan_amount" placeholder="ex: 25000">
                            </div>
                        </div>
                        <div class="col-lg-6 mb-4 pb-2">
                            <div class="form-group">
                                <label for="loan_how_long_for" class="form-label">How long for?</label>
                                <input type="number" class="form-control shadow-none" id="loan_how_long_for" placeholder="ex: 12">
                            </div>
                        </div>
                        <div class="col-lg-12 mb-4 pb-2">
                            <div class="form-group">
                                <label for="loan_repayment" class="form-label">Repayment</label>
                                <input type="number" class="form-control shadow-none" id="loan_repayment" disabled>
                            </div>
                        </div>
                        <div class="col-lg-6 mb-4 pb-2">
                            <div class="form-group">
                                <label for="loan_full_name" class="form-label">Full Name</label>
                                <input type="text" class="form-control shadow-none" id="loan_full_name">
                            </div>
                        </div>
                        <div class="col-lg-6 mb-4 pb-2">
                            <div class="form-group">
                                <label for="loan_email_address" class="form-label">Email address</label>
                                <input type="email" class="form-control shadow-none" id="loan_email_address">
                            </div>
                        </div>
                        <div class="col-lg-12">
                            <button type="submit" class="btn btn-primary w-100">Get Your Loan Now</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>

{{ $slot }}

<footer class="section-sm footer-dark">
    <div class="container">
        <div class="row justify-content-between">
            <div class="col-lg-2 col-md-4 col-6 mb-4">
                <div class="footer-widget">
                    <h5 class="mb-4 text-primary font-secondary">Services</h5>
                    <ul class="list-unstyled">
                        @forelse(($footerServices ?? collect()) as $svc)
                            <li class="mb-2">
                                <a wire:navigate href="{{ route('service.detail', $svc->id) }}">{{ $svc->title }}</a>
                            </li>
                        @empty
                            <li class="mb-2 text-muted">No services yet</li>
                        @endforelse
                    </ul>
                </div>
            </div>
            <div class="col-lg-2 col-md-4 col-6 mb-4">
                <div class="footer-widget">
                    <h5 class="mb-4 text-primary font-secondary">Quick Links</h5>
                    <ul class="list-unstyled">
                        <li class="mb-2"><a href="#!">About Us</a>
                        </li>
                        <li class="mb-2"><a href="#!">Contact Us</a>
                        </li>
                        <li class="mb-2"><a href="#!">Blog</a>
                        </li>
                        <li class="mb-2"><a href="#!">Team</a>
                        </li>
                    </ul>
                </div>
            </div>
            <div class="col-lg-2 col-md-4 col-6 mb-4">
                <div class="footer-widget">
                    <h5 class="mb-4 text-primary font-secondary">Other Links</h5>
                    <ul class="list-unstyled">
                        <li class="list-inline-item me-4"><a href="privacy-policy.html">Privacy Policy</a></li>
                        <li class="list-inline-item me-4"><a href="terms.html">Terms &amp; Conditions</a></li>
                    </ul>
                </div>
            </div>
        </div>
        
    </div>
</footer>

<!-- # JS Plugins -->
<script src="{{asset('front/plugins/jquery/jquery.min.js')}}"></script>
<script src="{{asset('front/plugins/bootstrap/bootstrap.min.js')}}"></script>
<script src="{{asset('front/plugins/slick/slick.min.js')}}"></script>

<!-- Main Script -->
<script src="{{asset('front/js/script.js')}}"></script>
<script>
    (function(){
        var header = document.querySelector('.site-nav');
        if(!header) return;
        function onScroll(){
            if(window.scrollY > 10){ header.classList.add('nav-solid'); }
            else { header.classList.remove('nav-solid'); }
        }
        document.addEventListener('DOMContentLoaded', onScroll);
        window.addEventListener('scroll', onScroll, { passive:true });
    })();
</script>
@livewireScripts
</body>
</html>
