@extends('admin.layouts.app')
@section('title')
    Yangilik qo'shish
@endsection
@section('content')
    <x-headers icon="fas fa-circle" title="Yangilik qo'shish" parent="Yangiliklar" parent-icon="" parent-route="admin.posts.index"/>
    <div class="card">
        <div class="card-body">
            <form action="{{route('admin.posts.store')}}" method="POST" enctype="multipart/form-data">
                @csrf
                @include('admin.posts.form')
            </form>
        </div>
    </div>
@endsection
