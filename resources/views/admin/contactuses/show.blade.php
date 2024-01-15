@extends('admin.layouts.app')
@section('title')
    {{$response->full_name}}
@endsection
@section('content')
    <x-headers title="{{$response->full_name}}" icon="fas fa-circle" parent="Savol va taklif qoldirganlar"
               parent-route="admin.contactuses.index"
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
                    <th>F.I.Sh</th>
                    <td>{{$response->full_name}}</td>
                </tr>
                <tr>
                    <th>Telefon raqami</th>
                    <td>{{$response->phone}}</td>
                </tr>
                <tr>
                    <th>Izoh</th>
                    <td>{{$response->comment}}</td>
                </tr>
                <tr>
                    <th>Holati</th>
                    <td>{!! $response->getStatusBadgeName() !!}</td>
                </tr>
            </table>
        </div>
    </div>
@endsection
