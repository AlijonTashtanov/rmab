@extends('admin.layouts.app')
@section('title')
    Ichki hujjatlar
@endsection
@section('content')
    <x-header icon="fas fa-circle" title="Ichki hujjatlar"/>
    <div class="d-flex justify-content-end py-2">
        <a href="{{route('admin.localdocuments.create')}}" class="btn btn-primary"><i class="fas fa-plus"></i>
            Qo'shish</a>
    </div>
    @livewire('local-document.local-document-table')
    {{-- use livewire table here --}}
@endsection
