<main>
    <style>
        .faq-hero { background: linear-gradient(135deg, #eef2ff, #ecfeff); }
        .accordion-item { border: none; border-radius: 12px; overflow: hidden; box-shadow: 0 8px 20px rgba(0,0,0,.06); margin-bottom: 12px; }
        .accordion-button { padding: 1rem 1.25rem; font-weight: 600; }
        .accordion-button:not(.collapsed) { background: #f8fafc; color: #111827; box-shadow: inset 0 -1px 0 rgba(0,0,0,.05); }
        .badge-soft { background: #dcfce7; color: #065f46; border-radius: 999px; padding: .3rem .6rem; font-weight: 600; font-size: .7rem; }
    </style>

    <section class="faq-hero py-5">
        <div class="container">
            <div class="row">
                <div class="col-lg-8 mx-auto text-center">
                    <h1 class="mb-2">Frequently Asked Questions</h1>
                    <p class="text-muted mb-0">Everything you need to know about our services and process.</p>
                </div>
            </div>
        </div>
    </section>

    <section class="section py-5">
        <div class="container">
            <div class="row">
                <div class="col-lg-10 mx-auto">
                    @if(($faqs ?? collect())->isEmpty())
                        <div class="alert alert-info">No FAQs available yet.</div>
                    @else
                        <div class="accordion" id="faqAccordion">
                            @foreach($faqs as $index => $faq)
                                <div class="accordion-item">
                                    <h2 class="accordion-header" id="heading{{ $index }}">
                                        <button class="accordion-button {{ $index ? 'collapsed' : '' }}" type="button" data-bs-toggle="collapse" data-bs-target="#collapse{{ $index }}" aria-expanded="{{ $index ? 'false' : 'true' }}" aria-controls="collapse{{ $index }}">
                                            <span class="me-2 badge-soft">FAQ</span> {{ $faq->question }}
                                        </button>
                                    </h2>
                                    <div id="collapse{{ $index }}" class="accordion-collapse collapse {{ $index ? '' : 'show' }}" aria-labelledby="heading{{ $index }}" data-bs-parent="#faqAccordion">
                                        <div class="accordion-body">
                                            {!! nl2br(e($faq->answer)) !!}
                                        </div>
                                    </div>
                                </div>
                            @endforeach
                        </div>
                    @endif
                </div>
            </div>
        </div>
    </section>
</main>
