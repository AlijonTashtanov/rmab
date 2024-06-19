@php @endphp
@extends('frontend.user-service.layouts.index')
@include('frontend.user-service.layouts._style')
@section('content')
<div class="flex">
    @include('frontend.user-service.layouts._sidebar')
    <div class="default__content p-6 bg-gray-white min-h-screen w-full">
        <h1 class="mb-[20px] txt-42 text-black" style="font-size: 45px; font-weight: bolder;">
            Ramziddin Usmonov Salimjon o`g`li
        </h1>

        <div class="flex items-center gap-[20px] flex-wrap">
            <div
                class="user-card flex items-center gap-4 mb-[10px] w-[400px] h-[100px] bg-[#1E293BFF] rounded-[12px] p-[15px]"
            >
                <svg
                    width="40px"
                    height="40px"
                    xmlns="http://www.w3.org/2000/svg"
                    viewBox="0 0 512 512"
                >
                    <path
                        d="M498.1 5.6c10.1 7 15.4 19.1 13.5 31.2l-64 416c-1.5 9.7-7.4 18.2-16 23s-18.9 5.4-28 1.6L284 427.7l-68.5 74.1c-8.9 9.7-22.9 12.9-35.2 8.1S160 493.2 160 480V396.4c0-4 1.5-7.8 4.2-10.7L331.8 202.8c5.8-6.3 5.6-16-.4-22s-15.7-6.4-22-.7L106 360.8 17.7 316.6C7.1 311.3 .3 300.7 0 288.9s5.9-22.8 16.1-28.7l448-256c10.7-6.1 23.9-5.5 34 1.4z"
                        fill="#fff"
                    />
                </svg>

                <div class="user-desc flex flex-col gap-[10px]">
                    <p class="font-normal text-[14px] text-white">
                        Jo'natilish soni haqida faol ma'lumot
                    </p>
                    <h1 class="font-bold text-[20px] text-white">7</h1>
                </div>
            </div>
            <div
                class="user-card flex items-center gap-4 mb-[10px] w-[400px] h-[100px] bg-[#1E293BFF] rounded-[12px] p-[15px]"
            >
                <svg
                    width="40px"
                    height="40px"
                    xmlns="http://www.w3.org/2000/svg"
                    viewBox="0 0 640 512"
                >
                    <path
                        d="M184 48H328c4.4 0 8 3.6 8 8V96H176V56c0-4.4 3.6-8 8-8zm-56 8V96H64C28.7 96 0 124.7 0 160v96H192 352h8.2c32.3-39.1 81.1-64 135.8-64c5.4 0 10.7 .2 16 .7V160c0-35.3-28.7-64-64-64H384V56c0-30.9-25.1-56-56-56H184c-30.9 0-56 25.1-56 56zM320 352H224c-17.7 0-32-14.3-32-32V288H0V416c0 35.3 28.7 64 64 64H360.2C335.1 449.6 320 410.5 320 368c0-5.4 .2-10.7 .7-16l-.7 0zm320 16a144 144 0 1 0 -288 0 144 144 0 1 0 288 0zM496 288c8.8 0 16 7.2 16 16v48h32c8.8 0 16 7.2 16 16s-7.2 16-16 16H496c-8.8 0-16-7.2-16-16V304c0-8.8 7.2-16 16-16z"
                        fill="#fff"
                    />
                </svg>
                <div class="flex flex-col gap-[10px]">
                    <p class="user-desc font-normal text-[14px] text-white">
                        Jo'natilish soni haqida nofaol ma'lumot
                    </p>
                    <h1 class="font-bold text-[20px] text-white">0</h1>
                </div>
            </div>
            <div
                class="user-card flex items-center gap-4 mb-[10px] w-[400px] h-[100px] bg-[#1E293BFF] rounded-[12px] p-[15px]"
            >
                <svg
                    width="40px"
                    height="40px"
                    xmlns="http://www.w3.org/2000/svg"
                    viewBox="0 0 576 512"
                >
                    <path
                        d="M0 96l576 0c0-35.3-28.7-64-64-64H64C28.7 32 0 60.7 0 96zm0 32V416c0 35.3 28.7 64 64 64H512c35.3 0 64-28.7 64-64V128H0zM64 405.3c0-29.5 23.9-53.3 53.3-53.3H234.7c29.5 0 53.3 23.9 53.3 53.3c0 5.9-4.8 10.7-10.7 10.7H74.7c-5.9 0-10.7-4.8-10.7-10.7zM176 192a64 64 0 1 1 0 128 64 64 0 1 1 0-128zm176 16c0-8.8 7.2-16 16-16H496c8.8 0 16 7.2 16 16s-7.2 16-16 16H368c-8.8 0-16-7.2-16-16zm0 64c0-8.8 7.2-16 16-16H496c8.8 0 16 7.2 16 16s-7.2 16-16 16H368c-8.8 0-16-7.2-16-16zm0 64c0-8.8 7.2-16 16-16H496c8.8 0 16 7.2 16 16s-7.2 16-16 16H368c-8.8 0-16-7.2-16-16z"
                        fill="#fff"
                    />
                </svg>
                <div class="flex flex-col gap-[10px]">
                    <p class="user-desc font-normal text-[14px] text-white">
                        Faol ilovadan foydalanish xizmatlari soni
                    </p>
                    <h1 class="font-bold text-[20px] text-white">2</h1>
                </div>
            </div>
            <div
                class="user-card flex items-center gap-4 mb-[10px] w-[400px] h-[100px] bg-[#1E293BFF] rounded-[12px] p-[15px]"
            >
                <svg
                    wisth="40px"
                    height="40px"
                    xmlns="http://www.w3.org/2000/svg"
                    viewBox="0 0 640 512"
                >
                    <path
                        d="M192 96a48 48 0 1 0 0-96 48 48 0 1 0 0 96zm-8 352V352h16v96H184zm-64 0H32c-17.7 0-32 14.3-32 32s14.3 32 32 32H152h80H608c17.7 0 32-14.3 32-32s-14.3-32-32-32H264V256.9l28.6 47.5c9.1 15.1 28.8 20 43.9 10.9s20-28.8 10.9-43.9l-58.3-97c-17.4-28.9-48.6-46.6-82.3-46.6H177.1c-33.7 0-64.9 17.7-82.3 46.6l-58.3 97c-9.1 15.1-4.2 34.8 10.9 43.9s34.8 4.2 43.9-10.9L120 256.9V448zM464 64V306.7l-25.4-25.4c-12.5-12.5-32.8-12.5-45.3 0s-12.5 32.8 0 45.3l80 80c12.5 12.5 32.8 12.5 45.3 0l80-80c12.5-12.5 12.5-32.8 0-45.3s-32.8-12.5-45.3 0L528 306.7V64c0-17.7-14.3-32-32-32s-32 14.3-32 32z"
                        fill="#fff"
                    />
                </svg>
                <div class="flex flex-col gap-[10px]">
                    <p class="user-desc font-normal text-[14px] text-white">
                        Faol bo'lmagan ilovalardan foydalanish xizmatlari soni
                    </p>
                    <h1 class="font-bold text-[20px] text-white">3</h1>
                </div>
            </div>
        </div>
    </div>
</div>
@stop
