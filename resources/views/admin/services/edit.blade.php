@extends('admin.layouts.app')
@section('title')
    {{$response->getTranslation('name','uz')}}
@endsection
@section('content')
    <x-headers icon="fas fa-circle" title=" {{$response->getTranslation('name','uz')}}" parent="Xizmatlar" parent-icon="" parent-route="admin.services.index"/>
    <div class="card">
        <div class="card-body">
            <form action="{{route('admin.services.update', $response->id)}}" method="POST" enctype="multipart/form-data">
                @csrf
                @method('PUT')
                @include('admin.services.form')
            </form>
        </div>
    </div>
@endsection
