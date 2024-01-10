@extends('admin.layouts.app')
@section('title')
    {{$response->getTranslation('title','uz')}}
@endsection
@section('content')
    <x-headers icon="fas fa-circle" title="{{$response->getTranslation('title','uz')}}" parent="Maqolalar"
               parent-icon=""
               parent-route="admin.articles.index"/>
    <div class="card">
        <div class="card-body">
            <form action="{{route('admin.articles.update', $response->id)}}" method="POST"
                  enctype="multipart/form-data">
                @csrf
                @method('PUT')
                @include('admin.articles.form')
            </form>
        </div>
    </div>
@endsection
