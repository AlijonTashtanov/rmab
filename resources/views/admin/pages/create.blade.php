@extends('admin.layouts.app')
@section('title')
    Qo'shish
@endsection
@section('content')
    <x-headers icon="fas fa-circle" title="Qo'shish" parent="Sahifalar" parent-icon=""
               parent-route="admin.pages.index"/>
    <div class="card">
        <div class="card-body">
            <form action="{{route('admin.pages.store')}}" method="POST" enctype="multipart/form-data">
                @csrf
                @include('admin.pages.form')
            </form>
        </div>
    </div>
@endsection
