@extends('admin.layouts.app')
@section('title')
    {{$response->getTranslation('name','uz')}}
@endsection
@section('content')
    <x-headers icon="fas fa-circle" title="{{$response->getTranslation('name','uz')}}" parent=" Yuboruvchi geografiyalari" parent-icon="" parent-route="admin.dispatchgeographies.index"/>
    <div class="card">
        <div class="card-body">
            <form action="{{route('admin.dispatchgeographies.update', $response->id)}}" method="POST">
                @csrf
                @method('PUT')
                @include('admin.dispatchgeographies.form')
            </form>
        </div>
    </div>
@endsection
