<?php
$linksComics = config('db_seeder.linksComics');
$linksShop = config('db_seeder.linksShop');
$linksDc = config('db_seeder.linksDc');
$linksSites = config('db_seeder.linksSites');
?>

<section class="links-footer">
    <div class="my-container links-wrap">
        <div class="links">
            <div class="link">
                <span class="title">dc comics</span>
                <ul>
                    @foreach ($linksComics as $link)
                    <li><a href="{{$link['url']}}">{{$link['text']}}</a></li>
                    @endforeach
                </ul>
                <span class="title">shop</span>
                <ul>
                    @foreach ($linksShop as $link)
                    <li><a href="{{$link['url']}}">{{$link['text']}}</a></li>
                    @endforeach
                </ul>
            </div>
            <div class="link">
                <span class="title">dc</span>
                <ul>
                    @foreach ($linksDc as $link)
                    <li><a href="{{$link['url']}}">{{$link['text']}}</a></li>
                    @endforeach
                </ul>
            </div>
            <div class="link">
                <span class="title">sites</span>
                <ul>
                    @foreach ($linksSites as $link)
                    <li><a href="{{$link['url']}}">{{$link['text']}}</a></li>
                    @endforeach
                </ul>
            </div>
        </div>
        <div class="img-box"><img src="{{Vite::asset('/resources/img/dc-logo-bg.png' )}}" alt=""></div>
    </div>
</section>

<section class="contacts-wrap">
    <div class="my-container contacts">
        <button>sign-up now</button>
        <div class="social">
            <span>follow us</span>
            <ul>
                <li><a href="#"><i class="fa-brands fa-facebook"></i></a></li>
                <li><a href="#"><i class="fa-brands fa-twitter"></i></a></li>
                <li><a href="#"><i class="fa-brands fa-youtube"></i></a></li>
                <li><a href="#"><i class="fa-brands fa-pinterest"></i></a></li>
                <li><a href="#"><i class="fa-brands fa-periscope"></i></a></li>
            </ul>
        </div>
    </div>
</section>
