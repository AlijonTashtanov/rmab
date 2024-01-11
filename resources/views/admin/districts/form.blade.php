@php
    use App\Models\Region;

//        $regions = Region::map();
        $regions = Region::all();
@endphp
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
