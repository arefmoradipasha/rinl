<?php require_once 'layouts/header.php'?>

<section class="content-wrapper d-flex justify-content-between my-2">

    <?php require_once "layouts/sidebar.php" ?>

    <div class="content w-100 d-flex flex-wrap justify-content-evenly">

        <?php foreach ($posts as $post): ?>
                <div class="card Zhover" style="width: 20rem;">
                    <a href="/post/<?=$post->id?>"> <img src="<?= $post->avatar ?>" class="card-img-top" alt="..."> </a>
            <div class="card-body">
                <p class="card-text " style="height: 2rem;">  <?= limitCharacter($post->summary,'256')  ?> </p>
            </div>
        </div>
        <?php endforeach; ?>


    </div>

</section>

<?php require_once "layouts/footer.php" ?>
