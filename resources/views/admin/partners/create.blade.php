@extends('admin.layouts.app')
@section('title')
    Qo'shish
@endsection
@section('content')
    <x-headers icon="fas fa-circle" title="Qo'shish" parent="Bizning hamkorlar" parent-icon=""
               parent-route="admin.partners.index"/>
    <div class="card">
        <div class="card-body">
            <form action="{{route('admin.partners.store')}}" method="POST" enctype="multipart/form-data">
                @csrf
                @include('admin.partners.form')
            </form>
        </div>
    </div>
@endsection
