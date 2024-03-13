@extends('admin.layouts.app')
@section('title')
    {{$response->full_name}}
@endsection
@php
    use App\Models\QualityControl;
@endphp
@section('content')
    <x-headers title="{{$response->full_name}}" icon="fas fa-circle" parent="Sifat nazorati"
               parent-route="admin.qualitycontrols.index"
               parent-icon=""/>
    <div class="card card-outline card-primary">
        <div class="card-header">
            <div class="card-tools">
                <button type="button" class="btn btn-tool" data-card-widget="maximize"><i
                            class="fas fa-expand"></i></button>
                <button type="button" class="btn btn-tool" data-card-widget="collapse">
                    <i class="fas fa-plus"></i>
                </button>
            </div>
        </div>
        <div class="card-body table-responsive">
            <table class="table table-bordered">
                <tr>
                    <th>ID</th>
                    <td>{{$response->id}}</td>
                </tr>
                <tr>
                    <th>F.I.SH</th>
                    <td>{{$response->user?->name}}</td>
                </tr>
                <tr>
                    <th>Manzili</th>
                    <td>{{$response->user?->address}}</td>
                </tr>
                <tr>
                    <th>Izoh</th>
                    <td>{{$response->comment}}</td>
                </tr>
                <tr>
                    <th>Baho</th>
                    <td>
                        @for($i=1; $i <= $response->grade; $i++)
                            <i class="fas fa-star" style="color: #e7e75e"></i>
                        @endfor
                        @for($i=1;$i<=QualityControl::$max_grade-$response->grade;$i++)
                            <i class="far fa-star"></i>
                        @endfor
                    </td>
                </tr>
                <tr>
                    <th>Holati</th>
                    <td>{!! $response->getStatusBadgeName() !!}</td>
                </tr>
                <tr>
                    <th>Yaratilgan vaqti</th>
                    <td>{{$response->created_at}}</td>
                </tr>
                <tr>
                    <th>Tahrirlangan vaqti</th>
                    <td>{{$response->updated_at}}</td>
                </tr>
            </table>
        </div>
    </div>
@endsection
