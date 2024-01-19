@extends('admin.layouts.app')
@section('title')
    {{$response->name}}
@endsection
@section('content')
    <x-headers icon="fas fa-circle" title="{{$response->name}}" parent="Bizning hamkorlar" parent-icon=""
               parent-route="admin.partners.index"/>
    <div class="card">
        <div class="card-body">
            <form action="{{route('admin.partners.update', $response->id)}}" method="POST"
                  enctype="multipart/form-data">
                @csrf
                @method('PUT')
                @include('admin.partners.form')
            </form>
        </div>
    </div>
@endsection
