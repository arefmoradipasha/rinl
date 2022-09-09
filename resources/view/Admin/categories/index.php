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
                    <li class="breadcrumb-item"><a href="/dashboard"> پنل ادمین </a></li>
                    <li class="breadcrumb-item active"> دسته بندی </li>
                </ol>
            </nav>

            <a href="/dashboard/category/create" class="btn btn-warning search-btn"> افزودن دسته بندی </a>

        </section>
        <hr>

        <div>
            <table class="table table-striped table-hover">
                <thead>
                <tr>
                    <th scope="col">ایدی</th>
                    <th scope="col">نام دسته بندی</th>
                    <th scope="col">نوع دسته بندی</th>
                    <th scope="col"><i class="bi bi-wrench-adjustable"></i></th>
                </tr>
                </thead>
                <tbody class="table-group-divider">
                <?php foreach ($result as $item): ?>
                <tr>
                    <th><?=$item->id ?></th>
                    <td><?=$item->name ?></td>
                    <td>
                        <?php
                            if ($item->category_type == 0)
                                echo 'برنامه';
                            else
                                echo 'بازی';
                        ?>
                    </td>

                    <td>
                        <a class="btn btn-sm btn-warning shadow" href="/dashboard/category/edit/<?=$item->id?>"> ویرایش </a>
                        <a class="btn btn-sm btn-danger shadow" href="/dashboard/category/delete/<?=$item->id?>"> حذف  </a>
                    </td>

                    <?php endforeach; ?>
                </tr>
                </tbody>
            </table>
        </div>


    </main>

</div>

<?php require realpath(__DIR__ . '/../layouts/footer.php'); ?>

</html>