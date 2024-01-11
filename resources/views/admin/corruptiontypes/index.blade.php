@extends('admin.layouts.app')
@section('title')
    Korrupsiya turlari
@endsection
@section('content')
    <x-header icon="fas fa-circle" title="Korrupsiya turlari"/>
    <div class="d-flex justify-content-end py-2">
        <a href="{{route('admin.corruptiontypes.create')}}" class="btn btn-primary"><i class="fas fa-plus"></i>
            Qo'shish</a>
    </div>
    @livewire('corruption-type.corruption-type-table')
    {{-- use livewire table here --}}
@endsection
