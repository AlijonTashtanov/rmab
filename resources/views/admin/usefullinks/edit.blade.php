@extends('admin.layouts.app')
@section('title')
    Foydali havolalar
@endsection
@section('content')
    <x-headers icon="fas fa-circle" title="Foydali havolalar" parent="Foydali havolalar" parent-icon=""
               parent-route="admin.usefullinks.index"/>
    <div class="card">
        <div class="card-body">
            <form action="{{route('admin.usefullinks.update', $response->id)}}" method="POST"
                  enctype="multipart/form-data">
                @csrf
                @method('PUT')
                @include('admin.usefullinks.form')
            </form>
        </div>
    </div>
@endsection
