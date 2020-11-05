@extends('site.layout')
@section('title', 'home')

@section('content')

<section id="promo-3" class="content-block promo-3 min-height-600px bg-deepocean">
    <div class="container text-center">
        <h1>{{ $front_config['title'] }}</h1>
        <h2>{{ $front_config['subtitle'] }}</h2>
        <a href="#" class="btn btn-outline btn-outline-xl outline-light">{{ $front_config['home_button'] }}</a>
    </div>
    <!-- /.container -->
</section>

@endsection
