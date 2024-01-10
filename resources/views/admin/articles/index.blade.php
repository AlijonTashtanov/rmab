@extends('admin.layouts.app')
@section('title')
    Maqolalar
@endsection
@section('content')
    <x-header icon="fas fa-circle" title="Maqolalar"/>
    <div class="d-flex justify-content-end py-2">
        <a href="{{route('admin.articles.create')}}" class="btn btn-primary"><i class="fas fa-plus"></i> Create</a>
    </div>
    @livewire('article.article-table')
    {{-- use livewire table here --}}
@endsection
