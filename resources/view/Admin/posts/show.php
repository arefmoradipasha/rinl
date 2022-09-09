<!DOCTYPE html>
<html lang="en">

<?php require realpath(__DIR__ . '/../layouts/header.php'); ?>


<div class=" d-flex justify-content-between">

    <?php require realpath(__DIR__ . '/../layouts/sidebar.php'); ?>

    <main class="content mx-4">

        <section class="main-content mx-3 d-flex justify-content-between">

            <nav aria-label="breadcrumb">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item active" aria-current="page"> </li>
                    <li class="breadcrumb-item"><a href="/dashboard"> پنل ادمین </a></li>
                    <li class="breadcrumb-item"><a href="/dashboard/post"> پست ها  </a></li>
                    <li class="breadcrumb-item active"><a href=""> نمایش پست </a></li>
                </ol>
            </nav>

            <a href="/dashboard/post" class="btn btn-warning search-btn"> بازگشت </a>

        </section>
        <hr>
        <div>
            <ul class="list-group list-group-flush">
                <li class="list-group-item"> نام :  <?= $result->postName ?> </li>
                <li class="list-group-item"> توضیحات کوتاه  : <?= $result->summary ?> </li>
                <li class="list-group-item"> دستاورد ها : <?= $result->gain ?> </li>
                <li class="list-group-item">توضبحات کامل  : <?= $result->description ?> </li>
                <li class="list-group-item">راهنمای نصب : <?= $result->installationGuide ?> </li>
                <li class="list-group-item"> نویسنده پست : <?= $UserResult->first_name .' '. $UserResult->last_name ?>  </li>
                <li class="list-group-item"> اواتار : <img src="<?= $result->avatar ?>" alt="عکس موجود نیست"></li>
                <li class="list-group-item"><a class="btn btn-dark" href="addphoto/<?=$result->id?>"> اضافه کردن تصاویر بیشتر به پست</a> </li>
            </ul>
        </div>

    </main>

</div>

<?php require realpath(__DIR__ . '/../layouts/footer.php'); ?>

</html>