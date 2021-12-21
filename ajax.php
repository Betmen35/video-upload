<?php 


if (!empty($_FILES['file'])) {


$adi=substr($_FILES['file']['name'],-4,4);
$rand= rand(1,99999999).$adi;
$yol="video/".$rand;

$tip= $_FILES['file']['type'];

if ($tip == "video/mp4") {

$cop=copy($_FILES['file']['tmp_name'],$yol);

if ($cop) {

$mov= move_uploaded_file($_FILES['file']['tmp_name'],$yol);


if ($mov) {
echo '<div class="alert alert-success" role="alert">
  işlem başarılı
</div>';
}

else{

echo '<div class="alert alert-danger" role="alert">
  hata dosya yüklenemedi!!
</div>';

}
}




}



}




?>