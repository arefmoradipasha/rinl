<!DOCTYPE html>
<html lang="en">

<?php require realpath(__DIR__ . '/../layouts/header.php'); ?>


<div class=" d-flex justify-content-between">

    <?php require realpath(__DIR__ . '/../layouts/sidebar.php'); ?>

    <main class="content mx-4">

        <section class="main-content mx-3 d-flex justify-content-between">

            <nav aria-label="breadcrumb">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="/dashboard"> پنل ادمین </a></li>
                    <li class="breadcrumb-item"><a href="/dashboard/ads">  تبلیعات   </a></li>
                    <li class="breadcrumb-item active"><a href=""> ویرایش تبلیغات </a></li>
                </ol>
            </nav>

            <a href="/dashboard/post" class="btn btn-warning search-btn"> بازگشت </a>

        </section>
        <hr>

        <div>
            <h5 class="my-4"> ویرایش تبلیغ </h5>

            <form action="/dashboard/ads/update/<?=$result->id?>" method="post" enctype="multipart/form-data">

                <div class="mb-3">
                    <label for="formFile" class="form-label">لینک مورد نظر را بصورت کامل همراه با پروتکل وارد کنید</label>
                    <input class="form-control" name="href" placeholder="مثال : http://example.com" type="text" id="formFile">
                </div>

                <div class="mb-3">
                    <label for="formFile" class="form-label"> عکس یا گیف برای مشاهده به کاربران وارد کنید </label>
                    <input class="form-control" name="image" type="file" id="formFile">
                </div>

                <div class="input-group mb-3 my-3">
                    <img src="<?=$result->image?>" alt="عکس موجود نیست">
                </div>

                <input type="submit" class="btn btn-primary my-4" value="ویرایش تبلیغ">
            </form>
        </div>


    </main>

</div>

<?php require realpath(__DIR__ . '/../layouts/footer.php'); ?>

</html>








