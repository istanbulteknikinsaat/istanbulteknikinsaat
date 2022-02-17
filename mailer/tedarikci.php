<!DOCTYPE html> 
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Sipariş Kabul Formu</title>
    <script src="https://code.jquery.com/jquery-3.3.1.min.js"></script>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
    <script src="https://unpkg.com/gijgo@1.9.13/js/gijgo.min.js" type="text/javascript"></script>
    <link href="https://unpkg.com/gijgo@1.9.13/css/gijgo.min.css" rel="stylesheet" type="text/css" />
</head>
   
   <body> 

<?php
error_reporting(0);
/**https://www.istanbulteknik.com/a/tedarikci.php?satid=SAT-017966
tedarikci.php?firmaadi=abcfirmasi&urunadi=birinciurunadi&urunmik=5&urunfiyat=8**/
if($_GET['satid']){
$satid=$_GET['satid'];
$mysqli = new mysqli("localhost","u6769472_istek","nf28Dm25A","u6769472_istanbulteknik");
$kontrol=$mysqli->query("SELECT satisid FROM satistalepform WHERE satisid='$satid'");
//print_r($kontrol->num_rows);
if($kontrol->num_rows != 1){
?>

<form class="form-horizontal" method="POST" action="contact_mail.php">
<fieldset>

<!-- Form Name -->
<legend align="center"><?php echo $satid; ?> Sipariş Teyit Formu</legend>

<!-- Multiple Radios -->
<div class="form-group">
  <label class="col-md-4 control-label" for="radios1">Satınalma siparişinizi kabul ediyoruz</label>
  <div class="col-md-4">
  <div class="radio">
    <label for="radios1-0">
	<input type="hidden" name="satid" id="radios1-1" value="<?php echo $satid; ?>">
      <input type="radio" name="kabul" id="radios1-0" value="Evet" checked="checked">
      Evet
    </label>
	</div>
  <div class="radio">
    <label for="radios1-1">
      <input type="radio" name="kabul" id="radios1-1" value="Hayır">
	  
      Hayır
    </label>
	</div>
  </div>
</div>

<!-- Multiple Radios -->
<div class="form-group">
  <label class="col-md-4 control-label" for="radios2">Ürünlerin tamamı stoklarımızda mı?</label>
  <div class="col-md-4">
  <div class="radio">
    <label for="radios2-0">
      <input type="radio" name="stok" id="radios2-0" value="Evet" required>
      Evet
    </label>
	</div>
  <div class="radio">
    <label for="radios2-1">
      <input type="radio" name="stok" id="radios2-1" value="Hayır" required>
      Hayır
    </label>
	</div>
  </div>
</div>



<!-- Prepended checkbox -->
<div class="form-group">
  <label class="col-md-4 control-label" for="prependedcheckbox">Ürünlerin <strong style=" text-decoration: underline;"><?php echo $satid; ?></strong> nolu satınalma formundaki <strong style=" text-decoration: underline;">teslim noktasında</strong> hazır olacağı tarih</label>
  <div class="col-md-4">
    <div class="input-group">
      <input id="datepicker" name="teslimtarih" value="" class="form-control" type="date" data-date-format="" placeholder="tarih" required="">

    </div>
   
  </div>
</div>




<!-- Textarea -->
<div class="form-group">
  <label class="col-md-4 control-label" for="notlar"></label>
  <div class="col-md-4">                     
    <textarea rows="5" cols="50" class="form-control" id="notlar" name="notlar"></textarea>
  </div>
</div>

<!-- Button -->
<div class="form-group">
  <label class="col-md-4 control-label" for="singlebutton"></label>
  <div class="col-md-4">
    <button type=submit id="singlebutton" name="singlebutton" class="btn btn-primary">Onayla</button>
  </div>
</div>
<?php } else {echo "<h2>Daha önce bu talep oluşturulmuştur.Yeniden talep oluşturulamaz.</h2>
                      <script>setTimeout(() => {  window.location='/'; }, 3000);</script>";
                    }?>

<?php }else { echo "<h2>Bu sayfaya doğrudan erişilemez.!!</h2>";} ?>
</fieldset>
</form>




   </body>
</html>