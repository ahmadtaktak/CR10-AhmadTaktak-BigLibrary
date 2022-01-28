<?php

require_once "action/db_connect.php";
if(isset($_GET["id"])){
    $id=$_GET["id"];
$sql="SELECT * FROM data WHERE id=$id ";
$result=mysqli_query($conn,$sql);
$row= mysqli_fetch_assoc($result);

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
.container{
    background-image:url("pictures/book3.jpg") ;
    width: 100%;
    height: 900px;
}
</style>
<body>




<div class="container ">

<div class="row">

<form class="row g-3 " action="action/a_update.php" method="post" enctype="multipart/form-data">


<div class="col-12 ">
    <label class="form-label">Title Off The Book:</label>
    <input type="text" class="form-control" value="<?php echo $row["title"]?>" name="title"  placeholder="Title Off The Book">
  </div>


  <div class="col-md-6">
    <label class="form-label">Author-FirstName:</label>
    <input type="text"  value="<?php echo $row["author_firstName"]?>" class="form-control"  name="author_firstName">
  </div>

  <div class="col-md-6">
    <label class="form-label">Author-LastName:</label>
    <input  class="form-control"  value="<?php echo $row["author_lastName"]?>" name="author_lastName" >
  </div>

  <div class="col-md-12">
    <label class="form-label">Publisher-Name:</label>
    <input  name="Publisher_name"  value="<?php echo $row["Publisher_name"]?>" class="form-control" >
  </div>

  <div class="col-md-4">
    <label  class="form-label">Publish-Address:</label>
    <input  class="form-control"  value="<?php echo $row["Publisher_address"]?>" name="Publisher_address" id>
  </div>
  
  <div class="col-md-4">
    <label  class="form-label">ISBN-Code:</label>
    <input type="number" class="form-control"  value="<?php echo $row["ISBN_Code"]?>" name="ISBN_Code" id>
  </div>
  
  <div class="col-md-4">
    <label  class="form-label">Publish-Date:</label>
    <input type="text "class="form-control"  value="<?php echo $row["publish_date"]?>" name="publish_date" >
  </div>

  <div class="col-12">
    <label  class="text-break">Short-Decription</label>
    <input type="text" class="form-control" name="short_description"  value="<?php echo $row["short_description"]?>" placeholder="Decription">
  </div>

  <div class="col-12 ">
    <label  class="form-label">Picture:</label>
    <input type="file" class="form-control"  name="picture"  >

    <input type="hidden" class="form-control"  value="<?php echo $row["id"]?>" name="id" >

    <input type="hidden" class="form-control"  value="<?php echo $row["image"]?>" name="picture" >
  </div>

  
  <!-- 
  <div class="col-md-6">
    <label for="inputCity" class="form-label">City</label>
    <input type="text" class="form-control" id="inputCity">
  </div>
  <div class="col-md-4">
    <label for="inputState" class="form-label">State</label>
    <select id="inputState" class="form-select">
      <option selected>Choose...</option>
      <option>...</option>
    </select>
  </div>
  <div class="col-md-2">
    <label for="inputZip" class="form-label">Zip</label>
    <input type="text" class="form-control" id="inputZip">
  </div> -->
  <div class=" text-center  p-3">
  
  <select name ="Publisher_szie" class=" col-3 fs-5 text-center">
    <option>Publisher_szie</option>  
    <option>Big</option>
    <option>Medium</option>  
    <option>Small</option>  
    
</select>
<select name="status" class="  col-3  fs-5 text-center" >
    <option>Status-Book</option>  
    <option>Available</option>
    <option>Reserved</option>  
    
</select>
<select name="type" class="  col-3  fs-5 text-center" >
    <option>Type</option>  
    <option>Book</option>
    <option>CD</option>  
    <option>DVD</option> 
    
</select>

  
</div>
  </div>
   <div class="col-12 text-center m-2 ">
    <button class=" col-5 btn btn-success fs-4" type="submit">Update Book</button>
    
    <!-- <a href="index.php" class='col-5 fs-4 btn btn-primary'type="button">Back To Home</a>
  </div>  -->
</form>

</div>

</div>

</body>
</html>