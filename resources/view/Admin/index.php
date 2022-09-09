<html lang="fa">

<?php require 'layouts/header.php'?>

<div class=" d-flex justify-content-between">

    <?php require 'layouts/sidebar.php'?>

            <main class="content">

                <section class="main-content">

                    <div class="content-analize mx-3  d-flex justify-content-around row">

                        <div class="statistics card  col-sm-12  col-lg-4"> 
                            <a class="styleLink " href="#">
                                <div class="text-card  d-flex mx-2 justify-content-between">
                                    <p class=""> تعداد کاربران سایت   </p>
                                    <i class="bi bi-people-fill h4"></i>
                                </div>
                                <span class="d-flex justify-content-between align-content-center text-card desc-card">
                                    <span class="mx-5 h5"> <?=$userCount?> </span>
                                </span>
                            </a>
                        </div>

                        <div class="statistics card  col-sm-12  col-lg-4"> 
                            <a class="styleLink " href="#">
                                <div class="text-card  d-flex mx-2 justify-content-between">
                                    <p class=""> تعداد پست های سایت </p>
                                    <i class="bi bi-controller h4"></i>
                                </div>
                                <span class="d-flex justify-content-between align-content-center text-card desc-card">
                                    <span class="mx-5 h5"> <?=$postCount?> </span>
                                </span>
                            </a>
                        </div>


                        <div class="statistics card  col-sm-12  col-lg-4"> 
                            <a class="styleLink " href="#">
                                <div class="text-card  d-flex mx-2 justify-content-between">
                                    <p class="">تعداد دسته بندی های سایت</p>
                                    <i class=" h4 bi bi-bookmark-fill"></i>
                                </div>
                                <span class="d-flex justify-content-between align-content-center text-card desc-card">
                                    <span class="mx-5 h5"> <?=$categoryCount?> </span>
                                </span>
                            </a>
                        </div>
                    </div>
                    <hr>
                    <div class="mx-4 d-flex justify-content-between flex-wrap" >
                        <div class="lastApplication">
                            <table class="table table-active caption-top table-hover table-bordered">
                                <caption style="text-align: center;"> اخرین نرم افزار و بازی ها </caption>
                                <thead class="table-light">
                                  <th colspan="2"> نام </th>
                                  <th>  دستاورد ها </th>
                                  <th> اواتار  </th>
                                </thead>

                                <?php foreach ($posts as $post): ?>
                                <tbody>
                                  <td colspan="2"> <?=$post->postName?> </td>
                                  <td> <?=limitCharacter($post->gain,'47')?> ... </td>
                                  <td> <img class="mainImage" src="<?=$post->avatar?>" alt="not found"> </td>
                                </tbody>
                                <?php endforeach; ?>
                              </table>
                        </div>

                        <div class="mostViewPost ">
                            <table class="table table-active caption-top table-hover table-bordered">
                                <caption style="text-align: center;"> اخرین کاربران  </caption>
                                <thead class="table-light">
                                  <th colspan="2">  نام کاربر</th>
                                  <th> ایمیل </th>
                                  <th> اواتار </th>
                                </thead>
                                <?php foreach ($users as $user): ?>
                                <tbody>
                                  <td colspan="2">  <?=$user->first_name?> </td>
                                  <td > <?=$user->email?> </td>
                                  <td> <img src="<?=$user->avatar?>" alt="تصویری موجود نیست"> </td>
                                </tbody>
                                <?php endforeach; ?>
                              </table>
                        </div>

                    </div>

                    <div class="mx-4">
                        <div class=" container rounded-3 border border-2 border-dark my-5 bg-white" style="height:auto;">
                            <div>
                            <h3> تودو لیست </h3>
                        <div class="row">
                                <div class=" col-8">
                            <input class=" py-3 form-control shadow" placeholder="input your task" type="text" id="inputText"> 
                                </div>
                                <div class="col-2">
                                    <!-- <i onclick="addList()" class=" btn btn-dark rounded-pill fas fa-4x fa-plus-circle "></i> -->
                                    <button onclick="addList()" class=" mt-2 btn btn-dark"> اضافه کردن </button>
                                </div>
                            </div>
                        </div>
                            <hr>
                        <div class="row rounded bg-white">
                            <div class=" col-12"> 
                            <ul class=" list-group" id="list"></ul>
                            </div> 
                        </div> 
                     </div>
                    </div>
                </section>
            </main>

</div>

    <?php require 'layouts/footer.php'; ?>
</html>








