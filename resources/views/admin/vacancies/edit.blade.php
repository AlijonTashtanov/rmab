@extends('admin.layouts.app')
@section('title')
    Tahrirlash
@endsection
@section('content')
    <x-headers icon="fas fa-circle" title="Tahrirlash" parent="Vakansiyalar" parent-icon="" parent-route="admin.vacancies.index"/>
    <div class="card">
        <div class="card-body">
            <form action="{{route('admin.vacancies.update', $response->id)}}" method="POST" enctype="multipart/form-data">
                @csrf
                @method('PUT')
                @include('admin.vacancies.form')
            </form>
        </div>
    </div>
@endsection
