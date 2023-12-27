@extends('admin.layouts.app')
@section('title')
    Ko'p beriladigan savollar
@endsection
@section('content')
    <x-headers icon="fas fa-circle" title="Ko'p beriladigan savollar" parent="Ko'p beriladigan savollar" parent-icon="" parent-route="admin.faqs.index"/>
    <div class="card">
        <div class="card-body">
            <form action="{{route('admin.faqs.store')}}" method="POST">
                @csrf
                @include('admin.faqs.form')
            </form>
        </div>
    </div>
@endsection
