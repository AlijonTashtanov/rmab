@extends('admin.layouts.app')
@section('title')
    Ariza va murojaatlar
@endsection
@section('content')
    <x-header icon="fas fa-circle" title="ApplicationApplicants"/>
{{--    <div class="d-flex justify-content-end py-2">--}}
{{--        <a href="{{route('admin.applicationapplicants.create')}}" class="btn btn-primary"><i class="fas fa-plus"></i>--}}
{{--            Create</a>--}}
{{--    </div>--}}
    @livewire('application-applicant.application-applicant-table')
    {{-- use livewire table here --}}
@endsection
