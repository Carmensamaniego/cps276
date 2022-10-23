<?php
$output = "";



if(count($_POST) > 0){



    require_once 'createFile.php';
    $cfile = new NewFile();
    //if(isset($_POST['submit'])){ // this should be in class
        //if(file_exists($file)){
            //$output = "$cfile";
            //$cfile->createNewFile();
            //$output = "A directory already exists with that name";
        $output = $cfile->createNewFile();

        //}
        //else{
        //$output = "worked";
        }
    


?>



<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
    <title>File and Directory Assignment5</title>
</head>
<body>

    <main class="container"> 
        <form action="index.php" method="post">
        <h1>File and Directory Asignment</h1>
        <p> Enter a folder name and the contents of a file. Folder names should contain alpha numeric characters only. </p>
        <p><?php echo $output ?></p>
        <h2></h2>
        

        <div class="form-group">
            <label for="foldername"> Folder Name</label>
            <input type="text" class="form-control" name="foldername" id="foldername">
        </div>

        <div class="form-group">
            <label for="textcontent">File Content</label>
            <textarea style="height: 200px;" class="form-control" 
            id="textcontent" name="textcontent"></textarea>
        </div>

        <div class="form-group">
            <input type="submit" class="btn btn-success" name="submit" id="submit" value="Submit" >
        </div>

    </main>

</body>
</html>