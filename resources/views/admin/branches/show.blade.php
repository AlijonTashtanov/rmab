@extends('admin.layouts.app')
@section('title')
    {{$response->getTranslation('name','uz')}}
@endsection
@section('content')
    <x-headers title=" {{$response->getTranslation('name','uz')}}" icon="fas fa-circle" parent="Filiallar"
               parent-route="admin.branches.index"
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
                    <th>Manzil [uz]</th>
                    <td>{!!$response->getTranslation('address','uz') !!}</td>
                </tr>
                <tr>
                    <th>Manzil [ru]</th>
                    <td>{!!$response->getTranslation('address','ru')!!}</td>
                </tr>
                <tr>
                    <th>Manzil [en]</th>
                    <td>{!!$response->getTranslation('address','en')!!}</td>
                </tr>
                <tr>
                    <th>Telefon raqami</th>
                    <td>{{$response->phone}}</td>
                </tr>
                <tr>
                    <th>E-mail</th>
                    <td>{{$response->email}}</td>
                </tr>
                <tr>
                    <th>Masul shaxs</th>
                    <td>{{$response->leadership}}</td>
                </tr>
                <tr>
                    <th>Viloyat</th>
                    <td>{{$response->region?->getTranslation('name','uz')}}</td>
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
