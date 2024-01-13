@extends('admin.layouts.app')
@section('title')
    QualityControls
@endsection
@section('content')
    <x-headers icon="fas fa-circle" title="QualityControls" parent="" parent-icon="" parent-route="admin.qualitycontrols.index"/>
    <div class="card">
        <div class="card-body">
            <form action="{{route('admin.qualitycontrols.store')}}" method="POST">
                @csrf
                @include('admin.qualitycontrols.form')
            </form>
        </div>
    </div>
@endsection
