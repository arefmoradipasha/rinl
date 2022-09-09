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
                    <li class="breadcrumb-item active"><a href="">ساخت پست </a></li>
                </ol>
            </nav>

            <a href="/dashboard/post" class="btn btn-warning search-btn"> بازگشت </a>

        </section>
        <hr>

        <div>
            <h5 class="my-4"> افزودن دسته بندی  </h5>

            <form action="/dashboard/post/store" method="post" enctype="multipart/form-data">

                <label for="basic-url" class="form-label">نام پست </label>
                <div class="input-group mb-3">
                    <input type="text" name="postName" class="form-control" placeholder="نام پست را وارد کنید" id="basic-url" aria-describedby="basic-addon3">
                </div>

                <label for="basic-url" class="form-label">جوایز و برجسته های پست  </label>
                <div class="input-group mb-3">
                    <input type="text" name="gain" class="form-control" placeholder="جوایز و موضوعات مهم پست را وارد کنید" id="basic-url" aria-describedby="basic-addon3">
                </div>

                <label class="form-label" for="select-category"> دسته بندی </label>
                <select class="form-select form-select-sm" name="category_id" id="select-category" aria-label=".form-select-sm example">
                    <?php foreach ($categories as $category) : ?>
                        <option value="<?=$category->id?>"> <?php  if ($category->category_type == '0') echo 'نرم افزار'; else echo 'بازی'?> > <?=$category->name?>  </option>
                    <?php endforeach; ?>
                </select>

                <div class="mb-2 my-3 ">
                    <label for="exampleFormControlTextarea1" class="form-label"> توضیحات کوتاه پست</label>
                    <textarea class="form-control" name="summary" placeholder="توضیحات کوتاه پست را وارد کنید" id="exampleFormControlTextarea1" rows="3"></textarea>
                </div>

                <div class="mb-2 my-3 ">
                    <label for="exampleFormControlTextarea1" class="form-label"> راهنمای نصب </label>
                    <textarea class="form-control" name="installationGuide" placeholder="درصورت لازم  بودن توضیحات نصب را وارد کنید" id="exampleFormControlTextarea1" rows="3"></textarea>
                </div>

                <div class="mb-2 my-3 " >
                    <label for="exampleFormControlTextarea1" class="form-label"> توضیحات کامل   </label>
                    <textarea class="form-control" id="editor1" name="description" placeholder=" توضیحات کامل را وارد کنید"  rows="3"></textarea>
                </div>


                <div class="mb-3">
                    <label for="formFile" class="form-label">اواتار</label>
                    <input type="file" name="avatar" id="fromFile" class="form-control" placeholder="اواتار  را وارد کنید" >
                </div>

                <div class="mb-3 my-3">
                    <label for="formFile1" class="form-label">عکس اصلی</label>
                    <input type="file" name="mainImage" id="fromFile1" class="form-control" placeholder="عکس پست را وارد کنید" >
                </div>

                <input type="submit" class="btn btn-primary my-4" value="ثبت پست">
            </form>
        </div>

    </main>

</div>

<?php require realpath(__DIR__ . '/../layouts/footer.php'); ?>

</html>








