@extends('admin.layouts.app')
@section('title')
    Qo'shish
@endsection
@section('content')
    <x-headers icon="fas fa-circle" title="Qo'shish" parent="Rekvizitlar" parent-icon="" parent-route="admin.props.index"/>
    <div class="card">
        <div class="card-body">
            <form action="{{route('admin.props.store')}}" method="POST">
                @csrf
                @include('admin.props.form')
            </form>
        </div>
    </div>
@endsection
