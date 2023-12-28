@extends('admin.layouts.app')
@section('title')
    Xizmatlar
@endsection
@section('content')
    <x-headers icon="fas fa-circle" title="Qo'shish" parent="Xizmatlar" parent-icon="" parent-route="admin.services.index"/>
    <div class="card">
        <div class="card-body">
            <form action="{{route('admin.services.store')}}" method="POST" enctype="multipart/form-data">
                @csrf
                @include('admin.services.form')
            </form>
        </div>
    </div>
@endsection
