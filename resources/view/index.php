<?php require_once 'layouts/header.php'?>

      <section class="slider">
        <div id="carouselExampleFade" class="carousel slide carousel-fade" data-bs-ride="carousel">
          <div class="carousel-inner">
              <?php foreach ($slider as $slide): ?>
            <div class="carousel-item active">
              <a href="/post/<?=$slide->href?>"> <img src="<?=$slide->image_slider?>" class="d-block w-100 sliderImage" alt="..."> </a>
            </div>
              <?php endforeach; ?>
          </div>
          <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleFade" data-bs-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Previous</span>
          </button>
          <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleFade" data-bs-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Next</span>
          </button>
        </div>
      </section>

        <?php require_once "layouts/ads.php" ?>

      <section class="content-wrapper d-flex justify-content-between my-2">

        <?php require_once "layouts/sidebar.php" ?>

        <div class="content w-100">

            <?php foreach ($posts as $post): ?>
          <div class="posts my-2 w-100 p-3 rounded-3">
            <div>
              <div class="d-flex justify-content-between align-items-center">
                <div class="d-flex align-items-center"> 
                  <img src=" <?= $post->avatar ?>" class="img-post" alt="not found">
                  <a href="/post/<?= $post->id ?>" class="h5 mx-3 title-post"> <?= $post->postName ?></a>
                </div>

                <div>
                    <?php if ($post->category_type == 1){ ?>
                    <span class="btn btn-danger"> بازی </span>
                   <?php } else { ?>
                    <span class="btn btn-info"> برنامه </span>
                  <?php } ?>
                </div>
              </div>
                <hr>
                <span class="my-2">
                <?= limitCharacter($post->summary,'512')  ?>
                </span>
                <div class="d-flex justify-content-between align-items-center my-4">
                  <div>

                    <span class="mx-3 text-secondary">  <i class="bi bi-calendar-date-fill"></i> <?= $post->created_at ?>  </span>
                  </div>
                  <div>
                    <a href="/post/<?= $post->id ?>" class="btn btn-success"> ادامه مطلب </a>
                  </div>
                </div>
            </div>

          </div>
            <?php endforeach; ?>
        </div>

      </section>

<?php require_once "layouts/footer.php" ?>
