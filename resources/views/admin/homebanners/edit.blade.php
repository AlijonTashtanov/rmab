@extends('admin.layouts.app')
@section('title')
    {{$response->id}}
@endsection
@section('content')
    <x-headers icon="fas fa-circle" title="{{$response->id}}" parent="O'rta qismi banneri" parent-icon="" parent-route="admin.homebanners.index"/>
    <div class="card">
        <div class="card-body">
            <form action="{{route('admin.homebanners.update', $response->id)}}" method="POST" enctype="multipart/form-data">
                @csrf
                @method('PUT')
                @include('admin.homebanners.form')
            </form>
        </div>
    </div>
@endsection
