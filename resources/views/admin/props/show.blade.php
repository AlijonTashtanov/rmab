@extends('admin.layouts.app')
@section('title')
    {{$response->getTranslation('title','uz')}}
@endsection
@section('content')
    <x-headers title="{{$response->getTranslation('title','uz')}}" icon="fas fa-circle" parent="Rekvizitlar"
               parent-route="admin.props.index"
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
