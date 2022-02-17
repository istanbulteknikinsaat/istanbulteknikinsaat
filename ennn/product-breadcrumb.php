
<?php
  $breadcrumpTitle3 = $title;
  $breadcrumpLink3 =  basename($_SERVER['PHP_SELF'], ".php");


?>

               <ol class="breadcrumb">
                                <li itemscope itemtype="https://data-vocabulary.org/Breadcrumb">
                                    <a href="<?php echo $breadcrumpLink1 ?>" itemprop="url">
                                        <span itemprop="title"><?php echo $breadcrumpTitle1 ?></span>
                                         /&nbsp;
                                    </a>
                                    
                                </li>
                                <li itemscope itemtype="https://data-vocabulary.org/Breadcrumb">
                                    <a itemprop="url">
                                        <span itemprop="title"><?php echo $breadcrumpTitle2 ?></span>
                                        /&nbsp;
                                    </a>
                                    
                                </li>  
                                <li itemscope itemtype="https://data-vocabulary.org/Breadcrumb">
                                    <a itemprop="url">
                                        <span itemprop="title"><?php echo $breadcrumpTitle3 ?></span>
                                    </a>
                                    
                                </li>
                            </ol>
    <div class="product-logo"></div>   
              