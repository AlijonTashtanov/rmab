@extends('admin.layouts.app')
@section('title')
    {{$response->getTranslation('name','uz')}}
@endsection
@section('content')
    <x-headers icon="fas fa-circle" title="{{$response->getTranslation('name','uz')}}" parent="Sayt ma'lumotlari" parent-icon=""
               parent-route="admin.contacts.index"/>
    <div class="card">
        <div class="card-body">
            <form action="{{route('admin.contacts.update', $response->id)}}" method="POST"
                  enctype="multipart/form-data">
                @csrf
                @method('PUT')
                @include('admin.contacts.form')
            </form>
        </div>
    </div>
@endsection
