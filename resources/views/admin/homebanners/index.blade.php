@extends('admin.layouts.app')
@section('title')
    O'rta qismi banneri
@endsection
@section('content')
    <x-header icon="fas fa-circle" title=" O'rta qismi banneri"/>
    <div class="d-flex justify-content-end py-2">
        <a href="{{route('admin.homebanners.create')}}" class="btn btn-primary"><i class="fas fa-plus"></i> Qo'shish</a>
    </div>
    @livewire('home-banner.home-banner-table')
    {{-- use livewire table here --}}
@endsection
