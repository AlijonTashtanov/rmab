@extends('admin.layouts.app')
@section('title')
    Ijtimoiy tarmoqlarimiz
@endsection
@section('content')
    <x-header icon="fas fa-circle" title="Ijtimoiy tarmoqlarimiz"/>
    <div class="d-flex justify-content-end py-2">
        <a href="{{route('admin.socials.create')}}" class="btn btn-primary"><i class="fas fa-plus"></i> Qo'shish</a>
    </div>
    @livewire('social.social-table')
    {{-- use livewire table here --}}
@endsection
