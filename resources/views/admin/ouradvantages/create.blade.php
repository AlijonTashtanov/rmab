@extends('admin.layouts.app')
@section('title')
    Qo'shish
@endsection
@section('content')
    <x-headers icon="fas fa-circle" title="Qo'shish" parent="Bizning avfzalliklar" parent-icon=""
               parent-route="admin.ouradvantages.index"/>
    <div class="card">
        <div class="card-body">
            <form action="{{route('admin.ouradvantages.store')}}" method="POST" enctype="multipart/form-data">
                @csrf
                @include('admin.ouradvantages.form')
            </form>
        </div>
    </div>
@endsection
