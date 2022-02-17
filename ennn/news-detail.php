<?php

   
  $newsImgDir = '../en/img/news/';
  $countDir =  substr_count($_SERVER['PHP_SELF'], '/') - 1;   $dirPosition = ''; for ($x = 1; $x <= $countDir; $x++) { $dirPosition .= "../"; }
  $dirPosition = $dirPosition.'en/';

  $pageName = basename($_SERVER['PHP_SELF'], ".php"); 

?>






<?php include 'news-page/'.$_GET['newsid'].'.php'; ?>
	<section class="social-share"><span>Share</span></section>
</div>
</section> <!-- Haberler Page END -->



<section>
   <?php  include $dirPosition.'news.php';  ?>
</section>


<?php include $dirPosition.'footer.php'; ?>
