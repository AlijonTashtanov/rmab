<div class="form-group">
    <label for="nameInput" class="form-label">Hamkor nomi</label>
    <input type="text" class="form-control" id="nameInput" name="name"
           value="{{old("name") ?? $response->name}}">
    @error('name')
    <span class="text-danger">{{$message}}</span>
    @enderror
</div>

<div class="form-group">
    <label for="nameInput" class="form-label">Hamkor url manzili (web sayt yoki aloqa linki)</label>
    <input type="text" class="form-control" id="nameInput" name="url"
           value="{{old("url") ?? $response->url}}">
    @error('url')
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
@push('scripts')
    <script>
        $(function () {
            $("input[data-bootstrap-switch]").each(function () {
                $(this).bootstrapSwitch('state', $(this).prop('checked'));
            })
        })
    </script>
@endpush
