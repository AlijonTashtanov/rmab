@extends('admin.layouts.app')
@section('title')
    {{$response->getTranslation('title','uz')}}
@endsection
@section('content')
    <x-headers icon="fas fa-circle" title="{{$response->getTranslation('title','uz')}}" parent="Bannerlar" parent-icon="" parent-route="admin.banners.index"/>
    <div class="card">
        <div class="card-body">
            <form action="{{route('admin.banners.update', $response->id)}}" method="POST" enctype="multipart/form-data">
                @csrf
                @method('PUT')
                @include('admin.banners.form')
            </form>
        </div>
    </div>
@endsection
