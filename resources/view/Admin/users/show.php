<!DOCTYPE html>
<html lang="en">

<?php require realpath(__DIR__ . '/../layouts/header.php'); ?>


<div class=" d-flex justify-content-between">

    <?php require realpath(__DIR__ . '/../layouts/sidebar.php'); ?>

    <main class="content mx-4">

        <section class="main-content mx-3 d-flex justify-content-between">

            <nav aria-label="breadcrumb">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"></li>
                    <li class="breadcrumb-item"><a href="/dashboard">پنل ادمین </a></li>
                    <li class="breadcrumb-item"><a href="/dashboard/user">کاربران </a></li>
                    <li class="breadcrumb-item active"> اطلاعات کاربر</li>
                </ol>
            </nav>

            <a href="/dashboard/user" class="btn btn-warning search-btn"> بازگشت </a>

        </section>
        <hr>
        <div>
            <ul class="list-group list-group-flush">
                <li class="list-group-item"> نام :  <?= $result->first_name ?> </li>
                <li class="list-group-item"> نام خانوادگی : <?= $result->last_name ?> </li>
                <li class="list-group-item"> ایمیل : <?= $result->email ?> </li>
                <li class="list-group-item">شماره تماس : <?= $result->phone_number ?> </li>
                <li class="list-group-item">وضعیت : <?php
                    if ($result->status == 0)
                        echo 'غیرفعال';
                    else
                        echo 'فعال';
                    ?> </li>
                <li class="list-group-item"> اواتار : <img src="<?= $result->avatar ?>" alt="عکس موجود نیست"></li>
            </ul>
        </div>


    </main>

</div>

<?php require realpath(__DIR__ . '/../layouts/footer.php'); ?>

</html>








