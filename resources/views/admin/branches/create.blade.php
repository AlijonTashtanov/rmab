@extends('admin.layouts.app')
@section('title')
    Qo'shish
@endsection
@section('content')
    <x-headers icon="fas fa-circle" title="Qo'shish" parent="Filiallar" parent-icon="" parent-route="admin.branches.index"/>
    <div class="card">
        <div class="card-body">
            <form action="{{route('admin.branches.store')}}" method="POST">
                @csrf
                @include('admin.branches.form')
            </form>
        </div>
    </div>
@endsection
