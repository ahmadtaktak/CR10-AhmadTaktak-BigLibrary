
   <?php
   require_once "action/db_connect.php";

   ?>
  <?php require_once "components/boot.php"?> 
   <?php require_once "components/navbar.php"?> 


<nav class="  navbar navbar-expand-lg navbar-dark bg-dark   ">
  <div class="container-fluid">
    <a class="navbar-brand" href="#">LIBRARY</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav me-auto mb-2 mb-lg-0">
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="index.php">Back To Home</a>
        </li>
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="create.php">Insert Book</a>
        </li>
        
        <li class="nav-item">
          <a class="nav-link" href="">link</a>
        </li>
       
      </ul>
      <form class="d-flex">
        <input class="form-control me-2" type="text" placeholder="Search" id="search" aria-label="Search" name="search">


        <button class="btn btn-outline-success" type="submit">Search</button>
      </form>
    </div>
  </div>
</nav>

