@extends('admin.layouts.app')
@section('title')
    {{$response->id}}
@endsection
@section('content')
    <x-headers icon="fas fa-circle" title="{{$response->id}}" parent="Ijtimoiy tarmoqlarimiz" parent-icon="" parent-route="admin.socials.index"/>
    <div class="card">
        <div class="card-body">
            <form action="{{route('admin.socials.update', $response->id)}}" method="POST">
                @csrf
                @method('PUT')
                @include('admin.socials.form')
            </form>
        </div>
    </div>
@endsection
