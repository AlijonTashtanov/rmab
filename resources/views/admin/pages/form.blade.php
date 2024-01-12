<div class="col-12">
    <ul class="nav nav-tabs" id="custom-tabs-four-tab" role="tablist">
        <li class="nav-item">
            <a class="nav-link active" id="custom-tabs-four-home-tab" data-toggle="pill" href="#custom-tabs-four-uz"
               role="tab" aria-controls="custom-tabs-four-uz" aria-selected="true">Uz</a>
        </li>
        <li class="nav-item">
            <a class="nav-link" id="custom-tabs-four-ru-tab" data-toggle="pill" href="#custom-tabs-four-ru"
               role="tab" aria-controls="custom-tabs-four-ru" aria-selected="false">Ru</a>
        </li>
        <li class="nav-item">
            <a class="nav-link" id="custom-tabs-four-en-tab" data-toggle="pill" href="#custom-tabs-four-en"
               role="tab" aria-controls="custom-tabs-four-en" aria-selected="false">En</a>
        </li>
    </ul>
    <div class="tab-content" id="custom-tabs-four-tabContent">
        <div class="tab-pane fade active show" id="custom-tabs-four-uz" role="tabpanel"
             aria-labelledby="custom-tabs-four-uz-tab">
            <div class="form-group">
                <label for="nameInput" class="form-label">Sarlavha [uz]</label>
                <input type="text" class="form-control" id="nameInput" name="title_uz"
                       value="{{old("title_uz") ?? $response->getTranslation('title','uz')}}">
                @error('title_uz')
                <span class="text-danger">{{$message}}</span>
                @enderror
            </div>
            <div class="form-group">
                <label for="nameInput" class="form-label">Qisqa tavsif [uz]</label>
                <input type="text" class="form-control" id="nameInput" name="description_uz"
                       value="{{old("description_uz") ?? $response->getTranslation('description','uz')}}">
                @error('description_uz')
                <span class="text-danger">{{$message}}</span>
                @enderror
            </div>
        </div>
        <div class="tab-pane fade" id="custom-tabs-four-ru" role="tabpanel"
             aria-labelledby="custom-tabs-four-ru-tab">
            <div class="form-group">
                <label for="nameInput" class="form-label">Sarlavha [ru]</label>
                <input type="text" class="form-control" id="nameInput" name="title_ru"
                       value="{{old("title_ru") ?? $response->getTranslation('title','ru')}}">
                @error('title_ru')
                <span class="text-danger">{{$message}}</span>
                @enderror
            </div>
            <div class="form-group">
                <label for="nameInput" class="form-label">Qisqa tavsif [ru]</label>
                <input type="text" class="form-control" id="nameInput" name="description_ru"
                       value="{{old("description_ru") ?? $response->getTranslation('description','ru')}}">
                @error('description_ru')
                <span class="text-danger">{{$message}}</span>
                @enderror
            </div>
        </div>
        <div class="tab-pane fade" id="custom-tabs-four-en" role="tabpanel"
             aria-labelledby="custom-tabs-four-en-tab">
            <div class="form-group">
                <label for="nameInput" class="form-label">Sarlavha [en]</label>
                <input type="text" class="form-control" id="nameInput" name="title_en"
                       value="{{old("title_en") ?? $response->getTranslation('title','en')}}">
                @error('title_en')
                <span class="text-danger">{{$message}}</span>
                @enderror
            </div>
            <div class="form-group">
                <label for="nameInput" class="form-label">Qisqa tavsif [en]</label>
                <input type="text" class="form-control" id="nameInput" name="description_en"
                       value="{{old("description_en") ?? $response->getTranslation('description','en')}}">
                @error('description_en')
                <span class="text-danger">{{$message}}</span>
                @enderror
            </div>
        </div>
    </div>
</div>

<div class="form-group">
    <label for="nameInput" class="form-label">Rasmi</label>
    <input type="file" name="image"
           class="form-control  @error('image') is-invalid @enderror"
           id="image">
    @error('image')
    <span class="text-danger">{{$message}}</span>
    @enderror
</div>
<div class="form-group">
    <label for="example-text-input" class="col-sm-2 col-form-label"></label>
    <div class="col-sm-10">
        <img src="{{$response->getImageUrl()}}"
             alt="" id="showImage" class="rounded avatar-lg" style="width: 60px">
    </div>
</div>
<div class="form-group">
    <label for="exampleSelectRounded0">Sahifa turi</label>
    <select class="custom-select rounded-0" id="exampleSelectRounded0" name="page_type">
        <option {{$response->page_type == \App\Models\Page::$page_contract_conclusion ? 'selected="selected"' : ''}} value="{{\App\Models\Page::$page_contract_conclusion}}">Shartnoma tuzish</option>
        <option {{$response->page_type == \App\Models\Page::$page_quality_control ? 'selected="selected"' : ''}} value="{{\App\Models\Page::$page_quality_control}}">Sifat nazorati</option>
        <option {{$response->page_type == \App\Models\Page::$page_information_about_shipment ? 'selected="selected"' : ''}} value="{{\App\Models\Page::$page_information_about_shipment}}">Jo’natma haqida ma’lumot olish</option>
        <option {{$response->page_type == \App\Models\Page::$page_application_services ? 'selected="selected"' : ''}} value="{{\App\Models\Page::$page_application_services}}">Xizmatlardan foydalanish uchun ariza berish</option>
    </select>
</div>

<button type="submit" class="btn btn-primary float-right">Saqlash!</button>

