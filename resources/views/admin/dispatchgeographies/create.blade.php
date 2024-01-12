@extends('admin.layouts.app')
@section('title')
   Qo'shish
@endsection
@section('content')
    <x-headers icon="fas fa-circle" title="Qo'shish" parent="Yuboruvchi geografiyalari" parent-icon="" parent-route="admin.dispatchgeographies.index"/>
    <div class="card">
        <div class="card-body">
            <form action="{{route('admin.dispatchgeographies.store')}}" method="POST">
                @csrf
                @include('admin.dispatchgeographies.form')
            </form>
        </div>
    </div>
@endsection
