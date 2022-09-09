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
                    <li class="breadcrumb-item active"> تبلیغات</li>
                </ol>
            </nav>

            <a href="/dashboard/category/create" class="btn btn-warning search-btn"> مدیریت تبلیغات </a>

        </section>
        <hr>

        <div>
            <table class="table table-striped table-hover">
                <thead>
                <tr>

                    <th scope="col">ارجاع به </th>
                    <th scope="col">عکس  </th>
                    <th scope="col"><i class="bi bi-wrench-adjustable"></i></th>
                </tr>
                </thead>
                <tbody class="table-group-divider">

                <?php foreach ($result as $item): ?>

                <tr>
                    <td>
                        <a href="<?=$item->href?>"> <i class="h2 bi bi-link-45deg"></i></a>
                    </td>
                    <td><img src="<?=$item->image?>" class="dashboardAds" alt="عکسی وجود ندارد"></td>

                    <td>
                        <a class="btn btn-sm btn-danger shadow" href="/dashboard/ads/delete/<?=$item->id?>"> حذف تبلیغ  </a>
                        <a class="btn btn-sm btn-success shadow" href="/dashboard/ads/edit/<?=$item->id?>">  ویرایش </a>
                    </td>
                    <?php endforeach; ?>
                </tbody>
            </table>
        </div>


    </main>

</div>

<?php require realpath(__DIR__ . '/../layouts/footer.php'); ?>

</html>