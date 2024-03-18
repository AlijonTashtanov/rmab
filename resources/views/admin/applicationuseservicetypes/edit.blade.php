@extends('admin.layouts.app')
@section('title')
    Tahrirlsh: {{$response->getTranslation('name','uz')}}
@endsection
@section('content')
    <x-headers icon="fas fa-circle" title="Tahrirlsh: {{$response->getTranslation('name','uz')}}" parent="Turlari"
               parent-icon="" parent-route="admin.applicationuseservicetypes.index"/>
    <div class="card">
        <div class="card-body">
            <form action="{{route('admin.applicationuseservicetypes.update', $response->id)}}" method="POST">
                @csrf
                @method('PUT')
                @include('admin.applicationuseservicetypes.form')
            </form>
        </div>
    </div>
@endsection
