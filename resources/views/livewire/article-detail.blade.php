<main>
    <style>
        .section{ background:#0b0f14; }
        .section-top{ padding-top: 100px !important; }
        .section h1, .section h2, .section h3, .breadcrumb a, .breadcrumb-item{ color:#ffffff !important; }
        .breadcrumb .active{ opacity:.9; }
        .badge-soft { background: #eef2ff; color: #4f46e5; border-radius: 999px; padding: .35rem .6rem; font-weight: 600; font-size: .75rem; }
        .card{ background:#0f172a; border:1px solid rgba(148,163,184,.18); box-shadow:0 10px 26px rgba(0,0,0,.35); }
        .card .card-body{ color:#e5e7eb; }
        .card .content p{ color:#cbd5e1; }
        .text-muted{ color:#cbd5e1 !important; }
        .btn-outline-secondary{ color:#e5e7eb; border-color:#334155; }
        .btn-outline-secondary:hover{ background:#334155; color:#ffffff; border-color:#334155; }
    </style>
    <section class="section section-top pt-5">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-9">
                    <nav aria-label="breadcrumb" class="mb-4">
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item"><a wire:navigate href="{{ route('home') }}">Home</a></li>
                            <li class="breadcrumb-item"><a wire:navigate href="{{ route('articles.index') }}">Articles</a></li>
                            <li class="breadcrumb-item active" aria-current="page">{{ $article->title }}</li>
                        </ol>
                    </nav>

                    <article class="card border-0 shadow-sm">
                        <img class="card-img-top" src="{{ $article->image_url }}" alt="{{ $article->title }}">
                        <div class="card-body p-4">
                            <div class="d-flex align-items-center gap-2 mb-3">
                                @if($article->category)
                                    <span class="badge-soft">{{ $article->category->name ?? 'Category' }}</span>
                                @endif
                                <span class="text-muted small">{{ $article->created_at?->format('M d, Y') }}</span>
                            </div>
                            <h1 class="h2 mb-3">{{ $article->title }}</h1>
                            @if($article->author)
                                <p class="text-muted">By {{ $article->author }}</p>
                            @endif

                            <div class="content mt-4">
                                {!! nl2br(e($article->content)) !!}
                            </div>
                        </div>
                    </article>

                    <div class="mt-4">
                        <a wire:navigate href="{{ route('articles.index') }}" class="btn btn-outline-secondary">← Back to Articles</a>
                    </div>
                </div>
            </div>
        </div>
    </section>
    </main>
