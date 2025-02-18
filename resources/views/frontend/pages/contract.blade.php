<?php

//$articles = Article::where('status', Article::$status_active)->paginate(6);
$activeServices = \App\Models\Service::where('status', \App\Models\Service::$status_active)->get();
$activeLocation = \App\Models\DispatchGeography::where('status', \App\Models\DispatchGeography::$status_active)->get();
?>
@extends('layouts.frontend.main')
@section('content')

<div class="detail-page">
    <div class="my-container">
        <div class="detail-page-in">
            @include('layouts.frontend._sidebar')

            <div class="detail-content">
                <div class="my-about" >
                    <h1 class="txt-33 nav-text">
                        {{ $page?->getTranslation('title', app()->getLocale()) }}
                    </h1>
                    <p class="txt-18 section-text">
                       {!! $page?->getTranslation('description', app()->getLocale()) !!}
                    </p>
                    <img src="{{$page?->getImageUrl()}}" alt="" class="w-full h-[388px] rounded-[32px]">
                    <form action="{{route('contract.store')}}" class="aplication-form" method="POST" >
                        @csrf
                        <div class="aplication-form__item">
                            <label for="inputName" class="aplication-form__label">Ism</label>
                            <input type="text"  id="inputName" value="{{old("full_name")}}"
                                   class="aplication-form__input my-input" placeholder="Ism kiriting" name="full_name" />

                        @error('full_name')
                        <div class="text-danger">{{ $message }}</div>
                        @enderror
                        </div>
                        <div class="aplication-form__item">
                            <label for="inputNumber" class="aplication-form__label">Telefon raqam</label>
                            <input type="text" value="{{old("phone")}}"  name="phone" class="aplication-form__input my-input" id="inputNumber" placeholder="+998"

                            />

                        @error('phone')
                        <div class="text-danger">{{ $message }}</div>
                        @enderror
                        </div>
                        <div class="aplication-form__item">
                            <label for="inputAddress" class="aplication-form__label">Email</label>
                            <input type="email"  id="inputAddress" class="aplication-form__input my-input"

                                   value="{{old("email")}}"    placeholder="Email addres" name="email"/>

                        @error('email')
                        <div class="text-danger">{{ $message }}</div>
                        @enderror
                        </div>
                        <div class="aplication-form__item">
                            <label for="inputLocateAdress" class="aplication-form__label">Tashkilot nomi</label>
                            <input type="text"  id="inputLocateAdress" class="aplication-form__input my-input"
                                   value="{{old("company_name")}}"     placeholder="Tashkilot nomini kiriting" name="company_name"/>

                        @error('company_name')
                        <div class="text-danger">{{ $message }}</div>
                        @enderror
                        </div>
                        <div class="aplication-form__item">
                            <label for="inputRegion"
                                   class="block mb-2 text-sm font-medium text-gray-900  aplication-form__label">Viloyatlar</label>
                            <select id="inputRegion" name="region_id"
                                    class="block w-full p-2 mb-6 text-sm text-gray-900 border border-gray-300 rounded-lg bg-gray-50 focus:ring-blue-500 focus:border-blue-500  aplication-form__input my-input">
                                <option selected value="">Tanlang</option>
                            </select>

                        @error('region_id')
                        <div class="text-danger">{{ $message }}</div>
                        @enderror
                        </div>
                        <div class="aplication-form__item">
                            <label for="inputCity"
                                   class="block mb-2 text-sm font-medium text-gray-900  aplication-form__label">Shaxarni tanlang</label>
                            <select id="inputCity" name="district_id"
                                    class="block w-full p-2 mb-6 text-sm text-gray-900 border border-gray-300 rounded-lg bg-gray-50 focus:ring-blue-500 focus:border-blue-500  aplication-form__input my-input"
                            >
                                <option selected value="">Tanlang</option>
                            </select>

                        @error('district_id')
                        <div class="text-danger">{{ $message }}</div>
                        @enderror
                        </div>
                        <div class="aplication-form__item">
                            <label for="inputCity"
                                   class="block mb-2 text-sm font-medium text-black  aplication-form__label">Xizmat turi</label>
                            <select id="inputService" name="service_id"
                                    class="block w-full p-2 mb-6  text-sm text-gray-900 border border-gray-300 rounded-lg bg-gray-50 focus:ring-blue-500 focus:border-blue-500  aplication-form__input my-input"
                            >
                                @foreach($activeServices as $service)
                                <option selected value="{{$service->id}}">  {{ $service?->getTranslation('name', app()->getLocale()) }}</option>
                                @endforeach
                            </select>

                        @error('service_id')
                        <div class="text-danger">{{ $message }}</div>
                        @enderror
                        </div>
                        <div class="aplication-form__item">
                            <label for="inputLocation"
                                   class="block mb-2 text-sm font-medium text-gray-900 text-black aplication-form__label">Yuboruv geografiyasi</label>
                            <select id="inputLocation" v-model="location" name="dispatch_geography_id"
                                    class="block w-full p-2 mb-6 text-sm text-black border border-gray-300 rounded-lg bg-gray-50 focus:ring-blue-500 focus:border-blue-500 aplication-form__input my-input"
                            >
                                @foreach($activeLocation as $location)
                                    <option selected value="{{$location->id}}">  {{ $location?->getTranslation('name', app()->getLocale()) }}</option>
                                @endforeach
                            </select>

                        @error('dispatch_geography_id')
                        <div class="text-danger">{{ $message }}</div>
                        @enderror
                        </div>
                        <button class="my-btn aplication-btn" type="submit">Yuborish</button>
                    </form>
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
    document.addEventListener("DOMContentLoaded", function() {
        fetch('/region')
            .then(response => response.json())
            .then(data => {
                const regionSelect = document.getElementById('inputRegion');
                console.log(data)
                data.forEach(region => {
                    const option = document.createElement('option');
                    option.value = region.id;
                    option.textContent = region.name.uz;
                    regionSelect.appendChild(option);
                });
            });
        // fetch('/service-title')
        //     .then(response => response.json())
        //     .then(data => {
        //         const inputService = document.getElementById('inputService');
        //         console.log(data)
        //         data.forEach(service => {
        //             const option = document.createElement('option');
        //             option.value = service.id;
        //             option.textContent = service.name.uz;
        //             inputService.appendChild(option);
        //         });
        //     });
        // fetch('/dispatch-geography')
        //     .then(response => response.json())
        //     .then(data => {
        //         const inputService = document.getElementById('inputLocation');
        //         console.log(data)
        //         data.forEach(location => {
        //             const option = document.createElement('option');
        //             option.value = location.id;
        //             option.textContent = location.name.uz;
        //             inputService.appendChild(option);
        //         });
        //     });

        document.getElementById('inputRegion').addEventListener('change', function() {
            const regionId = this.value;
            const districtSelect = document.getElementById('inputCity');
            districtSelect.innerHTML = '<option selected>Tanlang</option>'; // Clear previous options

            fetch(`/district/${regionId}`)
                .then(response => response.json())
                .then(data => {
                    console.log(data)
                    data.forEach(district => {
                        const option = document.createElement('option');
                        option.value = district.id;
                        option.textContent = district.name.uz;
                        districtSelect.appendChild(option);
                    });
                });
        });
    });
</script>
@stop

