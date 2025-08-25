<main>
    <style>
        .page-header.bg-tertiary { position: relative; overflow: hidden; background:#0b0f14; color:#fff; }
        .page-header h2, .page-header p, .breadcrumbs a{ color:#ffffff !important; }
        .shape { position:absolute; opacity:.25; }
        .shape.shape-left { left:-60px; top:0; height:100%; }
        .shape.shape-right { right:-60px; top:0; height:100%; }

        .service-hero-icon { width:64px; height:64px; border-radius:50%; display:flex; align-items:center; justify-content:center; background:#eef2ff; color:#4f46e5; }
        .service-card { background:#0f172a; border:1px solid rgba(148,163,184,.18); border-radius:14px; box-shadow:0 8px 22px rgba(0,0,0,.35); color:#e5e7eb; }
        .service-card:hover { box-shadow:0 12px 28px rgba(0,0,0,.5); }
        .btn-mint { background:#22c55e; color:#052e1a; border-color:#16a34a; }
        .btn-mint:hover { background:#16a34a; color:#eafff4; border-color:#15803d; }
        .content :where(h2,h3,h4) { margin-top:1.25rem; margin-bottom:.5rem; color:#ffffff; }
        .content p { color:#cbd5e1; line-height:1.8; margin-bottom:1rem; }
        .content ul { padding-left:1.1rem; margin: .5rem 0 1rem; }
        .content li { margin:.25rem 0; }
        .sticky-card { position: sticky; top: 90px; }
    </style>
    <section class="page-header bg-tertiary">
        <div class="container">
            <div class="row">
                <div class="col-10 col-lg-8 mx-auto text-center">
                    <div class="d-flex align-items-center justify-content-center gap-3 mb-3">
                        <div class="service-hero-icon">
                            <i class="{{ $service?->icon_class ?: 'fas fa-cogs' }} fa-lg"></i>
                        </div>
                        <h2 class="mb-0 text-capitalize">{{$service?->title}}</h2>
                    </div>
                    @if($service?->short_description)
                        <p class="text-muted mb-3">{{$service->short_description}}</p>
                    @endif
                    <ul class="list-inline breadcrumbs text-capitalize" style="font-weight:500">
                        <li class="list-inline-item"><a wire:navigate href="{{route('home')}}">Home</a></li>
                        <li class="list-inline-item">/ &nbsp; <a wire:navigate href="{{route('service.page')}}">Services</a></li>
                        <li class="list-inline-item">/ &nbsp; {{$service?->title}}</li>
                    </ul>
                </div>
            </div>
        </div>
        <div class="has-shapes">
            <svg class="shape shape-left text-light" viewBox="0 0 192 752" fill="none" xmlns="http://www.w3.org/2000/svg">
                <path d="M-30.883 0C-41.3436 36.4248 -22.7145 75.8085 4.29154 102.398C31.2976 128.987 65.8677 146.199 97.6457 166.87C129.424 187.542 160.139 213.902 172.162 249.847C193.542 313.799 149.886 378.897 129.069 443.036C97.5623 540.079 122.109 653.229 191 728.495" stroke="currentColor" stroke-miterlimit="10"/>
                <path d="M-55.5959 7.52271C-66.0565 43.9475 -47.4274 83.3312 -20.4214 109.92C6.58466 136.51 41.1549 153.722 72.9328 174.393C104.711 195.064 135.426 221.425 147.449 257.37C168.829 321.322 125.174 386.42 104.356 450.559C72.8494 547.601 97.3965 660.752 166.287 736.018" stroke="currentColor" stroke-miterlimit="10"/>
            </svg>
            <svg class="shape shape-right text-light" viewBox="0 0 731 746" fill="none" xmlns="http://www.w3.org/2000/svg">
                <path d="M12.1794 745.14C1.80036 707.275 -5.75764 666.015 8.73984 629.537C27.748 581.745 80.4729 554.968 131.538 548.843C182.604 542.703 234.032 552.841 285.323 556.748C336.615 560.64 391.543 557.276 433.828 527.964C492.452 487.323 511.701 408.123 564.607 360.255C608.718 320.353 675.307 307.183 731.29 327.323" stroke="currentColor" stroke-miterlimit="10"/>
            </svg>
        </div>
    </section>

    <section class="section-sm">
        <div class="container">
            <div class="row g-4">
                <div class="col-lg-8">
                    <div class="service-card border-0">
                        <div class="card-body p-4 p-md-5">
                            <div class="content">
                                {!! $service?->description !!}
                            </div>
                            <div class="mt-4 d-flex gap-2 flex-wrap">
                                <a wire:navigate href="{{ route('service.page') }}" class="btn btn-mint btn-sm px-3">
                                    <i class="las la-arrow-left me-1"></i> Back to Services
                                </a>
                                <a href="#" class="btn btn-outline-primary btn-sm px-3">
                                    <i class="las la-paper-plane me-1"></i> Get a Quote
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="service-card sticky-card p-4">
                        <div class="d-flex align-items-center gap-3 mb-3">
                            <div class="service-hero-icon"><i class="{{ $service?->icon_class ?: 'fas fa-cogs' }} fa-lg"></i></div>
                            <div>
                                <h5 class="mb-1">{{$service?->title}}</h5>
                                @if($service?->short_description)
                                    <div class="text-muted small">{{$service->short_description}}</div>
                                @endif
                            </div>
                        </div>
                        <ul class="list-unstyled mb-3 text-muted small">
                            <li class="mb-2"><i class="las la-check-circle text-success me-1"></i> Professional delivery</li>
                            <li class="mb-2"><i class="las la-check-circle text-success me-1"></i> Clear communication</li>
                            <li class="mb-2"><i class="las la-check-circle text-success me-1"></i> On-time results</li>
                        </ul>
                        <a wire:navigate href="{{ route('service.page') }}" class="btn btn-mint w-100">Explore more services</a>
                    </div>
                </div>
            </div>
        </div>
    </section>
</main>
