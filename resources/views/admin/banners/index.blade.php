@extends('admin.layouts.app')
@section('title')
    Bannerlar
@endsection
@section('content')
    <x-header icon="fas fa-circle" title="Bannerlar"/>
    <div class="d-flex justify-content-end py-2">
        <a href="{{route('admin.banners.create')}}" class="btn btn-primary"><i class="fas fa-plus"></i> Qo'shish</a>
    </div>
    @livewire('banner.banner-table')
    {{-- use livewire table here --}}
@endsection
