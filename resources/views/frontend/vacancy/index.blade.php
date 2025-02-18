
@extends('layouts.frontend.main')
@section('content')
    <!-- MY NAVIGATION END -->
    <div class="detail-page">
        <div class="my-container">
            <div class="detail-page-in">
                @include('layouts.frontend._sidebar')
                <div class="detail-content">
                    <div class="my-about">
                        <div class="grid-1">
                            <div class="my-about">
                                <h1 class="txt-33 nav-text">Vakansiyalar</h1>
                                <div class="flex flex-col gap-[20px]">
                                    @foreach($activeVacancies as $vacancy)
                                        <a href="{{route('vacancy-detail',['id'=>$vacancy->id])}}" class="vakansia-card" external>
                                            <img src="{{$vacancy->getImageUrl()}}" alt="image" class="top"/>
                                            {{--                                        <img src="{{asset('/storage/'.$item->image)}}" alt="" style="width: 100px;height: 100px">--}}
                                            <div class="text-blog">
                                                <p class="txt-16 nav-text">
                                                    <span>{{$vacancy->salary}}</span>
                                                </p>
                                                <p class="txt-18 nav-text">{{ $vacancy->getTranslation('title', app()->getLocale()) }}</p>
                                                <p class="txt-16 fw-light sec-text">
                                                    {{ $vacancy->getTranslation('description', app()->getLocale()) }}
                                                </p>
                                            </div>
                                        </a>
                                    @endforeach
                                </div>
                            </div>
                        </div>
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

