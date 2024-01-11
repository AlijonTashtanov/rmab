@extends('admin.layouts.app')
@section('title')
   Qo'shish
@endsection
@section('content')
    <x-headers icon="fas fa-circle" title="Qo'shish" parent="Tuman-shaharlar" parent-icon=""
               parent-route="admin.districts.index"/>
    <div class="card">
        <div class="card-body">
            <form action="{{route('admin.districts.store')}}" method="POST">
                @csrf
                @include('admin.districts.form')
            </form>
        </div>
    </div>
@endsection
