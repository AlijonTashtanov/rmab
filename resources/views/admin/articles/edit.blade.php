@extends('admin.layouts.app')
@section('title')
    Articles
@endsection
@section('content')
    <x-headers icon="fas fa-circle" title="Articles" parent="" parent-icon="" parent-route="admin.articles.index"/>
    <div class="card">
        <div class="card-body">
            <form action="{{route('admin.articles.update', $response->id)}}" method="POST" enctype="multipart/form-data">
                @csrf
                @method('PUT')
                @include('admin.articles.form')
            </form>
        </div>
    </div>
@endsection
