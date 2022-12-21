@extends('layouts.app')
<?php
$linksSinglePage = config('db_seeder.linksSinglePage');
?>
@section('content')
<div class="blue"></div>
<section class="my-container position-relative" id="singlepage">
    <div class="img-box"><img src="{{$comic['thumb']}}" alt=""></div>
    <div class="pt-5 row">
        <div class="col-8">
            <div class="title">
                {{$comic['title']}}
            </div>
            <div class="price">
                <div class="ps-4"><span class="opacity-75">U.S. Price</span> {{$comic['price']}}$</div>
                <div class="d-flex align-items-center h-100">
                    <div class="text-uppercase pe-4 opacity-75">available</div>
                    <div class="px-4 my-border h-100">Check Availability</div>
                </div>
            </div>
            <p>{{$comic['description']}}</p>
        </div>
        <div class="col-4">
            <div class="text-uppercase text-end fw-bold">advertisement</div>
            <img src="{{ Vite::asset('resources/img/adv.jpg') }}" alt="" class="w-100">
        </div>
    </div>
</section>
<section id="details">
    <div class="my-container ">
        <div class="d-flex">
            <div class="col-6 pe-3">
                <div class="title my-border">Talent</div>
                <div class="d-flex justify-content-between py-2 my-border">
                    <div class="sub-title">Art by</div>
                    <div class="text-blue w-75">
                        {{-- {{$comic['artists']}} --}}
                    </div>
                </div>
                <div class="d-flex justify-content-between py-2 my-border">
                    <div class="sub-title">Written by</div>
                    <div class="text-blue w-75">
                        {{-- {{$comic['writers']}} --}}
                    </div>
                </div>
            </div>
            <div class="col-6 ps-3">
                <div class="title my-border">Specs</div>
                <div class="d-flex py-2 my-border">
                    <div class="sub-title col-4">Series:</div>
                    <div class="col-4 text-uppercase text-blue">{{$comic['series']}}</div>
                </div>
                <div class="d-flex py-2 my-border">
                    <div class="sub-title col-4">U.S. price:</div>
                    <div class="col-4 text-uppercase fw-bold">{{$comic['price']}}$</div>
                </div>
                <div class="d-flex py-2 my-border">
                    <div class="sub-title col-4">On Sale Date:</div>
                    <div class="col-4 text-uppercase fw-bold">{{$comic['sale_date']}}</div>
                </div>
            </div>
        </div>
    </div>
</section>
<section id="icons-wrap">
    <div class="my-container">
        <div class="icons w-100">
            @foreach ($linksSinglePage as $link)
            <div class="icon my-border">
                <a href="#">{{$link['text']}}</a>
                <img src="{{Vite::asset('resources/img/' . $link['url'] )}}" class="img-icon">
            </div>
            @endforeach
        </div>
    </div>
</section>
@endsection
