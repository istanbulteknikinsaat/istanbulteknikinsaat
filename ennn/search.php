<?php
  $title = "Search";
  $description = "";
   $keywords = "";
  include 'header.php'; 
?>


   <section class="landing">
  
<div class="landing-bottom"> 
           
            <div class="wrapper-1210">
<!--                   <ol class="breadcrumb">
                        <li itemscope itemtype="https://data-vocabulary.org/Breadcrumb">
                            <a href="/" itemprop="url">
                                <span itemprop="title">Ana Sayfa</span> /&nbsp;
                            </a>
                        </li>
                        <li itemscope itemtype="https://data-vocabulary.org/Breadcrumb">
                            <a href="geosentetikler" itemprop="url">
                                <span itemprop="title">Geosentetikler</span>

                            </a>
                        </li>
                    </ol> -->


             <h2 title="Results" class="search-results" data-url="search-results">Results</h2>

<form action="arama">
   <input type="hidden" name="q" id="tipue_search_input" autocomplete="off" required>
</form>
<div id="tipue_search_content"></div>


           
      </div> 
</div>



</section><!-- Landing END -->



<?php include 'footer.php'; ?>

