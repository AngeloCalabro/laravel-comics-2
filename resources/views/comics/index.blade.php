@extends('layouts.app')
<?php
$linksImage = config('db_seeder.linksImage');
?>
@section('content')

<main>
    <div class="inner-main">
        <div class="my-container position-relative">
            <div class="title-section">
                current series
            </div>
            <div class="cards">
                @foreach ($comics as $key => $comic)
                <div class="flip-card">
                    <div class="flip-card-inner">
                        <div class="flip-card-front">
                            <a href="{{route('comics.show', ['comic'=> $comic->id])}}">
                                <div class="img-box"><img src="{{$comic['thumb']}}" alt=""></div>
                            </a>
                            <span class="title">{{$comic['series']}}</span>
                        </div>
                        <div class="flip-card-back">
                            <a href="{{route('comics.show', ['comic'=> $comic->id])}}">
                                <div class="img-box"><img src="{{$comic['thumb']}}" alt=""></div>
                            </a>
                            <span class="title">{{$comic['price']}}$</span>
                        </div>
                    </div>
                </div>
                @endforeach
            </div>
        </div>
    </div>
</main>
<section class="icons-wrap">
    <div class="icons">
        @foreach ($linksImage as $link)
        <div class="icon">
            <img src="{{Vite::asset('resources/img/' . $link['url'] )}}" class="img-icon">
            <a href="#">{{$link['text']}}</a>
        </div>
        @endforeach
    </div>
</section>
@endsection
