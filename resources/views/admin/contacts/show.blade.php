@extends('admin.layouts.app')
@section('title')
    {{$response->getTranslation('name','uz')}}
@endsection
@section('content')
    <x-headers title="{{$response->getTranslation('name','uz')}}" icon="fas fa-circle" parent="Sayt ma'lumotlari"
               parent-route="admin.contacts.index"
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
                    <th>Rasm</th>
                    <td><img src="{{ $response->getImageUrl() }}"
                             alt="" style="width: 60px;height: 60px"></td>
                </tr>
                <tr>
                    <th>Telefon raqamimiz</th>
                    <td>{{$response->phone}}</td>
                </tr>
                <tr>
                    <th>Ishonch raqami</th>
                    <td>{{$response->trust_number}}</td>
                </tr>
                <tr>
                    <th>Savol va takliflar bo’yicha telefon raqami</th>
                    <td>{{$response->question_suggestion}}</td>
                </tr>
                <tr>
                    <th>Elektorn pochta</th>
                    <td>{{$response->email}}</td>
                </tr>
                <tr>
                    <th>Nomi [uz]</th>
                    <td>{{$response->getTranslation('name','uz')}}</td>
                </tr>
                <tr>
                    <th>Nomi [ru]</th>
                    <td>{{$response->getTranslation('name','ru')}}</td>
                </tr>
                <tr>
                    <th>Nomi [en]</th>
                    <td>{{$response->getTranslation('name','en')}}</td>
                </tr>
                <tr>
                    <th>Manzil [uz]</th>
                    <td>{{$response->getTranslation('address','uz')}}</td>
                </tr>
                <tr>
                    <th>Manzil [ru]</th>
                    <td>{{$response->getTranslation('address','ru')}}</td>
                </tr>
                <tr>
                    <th>Manzil [en]</th>
                    <td>{{$response->getTranslation('address','en')}}</td>
                </tr>
                <tr>
                    <th>Sarlavha [uz]</th>
                    <td>{{$response->getTranslation('title','uz')}}</td>
                </tr>
                <tr>
                    <th>Sarlavha [ru]</th>
                    <td>{{$response->getTranslation('title','ru')}}</td>
                </tr>
                <tr>
                    <th>Sarlavha [en]</th>
                    <td>{{$response->getTranslation('title','en')}}</td>
                </tr>
                <tr>
                    <th>Qisqa ma'lumot [uz]</th>
                    <td>{!!$response->getTranslation('description','uz') !!}</td>
                </tr>
                <tr>
                    <th>Qisqa ma'lumot [ru]</th>
                    <td>{!!$response->getTranslation('description','ru')!!}</td>
                </tr>
                <tr>
                    <th>Qisqa ma'lumot [en]</th>
                    <td>{!!$response->getTranslation('description','en')!!}</td>
                </tr>
                <tr>
                    <th>Lokatsiya</th>
                    <td>
                        <iframe src="{!!$response->location!!}" height="100px" width="800px"></iframe>
                    </td>
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
