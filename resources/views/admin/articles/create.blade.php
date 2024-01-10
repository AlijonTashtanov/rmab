@extends('admin.layouts.app')
@section('title')
    Qo'shish
@endsection
@section('content')
    <x-headers icon="fas fa-circle" title="Qo'shish" parent="Maqolalar" parent-icon=""
               parent-route="admin.articles.index"/>
    <div class="card">
        <div class="card-body">
            <form action="{{route('admin.articles.store')}}" method="POST" enctype="multipart/form-data">
                @csrf
                @include('admin.articles.form')
            </form>
        </div>
    </div>
@endsection
