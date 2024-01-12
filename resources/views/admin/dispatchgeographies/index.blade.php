@extends('admin.layouts.app')
@section('title')
    Yuboruvchi geografiyalari
@endsection
@section('content')
    <x-header icon="fas fa-circle" title="Yuboruvchi geografiyalari"/>
    <div class="d-flex justify-content-end py-2">
        <a href="{{route('admin.dispatchgeographies.create')}}" class="btn btn-primary"><i class="fas fa-plus"></i> Qo'shish</a>
    </div>
    @livewire('dispatch-geography.dispatch-geography-table')
    {{-- use livewire table here --}}
@endsection
