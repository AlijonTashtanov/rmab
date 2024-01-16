@extends('admin.layouts.app')
@section('title')
    {{$response->getTranslation('value','uz')}}
@endsection
@section('content')
    <x-headers icon="fas fa-circle" title="{{$response->getTranslation('value','uz')}}" parent="Tarjimalar"
               parent-icon=""
               parent-route="admin.translations.index"/>
    <div class="card">
        <div class="card-body">
            <form action="{{route('admin.translations.update', $response->id)}}" method="POST">
                @csrf
                @method('PUT')
                @include('admin.translations.form')
            </form>
        </div>
    </div>
@endsection
