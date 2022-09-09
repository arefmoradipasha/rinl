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
                    <li class="breadcrumb-item active"><a href=""> عکس ها </a></li>
                </ol>
            </nav>

            <a href="/dashboard/post" class="btn btn-warning search-btn"> بازگشت </a>

        </section>
        <hr>
        <span class="h3 p-2">
            مدیریت عکس های پست :
            <span class="text-bg-secondary rounded-3 p-2"> <?= $result->postName?> </span>
        </span>

        <div class="mt-5">
            <table class="table table-striped table-hover">
                <thead>
                <tr>
                    <th scope="col">ایدی</th>
                    <th scope="col">عکس </th>
                    <th scope="col"> پست مربوطه</th>
                    <th scope="col"><i class="bi bi-wrench-adjustable"></i></th>
                </tr>
                </thead>
                <tbody class="table-group-divider">
                <?php foreach ($photoResult as $item): ?>
                <tr>
                    <th><?=$item->id ?></th>
                    <td><img class="photo-post" src=" <?=$item->img ?>" alt="عکس موجود نیست"> </td>
                    <td> <?=$item->postName?> </td>
                    <td>
                        <a class="btn btn-sm btn-danger shadow" href="/dashboard/post/show/addphoto/delete/<?=$item->id?>"> حذف  </a>
                    </td>

                    <?php endforeach; ?>
                </tr>
                </tbody>
            </table>
        </div>

        <hr>
        <form action="/dashboard/post/photo/store/<?=$result->id?>" method="post" enctype="multipart/form-data">

            <div class="mb-3 mx-3">
                <label for="exampleFormControlInput1" class="form-label">عکس برای اضافه کردن انتخاب کنید</label>
                <input type="file" name="img" class="form-control" id="exampleFormControlInput1" placeholder="name@example.com">
            </div>

            <input type="submit" value="ایجاد" class="btn btn-primary mx-3">
        </form>


        </div>



    </main>

</div>

<?php require realpath(__DIR__ . '/../layouts/footer.php'); ?>

</html>