
@extends('layouts.frontend.main')
@section('content')
<div class="detail-page">
    <div class="my-container" v-if="!loader">
        <div class="contact-page">
            <div class="text-blog">
                <h1 class="txt-33 nav-text">
                    {{ $contact?->getTranslation('title', app()->getLocale()) }}
                </h1>
                <p class="txt-16 sec-text">
                    {{ $contact?->getTranslation('name', app()->getLocale()) }}
                </p>
                <div class="grid-2 mt-5">
                    <div class="contact-icon">
                        <div class="icon-bg">
                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"
                                 fill="none">
                                <path
                                    d="M19.4403 20.5C17.5557 20.5 15.6625 20.0618 13.7606 19.1855C11.8586 18.3092 10.1112 17.073 8.51828 15.4769C6.92532 13.8807 5.69071 12.1333 4.81442 10.2346C3.93814 8.33588 3.5 6.44423 3.5 4.55963C3.5 4.25688 3.6 4.00458 3.8 3.80275C4 3.60092 4.25 3.5 4.55 3.5H7.8115C8.06407 3.5 8.28682 3.58238 8.47977 3.74713C8.67272 3.91188 8.79548 4.1154 8.84803 4.3577L9.4211 7.29998C9.46085 7.57306 9.45252 7.80768 9.3961 8.00383C9.3397 8.19998 9.23842 8.36472 9.09225 8.49805L6.78265 10.7461C7.15445 11.4269 7.57913 12.0708 8.0567 12.6779C8.53427 13.2849 9.05125 13.8647 9.60765 14.4173C10.1564 14.966 10.7397 15.4756 11.3577 15.9462C11.9756 16.4167 12.6429 16.8545 13.3596 17.2596L15.6038 14.9962C15.7602 14.8333 15.9497 14.7192 16.1721 14.6539C16.3945 14.5885 16.6256 14.5724 16.8654 14.6058L19.6423 15.1712C19.8948 15.2378 20.1009 15.3667 20.2605 15.5577C20.4201 15.7487 20.5 15.9654 20.5 16.2077V19.45C20.5 19.75 20.399 20 20.1972 20.2C19.9954 20.4 19.7431 20.5 19.4403 20.5ZM6.07305 9.32693L7.85768 7.61923C7.88973 7.59358 7.91056 7.55832 7.92018 7.51345C7.92979 7.46857 7.92819 7.4269 7.91538 7.38845L7.48075 5.15383C7.46793 5.10254 7.4455 5.06408 7.41345 5.03845C7.3814 5.0128 7.33973 4.99998 7.28845 4.99998H5.14997C5.11152 4.99998 5.07948 5.0128 5.05383 5.03845C5.02818 5.06408 5.01535 5.09613 5.01535 5.1346C5.06663 5.81793 5.17849 6.51217 5.35092 7.2173C5.52337 7.92243 5.76408 8.62564 6.07305 9.32693ZM14.773 17.9692C15.4359 18.2782 16.1272 18.5144 16.8471 18.6779C17.567 18.8413 18.2397 18.9384 18.8654 18.9692C18.9038 18.9692 18.9359 18.9564 18.9615 18.9308C18.9872 18.9051 19 18.873 19 18.8346V16.7308C19 16.6795 18.9872 16.6378 18.9615 16.6057C18.9359 16.5737 18.8974 16.5512 18.8461 16.5384L16.7461 16.1115C16.7077 16.0987 16.674 16.0971 16.6452 16.1067C16.6163 16.1163 16.5859 16.1372 16.5538 16.1692L14.773 17.9692Z"
                                    fill="#0162A7" />
                            </svg>
                        </div>
                        <div class="my-text">
                            <p class="txt-16">
                                Telefon raqamimiz:
                            </p>
                            <a class="txt-14 link" href="tel:998712391729">
                                {{$contact->phone}}
                            </a>
                        </div>
                    </div>
                    <div class="contact-icon">
                        <div class="icon-bg">
                            <svg  xmlns="http://www.w3.org/2000/svg" width="20" height="16" fill="none"><path fill="#0162A7" d="M2.308 15.5c-.505 0-.933-.175-1.283-.525A1.745 1.745 0 0 1 .5 13.692V2.308c0-.505.175-.933.525-1.283C1.375.675 1.803.5 2.308.5h15.384c.505 0 .933.175 1.283.525.35.35.525.778.525 1.283v11.384c0 .505-.175.933-.525 1.283-.35.35-.778.525-1.283.525H2.308ZM18 3.442l-7.514 4.81a1.181 1.181 0 0 1-.238.103.848.848 0 0 1-.496 0 1.181 1.181 0 0 1-.239-.103L2 3.442v10.25a.3.3 0 0 0 .087.221.3.3 0 0 0 .22.087h15.385a.3.3 0 0 0 .221-.087.3.3 0 0 0 .087-.22V3.442ZM10 7l7.846-5H2.154L10 7ZM2 3.673V2.53v.03-.032 1.145Z"/></svg>
                        </div>
                        <div class="my-text">
                            <p class="txt-16">
                                Elektron pochta:
                            </p>
                            <a class="txt-14 link" href="https://info@rmab.uz" target="_blank">
                               {{$contact->email}}
                            </a>
                        </div>
                    </div>
                    <div class="contact-icon">
                        <div class="icon-bg">
                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"
                                 fill="none">
                                <path
                                    d="M12 11.75C12.4859 11.75 12.899 11.5798 13.2394 11.2394C13.5798 10.899 13.75 10.4859 13.75 9.99998C13.75 9.51408 13.5798 9.10094 13.2394 8.76058C12.899 8.42019 12.4859 8.25 12 8.25C11.5141 8.25 11.1009 8.42019 10.7606 8.76058C10.4202 9.10094 10.25 9.51408 10.25 9.99998C10.25 10.4859 10.4202 10.899 10.7606 11.2394C11.1009 11.5798 11.5141 11.75 12 11.75ZM12 19.8019C14.059 17.9609 15.6154 16.2042 16.6692 14.5317C17.7231 12.8593 18.25 11.4154 18.25 10.2C18.25 8.30638 17.6468 6.75798 16.4404 5.55478C15.234 4.35156 13.7538 3.74995 12 3.74995C10.2461 3.74995 8.76599 4.35156 7.55957 5.55478C6.35316 6.75798 5.74995 8.30638 5.74995 10.2C5.74995 11.4154 6.27688 12.8593 7.33073 14.5317C8.38458 16.2042 9.94099 17.9609 12 19.8019ZM12 21.4615C11.8795 21.4615 11.7621 21.4413 11.648 21.4009C11.5339 21.3605 11.4301 21.3019 11.3365 21.225C8.95447 19.0814 7.17788 17.092 6.00672 15.2567C4.83557 13.4215 4.25 11.7359 4.25 10.2C4.25 7.77691 5.03012 5.84614 6.59037 4.40768C8.15062 2.96923 9.95382 2.25 12 2.25C14.0461 2.25 15.8493 2.96923 17.4096 4.40768C18.9698 5.84614 19.75 7.77691 19.75 10.2C19.75 11.7359 19.1644 13.4215 17.9932 15.2567C16.8221 17.092 15.0455 19.0814 12.6634 21.225C12.5762 21.3019 12.474 21.3605 12.3567 21.4009C12.2394 21.4413 12.1205 21.4615 12 21.4615Z"
                                    fill="#0162A7" />
                            </svg>
                        </div>
                        <div class="my-text">
                            <p class="txt-16">
                                Bizning manzil:
                            </p>
                            <p class="txt-14">
                                {{ $contact?->getTranslation('address', app()->getLocale()) }}
                            </p>
                        </div>
                    </div>
                </div>
            </div>
            <form action="{{route('contact.store')}}" class="interactive form" method="POST">
                @csrf
                <div class="box">
                    <label class="label mb-2 flex" for="name">Ism</label>
                    <input  class="my-input txt-16" type="text" id="name" name="full_name" placeholder="Ism kiriting">
                    @error('full_name')
                    <div class="text-danger">{{ $message }}</div>
                    @enderror
                </div>
                <div class="box">
                    <label class="label mb-2 flex" for="phone">Telefon raqam</label>
                    <input class="aplication-form__input my-input" name="phone" id="inputNumber" placeholder="+998"
                    />
                    @error('phone')
                    <div class="text-danger">{{ $message }}</div>
                    @enderror
                </div>
                <div class="box">
                    <label class="label" for="note">Qo`shimcha izoh</label>
                    <textarea placeholder="Izoh"  id="inputFidbek"
                              class="aplication-form__input my-input input-textAre__item" name="comment"></textarea>
                    @error('comment')
                    <div class="text-danger">{{ $message }}</div>
                    @enderror
                </div>
                <div class="box submit aplication-btn">
                    <button type="submit" class="my-btn  txt-16 contact-btn">Yuborish</button>
                </div>
            </form>
        </div>
        <div class="mt-[30px]">
            <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d48628.951811274404!2d71.74926204932038!3d40.379832873906004!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x4bd9dc03a3b9610d%3A0x8eb8ad30ebbab2c4!2sInSoft%20-%20Tech%20%26%20IT%20Solutions!5e0!3m2!1sru!2s!4v1716377834361!5m2!1sru!2s" width="100%" height="450"  style="border-radius:30px;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
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

