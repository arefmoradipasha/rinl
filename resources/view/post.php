<?php require_once "layouts/header.php"?>


<section class="content-wrapper d-flex justify-content-between my-2">

<?php require_once "layouts/sidebar.php" ?>
    <div class="content w-100 bg-white" >

        <img class="img-post" src="<?=$post->avatar?>?>" alt="">
        <span class="h5 mx-3 title-post"> <?=$post->postName?> </span>

        <div class="text-center">
            <img class="posts-image shadow" src="<?=$post->mainImage?>" alt="">
            <p class="summary-posts" style="color: red"> <?=$post->gain?> </p>
        </div>

        <div class="my-5">
            <span class="mx-5 my-4 h5 p-2 title-post"> توضیحات نصب : </span>
            <p class="mt-3 summary-posts mx-4"> <?=$post->installationGuide?> </p>
        </div>

        <div class="mt-5">
            <span class="mx-5 my-4 h5 p-2 title-post"> توضیحات کلی : </span>
            <p class="mt-3 summary-posts mx-4"> <?=$post->description?> </p>
        </div>
        <hr>
    </div>

</section>

    <section class="slider-info text-center  mb-5 info-slider-post">
        <div id="carouselExampleControlsNoTouching" class="mb-5 m-5 carousel slide" data-bs-touch="false">
            <div class="carousel-inner">
                <?php

                foreach ($photos as $photo):
                    if ($photo->post_id === $post->id){;
                    ?>
                <div class="carousel-item active">
                    <img src=" <?=$photo->img?> " class="d-block img-description" alt="...">
                </div>
                <?php } endforeach;  ?>

            </div>
            <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleControlsNoTouching" data-bs-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Previous</span>
            </button>
            <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleControlsNoTouching" data-bs-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Next</span>
            </button>
        </div>
    </section>


<?php require "layouts/footer.php"?>