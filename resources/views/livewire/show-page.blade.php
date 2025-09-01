<main>
    <style>
        .page-hero { background:#0b0f14; color:#fff; padding-top:160px !important; }
        .page-hero h1, .page-hero p{ color:#ffffff !important; }
        
        .section{ background:#0b0f14; }
        .section-content { color:#cbd5e1; }
        .section-content h2, .section-content h3 { color:#ffffff; margin-top:1.5rem; margin-bottom:1rem; }
        .section-content p { margin-bottom:1rem; }
        .section-content ul, .section-content ol { margin-bottom:1rem; padding-left:1.5rem; }
        .section-content a { color:#38bdf8; text-decoration:underline; }
        .section-content a:hover { color:#0ea5e9; }
    </style>

    <section class="page-hero py-5">
        <div class="container">
            <div class="row">
                <div class="col-lg-8 mx-auto text-center">
                    <h1 class="mb-2">{{ $page->title }}</h1>
                </div>
            </div>
        </div>
    </section>

    <section class="section py-5">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-9">
                    <div class="card border-0 shadow-sm">
                        <div class="card-body p-4">
                            @if($page->image)
                                <img src="{{ $page->image }}" alt="{{ $page->title }}" class="img-fluid rounded mb-4">
                            @endif
                            <div class="section-content">
                                {!! $page->content !!}
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
</main>
