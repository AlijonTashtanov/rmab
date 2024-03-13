@extends('admin.layouts.app')
@section('title')
    Jo’natma haqida so'rvoga javob berish
@endsection
@section('content')
    <x-headers icon="fas fa-circle" title="Jo’natma haqida so'rvoga javob berish" parent="Jo’natma haqida ma’lumot olish" parent-icon="" parent-route="admin.informationaboutshipments.index"/>
    <div class="card">
        <div class="card-body">
            <form action="{{route('admin.informationaboutshipments.update', $response->id)}}" method="POST" enctype="multipart/form-data">
                @csrf
                @method('PUT')
                @include('admin.informationaboutshipments.form')
            </form>
        </div>
    </div>
@endsection
