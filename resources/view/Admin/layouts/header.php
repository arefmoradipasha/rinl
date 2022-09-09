<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.8.3/font/bootstrap-icons.css">
    <link rel="stylesheet" href="<?=asset('admin/css/bootstrap/bootstrap.min.css')?>">
    <link rel="stylesheet" href="<?=asset('admin/css/grid.css') ?>">
    <title>Document</title>
</head>
<body>

<header class="header shadow">
    <nav class="d-flex justify-content-between">
        <div class="right-header d-flex justify-content-between">
            <div>
                <img src=" <?=asset('admin/image/6168397.png') ?>" class="logo mx-4" alt="logo">
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
                        <img src="<?=asset('admin/image/img_avatar.png') ?>" class="nav-image"  alt=" not found">

                        <span class="position-absolute profile-description">
                            <section>
                                <button class="btn btn-danger shadow"> خروج </button>
                            </section>

                        </span>
                    </span>

            </div>
        </div>
    </nav>

</header>

