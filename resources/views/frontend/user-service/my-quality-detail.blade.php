@extends('frontend.user-service.layouts.index')
@include('frontend.user-service.layouts._style')

@section('content')
    <div class="content-wrapper" style="display: flex;">
{{--        @include('frontend.user-service.layouts._sidebar')--}}
        <div class="content" style="flex: 1;margin-top: 30px; ">
            <div class="w-[90%] mx-auto">
                <div class="">
                    <div class="">
                        <div class="table_component" role="region" tabindex="0">
                            <table>
                                <thead>
                                <tr>
                                    <td class="h-[50px]">Id</td>
                                    <td>7</td>
                                </tr>
                                <tr>
                                    <td class="h-[50px]">F.I.SH</td>
                                    <td>Ramziddin Usmonov Salimjon o`g`li</td>
                                </tr>
                                <tr>
                                    <td class="h-[50px]">Izoh</td>
                                    <td>Ko`rib chiqildi</td>
                                </tr>
                                <tr>
                                    <td class="h-[50px]">Baho</td>
                                </tr>
                                <tr>
                                    <td class="h-[50px]">Holati</td>
                                    <td>
                          <span
                              :class="{ 'text-red-300': activeDetaleInfo?.status === 0, 'text-blue-500': activeDetaleInfo?.status === 1 }"
                          >
                            O`qilmadi
                          </span>
                                    </td>
                                </tr>
                                <tr>
                                    <td class="h-[50px]">Yaratilgan vaqti</td>
                                    <td>26-03-2024</td>
                                </tr>
                                <tr>
                                    <td class="h-[50px]">Tahrirlangan vaqti</td>
                                    <td>26-03-2024</td>
                                </tr>
                                </thead>
                                <tbody></tbody>
                            </table>
                            <a href="{{route('user.quality')}}" class="my-btn mt-3 w-100">Qaytish</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@stop
