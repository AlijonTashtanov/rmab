<div class="mb-3">
    <div class="form-group">
        <label for="nameInput" class="form-label">Nomi [uz]</label>
        <input type="text" class="form-control" id="nameInput" name="name_uz"
               value="{{old("name_uz") ?? $response->getTranslation('name','uz')}}">
        @error('name_uz')
        <span class="text-danger">{{$message}}</span>
        @enderror
    </div>
    <div class="form-group">
        <label for="nameInput" class="form-label">Nomi [ru]</label>
        <input type="text" class="form-control" id="nameInput" name="name_ru"
               value="{{old("name_ru") ?? $response->getTranslation('name','ru')}}">
        @error('name_ru')
        <span class="text-danger">{{$message}}</span>
        @enderror
    </div>
    <div class="form-group">
        <label for="nameInput" class="form-label">Nomi [en]</label>
        <input type="text" class="form-control" id="nameInput" name="name_en"
               value="{{old("name_en") ?? $response->getTranslation('name','en')}}">
        @error('name_en')
        <span class="text-danger">{{$message}}</span>
        @enderror
    </div>
    <div class="form-group">
        <label for="floatingTextarea2">Ma'lumot Uz</label>
        <div class="form-floating">
                                <textarea id="noImage1" class="form-control" name="content_uz" required
                                          style="height: 100px">{{old("content_uz") ?? $response->getTranslation('content','uz')}}</textarea>
            @error ('content_uz')
            <p class="text-danger">* {{$message}}</p>
            @enderror
        </div>
    </div>
    <div class="form-group">
        <label for="floatingTextarea2">Ma'lumot Ru</label>
        <div class="form-floating mt-3">
                                <textarea id="noImage3" class="form-control" name="content_ru" required
                                          style="height: 100px">{{old("content_ru") ?? $response->getTranslation('content','ru')}}</textarea>
            @error ('content_ru')
            <p class="text-danger">* {{$message}}</p>
            @enderror
        </div>
    </div>
    <div class="form-group">
        <label for="floatingTextarea2">Ma'lumot En</label>
        <div class="form-floating mt-3">
                                <textarea id="noImage2" class="form-control" name="content_en" required
                                          style="height: 100px">{{old("content_en") ?? $response->getTranslation('content','en')}}</textarea>
            @error ('content_en')
            <p class="text-danger">* {{$message}}</p>
            @enderror
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
        <div class="bootstrap-switch-on bootstrap-switch bootstrap-switch-wrapper bootstrap-switch-animate"
             style="width: 120px;">
            <div class="bootstrap-switch-container" style="width: 250px; margin-left: 0px;">
                <input type="checkbox" name="status" data-bootstrap-switch="" data-off-color="danger"
                       data-off-text="Nofaol"
                       data-on-color="success" data-on-text="Faol"
                       {{$response->isChecked()}} value="{{$response->isChecked() ? 1 :0}}">
            </div>
        </div>
    </div>

</div>

<button type="submit" class="btn btn-primary float-right">Saqlash</button>

@push('scripts')
    <script src="https://cdn.ckeditor.com/4.16.2/full/ckeditor.js"></script>

    <script>
        $(function () {
            $("input[data-bootstrap-switch]").each(function () {
                $(this).bootstrapSwitch('state', $(this).prop('checked'));
            })
        })
    </script>

    <script>
        CKEDITOR.replace('content_uz', {
            'filebrowserImageBrowseUrl': '/elfinder/ckeditor',
            'filebrowserBrowseUrl': '/elfinder/ckeditor',
        });
        CKEDITOR.replace('content_en', {
            'filebrowserImageBrowseUrl': '/elfinder/ckeditor',
            'filebrowserBrowseUrl': '/elfinder/ckeditor',
        });
        CKEDITOR.replace('content_ru', {
            'filebrowserImageBrowseUrl': '/elfinder/ckeditor',
            'filebrowserBrowseUrl': '/elfinder/ckeditor',
        });
    </script>
@endpush
