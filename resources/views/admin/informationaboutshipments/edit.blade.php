@extends('admin.layouts.app')
@section('title')
    InformationAboutShipments
@endsection
@section('content')
    <x-headers icon="fas fa-circle" title="InformationAboutShipments" parent="" parent-icon="" parent-route="admin.informationaboutshipments.index"/>
    <div class="card">
        <div class="card-body">
            <form action="{{route('admin.informationaboutshipments.update', $response->id)}}" method="POST">
                @csrf
                @method('PUT')
                @include('admin.informationaboutshipments.form')
            </form>
        </div>
    </div>
@endsection
