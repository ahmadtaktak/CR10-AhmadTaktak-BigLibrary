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
    $picture=file_upload($_FILES["picture"]);
     
    $erroeMag="";

    $sql= "INSERT INTO data (title,ISBN_Code,short_description,publish_date,type,status,author_firstName,author_lastName,Publisher_name,Publisher_address,Publisher_szie,image) VALUES('$title',$ISBN_Code,'$short_description',$publish_date,'$type','$status','$author_firstName','$author_lastName','$Publisher_name','$Publisher_address','$Publisher_szie','$picture->fileName')";
    
    


if($conn->query($sql)===true){
    $class = "success";
    $message = "The entry below was successfully created <br>";
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
                <a href='../index.php'><button class="btn btn-primary" type='button'>Home</button></a>
            </div>
        </div>
    </body>
</html>