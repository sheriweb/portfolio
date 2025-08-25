<main>
    <style>
        /* Hero */
        .hero-slide{ position:relative; height:520px; background:#0b0f14; }
        .hero-img{ position:absolute; inset:0; width:100%; height:100%; object-fit:cover; }
        .hero-overlay{ position:absolute; inset:0; background:rgba(0,0,0,.55); }
        .hero-inner { position:relative; z-index:2; padding: 140px 0 80px; }
        .hero-title { font-weight:800; letter-spacing:-.5px; font-size: 3rem; color:#ffffff !important; }
        .hero-sub { color:#e5e7eb; font-size:1.05rem; max-width: 720px; }

        /* Buttons */
        .btn-mint { background:#22c55e; color:#052e1a; border-color:#16a34a; }
        .btn-mint:hover { background:#16a34a; color:#eafff4; border-color:#15803d; }

        /* Services */
        .services-wrap { background:#111827; padding: 48px 0; }
        .services-wrap h2, .services-wrap p { color:#ffffff !important; }
        .service-card { background:#0f172a; border:1px solid rgba(148,163,184,.18); border-radius:12px; box-shadow:0 8px 22px rgba(0,0,0,.35); transition:transform .2s, box-shadow .2s; padding:14px; color:#e5e7eb; }
        .service-card:hover { transform: translateY(-1px); box-shadow:0 12px 28px rgba(0,0,0,.5); }
        .service-card h5{ font-size:1rem; margin-bottom:.35rem; color:#ffffff; }
        .service-card p{ margin-bottom:10px; min-height:28px; font-size:.92rem; color:#cbd5e1 !important; }
        .service-icon { width:44px; height:44px; border-radius:10px; display:flex; align-items:center; justify-content:center; background: var(--bg,#eef2ff); color: var(--fg,#4f46e5); font-size:16px; }

        /* Expertise slider */
        .expertise { position:relative; color:#fff; background:#0b0f14; }
        .expertise .content{ position:relative; z-index:1; }
        .expertise h2, .expertise p{ color:#ffffff !important; }
        .exp-panel{ background:rgba(15,23,42,.75); border:1px solid rgba(148,163,184,.25); box-shadow:0 12px 30px rgba(0,0,0,.35); border-radius:16px; padding:30px 32px; min-height:280px; max-width:780px; margin:0 auto; backdrop-filter: blur(3px); }
        .expertise-slider .exp-slide{ position:relative; height:440px; background:#0b0f14; border-radius:12px; overflow:hidden; }
        .expertise-slider .exp-overlay{ position:absolute; inset:0; background:rgba(0,0,0,.45); }
        .expertise-slider .slick-dots, .expertise-slider .slick-arrow{ display:none !important; }
        .exp-item{ color:#ffffff; opacity:.9; }
        .exp-item.active{ color:#ffffff; opacity:1; font-weight:800; text-shadow:0 2px 10px rgba(0,0,0,.45); }

        /* Why choose us */
        .why-wrap{ background:#111827; padding:48px 0; color:#ffffff; }
        .why-wrap h2, .why-wrap p, .why-wrap strong{ color:#ffffff !important; }
        .why-wrap p{ margin-bottom:.6rem; opacity:.95; }
        .why-video{ border-radius:12px; overflow:hidden; box-shadow:0 12px 30px rgba(0,0,0,.35); }

        /* Contact section */
        .contact-wrap{ background:#111827; padding:56px 0; color:#fff; }
        .contact-wrap h3, .contact-wrap p, .contact-wrap label{ color:#ffffff !important; }
        .contact-card{ background:#0f172a; border:1px solid rgba(148,163,184,.25); border-radius:14px; padding:20px; box-shadow:0 12px 30px rgba(0,0,0,.35); }
        .contact-map{ border-radius:12px; overflow:hidden; box-shadow:0 10px 24px rgba(0,0,0,.25); }
        .contact-wrap .form-control{ background:#0b1222; border-color:#1f2937; color:#e5e7eb; }
        .contact-wrap .form-control::placeholder{ color:#94a3b8; }
        .contact-wrap .btn-send{ background:#ef4444; border:0; color:#fff; padding:.65rem 1rem; border-radius:10px; font-weight:600; }
        .contact-wrap .btn-send:hover{ background:#dc2626; }

        /* Slick arrows/dots on dark hero */
        .hero-slick{ position:relative; }
        .hero-slick .slick-prev, .hero-slick .slick-next{ position:absolute; top:50%; transform:translateY(-50%); z-index:3; width:44px; height:44px; border-radius:22px; background:rgba(0,0,0,.35); }
        .hero-slick .slick-prev{ left:12px; }
        .hero-slick .slick-next{ right:12px; }
        .hero-slick .slick-prev:before, .hero-slick .slick-next:before{ color:#fff; font-size:24px; }
        .hero-slick .slick-dots{ position:absolute; bottom:12px; left:0; right:0; display:flex !important; justify-content:center; gap:6px; margin:0; padding:0; list-style:none !important; }
        .hero-slick .slick-dots li{ width:auto; height:auto; list-style:none; }
        .hero-slick .slick-dots li button{ font-size:0 !important; line-height:0 !important; width:10px; height:10px; padding:0; border-radius:50%; background:rgba(255,255,255,.5); border:0; }
        .hero-slick .slick-dots li.slick-active button{ background:#fff; }
    </style>

    <!-- Hero Slider (Slick) -->
    <section class="position-relative">
        @php
            $slides = [
                'https://smartglobalhub.com/images/intro-1.jpg',
                'https://smartglobalhub.com/images/intro-2.avif',
                'https://smartglobalhub.com/images/intro-3.jpg',
                'https://smartglobalhub.com/images/intro-5.jpg',
                'https://smartglobalhub.com/images/intro-4.webp',
                'https://smartglobalhub.com/images/intro-6.webp',
                'https://smartglobalhub.com/images/intro-7.webp',
            ];
        @endphp
        <div id="homeHeroSlick" class="hero-slick">
            @foreach($slides as $i => $src)
                <div>
                    <div class="hero-slide">
                        <img class="hero-img" src="{{ $src }}" alt="Slide {{ $i+1 }}">
                        <div class="hero-overlay"></div>
                        <div class="container hero-inner">
                            <div class="row">
                                <div class="col-lg-10 col-xl-8">
                                    <h1 class="hero-title mb-2">The Future<br>of Your Business is Here</h1>
                                    <p class="hero-sub mb-4">We offer cost‑effective, customized technology and software solutions, empowering businesses with scalable, secure, and AI‑powered digital experiences.</p>
                                    <div class="d-flex gap-2 flex-wrap">
                                        <a wire:navigate href="#services" class="btn btn-primary">Explore Services</a>
                                        <a wire:navigate href="{{ route('articles.index') }}" class="btn btn-mint">Read Articles</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
    </section>

    <script>
        function initHeroSlick(){
            if (!(window.$ && typeof $.fn.slick === 'function')) return;
            var $el = $('#homeHeroSlick');
            if (!$el.length || $el.hasClass('slick-initialized')) return;
            $el.slick({
                dots: true,
                arrows: false,
                autoplay: true,
                autoplaySpeed: 6000,
                fade: true,
                speed: 600,
                cssEase: 'linear'
            });
        }
        document.addEventListener('DOMContentLoaded', initHeroSlick);
        document.addEventListener('livewire:navigated', initHeroSlick);

        function setActiveExpertise(idx){
            document.querySelectorAll('.exp-item').forEach(function(el){
                if (parseInt(el.getAttribute('data-exp-idx')) === idx) el.classList.add('active');
                else el.classList.remove('active');
            });
        }
        function initExpertiseSlick(){
            if (!(window.$ && typeof $.fn.slick === 'function')) return;
            var $ex = $('#expertiseSlick');
            if (!$ex.length || $ex.hasClass('slick-initialized')) return;
            $ex.slick({
                dots: false,
                arrows: false,
                autoplay: true,
                autoplaySpeed: 4000,
                fade: true,
                speed: 700,
                cssEase: 'linear'
            }).on('init', function(event, slick){
                setActiveExpertise(slick.currentSlide || 0);
            }).on('afterChange', function(event, slick, current){
                setActiveExpertise(current);
            });
        }
        document.addEventListener('DOMContentLoaded', initExpertiseSlick);
        document.addEventListener('livewire:navigated', initExpertiseSlick);
    </script>

    <!-- Services tiles on dark bg -->
    <section id="services" class="services-wrap">
        <div class="container">
            <div class="row align-items-end mb-4 text-white">
                <div class="col-lg-8">
                    <h2 class="mb-2">Our Services</h2>
                    <p class="mb-0" style="opacity:.9">End-to-end solutions tailored to your goals.</p>
                </div>
                <div class="col-lg-4 text-lg-end mt-3 mt-lg-0">
                    <a wire:navigate href="{{ route('service.page') }}" class="btn btn-outline-light">View All</a>
                </div>
            </div>
            <div class="row g-3">
                @foreach($services as $key => $item)
                    @php
                        $palettes = [
                            ['bg' => '#eef2ff', 'fg' => '#4f46e5'],
                            ['bg' => '#ecfeff', 'fg' => '#0891b2'],
                            ['bg' => '#fef3c7', 'fg' => '#b45309'],
                            ['bg' => '#fce7f3', 'fg' => '#be185d'],
                            ['bg' => '#dcfce7', 'fg' => '#16a34a'],
                        ];
                        $p = $palettes[$key % count($palettes)];
                    @endphp
                    <div class="col-lg-4 col-md-6">
                        <div class="service-card h-100 text-center">
                            <div class="mx-auto mb-3 service-icon" style="--bg: {{ $p['bg'] }}; --fg: {{ $p['fg'] }};">
                                <i class="{{ $item->icon_class ?: 'fas fa-cogs' }}"></i>
                            </div>
                            <h5 class="mb-2">{{$item->title}}</h5>
                            <p class="text-muted">{{$item->short_description}}</p>
                            <a wire:navigate class="btn btn-sm btn-mint px-3" href="{{route('service.detail', $item->id)}}">View Details</a>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </section>

    <!-- Expertise & Technical Skills with background slider -->
    <section class="expertise py-5 mt-4 position-relative">
        <div class="container" style="position:relative; z-index:1;">
            <h2 class="text-center mb-4">Our Expertise & Technical Skills</h2>
        </div>
        @php
            // Order to match the bullet list below: Frontend, Backend, AI, Database
            $expertiseSlides = [
                'https://smartglobalhub.com/images/expert-areas/frontend.webp',
                'https://smartglobalhub.com/images/expert-areas/backend.webp',
                'https://smartglobalhub.com/images/expert-areas/ai.webp',
                'https://smartglobalhub.com/images/expert-areas/database.webp',
            ];
        @endphp
        <div id="expertiseSlick" class="expertise-slider position-absolute w-100" style="z-index:0; inset:0;">
            @foreach($expertiseSlides as $src)
                <div>
                    <div class="exp-slide">
                        <img class="exp-img" src="{{ $src }}" alt="expertise">
                        <div class="exp-overlay"></div>
                    </div>
                </div>
            @endforeach
        </div>
        <div class="container content" style="position:relative; z-index:1;">
            <div class="row justify-content-center">
                <div class="col-lg-9">
                    <div class="text-center exp-panel">
                        <p class="mb-2 fw-semibold exp-item" data-exp-idx="0">Frontend (UI/UX & Responsiveness)</p>
                        <p class="mb-2">We create visually stunning and highly responsive user interfaces.</p>
                        <p class="mb-2 fw-semibold exp-item" data-exp-idx="1">Backend (Functionality & Security)</p>
                        <p class="mb-2">Robust functionality with top-notch security for your applications.</p>
                        <p class="mb-2 fw-semibold exp-item" data-exp-idx="2">AI / Automation Features</p>
                        <p class="mb-2">Integrating AI and automation to streamline your processes.</p>
                        <p class="mb-0 fw-semibold exp-item" data-exp-idx="3">Database Optimization</p>
                        <p class="mb-0">Optimized databases for performance, scalability, and reliability.</p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Why choose us -->
    <section class="why-wrap">
        <div class="container">
            <div class="row align-items-center g-4">
                <div class="col-lg-6">
                    <h2 class="mb-3">Why Choose Us?</h2>
                    <p>We are committed to providing high‑quality solutions with the following core values:</p>
                    <p><strong>Experienced Professionals</strong> — Our team is dedicated to excellence in every project.</p>
                    <p><strong>Innovative Solutions</strong> — We leverage the latest technologies to develop innovative solutions for your business.</p>
                    <p><strong>Customer‑Centric Approach</strong> — We prioritize understanding your needs and delivering solutions aligned with your goals.</p>
                    <p class="mb-0"><strong>Proven Track Record</strong> — With successful projects across industries worldwide.</p>
                </div>
                <div class="col-lg-6">
                    <div class="why-video">
                        <video class="w-100" autoplay muted loop playsinline poster="{{ asset('front/images/about-us.png') }}">
                            <source src="https://cdn.coverr.co/videos/coverr-business-meeting-people-working-3906/1080p.mp4" type="video/mp4">
                        </video>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Contact Us (replaces mission and CTA) -->
    <section id="contact" class="contact-wrap">
        <div class="container">
            <div class="row g-4">
                <div class="col-lg-6">
                    <h3 class="mb-3">Address</h3>
                    <p class="mb-4">Al Futtaim Office Tower, Day to Day Building, 1st Floor - Office 102<br>SmartGlobal AI Solutions</p>

                    <h3 class="mb-2">Call Us</h3>
                    <p class="mb-4">+971 50 440 6565</p>

                    <h3 class="mb-2">Email Us</h3>
                    <p class="mb-4">team@smartglobalhub.com</p>

                    <div class="contact-map">
                        <iframe src="https://www.google.com/maps?q=Al%20Futtaim%20Tower%20Dubai&output=embed" width="100%" height="260" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="contact-card">
                        <h3 class="mb-3">Contact Form</h3>
                        <form action="#!" method="post" onsubmit="return false;">
                            <div class="mb-3">
                                <label class="form-label">Name *</label>
                                <input type="text" class="form-control" placeholder="Your Name">
                            </div>
                            <div class="mb-3">
                                <label class="form-label">Email *</label>
                                <input type="email" class="form-control" placeholder="Your Email">
                            </div>
                            <div class="mb-3">
                                <label class="form-label">Subject *</label>
                                <input type="text" class="form-control" placeholder="Subject">
                            </div>
                            <div class="mb-4">
                                <label class="form-label">Message</label>
                                <textarea class="form-control" rows="4" placeholder="Your Message"></textarea>
                            </div>
                            <button class="btn btn-send w-100" type="button">Send Message</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>
</main>
