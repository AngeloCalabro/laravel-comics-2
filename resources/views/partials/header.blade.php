<?php
$links = config('db_seeder.navbar');
?>
<header>
    <nav class="nav-bar my-container">
        <a href="{{route('home')}}">
            <div class="logo-img">
                <img src="{{Vite::asset('resources/img/dc-logo.png')}}" alt="logo">
            </div>
        </a>
        <ul class="links">
            @foreach ($links as $link)
            <li class="{{(Route::currentRouteName() == $link['url'] || (Str::contains(Route::currentRouteName() , 'comics') && $link['url'] == 'comics.index'))  ? 'active' : ''}}">
                <a href="{{route($link['url'])}}">{{$link['text']}}</a>
            </li>
            @endforeach
        </ul>
    </nav>
</header>
