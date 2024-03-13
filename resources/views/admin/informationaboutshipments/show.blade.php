@extends('admin.layouts.app')
@section('title')
    {{$response->user?->name}}
@endsection
@section('content')
    <x-headers title="{{$response->user?->name}}" icon="fas fa-circle" parent="Jo’natma haqida ma’lumot olish"
               parent-route="admin.informationaboutshipments.index"
               parent-icon=""/>
    <div class="card card-outline card-primary">
        <div class="card-header">
            <div class="card-tools">
                <button type="button" class="btn btn-tool" data-card-widget="maximize"><i
                        class="fas fa-expand"></i></button>
                <button type="button" class="btn btn-tool" data-card-widget="collapse">
                    <i class="fas fa-plus"></i>
                </button>
            </div>
        </div>
        <div class="card-body table-responsive">
            <table class="table table-bordered">
                <tr>
                    <th>ID</th>
                    <td>{{$response->id}}</td>
                </tr>
                <tr>
                    <th>F.I.SH</th>
                    <td>{{$response->user?->name}}</td>
                </tr>
                <tr>
                    <th>Javobni qabul qilish turi</th>
                    <td>{{$response->getWantTakeName()}}</td>
                </tr>
                <tr>
                    <th>Jo’natma raqami</th>
                    <td>{{$response->shipment_number}}</td>
                </tr>
                <tr>
                    <th>Jo’natma kuni</th>
                    <td>{{$response->shipping_date}}</td>
                </tr>
                <tr>
                    <th>Jo'natma qaysi shakl asosida topshirilgan</th>
                    <td>{{$response->form1}}</td>
                </tr>
                <tr>
                    <th>Holati</th>
                    <td>{!! $response->getStatusBadgeName() !!}</td>
                </tr>
                @if($response->getFileUrl())
                    <tr>
                        <th>Yuborilgan fayl</th>
                        <td>
                            <a href="{{ $response->getFileUrl() }}" download=""><i class="fas fa-arrow-down"></i> Yuklab
                                olish ({{$response->getFileSize()}})</a>
                        </td>
                    </tr>
                @endif
                <tr>
                    <th>Javob matni</th>
                    <td>{!! $response->answer_text !!}</td>
                </tr>
                <tr>
                    <th>Javob berilgan vaqti</th>
                    <td>{{ $response->anwser_at }}</td>
                </tr>
                <tr>
                    <th>Kim tomonidan javob berildi</th>
                    <td>{{ $response->answerBy?->name }}</td>
                </tr>
                <tr>
                    <th>Yaratilgan vaqti</th>
                    <td>{{$response->created_at}}</td>
                </tr>
                <tr>
                    <th>Tahrirlangan vaqti</th>
                    <td>{{$response->updated_at}}</td>
                </tr>
            </table>
        </div>
    </div>
@endsection
