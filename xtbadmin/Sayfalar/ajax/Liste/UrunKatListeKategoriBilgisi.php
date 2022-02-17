<?php
require_once '../../../../system/ayar.php';
if ($_SERVER['REQUEST_METHOD'] === 'GET') {
    $sql = $db->prepare("SELECT * FROM urunkategorileri uk WHERE pid=0");
    $sql->execute();
	
				     while($row=$sql->fetch(PDO::FETCH_ASSOC)) 
					{
                        $KategoriID = $row['id'];
                        $KategoriAdi = $row['kategoriAdi'];
                    $deger[] ='<p>' . $KategoriID . "->" . $KategoriAdi . '</p>';
                }
	
          if (!empty($deger)){
            $sonuc["baslik"] = '<h4 style="font-weight: bold">KategoriID</h4>';
            $deger = array_unique($deger);
            $sonuc["ok"] = implode('',$deger);
            echo json_encode($sonuc); 
          }
          else {
            $sonuc["ok"]  = "Kategori bilgisini alamadik..";
            echo json_encode($sonuc); 
          }
      
}



 ?>