@extends('admin.layouts.app')
@section('title')
    Ko'p beriladigan savollar
@endsection
@section('content')
    <x-header icon="fas fa-circle" title="Ko'p beriladigan savollar"/>
    <div class="d-flex justify-content-end py-2">
        <a href="{{route('admin.faqs.create')}}" class="btn btn-primary"><i class="fas fa-plus"></i> Qo'shish</a>
    </div>
    @livewire('faq.faq-table')
    {{-- use livewire table here --}}
@endsection
