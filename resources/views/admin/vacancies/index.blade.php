@extends('admin.layouts.app')
@section('title')
    Vakansiyalar
@endsection
@section('content')
    <x-header icon="fas fa-circle" title="Vakansiyalar"/>
    <div class="d-flex justify-content-end py-2">
        <a href="{{route('admin.vacancies.create')}}" class="btn btn-primary"><i class="fas fa-plus"></i> Qo'shish</a>
    </div>
    @livewire('vacancy.vacancy-table')
    {{-- use livewire table here --}}
@endsection
