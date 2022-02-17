<?php 
                require_once '../../db.php';
                if ($_SERVER['REQUEST_METHOD'] === 'GET') {
                    $ID = $_GET['ID'];
                    echo $ID;
                    $sql = $db->prepare("SELECT KategoriCozResim FROM urunkategorileri WHERE id = '$ID'");						
                    $sql->bindParam(':id',$ID, PDO::PARAM_INT);
                    $sql->execute();
                    $item = $sql->fetch(PDO::FETCH_ASSOC);
                    $deger[] = $item["KategoriCozResim"];
                }
                if (!empty($deger)){
                    $sonuc["ok"]  = $deger;
                    echo json_encode($sonuc); 
                  } else {
                    $sonuc["ok"]  = "<h3 style='text-align: center; width: 100%;'>Üzgünüz.. Kategoriye ait bir ürün bulunamadı..</h3>";
                    echo json_encode($sonuc); 
                  }
        ?>