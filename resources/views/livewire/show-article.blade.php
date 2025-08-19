<main>
    <style>
        .badge-soft { background: #eef2ff; color: #4f46e5; border-radius: 999px; padding: .35rem .6rem; font-weight: 600; font-size: .75rem; }
        .btn-mint { background:#d1fae5; color:#047857; border-color:#a7f3d0; }
        .btn-mint:hover { background:#a7f3d0; color:#065f46; border-color:#6ee7b7; }
    </style>
    <section class="section pt-5">
        <div class="container">
            <div class="row mb-5">
                <div class="col-lg-12 text-center">
                    <h1 class="mb-3">Latest Articles</h1>
                    <p class="text-muted">Insights and updates from our team</p>
                </div>
            </div>

            <div class="row g-4">
                @forelse($articles as $article)
                    <div class="col-lg-4 col-md-6">
                        <div class="card h-100 shadow-sm border-0">
                            <a wire:navigate href="{{ route('articles.show', $article->id) }}">
                                <img src="{{ $article->image_url }}" class="card-img-top" alt="{{ $article->title }}" loading="lazy" style="height: 220px; width: 100%; object-fit: cover; object-position: center;">
                            </a>
                            <div class="card-body d-flex flex-column">
                                <div class="mb-2">
                                    @if($article->category)
                                        <span class="badge-soft">{{ $article->category->name ?? 'Category' }}</span>
                                    @endif
                                </div>
                                <h5 class="card-title">
                                    <a wire:navigate class="text-decoration-none text-dark" href="{{ route('articles.show', $article->id) }}">{{ $article->title }}</a>
                                </h5>
                                @if($article->author)
                                    <p class="small text-muted mb-2">By {{ $article->author }}</p>
                                @endif
                                @if($article->content)
                                    <p class="card-text text-muted">{{ \Illuminate\Support\Str::limit(strip_tags($article->content), 120) }}</p>
                                @endif
                                <div class="mt-auto">
                                    <a wire:navigate href="{{ route('articles.show', $article->id) }}" class="btn btn-mint btn-sm">Read More</a>
                                </div>
                            </div>
                        </div>
                    </div>
                @empty
                    <div class="col-12">
                        <div class="alert alert-info">No articles found.</div>
                    </div>
                @endforelse
            </div>

            <div class="row mt-5">
                <div class="col-12 d-flex justify-content-center">
                    {{ $articles->onEachSide(1)->links() }}
                </div>
            </div>
        </div>
    </section>
    </main>
