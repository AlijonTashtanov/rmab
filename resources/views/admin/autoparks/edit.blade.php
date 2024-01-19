@extends('admin.layouts.app')
@section('title')
    {{$response->getTranslation('title','uz')}}
@endsection
@section('content')
    <x-headers icon="fas fa-circle" title="{{$response->getTranslation('title','uz')}}" parent="Avto park" parent-icon="" parent-route="admin.autoparks.index"/>
    <div class="card">
        <div class="card-body">
            <form action="{{route('admin.autoparks.update', $response->id)}}" method="POST" enctype="multipart/form-data">
                @csrf
                @method('PUT')
                @include('admin.autoparks.form')
            </form>
        </div>
    </div>
@endsection
