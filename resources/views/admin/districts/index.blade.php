@extends('admin.layouts.app')
@section('title')
    Tuman-Shaharlar
@endsection
@section('content')
    <x-header icon="fas fa-circle" title="Tuman-Shaharlar"/>
    <div class="d-flex justify-content-end py-2">
        <a href="{{route('admin.districts.create')}}" class="btn btn-primary"><i class="fas fa-plus"></i> Qo'shish</a>
    </div>
    @livewire('district.district-table')
    {{-- use livewire table here --}}
@endsection
