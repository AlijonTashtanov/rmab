@extends('admin.layouts.app')
@section('title')
    Ma'lumotlar
@endsection
@section('content')
    <x-header icon="fas fa-circle" title="Ma'lumotlar"/>
    <div class="d-flex justify-content-end py-2">
        <a href="{{route('admin.information.create')}}" class="btn btn-primary"><i class="fas fa-plus"></i> Qo'shish</a>
    </div>
    @livewire('information.information-table')
    {{-- use livewire table here --}}
@endsection
