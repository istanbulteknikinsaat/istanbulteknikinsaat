<?php 
    $pictureFile = substr($_SERVER['PHP_SELF'], 9, -4).'/'.$pageName; 
    // $pictureFile = echo substr($_SERVER['PHP_SELF'], 8, -4).'/'.$pageName;  For publish
    // 

  

?>

</div>
<section class="responsive product-pictures">
        <div>
            <a rel="product-gallery-1" href="img/<?php echo $pictureFile ?>-uygulama-1-large.png" title="<?php echo $title ?> Uygulama 1" class="product-picture-swipebox">
                <img src="img/<?php echo $pictureFile ?>-uygulama-1.png" alt="<?php echo $title ?> Uygulama 1">
            </a>
        </div>
        <div>
            <a rel="product-gallery-1" href="img/<?php echo $pictureFile ?>-uygulama-2-large.png" title="<?php echo $title ?> Uygulama 2" class="product-picture-swipebox">
                <img src="img/<?php echo $pictureFile ?>-uygulama-2.png" alt="<?php echo $title ?> Uygulama 2">
            </a>
        </div>
        <div>
            <a rel="product-gallery-1"  href="img/<?php echo $pictureFile ?>-uygulama-3-large.png" title="<?php echo $title ?> Uygulama 3" class="product-picture-swipebox">
                <img src="img/<?php echo $pictureFile ?>-uygulama-3.png" alt="<?php echo $title ?> Uygulama 3">
            </a>
        </div>
</section>
<div class="wrapper">

