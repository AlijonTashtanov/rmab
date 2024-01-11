@extends('admin.layouts.app')
@section('title')
    {{$response->getTranslation('name','uz')}}
@endsection
@section('content')
    <x-headers icon="fas fa-circle" title="{{$response->getTranslation('name','uz')}}" parent="Koruppsiya turlari" parent-icon="" parent-route="admin.corruptiontypes.index"/>
    <div class="card">
        <div class="card-body">
            <form action="{{route('admin.corruptiontypes.update', $response->id)}}" method="POST">
                @csrf
                @method('PUT')
                @include('admin.corruptiontypes.form')
            </form>
        </div>
    </div>
@endsection
