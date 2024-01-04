@extends('admin.layouts.app')
@section('title')
    Rekvizitlar
@endsection
@section('content')
    <x-header icon="fas fa-circle" title="Rekvizitlar"/>
    <code>Diqqat! Saytda oxirgi qo'shilgan faol ma'lumot ko'rinadi!</code>
    <div class="d-flex justify-content-end py-2">
        <a href="{{route('admin.props.create')}}" class="btn btn-primary"><i class="fas fa-plus"></i> Qo'shish</a>
    </div>
    @livewire('prop.prop-table')
@endsection
