<?php




$navItems = [

    [
        'text' => 'CHARACTERS',
        'link' => 'characters'
    ],
    [
        'text' => 'COMICS',
        'link' => 'comics'
    ],
    [
        'text' => 'MOVIES',
        'link' => 'movies'
    ],
    [
        'text' => 'TV',
        'link' => 'tv'
    ],
    [
        'text' => 'GAMES',
        'link' => 'games'
    ],
    [
        'text' => 'COLLECTIBLES',
        'link' => 'collectibles'
    ],
    [
        'text' => 'VIDEOS',
        'link' => 'videos'
    ],
    [
        'text' => 'FANS',
        'link' => 'fans'
    ],
    [
        'text' => 'NEWS',
        'link' => 'news'
    ],
    [
        'text' => 'SHOP',
        'link' => 'shop'
    ],

];
?>
<nav class="d-flex justify-content-between">

    <div class="col-3 text-start">
        <img src="{{ Vite::asset('resources/img/dc-logo.png') }}" alt="">
    </div>

    <ul class="nav justify-content-center">



        <?php
        foreach ($navItems as $navItem) :
        ?>
            <li class="nav-item"><a class="nav-link" href="/<?php echo $navItem['link']; ?>"><?php echo $navItem['text']; ?></a></li>



        <?php
        endforeach;
        ?>
    </ul>
</nav>

<style>

</style>