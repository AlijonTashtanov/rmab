@extends('admin.layouts.app')
@section('title')
    Qo'shish
@endsection
@section('content')
    <x-headers icon="fas fa-circle" title="Qo'shish" parent="Tarjimalar" parent-icon=""
               parent-route="admin.translations.index"/>
    <div class="card">
        <div class="card-body">
            <form action="{{route('admin.translations.store')}}" method="POST">
                @csrf
                @include('admin.translations.form')
            </form>
        </div>
    </div>
@endsection
