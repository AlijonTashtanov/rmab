@extends('admin.layouts.app')
@section('title')
    Avto park
@endsection
@section('content')
    <x-header icon="fas fa-circle" title="Avto park"/>
    <div class="d-flex justify-content-end py-2">
        <a href="{{route('admin.autoparks.create')}}" class="btn btn-primary"><i class="fas fa-plus"></i> Qo'shish</a>
    </div>
    @livewire('auto-park.auto-park-table')
    {{-- use livewire table here --}}
@endsection
