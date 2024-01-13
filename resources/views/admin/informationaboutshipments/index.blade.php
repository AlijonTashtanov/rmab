@extends('admin.layouts.app')
@section('title')
    Jo’natma haqida ma’lumot olish
@endsection
@section('content')
    <x-header icon="fas fa-circle" title="Jo’natma haqida ma’lumot olish"/>
{{--    <div class="d-flex justify-content-end py-2">--}}
{{--        <a href="{{route('admin.informationaboutshipments.create')}}" class="btn btn-primary"><i--}}
{{--                class="fas fa-plus"></i> Create</a>--}}
{{--    </div>--}}
    @livewire('information-about-shipment.information-about-shipment-table')
    {{-- use livewire table here --}}
@endsection
