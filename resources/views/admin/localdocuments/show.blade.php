@extends('admin.layouts.app')
@section('title')
    {{$response->getTranslation('name','uz')}}
@endsection
@section('content')
    <x-headers title="{{$response->getTranslation('name','uz')}}" icon="fas fa-circle" parent="Ichki hujjatlar"
               parent-route="admin.localdocuments.index"
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
                    <th>Fayl</th>
                    <td>
                        <a href="{{ $response->getFileUrl() }}" download=""><i class="fas fa-arrow-down"></i> Yuklab olish ({{$response->getFileSize()}})</a>
                    </td>
                </tr>
                <tr>
                    <th>Sarlavha [uz]</th>
                    <td>{{$response->getTranslation('name','uz')}}</td>
                </tr>
                <tr>
                    <th>Sarlavha [ru]</th>
                    <td>{{$response->getTranslation('name','ru')}}</td>
                </tr>
                <tr>
                    <th>Sarlavha [en]</th>
                    <td>{{$response->getTranslation('name','en')}}</td>
                </tr>
                <tr>
                    <th>Kontent [uz]</th>
                    <td>{!!$response->getTranslation('content','uz') !!}</td>
                </tr>
                <tr>
                    <th>Kontent [ru]</th>
                    <td>{!!$response->getTranslation('content','ru')!!}</td>
                </tr>
                <tr>
                    <th>Kontent [en]</th>
                    <td>{!!$response->getTranslation('content','en')!!}</td>
                </tr>
                <tr>
                    <th>Holati</th>
                    <td>
                        {!! $response->getStatusBadgeName() !!}
                    </td>
                </tr>
            </table>
        </div>
    </div>
@endsection
