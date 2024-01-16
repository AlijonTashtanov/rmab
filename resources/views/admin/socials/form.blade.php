<code>Ijtimoiy tarmoq uchun kerak bo'lgan iconni ushbu xavola orqali kirib olishingiz mumkin! <i class="fas fa-link"></i></code>
<a href="https://fontawesome.com/v5/search" target="_blank">https://fontawesome.com/v5/search</a>
<div class="mb-3">
    <div class="form-group">
        <label for="nameInput" class="form-label">Ijtimoiy tarmoq uchun icon</label>
        <input type="text" class="form-control" id="nameInput" name="icon"
               value="{{old("icon") ?? $response->icon}}"  placeholder="<i class='fas fa-telegram></i>">
        @error('icon')
        <span class="text-danger">{{$message}}</span>
        @enderror
    </div>
    <div class="form-group">
        <label for="nameInput" class="form-label">Ijtimoiy tarmoq linki</label>
        <input type="text" class="form-control" id="nameInput" name="url"
               value="{{old("url") ?? $response->url}}">
        @error('url')
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
@error('name')
<span class="text-danger">{{$message}}</span>
@enderror
<button type="submit" class="btn btn-primary float-right">Saqlash!</button>
@push('scripts')

    <script>
        $(function () {
            $("input[data-bootstrap-switch]").each(function () {
                $(this).bootstrapSwitch('state', $(this).prop('checked'));
            })
        })
    </script>
@endpush

