<?php
$output = "";

require_once "fileUploadProc.php";
require_once "Crud.php";
require_once "Pdo_methods.php";
require_once "Db_conn.php";
require_once "Page.php";
$page = new Page();
$crud = new Crud();  // will this go to this? <a href="storedfiles/">Show File List</a><br>

$output = "";

if(isset($_POST['update'])){
  $output = $crud->updateNames($_POST);
}
else if(isset($_POST['delete'])){
  $output = $crud->deleteNames($_POST);
}

echo  $output;

?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
    <title>File Upload assignment7</title>
</head>
<body>

    <main class="container"> 
        <form action="index.php" method="post" enctype="multipart/form-data">
        <h1>File Upload</h1>
        <h2></h2>
        <?php echo $page->nav(); ?>
        <a href="storedfiles/">Show File List</a><br>
        <p></p>
        

        <div class="form-group">
            <label for="filename"> Folder Name</label>
            <input type="text" class="form-control" name="filename" id="filename">
        </div>

        <div class="form-group">
      		<input type="file" name="file" id="file">
      	</div>

        <div class="form-group">
            <input type="submit" class="btn btn-success" name="submit" id="submit" value="Upload File" >
        </div>
</form>

    </main>

</body>
</html>