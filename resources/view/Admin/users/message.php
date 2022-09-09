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
                    <li class="breadcrumb-item active">  ارسال پیام شخصی </li>
                </ol>
            </nav>

            <a href="/dashboard/user" class="btn btn-warning search-btn"> بازگشت </a>

        </section>
        <hr>
        <div>
            <h5 class="my-4"><i class="bi bi-chat-square-quote"></i> ارسال پیام شخصی به کاربر  </h5>

            <div class="border border-primary rounded-3 p-3">
                <form action="">

                    <div class="input-group mb-2">
                        <span class="h3"> نام کامل کاربر : <span class="text-bg-success rounded p-1"> <?=$result->first_name .' '. $result->last_name?> </span> </span>
                    </div>

                    <div class="mb-2 my-3 ">
                        <label for="message" class="form-label"> توضیحات کامل   </label>
                        <textarea class="form-control" name="description" placeholder=". . ." id="editor1" rows="8"></textarea>
                    </div>

                    <div class="mb-2 my-3">
                        <input  type="submit" class="btn  btn-primary" value="ثبت پیام">
                    </div>

                </form>
            </div>
        </div>


    </main>

</div>

<?php require realpath(__DIR__ . '/../layouts/footer.php'); ?>

</html>








