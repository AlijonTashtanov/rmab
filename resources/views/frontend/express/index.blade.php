

@extends('layouts.frontend.main')
@section('content')

<div class="detail-page">
    <div class="my-container">
        <div class="detail-page-in">
            @include('layouts.frontend._sidebar')
            <div class="detail-content">
                <div class="our-services ">
                    <div class="left-content">
                        <div class="my-about">
                            <h1 class="txt-33 nav-text">{{ $serviseDetail?->getTranslation('name', app()->getLocale()) }}</h1>
                            <div class="txt-18 section-text">
                                {!! $serviseDetail?->getTranslation('content', app()->getLocale()) !!}
                            </div>
                        </div>
                    </div>
                    @include('layouts.frontend._side-vacancy')
                </div>
            </div>
        </div>
    </div>
</div>
<script>
    setTimeout(() => {
        document.querySelectorAll(".accordion-header").forEach((button) => {
            button.addEventListener("click", () => {
                const accordionContent = button.nextElementSibling;

                button.classList.toggle("active");

                if (button.classList.contains("active")) {
                    accordionContent.style.maxHeight =
                        accordionContent.scrollHeight + "px";
                } else {
                    accordionContent.style.maxHeight = 0;
                }

                // Close other open accordion items
                document
                    .querySelectorAll(".accordion-header")
                    .forEach((otherButton) => {
                        if (otherButton !== button) {
                            otherButton.classList.remove("active");
                            otherButton.nextElementSibling.style.maxHeight = 0;
                        }
                    });
            });
        });
    }, 2000);
</script>
@stop

