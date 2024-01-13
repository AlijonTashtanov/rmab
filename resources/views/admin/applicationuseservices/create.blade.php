@extends('admin.layouts.app')
@section('title')
    ApplicationUseServices
@endsection
@section('content')
    <x-headers icon="fas fa-circle" title="ApplicationUseServices" parent="" parent-icon="" parent-route="admin.applicationuseservices.index"/>
    <div class="card">
        <div class="card-body">
            <form action="{{route('admin.applicationuseservices.store')}}" method="POST">
                @csrf
                @include('admin.applicationuseservices.form')
            </form>
        </div>
    </div>
@endsection
