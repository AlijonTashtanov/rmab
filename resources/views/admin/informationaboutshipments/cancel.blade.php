@extends('admin.layouts.app')
@section('title')
    Jo’natma haqida ma’lumotni bekor qilish
@endsection
@section('content')
    <x-headers icon="fas fa-circle" title="Jo’natma haqida ma’lumotni bekor qilish"
               parent=" Jo’natma haqida ma’lumot olish" parent-icon=""
               parent-route="admin.informationaboutshipments.index"/>
    <div class="card">
        <div class="card-body">
            <form action="{{route('admin.informationaboutshipments.cancel-store' ,$response->id)}}" method="POST"
                  enctype="multipart/form-data">
                @csrf
                @method('PUT')
                <div class="form-group">
                    <label for="floatingTextarea2">Bekor qilish sababi</label>
                    <div class="form-floating">
                                <textarea id="noImage1" class="form-control" name="answer_text" required
                                          style="height: 100px">{{old("answer_text") ?? $response->answer_text}}</textarea>
                        @error ('answer_text')
                        <p class="text-danger">* {{$message}}</p>
                        @enderror
                    </div>
                </div>

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
            </form>
        </div>
    </div>
@endsection
