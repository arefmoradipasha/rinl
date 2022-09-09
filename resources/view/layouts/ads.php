<section class="ads">
<?php foreach ($ads as $item): ?>
    <div>
        <a href="<?=$item->href?>"> <img class="adsImage" src="<?=$item->image?>" alt=""> </a>
    </div>
    <?php  endforeach; ?>
</section>