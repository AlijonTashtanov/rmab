@extends('admin.layouts.app')
@section('title')
    ApplicationUseServices
@endsection
@section('content')
    <x-header icon="fas fa-circle" title="ApplicationUseServices"/>
    <div class="d-flex justify-content-end py-2">
        <a href="{{route('admin.applicationuseservices.create')}}" class="btn btn-primary"><i class="fas fa-plus"></i> Create</a>
    </div>
    {{-- use livewire table here --}}
@endsection
