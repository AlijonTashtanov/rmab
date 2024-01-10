@extends('admin.layouts.app')
@section('title')
    Qo'shish
@endsection
@section('content')
    <x-headers icon="fas fa-circle" title="Qo'shish" parent="Ichki hujjatlar" parent-icon=""
               parent-route="admin.localdocuments.index"/>
    <div class="card">
        <div class="card-body">
            <form action="{{route('admin.localdocuments.store')}}" method="POST"  enctype="multipart/form-data">
                @csrf
                @include('admin.localdocuments.form')
            </form>
        </div>
    </div>
@endsection
