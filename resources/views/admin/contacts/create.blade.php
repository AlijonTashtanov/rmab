@extends('admin.layouts.app')
@section('title')
    Qo'shish
@endsection
@section('content')
    <x-headers icon="fas fa-circle" title="Qo'shish" parent="Sayt ma'lumotlari" parent-icon=""
               parent-route="admin.contacts.index"/>
    <div class="card">
        <div class="card-body">
            <form action="{{route('admin.contacts.store')}}" method="POST" enctype="multipart/form-data">
                @csrf
                @include('admin.contacts.form')
            </form>
        </div>
    </div>
@endsection
