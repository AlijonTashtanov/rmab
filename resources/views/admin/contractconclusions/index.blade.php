@extends('admin.layouts.app')
@section('title')
    Shartnoma tuzuvchilar
@endsection
@section('content')
    <x-header icon="fas fa-circle" title="Shartnoma tuzuvchilar"/>
{{--    <div class="d-flex justify-content-end py-2">--}}
{{--        <a href="{{route('admin.contractconclusions.create')}}" class="btn btn-primary"><i class="fas fa-plus"></i> Qo'shish</a>--}}
{{--    </div>--}}
    @livewire('contract-conclusion.contract-conclusion-table')
    {{-- use livewire table here --}}
@endsection
