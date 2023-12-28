@extends('admin.layouts.app')
@section('title')
    Biz haqimizda
@endsection
@section('content')
    <x-headers icon="fas fa-circle" title="Biz haqimizda" parent="Biz haqimizda" parent-icon="" parent-route="admin.abouts.index"/>
    <div class="card">
        <div class="card-body">
            <form action="{{route('admin.abouts.update', $response->id)}}" method="POST" enctype="multipart/form-data">
                @csrf
                @method('PUT')
                @include('admin.abouts.form')
            </form>
        </div>
    </div>
@endsection
