@extends('admin.layouts.app')
@section('title')
    Sifat nazorati
@endsection
@section('content')
    <x-header icon="fas fa-circle" title="Sifat nazorati"/>
{{--    <div class="d-flex justify-content-end py-2">--}}
{{--        <a href="{{route('admin.qualitycontrols.create')}}" class="btn btn-primary"><i class="fas fa-plus"></i>--}}
{{--            Create</a>--}}
{{--    </div>--}}
    @livewire('quality-control.quality-control-table')
    {{-- use livewire table here --}}
@endsection
