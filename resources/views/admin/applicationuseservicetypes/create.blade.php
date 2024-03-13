@extends('admin.layouts.app')
@section('title')
    ApplicationUseServiceTypes
@endsection
@section('content')
    <x-headers icon="fas fa-circle" title="ApplicationUseServiceTypes" parent="" parent-icon="" parent-route="admin.applicationuseservicetypes.index"/>
    <div class="card">
        <div class="card-body">
            <form action="{{route('admin.applicationuseservicetypes.store')}}" method="POST">
                @csrf
                @include('admin.applicationuseservicetypes.form')
            </form>
        </div>
    </div>
@endsection
