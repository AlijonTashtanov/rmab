@php
    use App\Models\Region;

//        $regions = Region::map();
        $regions = Region::all();
@endphp
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
                <label for="nameInput" class="form-label">Nomi [uz]</label>
                <input type="text" class="form-control" id="nameInput" name="name_uz"
                       value="{{old("name_uz") ?? $response->getTranslation('name','uz')}}">
                @error('name_uz')
                <span class="text-danger">{{$message}}</span>
                @enderror
            </div>
            <div class="form-group">
                <label for="nameInput" class="form-label">Manzil [uz]</label>
                <input type="text" class="form-control" id="nameInput" name="address_uz"
                       value="{{old("address_uz") ?? $response->getTranslation('address','uz')}}">
                @error('address_uz')
                <span class="text-danger">{{$message}}</span>
                @enderror
            </div>
            <div class="form-group">
                <label for="summernote" class="form-label">Qisqa ma'lumot [uz]</label>
                <textarea id="summernote"
                          name="description_uz">{{old("description_uz") ?? $response->getTranslation('description','uz')}}</textarea>
                @error('description_uz')
                <span class="text-danger">{{$message}}</span>
                @enderror
            </div>
        </div>
        <div class="tab-pane fade" id="custom-tabs-four-ru" role="tabpanel"
             aria-labelledby="custom-tabs-four-ru-tab">
            <div class="form-group">
                <label for="nameInput" class="form-label">Nomi [ru]</label>
                <input type="text" class="form-control" id="nameInput" name="name_ru"
                       value="{{old("name_ru") ?? $response->getTranslation('name','ru')}}">
                @error('name_ru')
                <span class="text-danger">{{$message}}</span>
                @enderror
            </div>
            <div class="form-group">
                <label for="nameInput" class="form-label">Manzil [ru]</label>
                <input type="text" class="form-control" id="nameInput" name="address_ru"
                       value="{{old("address_ru") ?? $response->getTranslation('address','ru')}}">
                @error('address_ru')
                <span class="text-danger">{{$message}}</span>
                @enderror
            </div>
            <div class="form-group">
                <label for="summernote" class="form-label">Qisqa ma'lumot [ru]</label>
                <textarea id="summernoteRu"
                          name="description_ru">{{old("description_ru") ?? $response->getTranslation('description','ru')}}</textarea>
                @error('description_ru')
                <span class="text-danger">{{$message}}</span>
                @enderror
            </div>
        </div>
        <div class="tab-pane fade" id="custom-tabs-four-en" role="tabpanel"
             aria-labelledby="custom-tabs-four-en-tab">
            <div class="form-group">
                <label for="nameInput" class="form-label">Nomi [en]</label>
                <input type="text" class="form-control" id="nameInput" name="name_en"
                       value="{{old("name_en") ?? $response->getTranslation('name','en')}}">
                @error('name_en')
                <span class="text-danger">{{$message}}</span>
                @enderror
            </div>
            <div class="form-group">
                <label for="nameInput" class="form-label">Manzil [en]</label>
                <input type="text" class="form-control" id="nameInput" name="address_en"
                       value="{{old("address_en") ?? $response->getTranslation('address','en')}}">
                @error('address_en')
                <span class="text-danger">{{$message}}</span>
                @enderror
            </div>
            <div class="form-group">
                <label for="summernote" class="form-label">Qisqa ma'lumot [en]</label>
                <textarea id="summernoteEn"
                          name="description_en">{{old("description_en") ?? $response->getTranslation('description','en')}}</textarea>
                @error('description_en')
                <span class="text-danger">{{$message}}</span>
                @enderror
            </div>
        </div>
    </div>
</div>

<div class="form-group">
    <label for="nameInput" class="form-label">Telefon raqami</label>
    <input type="text" class="form-control" id="nameInput" name="phone"
           value="{{old("phone") ?? $response->phone}}">
    @error('phone')
    <span class="text-danger">{{$message}}</span>
    @enderror
</div>

<div class="form-group">
    <label for="nameInput" class="form-label">E-mail</label>
    <input type="email" class="form-control" id="nameInput" name="email"
           value="{{old("email") ?? $response->email}}">
    @error('email')
    <span class="text-danger">{{$message}}</span>
    @enderror
</div>

<div class="form-group">
    <label for="nameInput" class="form-label">Masul shaxs</label>
    <input type="text" class="form-control" id="nameInput" name="leadership"
           value="{{old("leadership") ?? $response->leadership}}">
    @error('leadership')
    <span class="text-danger">{{$message}}</span>
    @enderror
</div>

<div class="form-group">
    <label>Viloyat</label>
    <select class="form-control select2" data-dropdown-css-class="select2-info" style="width: 100%;"
            name="region_id">
        @foreach($regions as $region)
            <option
                {{$response->region_id === $region->id ? 'selected="selected"' : ''}} value="{{$region->id}}">{{$region->getTranslation('name','uz')}}</option>
        @endforeach
    </select>
    @error('region_id')
    <span class="text-danger">{{$message}}</span>
    @enderror
</div>

<button type="submit" class="btn btn-primary float-right">Saqlash!</button>
@push('styles')
    <link rel="stylesheet" href="{{asset('includes/plugins/summernote/summernote-bs4.min.css')}}">
@endpush
@push('scripts')
    <script>
        $(function () {
            $('.select2').select2();
        })
    </script>
    <script src="{{asset('includes/plugins/summernote/summernote-bs4.min.js')}}"></script>
    <script>
        $(function () {

            // Summernote
            $('#summernote').summernote()

            // CodeMirror
            CodeMirror.fromTextArea(document.getElementById("codeMirrorDemo"), {
                mode: "htmlmixed",
                theme: "monokai"
            });
        })
        $(function () {
            // Summernote
            $('#summernoteRu').summernote()

            // CodeMirror
            CodeMirror.fromTextArea(document.getElementById("codeMirrorDemo"), {
                mode: "htmlmixed",
                theme: "monokai"
            });
        })
        $(function () {
            // Summernote
            $('#summernoteEn').summernote()

            // CodeMirror
            CodeMirror.fromTextArea(document.getElementById("codeMirrorDemo"), {
                mode: "htmlmixed",
                theme: "monokai"
            });
        })
    </script>
@endpush
