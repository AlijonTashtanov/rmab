@extends('admin.layouts.app')
@section('title')
    LocalDocuments
@endsection
@section('content')
    <x-headers icon="fas fa-circle" title="LocalDocuments" parent="" parent-icon="" parent-route="admin.localdocuments.index"/>
    <div class="card">
        <div class="card-body">
            <form action="{{route('admin.localdocuments.update', $response->id)}}" method="POST"  enctype="multipart/form-data">
                @csrf
                @method('PUT')
                @include('admin.localdocuments.form')
            </form>
        </div>
    </div>
@endsection
