@extends('admin.layouts.app')
@section('title')
    {{$response->getTranslation('title','uz')}}
@endsection
@section('content')
    <x-headers icon="fas fa-circle" title=" {{$response->getTranslation('title','uz')}}" parent="Sahifalar"
               parent-icon="" parent-route="admin.pages.index"/>
    <div class="card">
        <div class="card-body">
            <form action="{{route('admin.pages.update', $response->id)}}" method="POST" enctype="multipart/form-data">
                @csrf
                @method('PUT')
                @include('admin.pages.form')
            </form>
        </div>
    </div>
@endsection
