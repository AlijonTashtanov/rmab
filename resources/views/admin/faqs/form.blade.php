<div class="mb-3">
    <div class="form-group">
        <label for="nameInput" class="form-label">Savol [uz]</label>
        <input type="text" class="form-control" id="nameInput" name="question_uz"
               value="{{old("question_uz") ?? $response->getTranslation('question','uz')}}">
        @error('question_uz')
        <span class="text-danger">{{$message}}</span>
        @enderror
    </div>
    <div class="form-group">
        <label for="nameInput" class="form-label">Savol [ru]</label>
        <input type="text" class="form-control" id="nameInput" name="question_ru"
               value="{{old("question_ru") ?? $response->getTranslation('question','ru')}}">
        @error('question_ru')
        <span class="text-danger">{{$message}}</span>
        @enderror
    </div>
    <div class="form-group">
        <label for="nameInput" class="form-label">Savol [en]</label>
        <input type="text" class="form-control" id="nameInput" name="question_en"
               value="{{old("question_en") ?? $response->getTranslation('question','en')}}">
        @error('question_en')
        <span class="text-danger">{{$message}}</span>
        @enderror
    </div>
    <div class="form-group">
        <label for="nameInput" class="form-label">Javob [uz]</label>
        <textarea class="form-control" rows="3" name="answer_uz"
                  placeholder="">{{old("answer_uz") ?? $response->getTranslation('answer','uz')}}</textarea>
        @error('answer_uz')
        <span class="text-danger">{{$message}}</span>
        @enderror
    </div>
    <div class="form-group">
        <label for="nameInput" class="form-label">Javob [ru]</label>
        <textarea class="form-control" rows="3" name="answer_ru"
                  placeholder="">{{old("answer_ru") ?? $response->getTranslation('answer','ru')}}</textarea>
        @error('answer_ru')
        <span class="text-danger">{{$message}}</span>
        @enderror
    </div>
    <div class="form-group">
        <label for="nameInput" class="form-label">Javob [en]</label>
        <textarea class="form-control" rows="3" name="answer_en"
                  placeholder="">{{old("answer_en") ?? $response->getTranslation('answer','en')}}</textarea>
        @error('answer_en')
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
