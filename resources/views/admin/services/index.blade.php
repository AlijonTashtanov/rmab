@extends('admin.layouts.app')
@section('title')
    Xizmatlar
@endsection
@section('content')
    <x-header icon="fas fa-circle" title="Xizmatlar"/>
    <div class="d-flex justify-content-end py-2">
        <a href="{{route('admin.services.create')}}" class="btn btn-primary"><i class="fas fa-plus"></i> Qo'shish</a>
    </div>
    @livewire('service.service-table')
    {{-- use livewire table here --}}
@endsection
