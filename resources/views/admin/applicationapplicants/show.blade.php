@extends('admin.layouts.app')
@section('title')
    {{$response->first_name}}
@endsection
@section('content')
    <x-headers title="{{$response->first_name}}" icon="fas fa-circle" parent="Ariza va murojaatlar"
               parent-route="admin.applicationapplicants.index"
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
                    <th>Ismi</th>
                    <td>{{$response->first_name}}</td>
                </tr>
                <tr>
                    <th>Familyasi</th>
                    <td>{{$response->last_name}}</td>
                </tr>
                <tr>
                    <th>Viloyati</th>
                    <td>{{$response->region?->getTranslation('name','uz')}}</td>
                </tr>
                <tr>
                    <th>Tuman/Shaxar</th>
                    <td>{{$response->district?->getTranslation('name','uz')}}</td>
                </tr>
                <tr>
                    <th>Telefon raqam</th>
                    <td>{{$response->phone}}</td>
                </tr>
                <tr>
                    <th>Korrupsiya turi</th>
                    <td>{{$response->corruptionType?->getTranslation('name','uz')}}</td>
                </tr>
                <tr>
                    <th>Korrupsiya yuz bergan manzil</th>
                    <td>{{$response->address_where_corruption_occurred}}</td>
                </tr>
                <tr>
                    <th>Korrupsiyada gumonlonuvchi shaxs nomi</th>
                    <td>{{$response->name_person_suspected_corruption}}</td>
                </tr>
                <tr>
                    <th>Izoh</th>
                    <td>{{$response->comment}}</td>
                </tr>
                <tr>
                    <th>Holati</th>
                    <td>{!! $response->getStatusBadgeName() !!}</td>
                </tr>
                <tr>
                    <th>Yaratildi</th>
                    <td>{{$response->created_at}}</td>
                </tr>
                <tr>
                    <th>Tahrirlandi</th>
                    <td>{{$response->updated_at}}</td>
                </tr>
            </table>
        </div>
    </div>
@endsection
