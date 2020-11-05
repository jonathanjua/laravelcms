@extends('adminlte::page')

@section('title', 'Nova Pagina')

@section('content_header')

@endsection

@section('content')

@if($errors->any())
    <div class="alert alert-danger">
        <ul>
            <h5> <i class="icon fas fa-ban"></i> Ocorreu um erro!</h5>
        @foreach ($errors->all() as $error)
            <p>{{ $error }}</p>
        @endforeach
        </ul>
    </div>
@endif

<div class="card">
    <div class="card-header">
        <h1>Nova pagina</h1>
    </div>

    <div class="card-body">

        <form action="{{ route('pages.store') }}" method="POST" class="form-horizontal">
            @csrf

        <div class="form-group row">
                <label  class="col-sm-2 col-form-label">Titulo</label>
                <div class="col-sm-10">
                    <input type="text" name="title" class="form-control @error('title') is-invalid @enderror" value="{{ old('title') }}">
                </div>
        </div>

        <div class="form-group row">
            <label  class="col-sm-2 col-form-label">Corpo </label>
            <div class="col-sm-10">
                <textarea id="mytextarea" name="body" class="form-control">
                    {{ old('body') }}
                </textarea>
            </div>
        </div>

        <div class="form-group row">
            <label  class="col-sm-2 col-form-label"></label>
            <div class="col-sm-10">
                <input type="submit" value="Criar" class="btn btn-success">
            </div>
        </div>

        </form>

    </div>

</div>

<script src="https://cdn.tiny.cloud/1/no-api-key/tinymce/5/tinymce.min.js"></script>

    <script>
      tinymce.init({
        selector: 'textarea#mytextarea',
        height: 300,
        menubar: false,
        plugins:['link', 'table', 'image', 'autoresize', 'lists'],
        toolbar: 'undo redo | formatselect | bold italic backcolor | alignleft aligncenter alignright alignjustify| table | link image| bullist numlist',
        contentcss:[
            '{{ asset('assets/css/content.css') }}'
        ],
        images_upload_url: '{{ route('imageupload') }}',
        images_upload_credenttials: true,
        convert_urls:false
      });
    </script>

@endsection


