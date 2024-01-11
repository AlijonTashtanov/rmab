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
<button type="submit" class="btn btn-primary float-right">Saqlash!</button>
@push('scripts')
    <script>
        $(function () {
            $('.select2').select2();
        })
    </script>
    <script>
        $(function () {
            $("input[data-bootstrap-switch]").each(function () {
                $(this).bootstrapSwitch('state', $(this).prop('checked'));
            })
        })
    </script>
@endpush

