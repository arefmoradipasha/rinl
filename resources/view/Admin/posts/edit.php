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
                    <li class="breadcrumb-item active"><a href="">ویرایش پست </a></li>
                </ol>
            </nav>

            <a href="/dashboard/post" class="btn btn-warning search-btn"> بازگشت </a>

        </section>
        <hr>

        <div>
            <h5 class="my-4"> ویرایش دسته بندی  </h5>

            <form action="/dashboard/post/update/<?=$result->id?>" method="post" enctype="multipart/form-data">

                <label for="basic-url" class="form-label">نام پست </label>
                <div class="input-group mb-3">
                    <input type="text" name="postName" value="<?=$result->postName?>" class="form-control" placeholder="نام پست را وارد کنید" id="basic-url" aria-describedby="basic-addon3">
                </div>

                <label for="basic-url" class="form-label">جوایز و برجسته های پست  </label>
                <div class="input-group mb-3">
                    <input type="text" name="gain" value="<?=$result->gain?>" class="form-control" placeholder="جوایز و موضوعات مهم پست را وارد کنید" id="basic-url" aria-describedby="basic-addon3">
                </div>

                <label class="form-label" for="select-category"> دسته بندی </label>
                <select class="form-select form-select-sm" name="category_id" id="select-category" aria-label=".form-select-sm example">
                    <?php foreach ($categories as $category) : ?>
                        <option <?php
                        if ($category->id === $result->category_id) echo "selected"; ?> value="<?=$category->id?>">
                            <?=$category->name?> > <?php  if ($category->category_type == '0') echo 'نرم افزار'; else echo 'بازی'?> </option>
                    <?php endforeach; ?>
                </select>

                <div class="mb-2 my-3 ">
                    <label for="exampleFormControlTextarea1" class="form-label"> توضیحات کوتاه پست</label>
                    <textarea class="form-control" name="summary"  placeholder="توضیحات کوتاه پست را وارد کنید" id="exampleFormControlTextarea1" rows="3"> <?=$result->summary?> </textarea>
                </div>

                <div class="mb-2 my-3 ">
                    <label for="exampleFormControlTextarea1" class="form-label"> راهنمای نصب </label>
                    <textarea class="form-control" name="installationGuide" placeholder="درصورت لازم  بودن توضیحات نصب را وارد کنید" id="exampleFormControlTextarea1" rows="3"><?=$result->installationGuide?> </textarea>
                </div>

                <div class="mb-2 my-3 ">
                    <label for="exampleFormControlTextarea1" class="form-label"> توضیحات کامل   </label>
                    <textarea class="form-control" name="description" placeholder=" توضیحات کامل را وارد کنید" id="editor1" rows="3"><?=$result->description?> </textarea>
                </div>

                <div class="input-group mb-3 my-3">
                    <input type="file" name="avatar" class="form-control" placeholder="عکس پست را وارد کنید" id="inputGroupFile02">

                </div>
                <div class="input-group mb-3 my-3">
                    <img src="<?=$result->avatar?>" alt="عکس موجود نیست">
                </div>



                <input type="submit" class="btn btn-primary my-4" value="ویرایش پست">
            </form>
        </div>


    </main>

</div>

<?php require realpath(__DIR__ . '/../layouts/footer.php'); ?>

</html>








