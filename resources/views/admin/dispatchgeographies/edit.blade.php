@extends('admin.layouts.app')
@section('title')
    DispatchGeographies
@endsection
@section('content')
    <x-headers icon="fas fa-circle" title="DispatchGeographies" parent="" parent-icon="" parent-route="admin.dispatchgeographies.index"/>
    <div class="card">
        <div class="card-body">
            <form action="{{route('admin.dispatchgeographies.update', $response->id)}}" method="POST">
                @csrf
                @method('PUT')
                @include('admin.dispatchgeographies.form')
            </form>
        </div>
    </div>
@endsection
