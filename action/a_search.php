 <?php

require_once "db_connect.php";

$search=$_GET["search"];

$sql="SELECT * from data WHERE title LIKE '$search%'";


$result =mysqli_query($conn,$sql);

if(mysqli_num_rows($result)> 0){
while($row=mysqli_fetch_assoc($result)){

    echo "<div class='card   shadow p-3 mb-5 bg-body rounded m-3' style='width: 18rem;'>
    <img src='pictures/{$row["image"]}' class='card-img-top' alt='...'height='200'>
    <div class='card-body'>
      <h5 class='card-title text-center'>{$row["title"]}</h5>
     <div class='text-center'>
      <a href='red.php?id={$row["id"]}' class='btn btn-primary'>Red Mor</a></div>
      
    </div>
  </div>";
}
}else{
    echo "you dont have any thing...!";
}
?> 