<div class="blueNav">
    <div class="container d-flex justify-content-between ">

        <?php
        foreach (config('blueNav') as $item) :
        ?>




            <div class="">
                <img class="comicThumb" src="{{ Vite::asset('<?php echo $item['src']; ?>') }}" class="">

                <span class="text-center"><?php echo $item['text']; ?></span>

            </div>





        <?php
        endforeach;
        ?>
    </div>

</div>