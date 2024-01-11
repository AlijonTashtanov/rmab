@extends('admin.layouts.app')
@section('title')
    {{$response->getTranslation('title','uz')}}
@endsection
@section('content')
    <x-headers icon="fas fa-circle" title="{{$response->getTranslation('title','uz')}}" parent="Ma'lumotlar"
               parent-icon="" parent-route="admin.information.index"/>
    <div class="card">
        <div class="card-body">
            <form action="{{route('admin.information.update', $response->id)}}" method="POST"
                  enctype="multipart/form-data">
                @csrf
                @method('PUT')
                @include('admin.information.form')
            </form>
        </div>
    </div>
@endsection
