@extends('admin.layouts.app')
@section('title')
    Turlari
@endsection
@section('content')
    <x-header icon="fas fa-circle" title="Turlari"/>
    <div class="d-flex justify-content-end py-2">
        <a href="{{route('admin.applicationuseservicetypes.create')}}" class="btn btn-primary"><i
                class="fas fa-plus"></i> Qo'shish</a>
    </div>
    @livewire('application-use-service-types.application-use-service-types-table')
    {{-- use livewire table here --}}
@endsection
