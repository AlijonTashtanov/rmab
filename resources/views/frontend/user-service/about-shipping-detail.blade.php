@extends('frontend.user-service.layouts.index')
@include('frontend.user-service.layouts._style')

@section('content')
    <div class="flex">

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
                                <td class="h-[50px]">Javobni qabul qilish turi</td>
                                <td>Text</td>
                            </tr>
                            <tr>
                                <td class="h-[50px]">Jo’natma raqami</td>
                                <td>1</td>
                            </tr>
                            <tr>
                                <td class="h-[50px]">Jo’natma kuni</td>
                                <td>22.02.2222 00:00</td>
                            </tr>
                            <tr>
                                <td class="h-[50px]">
                                    Jo'natma qaysi shakl asosida topshirilgan
                                </td>
                                <td>form1 shaklida</td>
                            </tr>
                            <tr>
                                <td class="h-[50px]">Holati</td>
                                <td>
                      <span
                          :class="{ 'text-red-300': activeDetaleInfo?.status === 0, 'text-blue-500': activeDetaleInfo?.status === 1 }"
                      >
                        O`qildi
                      </span>
                                </td>
                            </tr>
                            <tr>
                                <td
                                    v-if="activeDetaleInfo?.type_want_take == 1"
                                    class="h-[50px]"
                                >
                                    Javob matni
                                </td>
                                <td>salom dunyo</td>
                            </tr>
                            <tr>
                                <td class="h-[50px]">Javob berilgan vaqti</td>
                                <td>25.03.2024 11:57</td>
                            </tr>
                            <tr>
                                <td class="h-[50px]">Kim tomonidan javob berildi</td>
                                <td>
                                    <p v-if="activeDetaleInfo?.status === 1">Admin</p>
                                    <p v-else></p>
                                </td>
                            </tr>
                            <tr>
                                <td class="h-[50px]">Yaratilgan vaqti</td>
                                <td>25.03.2024 11:56</td>
                            </tr>
                            <tr>
                                <td class="h-[50px]">Tahrirlangan vaqti</td>
                                <td>25.03.2024 11:57</td>
                            </tr>
                            </thead>
                            <tbody></tbody>
                        </table>

                        <a href="./aboutShipping.html" class="my-btn mt-3 w-100"
                        >Qaytish</a
                        >
                    </div>
                </div>
            </div>
        </div>
    </div>
@stop
