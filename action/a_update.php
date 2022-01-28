<?php
require_once "db_connect.php";
require_once "file_upload.php";
if($_POST){
    $title=$_POST['title'];
    $ISBN_Code=$_POST["ISBN_Code"];
    $short_description=$_POST["short_description"];
    $publish_date=$_POST["publish_date"];
    $type=$_POST["type"];
    $status=$_POST["status"];
    $author_firstName=$_POST["author_firstName"];
    $author_lastName=$_POST["author_lastName"];
    $Publisher_name=$_POST["Publisher_name"];
    $Publisher_address=$_POST["Publisher_address"];
    $Publisher_szie=$_POST["Publisher_szie"];
    $id=$_POST["id"];
    $uploadError = '';
    
    $picture=file_upload($_FILES["picture"]);
    if($picture->error===0){
        ($_POST["picture"]=="book2.jpg")?: unlink("../pictures/$_POST[picture]");
       
        $sql="UPDATE data SET title='$title',image='$picture->fileName',ISBN_Code=$ISBN_Code,short_description='$short_description',publish_date=$publish_date,type='$type',
        status='$status',
        author_firstName='$author_firstName',author_lastName='$author_lastName',Publisher_name='$Publisher_name',Publisher_address='$Publisher_address',Publisher_szie='$Publisher_szie' WHERE id ={$id}";
    }else{
        $sql="UPDATE data SET title='$title',
        ISBN_Code=$ISBN_Code,short_description='$short_description',publish_date=$publish_date,
        type='$type',
        status='$status',
        author_firstName='$author_firstName',author_lastName='$author_lastName',Publisher_name='$Publisher_name',Publisher_address='$Publisher_address',Publisher_szie='$Publisher_szie' WHERE id ={$id}";
    }
    if(mysqli_query($conn,$sql)===TRUE){
        $class = "success";
        $message = "The entry below was successfully created <br>";
           
        $uploadError = ($picture->error !=0)? $picture->ErrorMessage :'';
    }else {
        $class = "danger";
        $message = "Error while creating record. Try again: <br>" . $conn->error;
        $uploadError = ($picture->error !=0)? $picture->ErrorMessage :'';
    }
    $conn->close();
} else {
header("location: ../error.php");
}  
    

  /*   $sql= "TNSERT TNTO data (title,author,ISBN_Code,short_description,publish_date,publisher,type,status,author_firsttName,Publisher_name,Publisher_address,Publisher_szie,picture) VALUES('$title','$author','$ISBN_Code','$short_description','$publish_date','$publisher','$type','$status','$author_firsttName','$Publisher_name','$Publisher_address','$Publisher_szie','$picture->fileName')";


if(mysqli_query($conn,$sql)){
    $class = "success";
    $message = "The entry below was successfully created <br>
        <table class='table w-50'><tr>
        <td> $title </td>
        <td> $ISBN_Code </td> 
        </tr></table><hr>";
    $uploadError = ($picture->error !=0)? $picture->ErrorMessage :'';
} else {
    $class = "danger";
    $message = "Error while creating record. Try again: <br>" . $conn->error;
    $uploadError = ($picture->error !=0)? $picture->ErrorMessage :'';
}
$conn->close();
} else {
header("location: ../error.php");
}  
 */



?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <title>Update</title>
        <?php require_once '../components/boot.php'?>
      
    </head>
    <body>
        <div class="container">
            <div class="mt-3 mb-3">
                <h1>Create request response</h1>
            </div>
            <div class="alert alert-<?=$class;?>" role="alert">
                <p><?php echo ($message) ?? ''; ?></p>
                <p><?php echo ($uploadError) ?? ''; ?></p>
<!--                 <a href='../index.php'><button class="btn btn-primary" type='button'>Home</button></a>
 -->            </div>
        </div>
    </body>
</html>