@php

    use App\Models\Vacancy;

    $activeVacancies = Vacancy::where('status', Vacancy::$status_active)
    ->limit(4)
    ->get();

@endphp

<div class="right-content document-right">
    @foreach($activeVacancies as $vacancy)
        <div>
            <a href="{{route('vacancy-detail',['id'=>$vacancy->id])}}" class="vakansia-card vakansia-mini">
                <img src="{{$vacancy?->getImageUrl()}}" alt="image" class="top">
                <div class="text-blog">
                    <p class="txt-14 time-sec">
                        <span>{{$vacancy?->salary}}</span>
                    </p>
                    <p class="txt-16 nav-text">
                        {{ $vacancy?->getTranslation('title', app()->getLocale()) }}
                    </p>
                </div>
            </a>
        </div>
    @endforeach
</div>
