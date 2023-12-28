@extends('admin.layouts.app')
@section('title')
    Biz haqimizda
@endsection
@section('content')
    <x-header icon="fas fa-circle" title="Biz haqimizda"/>
    <div class="d-flex justify-content-end py-2">
        <a href="{{route('admin.abouts.create')}}" class="btn btn-primary"><i class="fas fa-plus"></i> Qo'shish</a>
    </div>
    @livewire('about.about-table')
    {{-- use livewire table here --}}
@endsection
