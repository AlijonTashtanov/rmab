@extends('admin.layouts.app')
@section('title')
  {{$response->id}}
@endsection
@section('content')
    <x-headers title="{{$response->id}}" icon="fas fa-circle" parent="Ijtimoiy tarmoqlarimiz" parent-route="admin.socials.index"
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
                    <th>Icon</th>
                    <td>{!! $response->icon !!}</td>
                </tr>
                <tr>
                    <th>Url</th>
                    <td>{{$response->url}}</td>
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
