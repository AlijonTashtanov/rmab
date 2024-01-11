@extends('admin.layouts.app')
@section('title')
    ApplicationApplicants
@endsection
@section('content')
    <x-headers icon="fas fa-circle" title="ApplicationApplicants" parent="" parent-icon="" parent-route="admin.applicationapplicants.index"/>
    <div class="card">
        <div class="card-body">
            <form action="{{route('admin.applicationapplicants.update', $response->id)}}" method="POST">
                @csrf
                @method('PUT')
                @include('admin.applicationapplicants.form')
            </form>
        </div>
    </div>
@endsection
