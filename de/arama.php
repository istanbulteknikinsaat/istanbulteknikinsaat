<?php 
require_once 'inc/header.php';
require_once 'db.php';

?>

<style>
.breadcrumb-wrap {
    background-image: url(/tr/img/service/hakkimizdabanner.jpg);
    background-repeat: no-repeat;
    background-size: cover;
    position: relative;
}
@media only screen and (min-width: 991px) {
    .container{
        width: 1200px;
    max-width: 1200px;
    }
    
}
.breadcrumb-box .breadcrumb .breadcrumb-item.active {
    color: #333;
}
.breadcrumb-box .breadcrumb .breadcrumb-item a {
    color: #e9ecef;
    transition: all 0.3s ease-in-out;
}
</style>
<section class="breadcrumb-wrap">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="breadcrumb-box">
                            <h1 class="page-title">Arama</h1>
                            <nav>
                                <ol class="breadcrumb">
                                    <li class="breadcrumb-item"><a href="/">Anasayfa</a></li>
                                    <li class="breadcrumb-item active" aria-current="page">Arama</li>
                                </ol>
                            </nav>
                        </div>
                    </div>
                </div>
            </div>
        </section>
<!-- end inner page banner -->
<div class="section padding_layout_1">
    <div class="container">
        <div class="row">
            <div class="col-md-12 col-lg-12">
                <div class="full">
                    <?php
if ($_SERVER['REQUEST_METHOD'] === 'GET' && $_GET['arama'] !== "") {
        $alinan = $_GET['arama']; 
        $keyword = htmlentities($alinan, ENT_QUOTES, 'UTF-8');
        echo '<h3 style="text-align:center;">Aranan kelime "' . $keyword . '"</h3>';
        $sql = $db->prepare("SELECT * FROM urunler WHERE UrunAdi LIKE '%$keyword%' OR UrunAciklama LIKE '%$keyword%'");	
        #$sql2 = $db->prepare("SELECT * FROM urunuygulamalari WHERE UrunTipiAdi LIKE '%$keyword%'");
        #$sql3 = $db->prepare("SELECT * FROM sektorler WHERE SektorAdi LIKE '%$keyword%'");
        $sql->execute();
        #$sql2->execute();
        #$sql3->execute();
        $urunleraramasi = $sql -> rowCount();
        #$uygulamalararamasi = $sql2 -> rowCount();
        #$sektorleraramasi = $sql3 -> rowCount();
        
        if($urunleraramasi > 0){
            echo '<div class="row">';
            while($row=$sql->fetch(PDO::FETCH_ASSOC)) {
                $urunID = $row['ID'];
                $urunAdi = $row['UrunAdi'];
                $urunResmi = $row['UrunResmi'];
                $KisaAciklama = $row['UrunKisaAciklama'];
                $slugurunadi=seo2($urunAdi);

                echo '
                
                    <div class="col-md-4 margin_bottom_30_all">
                        <div class="product_list">
                        <div class="product_img"> <a href="/tr/urundetay.php?id=' . $urunID . '&slug='.$slugurunadi.'"><img class="img-responsive" src="/images/products/' . $urunResmi . '" alt=""></a> </div>
                <div class="product_detail_btm">
                <div class="center urunbaslik" style="background-color:#128ad6 !important;     height: 50px !important;">
                <h4><a style="color: white !important;font-size: 20px;" href="/tr/urundetay.php?id=' . $urunID . '&slug='.$slugurunadi.'">' . $urunAdi . '</a></h4>
                    </div>
                    <div class="product_price">
                    <p>' . $KisaAciklama . '</p>
                    </div>
                </div>
                    </div>
            </div>
          
                ';
            }
            echo "</div>";
        } else {
            echo "??zg??n??z, arad??????n??z kelimeye uygun bir ??r??n bulamad??k.";
        }
    } else {
        echo "<script>location.href = '/tr/index.php'</script>";
}?>
                </div>
            </div>
        </div>
    </div>
</div>
<?php require_once 'inc/footer.php'; ?>