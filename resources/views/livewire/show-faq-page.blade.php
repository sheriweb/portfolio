<main>
    <style>
        .faq-hero { background:#0b0f14; color:#fff; padding-top:120px !important; }
        .faq-hero h1, .faq-hero p{ color:#ffffff !important; }

        .section{ background:#0b0f14; }
        .badge-soft { background: #dcfce7; color: #065f46; border-radius: 999px; padding: .3rem .6rem; font-weight: 600; font-size: .7rem; }

        .accordion-item { border:1px solid rgba(148,163,184,.18); border-radius: 14px; overflow: hidden; box-shadow: 0 10px 24px rgba(0,0,0,.35); margin-bottom: 14px; background:#0f172a; transition:border-color .2s, box-shadow .2s; }
        .accordion-item:hover{ border-color:#334155; }
        .accordion-button { padding: 1rem 1.25rem; font-weight: 700; font-size:1.05rem; background:#0f172a; color:#e5e7eb; transition: background .2s, color .2s; }
        .accordion-button:focus{ box-shadow:none; }
        .accordion-button.collapsed:hover{ background:#111827; }
        .accordion-button:not(.collapsed) { background:#0f172a; color:#ffffff; box-shadow: inset 0 -1px 0 rgba(255,255,255,.06); border-left:4px solid rgba(34,197,94,.6); }
        .accordion-button::after{ filter: invert(1) brightness(1.2); transform: scale(1.1); }
        .accordion-body{ color:#cbd5e1; background:#0f172a; border-top:1px solid rgba(148,163,184,.14); }
        .accordion-collapse.show + .accordion-item{ margin-top:14px; }
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
