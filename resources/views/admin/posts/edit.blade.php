@extends('admin.layouts.app')
@section('title')
    Tahrirlash
@endsection
@section('content')
    <x-headers icon="fas fa-circle" title="Tahrirlash" parent="Yangiliklar" parent-icon=""
               parent-route="admin.posts.index"/>
    <div class="card">
        <div class="card-body">
            <form action="{{route('admin.posts.update', $response->id)}}" method="POST" enctype="multipart/form-data">
                @csrf
                @method('PUT')
                @include('admin.posts.form')
            </form>
        </div>
    </div>
@endsection
