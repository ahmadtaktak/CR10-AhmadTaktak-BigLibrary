<?php
require_once "action/db_connect.php";
if(isset($_GET["id"])){
  $id=$_GET["id"];
 $sql="SELECT * FROM data WHERE id=$id";
$result=mysqli_query($conn,$sql);
$layout = mysqli_fetch_assoc($result);
$print=""; 


$print.="<div class='  content card shadow p-3 mb-5 bg-body rounded' style='width: 100%rem height:300rem;'>
<img src='pictures/{$layout["image"]}' class='card-img-top' alt='...'>
<div class='text-center card-body '>
<h1 class=' card-title text-center fst-italic fs-1'>{$layout["title"]}</h1>
  <p class='card-text fst-italic '>{$layout["short_description"]}</p><br>
  <p class='card-title '>Publish-Date : {$layout["publish_date"]}</p>
  
  <p class='card-title '>ISBN-Code : {$layout["ISBN_Code"]}</p>
  <p class='card-title '>Publisher : {$layout["publisher"]}</p>
  <p class='card-title '>Type : {$layout["type"]}</p>
  <p class='card-title '>Status : {$layout["status"]}</p>
  <p class='card-title '>Author-FirstName : {$layout["author_firstName"]}</p>
  <p class='card-title '>Author-FirstName : {$layout["author_firstName"]}</p>
  
 
  <div class='text-center'>
  <a href='delete.php?id={$layout["id"]}' class='btn btn-danger fs-3 col-3 m-2'>Delete</a>
 
  <a href='update.php?id={$layout["id"]}' class=' btn btn-warning fs-3 col-3 m-2 '>Update</a>
  
  </div>
</div>
</div>";
}

?>
 
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <?php require_once "components/boot.php"?> 
    <?php require_once "components/navbar.php"?> 
    <title>Document</title>
</head>
<style>
  .bakgraund{ background-image: url("https://cdn.pixabay.com/photo/2016/03/26/22/21/books-1281581_960_720.jpg");
   height: 400px;
   width: 100%;}
</style>
<body>
<div class="bakgraund"></div>
<div class="container">


        <div class="row">
 <?php echo $print?>;
 
        </div>
       
</div>
</body>
</html>