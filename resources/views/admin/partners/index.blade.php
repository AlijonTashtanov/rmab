@extends('admin.layouts.app')
@section('title')
    Bizning hamkorlar
@endsection
@section('content')
    <x-header icon="fas fa-circle" title="Bizning hamkorlar"/>
    <div class="d-flex justify-content-end py-2">
        <a href="{{route('admin.partners.create')}}" class="btn btn-primary"><i class="fas fa-plus"></i> Qo'shish</a>
    </div>
    @livewire('partner.partner-table')
    {{-- use livewire table here --}}
@endsection
