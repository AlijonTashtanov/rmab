
@extends('layouts.frontend.main')
@section('content')

<div class="detail-page">
    <div class="my-container">
        <div class="detail-page-in">
            @include('layouts.frontend._sidebar')
            <div class="detail-content">
                <div class="my-about" >
                    <h1 class="txt-33 nav-text">
                        Hamkorlar
                    </h1>
                    <div class="grid-5">
                        @foreach($activePartners as $partner)
                        <a href="{{$partner->url}}" target="blank" class="partner-card hover:translate-y-[-5px] transition-all">
                            <div class="top-img">
                                <img src="{{$partner->getImageUrl()}}">
                            </div>
                            <p class="txt-16 partnerClamp">
                                {{ $partner->name }}
                            </p>
                        </a>
                        @endforeach
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

