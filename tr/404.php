<?php 
require_once 'inc/header.php';
require_once 'db.php';
require_once 'css2.php';
?>


<style>
  @media only screen and (min-width: 991px) {
    .container{
        width: 1200px;
    max-width: 1200px;
    }
    .ilkteragrip{
        font-size:20px;
    }
}
@media only screen and (max-width: 991px) {
    .about-box4 .about-layout{
        padding: 40px 0px 30px 50px;
    }
}
</style>

<section class="error-wrap">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="error-box">
                            <div class="item-logo">
                                <img src="/tr/img/logo/logo3.png" alt="logo" width="684" height="327">
                            </div>
                            <h2 class="section-title">Aradığınız Sayfa Bulunamadı</h2>
                            <div class="error-button">
                                <a href="/" class="error-btn">Anasayfa</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

<?php require_once 'inc/footer.php'; ?>