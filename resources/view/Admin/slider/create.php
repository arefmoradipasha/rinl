<!DOCTYPE html>
<html lang="en">

<?php require realpath(__DIR__ . '/../layouts/header.php'); ?>


<div class=" d-flex justify-content-between">

    <?php require realpath(__DIR__ . '/../layouts/sidebar.php'); ?>

    <main class="content mx-4">

        <section class="main-content mx-3 d-flex justify-content-between">

            <nav aria-label="breadcrumb">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item active" aria-current="page">Library /</li>
                    <li class="breadcrumb-item " href="/dashboard/slider" aria-current="page">اسلایدر</li>
                    <li class="breadcrumb-item active" aria-current="page">ساخت اسلایدر</li>
                </ol>
            </nav>

            <a href="/dashboard/slider" class="btn btn-warning search-btn"> بازگشت </a>
        </section>
        <hr>
        <div>
            <h5 class="my-4"> افزودن اسلایدر </h5>

            <form action="/dashboard/slider/store" method="post" enctype="multipart/form-data">

                <label class="form-label" for="select-slider"> پست مربوطه  </label>
                <select class="form-select form-select-sm" name="href" id="select-slider" aria-label=".form-select-sm example">
                    <?php foreach ($posts as $post) : ?>
                        <option value="<?=$post->id?>"> <?=$post->postName?> </option>
                    <?php endforeach; ?>
                </select>

                <div class="input-group mb-3 my-3">
                    <input type="file" name="image_slider" class="form-control" placeholder="عکس پست را وارد کنید" id="inputGroupFile02">
                </div>

                <input type="submit" class="btn btn-primary" value="افزودن ">
            </form>
        </div>

    </main>

</div>

<?php require realpath(__DIR__ . '/../layouts/footer.php'); ?>

</html>
