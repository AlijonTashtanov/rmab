@extends('admin.layouts.app')
@section('title')
    Qo'shish
@endsection
@section('content')
    <x-headers icon="fas fa-circle" title="Qo'shish" parent="Bannerlar" parent-icon=""
               parent-route="admin.banners.index"/>
    <div class="card">
        <div class="card-body">
            <form action="{{route('admin.banners.store')}}" method="POST" enctype="multipart/form-data">
                @csrf
                @include('admin.banners.form')
            </form>
        </div>
    </div>
@endsection
