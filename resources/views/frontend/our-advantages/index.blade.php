
@extends('layouts.frontend.main')
@section('content')

<!-- MY NAVIGATION END -->
<div class="detail-page">
    <div class="my-container">
        <div class="detail-page-in">
            @include('layouts.frontend._sidebar')
            <div class="detail-content pb-[50px]">
                <div class="my-about" >
                    <h class="txt-33 nav-text">
                        Bizning afzalliklarimiz
                    </h>
                    <div class="txt-18 section-text">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.</div>
                    <div class="grid-2">
                        @foreach($activeAdvantages as $advantage)
                        <div class="contact-icon top-start">
                            <div class="icon-bg">

                                <img src="{{$advantage->getImageUrl()}}" alt="icone">
                            </div>
                            <div class="my-text">
                                <p class="txt-16 fw-bold">
                                    {{ $advantage->getTranslation('title', app()->getLocale()) }}
                                </p>
                                <p class="txt-16 time-sec fw-light">
                                    {{ $advantage->getTranslation('description', app()->getLocale()) }}
                                </p>
                            </div>
                        </div>
                        @endforeach
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

        //contact maska
        const phoneInput = document.getElementById("inputNumber");
        const phoneMask = IMask(phoneInput, {
            mask: "+{998}(90) 000-00-00",
        });

    </script>
@stop
