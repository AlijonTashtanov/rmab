@php @endphp
@extends('frontend.user-service.layouts.index')
@include('frontend.user-service.layouts._style')

@section('content')
    <div class="flex">
        <div
            class="userSidebar default flex items-stretch w-[130px] transition-all min-h-screen"
        >
            @include('frontend.user-service.layouts._sidebar')
        </div>
        <div class="default__content w-[90%] p-5 bg-gray-white min-h-screen">
            <div class="table_component" role="region" tabindex="0">
                <table>
                    <thead class="">
                    <tr>
                        <th class="w-[40px]">T/r</th>
                        <th>Ism Familiya</th>
                        <th class="w-[100px]">Jo’natma raqami</th>
                        <th class="w-[100px]">Holati</th>
                        <th>Jo’natma kuni</th>
                        <th>Javobni qabul qilish turi</th>
                        <th>Yaratilgan vaqti</th>
                        <th class="w-[80px]">Actions</th>
                    </tr>

                    <tr>
                        <td>1</td>
                        <td>USMONOV RAMZIDDIN SALIMJON O‘G‘LI</td>
                        <td>1</td>
                        <td><span> O`qildi </span></td>

                        <td>22.02.2222 00:00</td>

                        <td>Text</td>
                        <td>25.03.2024 11:56</td>

                        <td>
                            <a
                                href="{{route('user.shipping.detail')}}"
                                class="buttonInfo flex w-[45px] border-2 p-[10px] rounded border-[#000] hover:bg-[#0162A7FF] transition-all"
                            >
                                <svg
                                    width="20px"
                                    height="20px"
                                    xmlns="http://www.w3.org/2000/svg"
                                    viewBox="0 0 576 512"
                                >
                                    <path
                                        d="M288 80c-65.2 0-118.8 29.6-159.9 67.7C89.6 183.5 63 226 49.4 256c13.6 30 40.2 72.5 78.6 108.3C169.2 402.4 222.8 432 288 432s118.8-29.6 159.9-67.7C486.4 328.5 513 286 526.6 256c-13.6-30-40.2-72.5-78.6-108.3C406.8 109.6 353.2 80 288 80zM95.4 112.6C142.5 68.8 207.2 32 288 32s145.5 36.8 192.6 80.6c46.8 43.5 78.1 95.4 93 131.1c3.3 7.9 3.3 16.7 0 24.6c-14.9 35.7-46.2 87.7-93 131.1C433.5 443.2 368.8 480 288 480s-145.5-36.8-192.6-80.6C48.6 356 17.3 304 2.5 268.3c-3.3-7.9-3.3-16.7 0-24.6C17.3 208 48.6 156 95.4 112.6zM288 336c44.2 0 80-35.8 80-80s-35.8-80-80-80c-.7 0-1.3 0-2 0c1.3 5.1 2 10.5 2 16c0 35.3-28.7 64-64 64c-5.5 0-10.9-.7-16-2c0 .7 0 1.3 0 2c0 44.2 35.8 80 80 80zm0-208a128 128 0 1 1 0 256 128 128 0 1 1 0-256z"
                                    />
                                </svg>
                            </a>
                        </td>
                    </tr>
                    <tr>
                        <td>1</td>
                        <td>USMONOV RAMZIDDIN SALIMJON O‘G‘LI</td>
                        <td>1</td>
                        <td><span> O`qildi </span></td>

                        <td>22.02.2222 00:00</td>

                        <td>Text</td>
                        <td>25.03.2024 11:56</td>

                        <td>
                            <a
                                href="./aboutShippingDetail.html"
                                class="buttonInfo flex w-[45px] border-2 p-[10px] rounded border-[#000] hover:bg-[#0162A7FF] transition-all"
                            >
                                <svg
                                    width="20px"
                                    height="20px"
                                    xmlns="http://www.w3.org/2000/svg"
                                    viewBox="0 0 576 512"
                                >
                                    <path
                                        d="M288 80c-65.2 0-118.8 29.6-159.9 67.7C89.6 183.5 63 226 49.4 256c13.6 30 40.2 72.5 78.6 108.3C169.2 402.4 222.8 432 288 432s118.8-29.6 159.9-67.7C486.4 328.5 513 286 526.6 256c-13.6-30-40.2-72.5-78.6-108.3C406.8 109.6 353.2 80 288 80zM95.4 112.6C142.5 68.8 207.2 32 288 32s145.5 36.8 192.6 80.6c46.8 43.5 78.1 95.4 93 131.1c3.3 7.9 3.3 16.7 0 24.6c-14.9 35.7-46.2 87.7-93 131.1C433.5 443.2 368.8 480 288 480s-145.5-36.8-192.6-80.6C48.6 356 17.3 304 2.5 268.3c-3.3-7.9-3.3-16.7 0-24.6C17.3 208 48.6 156 95.4 112.6zM288 336c44.2 0 80-35.8 80-80s-35.8-80-80-80c-.7 0-1.3 0-2 0c1.3 5.1 2 10.5 2 16c0 35.3-28.7 64-64 64c-5.5 0-10.9-.7-16-2c0 .7 0 1.3 0 2c0 44.2 35.8 80 80 80zm0-208a128 128 0 1 1 0 256 128 128 0 1 1 0-256z"
                                    />
                                </svg>
                            </a>
                        </td>
                    </tr>
                    <tr>
                        <td>1</td>
                        <td>USMONOV RAMZIDDIN SALIMJON O‘G‘LI</td>
                        <td>1</td>
                        <td><span> O`qildi </span></td>

                        <td>22.02.2222 00:00</td>

                        <td>Text</td>
                        <td>25.03.2024 11:56</td>

                        <td>
                            <a
                                href="./aboutShippingDetail.html"
                                class="buttonInfo flex w-[45px] border-2 p-[10px] rounded border-[#000] hover:bg-[#0162A7FF] transition-all"
                            >
                                <svg
                                    width="20px"
                                    height="20px"
                                    xmlns="http://www.w3.org/2000/svg"
                                    viewBox="0 0 576 512"
                                >
                                    <path
                                        d="M288 80c-65.2 0-118.8 29.6-159.9 67.7C89.6 183.5 63 226 49.4 256c13.6 30 40.2 72.5 78.6 108.3C169.2 402.4 222.8 432 288 432s118.8-29.6 159.9-67.7C486.4 328.5 513 286 526.6 256c-13.6-30-40.2-72.5-78.6-108.3C406.8 109.6 353.2 80 288 80zM95.4 112.6C142.5 68.8 207.2 32 288 32s145.5 36.8 192.6 80.6c46.8 43.5 78.1 95.4 93 131.1c3.3 7.9 3.3 16.7 0 24.6c-14.9 35.7-46.2 87.7-93 131.1C433.5 443.2 368.8 480 288 480s-145.5-36.8-192.6-80.6C48.6 356 17.3 304 2.5 268.3c-3.3-7.9-3.3-16.7 0-24.6C17.3 208 48.6 156 95.4 112.6zM288 336c44.2 0 80-35.8 80-80s-35.8-80-80-80c-.7 0-1.3 0-2 0c1.3 5.1 2 10.5 2 16c0 35.3-28.7 64-64 64c-5.5 0-10.9-.7-16-2c0 .7 0 1.3 0 2c0 44.2 35.8 80 80 80zm0-208a128 128 0 1 1 0 256 128 128 0 1 1 0-256z"
                                    />
                                </svg>
                            </a>
                        </td>
                    </tr>
                    <tr>
                        <td>1</td>
                        <td>USMONOV RAMZIDDIN SALIMJON O‘G‘LI</td>
                        <td>1</td>
                        <td><span> O`qildi </span></td>

                        <td>22.02.2222 00:00</td>

                        <td>Text</td>
                        <td>25.03.2024 11:56</td>

                        <td>
                            <a
                                href="{{route('user.shipping.detail')}}"
                                class="buttonInfo flex w-[45px] border-2 p-[10px] rounded border-[#000] hover:bg-[#0162A7FF] transition-all"
                            >
                                <svg
                                    width="20px"
                                    height="20px"
                                    xmlns="http://www.w3.org/2000/svg"
                                    viewBox="0 0 576 512"
                                >
                                    <path
                                        d="M288 80c-65.2 0-118.8 29.6-159.9 67.7C89.6 183.5 63 226 49.4 256c13.6 30 40.2 72.5 78.6 108.3C169.2 402.4 222.8 432 288 432s118.8-29.6 159.9-67.7C486.4 328.5 513 286 526.6 256c-13.6-30-40.2-72.5-78.6-108.3C406.8 109.6 353.2 80 288 80zM95.4 112.6C142.5 68.8 207.2 32 288 32s145.5 36.8 192.6 80.6c46.8 43.5 78.1 95.4 93 131.1c3.3 7.9 3.3 16.7 0 24.6c-14.9 35.7-46.2 87.7-93 131.1C433.5 443.2 368.8 480 288 480s-145.5-36.8-192.6-80.6C48.6 356 17.3 304 2.5 268.3c-3.3-7.9-3.3-16.7 0-24.6C17.3 208 48.6 156 95.4 112.6zM288 336c44.2 0 80-35.8 80-80s-35.8-80-80-80c-.7 0-1.3 0-2 0c1.3 5.1 2 10.5 2 16c0 35.3-28.7 64-64 64c-5.5 0-10.9-.7-16-2c0 .7 0 1.3 0 2c0 44.2 35.8 80 80 80zm0-208a128 128 0 1 1 0 256 128 128 0 1 1 0-256z"
                                    />
                                </svg>
                            </a>
                        </td>
                    </tr>
                    </thead>
                    <tbody></tbody>
                </table>
            </div>

            <select
                class="w-[70px] h-[40px] mt-[10px] px-[5px] cursor-pointer bg-white border-2 rounded-[10px] outline-none"
            >
                <option selected>10</option>
                <option>20</option>
                <option>30</option>
                <option>40</option>
                <option>50</option>
                <option>60</option>
                <option>70</option>
                <option>80</option>
                <option>90</option>
                <option>100</option>
            </select>
        </div>
    </div>

@stop
