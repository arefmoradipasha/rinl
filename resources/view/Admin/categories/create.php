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
                    <li class="breadcrumb-item"><a href="/dashboard/category">  دسته بندی  </a></li>
                    <li class="breadcrumb-item active"><a href="">ساخت دسته بندی </a></li>
                </ol>
            </nav>

            <a href="/dashboard/category" class="btn btn-warning search-btn"> بازگشت </a>

        </section>
        <hr>

        <div>
            <h5 class="my-4"> افزودن دسته بندی  </h5>

            <form action="/dashboard/category/store" method="post" >

                <label for="basic-url" class="form-label">نام  دسته بندی </label>
                <div class="input-group mb-3">
                    <input type="text" name="name" class="form-control" placeholder="نام دسته بندی را وارد کنید" id="basic-url" aria-describedby="basic-addon3">
                </div>

                <label class="form-label" for="select-category"> شاخه دسته بندی </label>
                <select class="form-select form-select-sm" name="category_type" id="select-category" aria-label=".form-select-sm example">
                    <option value="0">نرم افزار</option>
                    <option value="1">بازی</option>
                </select>

                <input type="submit" class="btn btn-primary my-4" value="ثبت نام دسته بندی">
            </form>
        </div>


    </main>

</div>

<?php require realpath(__DIR__ . '/../layouts/footer.php'); ?>

</html>








