<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.8.3/font/bootstrap-icons.css">
    <link rel="stylesheet" href="asset/css/bootstrap/bootstrap.min.css">
    <link rel="stylesheet" href="asset/css/grid.css">
    <title>Document</title>
</head>
<body>

    <header class="header shadow">
        <nav class="d-flex justify-content-between">
            <div class="right-header d-flex justify-content-between">   
                <div>
                    <img src="asset/image/6168397.png" class="logo mx-4" alt="logo">
                </div>
                <div>

                </div>
            </div>
            <div class="left-header d-flex justify-content-between align-items-center  d-none d-md-flex">
                <div class="mx-4">
                    <div class="search-container">
                        <input type="text" name="search" placeholder="Search..." class="search-input">
                        <a href="#" class="search-btn">
                            <i class="bi bi-zoom-in"></i> 
                        </a>
                    </div>
                </div>
                <div class="mx-5">
                    <span class="mx-5 position-relative">
    
                        <sup class="badge bg-warning"> 3</sup>
                        <i class="bi bi-chat-square-text-fill"></i>
    
                        <div class="position-absolute notify-nav">
                            <section class="notify-main shadow">
    
                                <div class="list-nav-notify d-flex justify-content-between align-items-center">
                                    <span class="mx-2 text-notify"> پیام ارسال شد </span>
                                    <i class="bi bi-circle-fill text-danger mx-2"></i>
                                </div>
    
                                <div class="list-nav-notify d-flex justify-content-between align-items-center">
                                    <span class="mx-2 text-notify"> پیام ارسال شد </span>
                                    <i class="bi bi-circle-fill text-danger mx-2"></i>
                                </div>
    
                                <div class="list-nav-notify d-flex justify-content-between align-items-center">
                                    <span class="mx-2 text-notify"> پیام ارسال شد </span>
                                    <i class="bi bi-circle-fill text-danger mx-2"></i>
                                </div>
    
                            </section>
    
                        </div>
                    </span>
                    <span class="nav-profile position-relative">
                        <i class="bi bi-chevron-compact-down"></i>
                        <span> aref moradi </span>
                        <img src="asset/image/img_avatar.png" class="nav-image"  alt=" not found">
                        
                        <span class="position-absolute profile-description">
                            <section >
                                <button class="btn btn-danger shadow"> خروج </button>
                            </section>

                        </span>
                    </span>
    
                </div>
             </div>
        </nav>

    </header>



        <div class=" d-flex justify-content-between">

            <aside id="sidebar" class="sidebar">

                <div class="mx-3 sidebar-main">
                    <section class="d-flex justify-content-between">
                        <a href="" class="mx-2 styleLink"> <i class="bi bi-house-fill"></i> خانه  </a>

                    </section>
                    <section>
                        <div class="d-flex justify-content-between dropdown">
                            <a href="#" onclick="dropDownSidebar()" class="styleLink mx-2 dropbtn"> <i class="bi bi-grid-fill"></i> دسته بندی  </a>
                            <i class="bi bi-chevron-left"></i>
                        </div>

                        <div id="mySidebarDropdown" class="dropdown-content">
                            <a class="styleLink" href=""> لیست دسته بندی ها</a>
                            <a class="styleLink" href=""> افزودن دسته بندی</a>
                            <a class="styleLink" href=""> </a>
                        </div>
                        
                    </section>
                    <section>
                        <div class="d-flex justify-content-between dropdown">
                            <a href="#" onclick="ddropDownSidebar()" class="styleLink mx-2 dropbtn"> <i class="bi bi-stack"></i> پست ها </a>
                            <i class="bi bi-chevron-left"></i>
                        </div>

                        <div id="dmySidebarDropdown" class="dropdown-content">
                            <a class="styleLink" href=""> لیست  کامل پست ها</a>
                            <a class="styleLink" href=""> لیست بازی ها</a>
                            <a class="styleLink" href=""> لیست نرم افزار ها</a>
                            <a class="styleLink" href=""> افزودن پست </a>

                        </div>
                        
                    </section>
                    <section>
                        <div class="d-flex justify-content-between dropdown">
                            <a href="#" onclick="tdropDownSidebar()" class="styleLink mx-2 dropbtn"> <i class="bi bi-person-square"></i> کاربران </a>
                            <i class="bi bi-chevron-left"></i>
                        </div>

                        <div id="tmySidebarDropdown" class="dropdown-content">
                            <a class="styleLink" href=""> لیست کاربران</a>
                            <a class="styleLink" href=""> لیست کاربران ادمین</a>
                        </div>  
                    </section>
                    <section>
                        <div class="d-flex justify-content-between dropdown">
                            <a href="#" onclick="xdropDownSidebar()" class="styleLink mx-2 dropbtn"> <i class="bi bi-chat-dots-fill"></i> نظرات </a>
                            <i class="bi bi-chevron-left"></i>
                        </div>

                        <div id="xmySidebarDropdown" class="dropdown-content">
                            <a class="styleLink" href=""> لیست نظرات</a>
                            <a class="styleLink" href=""> لیست نظرات خوانده نشده </a>
                            <a class="styleLink" href=""> لیست نظرات تایید نشده </a>
                            <a class="styleLink" href=""> لیست نظرات تایید شده </a>
                        </div>  
                    </section>

                    <section>
                        <div class="d-flex justify-content-between dropdown">
                            <a href="#" onclick="qdropDownSidebar()" class="styleLink mx-2 dropbtn"> <i class="bi bi-graph-up-arrow"></i> تبلیغات </a>
                            <i class="bi bi-chevron-left"></i>
                        </div>

                        <div id="qmySidebarDropdown" class="dropdown-content">
                            <a class="styleLink" href=""> لیست نظرات</a>
                            <a class="styleLink" href=""> لیست نظرات خوانده نشده </a>
                            <a class="styleLink" href=""> لیست نظرات تایید نشده </a>
                            <a class="styleLink" href=""> لیست نظرات تایید شده </a>
                        </div>  
                    </section>



                

            </aside>

            <main class="content mx-4">

                <section class="main-content mx-3 d-flex justify-content-between">

                    <nav aria-label="breadcrumb">
                        <ol class="breadcrumb">
                          <li class="breadcrumb-item active" aria-current="page">Library /</li> 
                          <li class="breadcrumb-item active" aria-current="page">Library</li>
                          <li class="breadcrumb-item active" aria-current="page">Library</li>
                        </ol>
                      </nav>

                          <a href="" class="btn btn-warning search-btn"> بازگشت </a>

                </section>
                <hr>

                <div>
                    <h5 class="my-4"> افزودن پست  </h5>

                    <form action="" >

                        <label for="basic-url" class="form-label">نام پست </label>
                        <div class="input-group mb-3">
                          <input type="text" class="form-control" placeholder="نام پست را وارد کنید" id="basic-url" aria-describedby="basic-addon3">
                        </div>


                        <label class="form-label" for="select-category"> زیر مجموعه دسته بندی </label>
                        <div class="input-group mb-3">
                            <select class="form-select" id="select-category" aria-label="Default select example">
                            <option> نرم افزار </option>
                            <option> بازی </option>
                          </select>
                        </div>


                        <div class="mb-3">
                            <label for="exampleFormControlTextarea1" class="form-label">توضیحات کوتاه پست  </label>
                            <textarea class="form-control" id="exampleFormControlTextarea1" rows="3"></textarea>
                          </div>

                        <div class="mb-3">
                            <label for="exampleFormControlTextarea2" class="form-label">توضیحات کامل پست  </label>
                            <textarea class="form-control" id="exampleFormControlTextarea2" rows="3"></textarea>
                          </div>
                        <div class="mb-3">
                            <label for="exampleFormControlTextarea2" class="form-label">توضیحات نصب   </label>
                            <textarea class="form-control" placeholder="اختیاری" id="exampleFormControlTextarea2" rows="3"></textarea>
                          </div>


                        <button class="btn btn-primary shadow my-3" type="button"> ثبت پست </button>
                    </form>
                </div>


            </main>





</body>

<script src="<?=\source\Helpers\asset('admin/js/App.js')?>"></script>
<script src="<?= \source\Helpers\asset('admin/js/bootstrap/bootstrap.min.js') ?>"></script>
</html>










