<?php

include_once("addnotes.php");
require_once("adddisplaynotes.php");
include_once("Pages.php");
//require_once("Pages.php");

//$page = new Pages(); 

$addFunction = new DisplayFunctions();

//maybe move isset to index and $output adddisplaynotes->addnotes()   ???
if(isset($_POST["addnote"])) {
    $addFunction->addanote();
}


?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
    <title>Add Note Page assignment9</title>
</head>
<body>

    <main class="container"> 
        <form action="index.php" method="post" enctype="multipart/form-data">
            <h1>Add Note Page</h1>

            <nav>
            <a href="displaypage">Display Notes</a><br>
            </nav>
            

            <div class="form-group">
                <label for="datetime-local">Date and Time</label>
                <input type="datetime-local" class="form-control" id="datetime-local" name="datetime-local">
            </div>
    

            <div class="form-group">
                <label for="textcontent">Note</label>
                <textarea style="height: 300px;" class="form-control" 
                id="notes" name="notes"></textarea>
            </div>


            <div class="form-group">
                <input type="submit" class="btn btn-success" name="addnote" id="addnote" value="Add Note" >
            </div>
        </form>

    </main>

</body>
</html>