@extends('admin.layouts.app')
@section('title')
    Tarjimalar
@endsection
@section('content')
    <x-header icon="fas fa-circle" title="Tarjimalar"/>
    <div class="d-flex justify-content-end py-2">
        <a href="{{route('admin.translations.create')}}" class="btn btn-primary"><i class="fas fa-plus"></i>
            Qo'shish</a>
    </div>
    @livewire('translation.translation-table')
    {{-- use livewire table here --}}
@endsection
