@extends('site.layout')
@section('title', 'home')

@section('content')


<section id="content-1-1" class="content-block content-1-1 min-height-600px bg-white">
    <div class="container text-center">

        <h1>{{ $page->title }}</h1>

        <div class="col-sm-8 col-sm-offset-2">
            <p class="lead">{!! $page->body !!}</p>
        </div>
        
    </div>
</section>

@endsection



