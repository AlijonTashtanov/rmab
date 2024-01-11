@extends('admin.layouts.app')
@section('title')
    Qo'shish
@endsection
@section('content')
    <x-headers icon="fas fa-circle" title="Qo'shish" parent="Korrupsiya turlari" parent-icon=""
               parent-route="admin.corruptiontypes.index"/>
    <div class="card">
        <div class="card-body">
            <form action="{{route('admin.corruptiontypes.store')}}" method="POST">
                @csrf
                @include('admin.corruptiontypes.form')
            </form>
        </div>
    </div>
@endsection
