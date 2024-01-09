@extends('admin.layouts.app')
@section('title')
    {{$response->getTranslation('name','uz')}}
@endsection
@section('content')
    <x-headers icon="fas fa-circle" title=" {{$response->getTranslation('name','uz')}}" parent="Filiallar"
               parent-icon="" parent-route="admin.branches.index"/>
    <div class="card">
        <div class="card-body">
            <form action="{{route('admin.branches.update', $response->id)}}" method="POST">
                @csrf
                @method('PUT')
                @include('admin.branches.form')
            </form>
        </div>
    </div>
@endsection
