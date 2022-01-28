



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
}
.bakgraund{ background-image: url("https://cdn.pixabay.com/photo/2016/03/26/22/21/books-1281581_960_720.jpg");
   height: 400px;
   width: 100%;}

</style>
<body>

<div class="bakgraund"></div>


<div class="container">

<div class="row">

<form class="row g-3" action="action/a_create.php" method="post" enctype="multipart/form-data">


<div class="col-12 ">
    <label class="form-label">Title Off The Book:</label>
    <input type="text" class="form-control" name="title"  placeholder="Title Off The Book">
  </div>


  <div class="col-md-6">
    <label class="form-label">Author-FirstName:</label>
    <input type="text" class="form-control"  name="author_firstName">
  </div>

  <div class="col-md-6">
    <label class="form-label">Author-LasttName:</label>
    <input  class="form-control" name="author_lastName" >
  </div>

  <div class="col-md-12">
    <label class="form-label">Publisher-Nname:</label>
    <input  name="Publisher_name"class="form-control" >
  </div>

  <div class="col-md-4">
    <label  class="form-label">Publish-Address:</label>
    <input  class="form-control" name="Publisher_address" id>
  </div>
  <!-- <div
   class="col-md-6">
    <label for="inputPassword4" class="form-label">Publisher-LastNname:</label>
    <input type="password" class="form-control" id="inputPassword4">
  </div> -->
  <div class="col-md-4">
    <label  class="form-label">ISBN-Code:</label>
    <input type="number" class="form-control" name="ISBN_Code" id>
  </div>
  
  <div class="col-md-4">
    <label  class="form-label">Publish-Date:</label>
    <input type="number" class="form-control"  name="publish_date" >
  </div>

  <div class="col-12">
    <label  class="text-break">Short-Decription</label>
    <input type="text" class="form-control" name="short_description" placeholder="Decription">
  </div>

  <div class="col-12">
    <label  class="form-label">Picture:</label>
    <input type="file" class="form-control" name="picture"  placeholder="picture">
  </div>

  <div class=" text-center  p-3">
  
  <select name="Publisher_szie"  class="  col-3 fs-5 text-center">
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
    <button class=" col-5 btn btn-success fs-4" type="submit">Insert Book</button>
    
    <!-- <a href="index.php" class='col-5 fs-4 btn btn-primary'type="button">Back To Home</a> 
  </div>  -->
</form>

</div>

</div>

</body>
</html>