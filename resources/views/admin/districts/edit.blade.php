@extends('admin.layouts.app')
@section('title')
    {{$response->getTranslation('name','uz')}}
@endsection
@section('content')
    <x-headers icon="fas fa-circle" title="{{$response->getTranslation('name','uz')}}" parent="Tuman-shaharlar"
               parent-icon="" parent-route="admin.districts.index"/>
    <div class="card">
        <div class="card-body">
            <form action="{{route('admin.districts.update', $response->id)}}" method="POST">
                @csrf
                @method('PUT')
                @include('admin.districts.form')
            </form>
        </div>
    </div>
@endsection
