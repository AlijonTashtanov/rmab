@extends('admin.layouts.app')
@section('title')
    Ko'p beriladigan savollar
@endsection
@section('content')
    <x-headers title="Ko'p beriladigan savollar" icon="fas fa-circle" parent="Ko'p beriladigan savollar" parent-route="admin.faqs.index"
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
                    <th>Savol [uz]</th>
                    <td>{{$response->getTranslation('question','uz')}}</td>
                </tr>
                <tr>
                    <th>Savol [ru]</th>
                    <td>{{$response->getTranslation('question','ru')}}</td>
                </tr>
                <tr>
                    <th>Savol [en]</th>
                    <td>{{$response->getTranslation('question','en')}}</td>
                </tr>
                <tr>
                    <th>Javob [uz]</th>
                    <td>{{$response->getTranslation('answer','uz')}}</td>
                </tr>
                <tr>
                    <th>Javob [ru]</th>
                    <td>{{$response->getTranslation('answer','ru')}}</td>
                </tr>
                <tr>
                    <th>Javob [en]</th>
                    <td>{{$response->getTranslation('answer','en')}}</td>
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
