@extends('admin.layouts.app')
@section('title')
    Qo'shish
@endsection
@section('content')
    <x-headers icon="fas fa-circle" title="Qo'shish" parent="Avto park" parent-icon="" parent-route="admin.autoparks.index"/>
    <div class="card">
        <div class="card-body">
            <form action="{{route('admin.autoparks.store')}}" method="POST" enctype="multipart/form-data">
                @csrf
                @include('admin.autoparks.form')
            </form>
        </div>
    </div>
@endsection
