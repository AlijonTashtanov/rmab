@extends('admin.layouts.app')
@section('title')
    Tahrirlash
@endsection
@section('content')
    <x-headers icon="fas fa-circle" title="Tahrirlash" parent="Bizning avfzalliklar" parent-icon=""
               parent-route="admin.ouradvantages.index"/>
    <div class="card">
        <div class="card-body">
            <form action="{{route('admin.ouradvantages.update', $response->id)}}" method="POST"
                  enctype="multipart/form-data">
                @csrf
                @method('PUT')
                @include('admin.ouradvantages.form')
            </form>
        </div>
    </div>
@endsection
