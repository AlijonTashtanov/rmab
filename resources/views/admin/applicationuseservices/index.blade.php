@extends('admin.layouts.app')
@section('title')
    Xizmatlardan foydalanish uchun ariza berganlar
@endsection
@section('content')
    <x-header icon="fas fa-circle" title="Xizmatlardan foydalanish uchun ariza berganlar"/>
    {{--    <div class="d-flex justify-content-end py-2">--}}
    {{--        <a href="{{route('admin.applicationuseservices.create')}}" class="btn btn-primary"><i class="fas fa-plus"></i> Create</a>--}}
    {{--    </div>--}}
    @livewire('application-use-service.application-use-service-table')
    {{-- use livewire table here --}}
@endsection
