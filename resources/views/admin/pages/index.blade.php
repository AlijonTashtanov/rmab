@extends('admin.layouts.app')
@section('title')
    Sahifalar
@endsection
@section('content')
    <x-header icon="fas fa-circle" title="Sahifalar"/>
    <div class="d-flex justify-content-end py-2">
        <a href="{{route('admin.pages.create')}}" class="btn btn-primary"><i class="fas fa-plus"></i> Qo'shish</a>
    </div>
    <code>Diqqat! Har bir sahifada faqat oxirgi qo'shilgan ma'lumot ko'rinadi!</code>
    @livewire('page.page-table')
    {{-- use livewire table here --}}
@endsection
