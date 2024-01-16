@extends('admin.layouts.app')
@section('title')
    {{$response->getTranslation('value','uz')}}
@endsection
@section('content')
    <x-headers title="{{$response->getTranslation('value','uz')}}" icon="fas fa-circle" parent="Tarjimalar"
               parent-route="admin.translations.index"
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
                    <th>Key</th>
                    <td>{{$response->key}}</td>
                </tr>
                <tr>
                    <th>Uz</th>
                    <td>{{$response->getTranslation('value','uz')}}</td>
                </tr>
                <tr>
                    <th>Ru</th>
                    <td>{{$response->getTranslation('value','ru')}}</td>
                </tr>
                <tr>
                    <th>En</th>
                    <td>{{$response->getTranslation('value','en')}}</td>
                </tr>
            </table>
        </div>
    </div>
@endsection
