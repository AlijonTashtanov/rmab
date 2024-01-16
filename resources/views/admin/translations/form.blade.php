<div class="mb-3">
    <div class="form-group">
        <label for="nameInput" class="form-label">Key</label>
        <input type="text" class="form-control" id="nameInput" name="key"
               value="{{old("key") ?? $response->key}}">
        @error('key')
        <span class="text-danger">{{$message}}</span>
        @enderror
    </div>
    <div class="form-group">
        <label for="nameInput" class="form-label">Nomi [uz]</label>
        <input type="text" class="form-control" id="nameInput" name="value_uz"
               value="{{old("value_uz") ?? $response->getTranslation('value','uz')}}">
        @error('value_uz')
        <span class="text-danger">{{$message}}</span>
        @enderror
    </div>
    <div class="form-group">
        <label for="nameInput" class="form-label">Nomi [ru]</label>
        <input type="text" class="form-control" id="nameInput" name="value_ru"
               value="{{old("value_ru") ?? $response->getTranslation('value','ru')}}">
        @error('name_ru')
        <span class="text-danger">{{$message}}</span>
        @enderror
    </div>
    <div class="form-group">
        <label for="nameInput" class="form-label">Nomi [en]</label>
        <input type="text" class="form-control" id="nameInput" name="value_en"
               value="{{old("value_en") ?? $response->getTranslation('value','en')}}">
        @error('name_en')
        <span class="text-danger">{{$message}}</span>
        @enderror
    </div>
</div>

<button type="submit" class="btn btn-primary float-right">Saqlash!</button>
