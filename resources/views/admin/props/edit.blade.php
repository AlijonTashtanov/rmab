@extends('admin.layouts.app')
@section('title')
    {{$response->getTranslation('title','uz')}}
@endsection
@section('content')
    <x-headers icon="fas fa-circle" title="{{$response->getTranslation('title','uz')}}" parent="Rekvizitlar"
               parent-icon="" parent-route="admin.props.index"/>
    <div class="card">
        <div class="card-body">
            <form action="{{route('admin.props.update', $response->id)}}" method="POST">
                @csrf
                @method('PUT')
                @include('admin.props.form')
            </form>
        </div>
    </div>
@endsection
