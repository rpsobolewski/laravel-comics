<div class="banner">
    <div class="container  d-flex justify-content-end">
        <div class="col-1">DC POWER VISA</div>
        <div class="col-1">ADDITIONAL DC SITES</div>
    </div>
</div>
<nav class=" container d-flex justify-content-between">

    <div class="col-1 text-start ">
        <a href="{{route('home')}}">
            <img class="logo" src="{{ Vite::asset('resources/img/dc-logo.png') }}" alt="dc">
        </a>
    </div>

    <ul class="nav justify-content-between col-9">



        <?php
        foreach (config('nav-links') as $navItem) :
        ?>
            <li class="nav-item align-self-center"><a class="" href="/<?php echo $navItem['link']; ?>"><?php echo $navItem['text']; ?></a></li>

        <?php
        endforeach;
        ?>
    </ul>
</nav>