<?php require_once '../../db.php';
$email  =$_POST ["email"];
$name  =$_POST ["name"];
$onaykvkk=$_POST['kvkkonay'];
if($email !== ""){
$sql = $db->prepare("SELECT eposta FROM mailtoplama WHERE eposta='$email'");						
$sql->bindParam(':eposta',$email, PDO::PARAM_STR);
$sql->execute();

if($sql->fetch(PDO::FETCH_ASSOC) > 0){
  $sql2 = "SELECT eposta FROM mailtoplama WHERE eposta='$email'";
  foreach ($db->query($sql2) as $row) {
    if ($row['eposta'] > 0) {
    break;
    }
  } 
  echo '<script language="javascript">';
  echo 'Swal.fire("Başarılı", "Email adresini boş bırakmayınız!", "error");';
  echo 'window.location.replace(document.referrer);';  
  echo '</script>';
  }else {
    $ekle = $db->query("INSERT INTO mailtoplama (eposta,adisoyadi,kvkkonay) VALUES ('$email','$name','$onaykvkk')");
    echo json_encode(array('response' => 'Başarılı'));
  }
} else {
    echo 'Başarısız';
    
}
?>