<?php
require_once '../../../../system/ayar.php';
if ($_SERVER['REQUEST_METHOD'] === 'GET') {
    $sql = $db->prepare("SELECT * FROM urunkategorileri uk INNER JOIN urunler u ON uk.id = u.UrunKatID ORDER BY u.UrunKatID ASC");
    $sql->execute();
	
				     while($row=$sql->fetch(PDO::FETCH_ASSOC)) 
					{
                        $KategoriID = $row['id'];
                        $KategoriPID = $row['pid'];
                        $KategoriAdi = $row['kategoriAdi'];
                        $UrunID= $row['ID'];
                        $UrunKatID= $row['UrunKatID'];
                    $deger[] ='<p>' . $UrunKatID . "->" . $KategoriAdi . '</p>';
          }	
          if (!empty($deger)){
            $sonuc["baslik"] = '<h4 style="font-weight: bold">KategoriID</h4>';
            $deger = array_unique($deger);
            $sonuc["ok"] = implode('',$deger);
            echo json_encode($sonuc); 
          } else {
            $sonuc["ok"]  = "Kategori bilgisini alamadik..";
            echo json_encode($sonuc); 
          }
      
}



 ?>