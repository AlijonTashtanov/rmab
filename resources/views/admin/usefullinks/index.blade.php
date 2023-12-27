@extends('admin.layouts.app')
@section('title')
    Foydali havolalar
@endsection
@section('content')
    <x-header icon="fas fa-circle" title="Foydali havolalar"/>
    <div class="d-flex justify-content-end py-2">
        <a href="{{route('admin.usefullinks.create')}}" class="btn btn-primary"><i class="fas fa-plus"></i> Qo'shish</a>
    </div>
    @livewire('useful-link.useful-link-table')
    {{-- use livewire table here --}}
@endsection
