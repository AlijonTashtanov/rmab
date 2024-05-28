<div class="my-section faq-page">
    <div class="my-container">
        <div class="my-section-in">
            <h1 class="txt-33 nav-text text-center">
                Eng ko’p berilayotgan savollar
            </h1>
            <div class="accordion-container">
                @foreach($activeFaqs as $faq)
                <div class="accordion-item">
                    <div class="accordion-header">
                          <span class="icon">
                              <svg xmlns="http://www.w3.org/2000/svg" width="40" height="41" viewBox="0 0 40 41"
                                   fill="none">
                                  <path d="M20 31.5V9.5M9 20.5H31" stroke="white" stroke-width="2"
                                        stroke-linecap="round"/>
                              </svg>
                          </span>
                        <p class="txt-20">
                            {{ $faq->getTranslation('question', app()->getLocale()) }}
                        </p>
                    </div>
                    <div class="accordion-content">
                        <p class="txt-16">{{ $faq->getTranslation('answer', app()->getLocale()) }}
                        </p>
                    </div>
                </div>
                @endforeach
            </div>
        </div>
    </div>
</div>
