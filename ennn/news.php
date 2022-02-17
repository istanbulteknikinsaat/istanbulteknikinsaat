        <section class="news">
            <div class="wrapper">
			    <h6> <?php if(basename($_SERVER['PHP_SELF'], ".php") == "index") { echo "News & Announcements"; }else{ echo "Other News"; } ?></h6>
                 <a href="news">All News</a>
				 <ul class="owl-news">

				<?php include 'news-inner.php'; ?>
		
	
				</ul>
     			<a class="more-news" href="#">More news</a>
			</div>
      </section> 
