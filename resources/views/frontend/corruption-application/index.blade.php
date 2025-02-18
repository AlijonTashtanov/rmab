


@extends('layouts.frontend.main')
<!-- MY NAVIGATION END -->

@section('content')
<div class="detail-page">
    <div class="my-container">
        <div class="detail-page-in">
            @include('layouts.frontend._sidebar')
            <div class="detail-content">
                <p class="choose" id="choose">{{ ('choose') }}</p>
                <p class="upload" id="choose">{{ ('upload') }}</p>

                <div class="my-about">
                    <h1 class="txt-33 nav-text">Ariza va murojarlar</h1>
                    <p class="txt-16 nav-text">
                        Korrupsiya bo’lgani bo’yicha guvoh bo’ldingizmi? Xoziroq bizga murojaat yo’llang!
                    </p>
                    <div class="aplication">
                        <form action="" class="aplication-form">
                            <div class="aplication-form__item">
                                <label for="inputName" class="aplication-form__label">Ism</label>
                                <input type="text"
                                       id="inputName" class="aplication-form__input my-input"
                                       placeholder="Ismingizni kiriting" />
                            </div>
                            <div class="aplication-form__item">
                                <label for="inputSurname" class="aplication-form__label">Familiya</label>
                                <input type="text"
                                       class="aplication-form__input my-input"
                                       placeholder="Familiyangizni kiriting" />
                            </div>
                            <div class="aplication-form__item">
                                <label for="inputRegion"
                                       class="aplication-form__label">Viloyatlar</label>
                                <select id="inputRegion"
                                        class="block w-full p-2 mb-6 text-sm text-gray-900 border border-gray-300 rounded-lg bg-gray-50 focus:ring-blue-500 focus:border-blue-500  aplication-form__input my-input">
                                    <option selected>Tanlang</option>
                                    <option>Andijon viloyati</option>
                                    <option>Andijon viloyati</option>
                                    <option>Andijon viloyati</option>
                                </select>
                            </div>
                            <div class="aplication-form__item">
                                <label for="inputCity"
                                       class="aplication-form__label">Qachon va qaysi vaqtda borishi</label>
                                <select id="inputCity"
                                        class="block w-full p-2 mb-6 text-sm text-gray-900 border border-gray-300 rounded-lg bg-gray-50 focus:ring-blue-500 focus:border-blue-500  aplication-form__input my-input"
                                >
                                    <option selected>Tanlash</option>
                                </select>
                            </div>
                            <div class="aplication-form__item">
                                <label for="inputAddress" class="aplication-form__label">To`liq manzilingiz</label>
                                <input type="text" id="inputAddress"
                                       class="aplication-form__input my-input"
                                       placeholder="Manzilingizni kiriting" />
                            </div>
                            <div class="aplication-form__item">
                                <label for="inputCity"
                                       class="aplication-form__label">Korrupsiya turi</label>
                                <select id="inputCity"
                                        class="block w-full p-2 mb-6 text-sm text-gray-900 border border-gray-300 rounded-lg bg-gray-50 focus:ring-blue-500 focus:border-blue-500  aplication-form__input my-input"
                                >
                                    <option selected>Tanlang</option>
                                    <option>
                                        Pora
                                    </option>
                                    <option>
                                        Tanish bilish
                                    </option>
                                </select>
                            </div>
                            <div class="aplication-form__item">
                                <label for="inputLocateAdress" class="aplication-form__label">Korrupsiya yuz bergan manzil</label>
                                <input type="text"  id="inputLocateAdress"
                                       class="aplication-form__input my-input"

                                       placeholder="Manzilni kiriting" />
                            </div>
                            <div class="aplication-form__item">
                                <label for="inputAccusedName" class="aplication-form__label">Korrupsiyada gumonlonuvchi shaxs nomi</label>
                                <input type="text" id="inputAccusedName"
                                       class="aplication-form__input my-input"
                                       placeholder="ismni kiriting" />
                            </div>
                            <div class="aplication-form__item">
                                <p class="txt-16">Foto yoki video dalil</p>

                                <div id="test" class="aplication-form__input my-input ">
                                    <input type="file" id="inputFile"

                                           class="aplication-form__input hidden-input  my-input"
                                           aceholder="Yulash" />
                                    <span class="file-name">Yuklang</span>
                                    <label for="inputFile" class=" aplication-form__label inputFile">Yuklang</label>
                                </div>
                            </div>
                            <div class="aplication-form__item">
                                <label for="inputNumber" class="aplication-form__label">Telefon raqam</label>

                                <input class="aplication-form__input my-input" id="inputNumber" placeholder="+998"
                                />

                            </div>
                            <div class="aplication-form__item input-textAre">
                                <label for="inputFidbek" class="aplication-form__label">Izoh</label>
                                <textarea placeholder="Izoh"  id="inputFidbek"
                                          class="aplication-form__input my-input input-textAre__item">

                        </textarea>
                            </div>
                            <button class="my-btn aplication-btn" @click="sendApi($event)">Yuborish</button>
                        </form>
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
                    accordionContent.style.maxHeight = accordionContent.scrollHeight + "px";
                } else {
                    accordionContent.style.maxHeight = 0;
                }

                // Close other open accordion items
                document.querySelectorAll(".accordion-header").forEach((otherButton) => {
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
