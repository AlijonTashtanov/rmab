@extends('admin.layouts.app')
@section('title')
    Bizning avfzalliklar
@endsection
@section('content')
    <x-header icon="fas fa-circle" title=" Bizning avfzalliklar"/>
    <div class="d-flex justify-content-end py-2">
        <a href="{{route('admin.ouradvantages.create')}}" class="btn btn-primary"><i class="fas fa-plus"></i> Qo'shish</a>
    </div>
    @livewire('our-advantage.our-advantage-table')
    {{-- use livewire table here --}}
@endsection
