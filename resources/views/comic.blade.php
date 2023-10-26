<div class="comicList">
    <div class="d-flex flex-wrap container ">

        <?php
        foreach (config('comics') as $comic) :
        ?>
            <div class="col-2 p-2 ">

                <div>
                    <img class="comicThumb" src="<?php echo $comic['thumb']; ?>" alt="Comic Thumbnail" class="">
                    <div class="">
                        <h5 class="text-center"><?php echo $comic['title']; ?></h5>

                    </div>
                </div>



            </div>
        <?php
        endforeach;
        ?>


    </div>
    <div class="d-flex justify-content-center">
        <a href="#" class="buttonLoad">LOAD MORE</a>
    </div>
</div>