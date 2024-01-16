@extends('admin.layouts.app')
@section('title')
    Admin dashboard
@endsection
@section('content')
    <div class="row">
        <div class="col-12 col-sm-6 col-md-3">
            <div class="info-box shadow">
            <span class="info-box-icon bg-info elevation-1"><a href="{{route('admin.vacancies.index')}}"><i
                        class="fas fa-user-circle"></i></a></span>
                <div class="info-box-content">
                    <span class="info-box-text">Vakansiyalar</span>
                    <span class="info-box-number">{{$vacancyCount}}</span>
                </div>
            </div>
        </div>
        <div class="col-12 col-sm-6 col-md-3">
            <div class="info-box shadow">
            <span class="info-box-icon bg-danger elevation-1"><a
                    href="{{route('admin.applicationapplicants.index')}}"><i
                        class="fas fa-circle"></i></a></span>
                <div class="info-box-content">
                    <span class="info-box-text">O'qilmagan ariza va murojaatlar</span>
                    <span class="info-box-number">{{$inactiveApplicationApplicantsCount}}</span>
                </div>
            </div>
        </div>
        <div class="col-12 col-sm-6 col-md-3">
            <div class="info-box shadow">
            <span class="info-box-icon bg-yellow elevation-1"><a href="{{route('admin.contractconclusions.index')}}"><i
                        class="fas fa-circle"></i></a></span>
                <div class="info-box-content">
                    <span class="info-box-text">O'qilmagan shartnoma tuzuvchilar</span>
                    <span class="info-box-number">{{$inactiveContractConclusionCount}}</span>
                </div>
            </div>
        </div>
        <div class="col-12 col-sm-6 col-md-3">
            <div class="info-box shadow">
            <span class="info-box-icon bg-success elevation-1"><a href="{{route('admin.qualitycontrols.index')}}"><i
                        class="fas fa-circle"></i></a></span>
                <div class="info-box-content">
                    <span class="info-box-text">O'qilmagan sifat nazorati</span>
                    <span class="info-box-number">{{$inactiveQualityControlCount}}</span>
                </div>
            </div>
        </div>
        <div class="col-12 col-sm-6 col-md-3">
            <div class="info-box shadow">
            <span class="info-box-icon bg-secondary elevation-1"><a
                    href="{{route('admin.informationaboutshipments.index')}}"><i
                        class="fas fa-circle"></i></a></span>
                <div class="info-box-content">
                    <span class="info-box-text">Jo’natma haqida ma’lumot olmoqchilar</span>
                    <span class="info-box-number">{{$inactiveInformationAboutShipmentCount}}</span>
                </div>
            </div>
        </div>
        <div class="col-12 col-sm-6 col-md-3">
            <div class="info-box shadow">
            <span class="info-box-icon bg-white elevation-1"><a
                    href="{{route('admin.applicationuseservices.index')}}"><i
                        class="fas fa-circle"></i></a></span>
                <div class="info-box-content">
                    <span class="info-box-text">Xizmatlardan foydalanish uchun ariza berganlar</span>
                    <span class="info-box-number">{{$inactiveApplicationUseServiceCount}}</span>
                </div>
            </div>
        </div>
        <div class="col-12 col-sm-6 col-md-3">
            <div class="info-box shadow">
            <span class="info-box-icon bg-indigo elevation-1"><a
                    href="{{route('admin.contactuses.index')}}"><i
                        class="fas fa-circle"></i></a></span>
                <div class="info-box-content">
                    <span class="info-box-text">O'qilmagan savol va takliflar</span>
                    <span class="info-box-number">{{$inactiveContactUseCount}}</span>
                </div>
            </div>
        </div>
    </div>
@endsection
