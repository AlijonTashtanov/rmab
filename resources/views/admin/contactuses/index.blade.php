@extends('admin.layouts.app')
@section('title')
    Savol va taklif qoldirganlar
@endsection
@section('content')
    <x-header icon="fas fa-circle" title="Savol va taklif qoldirganlar"/>
{{--    <div class="d-flex justify-content-end py-2">--}}
{{--        <a href="{{route('admin.contactuses.create')}}" class="btn btn-primary"><i class="fas fa-plus"></i> Create</a>--}}
{{--    </div>--}}
    @livewire('contact-us.contact-us-table')
    {{-- use livewire table here --}}
@endsection
