@extends('admin.layouts.app')
@section('title')
    Jo’natma haqida so'rvoga javob berish
@endsection
@section('content')
    <x-headers icon="fas fa-circle" title="InformationAboutShipments" parent="" parent-icon="" parent-route="admin.informationaboutshipments.index"/>
    <div class="card">
        <div class="card-body">
            <form action="{{route('admin.informationaboutshipments.store')}}" method="POST" enctype="multipart/form-data">
                @csrf
                @include('admin.informationaboutshipments.form')
            </form>
        </div>
    </div>
@endsection
