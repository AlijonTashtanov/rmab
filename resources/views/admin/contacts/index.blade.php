@extends('admin.layouts.app')
@section('title')
    Sayt ma'lumotlari
@endsection
@section('content')
    <x-header icon="fas fa-circle" title="Sayt ma'lumotlari"/>
    <div class="d-flex justify-content-end py-2">
        <a href="{{route('admin.contacts.create')}}" class="btn btn-primary"><i class="fas fa-plus"></i> Qo'shish</a>
    </div>
    <code>Saytda oxirgi qo'shilgan ma'lumot ko'rinadi!</code>
    @livewire('contact.contact-table')
    {{-- use livewire table here --}}
@endsection
