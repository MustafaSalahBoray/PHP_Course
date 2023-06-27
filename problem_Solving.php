<?php   


$username="mostafa";
$pass="123";
$db=new PDO("mysql:host=Localhost;dbname=e_comerces_coursehtml;Charset=utf8;",$username,$pass); 
 
 if (isset($_POST['submit'])) {
   $typeFile=$_FILES['file']['name'];
   $file=$_FILES['file']['tmp_name'];
  
   $upd=$db->prepare("INSERT INTO  worksShop (image) VALUES (:image) ");
   $upd->bindparam(":image",$typeFile);
   if ($upd->execute()) {
      move_uploaded_file($file,$typeFile);
   }
 }

?>
<form method="POST" enctype="multipart/form-data">
   <input type="file" name="file" >
   <button type="submit" name="submit" >submit</button>
</form>
<?php 
   $show=$db->prepare("SELECT * FROM worksShop");
      $show->execute();
      foreach ($show as $key ) {
        echo '<img src="'.$key['image'].'"';
      }

?>