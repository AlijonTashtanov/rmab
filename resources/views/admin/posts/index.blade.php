@extends('admin.layouts.app')
@section('title')
    Yangiliklar
@endsection
@section('content')
    <x-header icon="fas fa-circle" title="Yangiliklar"/>
    <div class="d-flex justify-content-end py-2">
        <a href="{{route('admin.posts.create')}}" class="btn btn-primary"><i class="fas fa-plus"></i> Qo'shish</a>
    </div>
    @livewire('post.post-table')
    {{-- use livewire table here --}}
@endsection
