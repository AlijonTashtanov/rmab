@extends('admin.layouts.app')
@section('title')
    Qo'shish
@endsection
@section('content')
    <x-headers icon="fas fa-circle" title="Qo'shish" parent="Ijtimoiy tarmoqlarimiz" parent-icon=""
               parent-route="admin.socials.index"/>
    <div class="card">
        <div class="card-body">
            <form action="{{route('admin.socials.store')}}" method="POST">
                @csrf
                @include('admin.socials.form')
            </form>
        </div>
    </div>
@endsection
