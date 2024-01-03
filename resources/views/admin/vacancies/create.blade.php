@extends('admin.layouts.app')
@section('title')
    Vakansiya qo'shish
@endsection
@section('content')
    <x-headers icon="fas fa-circle" title="Vakansiya qo'shish" parent="Vakansiyalar" parent-icon=""
               parent-route="admin.vacancies.index"/>
    <div class="card">
        <div class="card-body">
            <form action="{{route('admin.vacancies.store')}}" method="POST" enctype="multipart/form-data">
                @csrf
                @include('admin.vacancies.form')
            </form>
        </div>
    </div>
@endsection
