<?php
require_once 'css2.php';
 ?>

<style>
.contact-icon i:after{
    background:#009ddc !important;
}
.contact-icon i{
  z-index:0 !important;
}
.contact-box1{
    padding: 45px 40px 20px 40px !important;
    cursor: pointer;
}
.personal-info-box2 .information-list li{
    color: #4b4e51 !important;
}
.contact-box3 .message-box .form-group .item-btn{
    background: #039ee3 !important; 
}
.contact-box1 .heading-title{
    margin-top: 5px !important;
}
.contact-box3 .item-heading .item-title{
    font-size: 20px;
}
.contact-box7{
    background-color: #f7f7f7;
    position: relative;
    border-radius: 4px;
    padding: 30px 0px 30px 50px !important;
}
.contact-box7 .contact-bg-image {
    position: absolute;
    bottom: 0;
    right: 0;
}
.contact-box3 .message-box .form-group .form-control{
    color: #6c757d !important;
}
.contact-box3 .message-box .form-group .item-btn:hover{
  color:#ffffff;
}
@media only screen and (max-width: 575px){
.contact-box7 {
    padding: 20px 30px 20px 30px !important;
}}
.contact-box3{
    padding: 0px 0px 45px 0px !important;
}
    @media only screen and (max-width: 575px){
.contact-box3 {
    padding: 20px 0px 20px 0px !important;
}}
@media only screen and (max-width: 575px){
.contact-box3 .item-heading .item-title {
    font-size: 20px;
}}
</style>
<div class="modal fade istanbulteknikform" id="bize-ulasin-pop-up" role="dialog">
  <div class="modal-dialog">
    <!-- Modal content-->
    <div class="modal-content" style="background-color:#f7f7f7;">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal"><i class="fa fa-close"></i></button>
      </div>
      <div class="modal-body" style="background-color:#f7f7f7;">
      <div class="col-lg-12">
            <div class="contact-box3">
                <div class="item-heading">
                    <h2 class="item-title">Bize Yazın</h2>
                    <p></p>
                </div>
                <form class="message-box" id="contact-form">
                    <div class="row gutters-10">
                        <div class="col-lg-6 form-group">
                            <input type="text" class="form-control" name="bname" id="bname" placeholder="Adınız Soyadınız*" data-error="Bu Alan Zorunludur" required>
                            <div class="help-block with-errors"></div>
                        </div>
                        <div class="col-lg-6 form-group">
                            <input type="text" class="form-control" name="bfirma" id="bfirma" placeholder="Firma Adı*" data-error="Bu Alan Zorunludur" required>
                            <div class="help-block with-errors"></div>
                        </div>
                        <div class="col-lg-6 form-group">
                            <input type="text" class="form-control" name="bgorev" id="bgorev" placeholder="Görev*" data-error="Bu Alan Zorunludur" required>
                            <div class="help-block with-errors"></div>
                        </div>
                        <div class="col-lg-6 form-group">
                            <input type="email" class="form-control" name="bemail" id="bemail" placeholder="Email*" data-error="Bu Alan Zorunludur" required>
                            <div class="help-block with-errors"></div>
                        </div>
                        <div class="col-lg-6 form-group">
                            <input type="text" class="form-control" name="btelefon"  id="btelefon" placeholder="Telefon*" data-error="Bu Alan Zorunludur" required>
                            <div class="help-block with-errors"></div>
                        </div>
                        <div class="col-lg-12 form-group">
                            <textarea name="mesaj" id="bmesaj" class="form-control" placeholder="Mesaj" cols="30" rows="6" data-error="Bu alan Zorunludur" required></textarea>
                            <div class="help-block with-errors"></div>
                        </div>
                        <div class="col-lg-12 form-group">
                            <a id="gonder-mail" class="item-btn">Gönder</a>
                        </div>
                    </div>
                    <div class="form-response"></div>
                </form>
            </div>
        </div>
      </div>
    </div>
  </div>
</div>
 