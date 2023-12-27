@extends('admin.layouts.app')
@section('title')
    Foydali havolalar
@endsection
@section('content')
    <x-headers icon="fas fa-circle" title="Foydali havolalar" parent="Foydali xavolalar" parent-icon="fas fa-link"
               parent-route="admin.usefullinks.index"/>
    <div class="card">
        <div class="card-body">
            <form action="{{route('admin.usefullinks.store')}}" method="POST" enctype="multipart/form-data">
                @csrf
                @include('admin.usefullinks.form')
            </form>
        </div>
    </div>
@endsection
