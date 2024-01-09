@extends('admin.layouts.app')
@section('title')
    Filiallar
@endsection
@section('content')
    <x-header icon="fas fa-circle" title="Filiallar"/>
    <div class="d-flex justify-content-end py-2">
        <a href="{{route('admin.branches.create')}}" class="btn btn-primary"><i class="fas fa-plus"></i> Qo'shish</a>
    </div>
    @livewire('branch.branch-table')
    {{-- use livewire table here --}}
@endsection
