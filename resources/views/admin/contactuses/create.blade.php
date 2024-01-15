@extends('admin.layouts.app')
@section('title')
    Contactuses
@endsection
@section('content')
    <x-headers icon="fas fa-circle" title="Contactuses" parent="" parent-icon="" parent-route="admin.contactuses.index"/>
    <div class="card">
        <div class="card-body">
            <form action="{{route('admin.contactuses.store')}}" method="POST">
                @csrf
                @include('admin.contactuses.form')
            </form>
        </div>
    </div>
@endsection
