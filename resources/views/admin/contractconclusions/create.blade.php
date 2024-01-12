@extends('admin.layouts.app')
@section('title')
    ContractConclusions
@endsection
@section('content')
    <x-headers icon="fas fa-circle" title="ContractConclusions" parent="" parent-icon="" parent-route="admin.contractconclusions.index"/>
    <div class="card">
        <div class="card-body">
            <form action="{{route('admin.contractconclusions.store')}}" method="POST">
                @csrf
                @include('admin.contractconclusions.form')
            </form>
        </div>
    </div>
@endsection
