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
                <label for="summernote" class="form-label">Kontent [uz]</label>
                <textarea id="summernote"
                          name="content_uz">{{old("content_uz") ?? $response->getTranslation('content','uz')}}</textarea>
                @error('content_uz')
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
                <label for="summernote" class="form-label">Kontent [ru]</label>
                <textarea id="summernoteRu"
                          name="content_ru">{{old("content_ru") ?? $response->getTranslation('content','ru')}}</textarea>
                @error('content_ru')
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
                <label for="summernote" class="form-label">Kontent [en]</label>
                <textarea id="summernoteEn"
                          name="content_en">{{old("content_en") ?? $response->getTranslation('content','en')}}</textarea>
                @error('content_en')
                <span class="text-danger">{{$message}}</span>
                @enderror
            </div>
        </div>
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

<button type="submit" class="btn btn-primary float-right">Saqlash!</button>
@push('styles')
    <link rel="stylesheet" href="{{asset('includes/plugins/summernote/summernote-bs4.min.css')}}">
@endpush
@push('scripts')
    <script>
        $(function () {
            $("input[data-bootstrap-switch]").each(function () {
                $(this).bootstrapSwitch('state', $(this).prop('checked'));
            })
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
