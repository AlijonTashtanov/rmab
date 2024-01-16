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
                <label for="nameInput" class="form-label">Qisqa ma'lumot [uz]</label>
                <textarea class="form-control" id="nameInput" name="description_uz"
                          rows="3">{{old("description_uz") ?? $response->getTranslation('description','uz')}}</textarea>
                @error('description_uz')
                <span class="text-danger">{{$message}}</span>
                @enderror
            </div>
            <div class="form-group">
                <label for="nameInput" class="form-label">Manzili [uz]</label>
                <input type="text" class="form-control" id="nameInput" name="address_uz"
                       value="{{old("address_uz") ?? $response->getTranslation('address','uz')}}">
                @error('address_uz')
                <span class="text-danger">{{$message}}</span>
                @enderror
            </div>
            <div class="form-group">
                <label for="nameInput" class="form-label">Sayt nomi [uz]</label>
                <input type="text" class="form-control" id="nameInput" name="name_uz"
                       value="{{old("name_uz") ?? $response->getTranslation('name','uz')}}">
                @error('name_uz')
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
                <label for="nameInput" class="form-label">Qisqa ma'lumot [ru]</label>
                <textarea class="form-control" id="nameInput" name="description_ru"
                          rows="3">{{old("description_ru") ?? $response->getTranslation('description','ru')}}</textarea>
                @error('description_ru')
                <span class="text-danger">{{$message}}</span>
                @enderror
            </div>
            <div class="form-group">
                <label for="nameInput" class="form-label">Manzili [ru]</label>
                <input type="text" class="form-control" id="nameInput" name="address_ru"
                       value="{{old("address_ru") ?? $response->getTranslation('address','ru')}}">
                @error('address_ru')
                <span class="text-danger">{{$message}}</span>
                @enderror
            </div>
            <div class="form-group">
                <label for="nameInput" class="form-label">Sayt nomi [ru]</label>
                <input type="text" class="form-control" id="nameInput" name="name_ru"
                       value="{{old("name_ru") ?? $response->getTranslation('name','ru')}}">
                @error('name_ru')
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
                <label for="nameInput" class="form-label">Qisqa ma'lumot [en]</label>
                <textarea class="form-control" id="nameInput" name="description_en"
                          rows="3">{{old("description_en") ?? $response->getTranslation('description','en')}}</textarea>
                @error('description_en')
                <span class="text-danger">{{$message}}</span>
                @enderror
            </div>
            <div class="form-group">
                <label for="nameInput" class="form-label">Manzili [en]</label>
                <input type="text" class="form-control" id="nameInput" name="address_en"
                       value="{{old("address_en") ?? $response->getTranslation('address','en')}}">
                @error('address_en')
                <span class="text-danger">{{$message}}</span>
                @enderror
            </div>
            <div class="form-group">
                <label for="nameInput" class="form-label">Sayt nomi [en]</label>
                <input type="text" class="form-control" id="nameInput" name="name_en"
                       value="{{old("name_en") ?? $response->getTranslation('name','en')}}">
                @error('name_en')
                <span class="text-danger">{{$message}}</span>
                @enderror
            </div>
        </div>
    </div>
</div>

<div class="form-group">
    <label for="nameInput" class="form-label">Telefon raqamimiz</label>
    <input type="text" class="form-control" id="nameInput" name="phone"
           value="{{old("phone") ?? $response->phone}}">
    @error('phone')
    <span class="text-danger">{{$message}}</span>
    @enderror
</div>

<div class="form-group">
    <label for="nameInput" class="form-label">Elektron pochta</label>
    <input type="text" class="form-control" id="nameInput" name="email"
           value="{{old("email") ?? $response->email}}">
    @error('email')
    <span class="text-danger">{{$message}}</span>
    @enderror
</div>

<div class="form-group">
    <label for="nameInput" class="form-label">Ishonch raqami</label>
    <input type="text" class="form-control" id="nameInput" name="trust_number"
           value="{{old("trust_number") ?? $response->trust_number}}">
    @error('trust_number')
    <span class="text-danger">{{$message}}</span>
    @enderror
</div>

<div class="form-group">
    <label for="nameInput" class="form-label">Savol va takliflar bo’yicha telefon raqami</label>
    <input type="text" class="form-control" id="nameInput" name="question_suggestion"
           value="{{old("question_suggestion") ?? $response->question_suggestion}}">
    @error('question_suggestion')
    <span class="text-danger">{{$message}}</span>
    @enderror
</div>

<div class="form-group">
    <label for="nameInput" class="form-label">Lokatsiya manzili</label>
    <textarea class="form-control" id="nameInput" name="location"
              rows="3">{{old("location") ?? $response->location}}</textarea>
    @error('location')
    <span class="text-danger">{{$message}}</span>
    @enderror
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


<button type="submit" class="btn btn-primary float-right">Saqlash!</button>
