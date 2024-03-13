@php
    use App\Models\InformationAboutShipment;
@endphp
@if($response->type_want_take == InformationAboutShipment::$type_want_take_official)
    <div class="form-group">
        <label for="nameInput" class="form-label">Javob uchun fayl yuklang</label>
        <input type="file" name="image"
               class="form-control  @error('image') is-invalid @enderror"
               id="image">
        @error('image')
        <span class="text-danger">{{$message}}</span>
        @enderror
    </div>
@endif
@if($response->type_want_take == InformationAboutShipment::$type_want_take_text)
    <div class="form-group">
        <label for="floatingTextarea2">Javob matni</label>
        <div class="form-floating">
                                <textarea id="noImage1" class="form-control" name="answer_text" required
                                          style="height: 100px">{{old("answer_text") ?? $response->answer_text}}</textarea>
            @error ('answer_text')
            <p class="text-danger">* {{$message}}</p>
            @enderror
        </div>
    </div>
@endif
<button type="submit" class="btn btn-primary float-right">Yuborish!</button>

@push('styles')
    <link rel="stylesheet" href="{{asset('includes/plugins/summernote/summernote-bs4.min.css')}}">
@endpush
@push('scripts')
    <script src="https://cdn.ckeditor.com/4.16.2/full/ckeditor.js"></script>
    <script>
        CKEDITOR.replace('answer_text', {
            'filebrowserImageBrowseUrl': '/elfinder/ckeditor',
            'filebrowserBrowseUrl': '/elfinder/ckeditor',
        });
    </script>
@endpush
