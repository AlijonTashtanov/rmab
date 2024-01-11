@extends('admin.layouts.app')
@section('title')
    Qo'shish
@endsection
@section('content')
    <x-headers icon="fas fa-circle" title="Qo'shish" parent="Ma'lumotlar" parent-icon=""
               parent-route="admin.information.index"/>
    <div class="card">
        <div class="card-body">
            <form action="{{route('admin.information.store')}}" method="POST" enctype="multipart/form-data">
                @csrf
                @include('admin.information.form')
            </form>
        </div>
    </div>
@endsection
