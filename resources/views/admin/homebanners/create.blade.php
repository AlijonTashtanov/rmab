@extends('admin.layouts.app')
@section('title')
    Qo'shish
@endsection
@section('content')
    <x-headers icon="fas fa-circle" title="Qo'shish" parent="O'rta qismi banneri" parent-icon="" parent-route="admin.homebanners.index"/>
    <div class="card">
        <div class="card-body">
            <form action="{{route('admin.homebanners.store')}}" method="POST" enctype="multipart/form-data">
                @csrf
                @include('admin.homebanners.form')
            </form>
        </div>
    </div>
@endsection
