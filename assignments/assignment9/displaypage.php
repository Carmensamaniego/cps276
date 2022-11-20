<?php

require_once("adddisplaynotes.php");
$showtable = new DisplayFunctions();

$output = "";
//$dateofnote = $_POST["datetime-local"];
//$t = strtotime($dateofnote); //timestamp 1970

/*if(isset($_POST['submit'])) {
    $showtable->getNotes('table');
}*/





?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
    <title>Display Note Page assignment9</title>
</head>
<body>

    <main class="container"> 
        <form action="#" method="post" enctype="multipart/form-data">
        <h1>Display Notes</h1>
        <nav>
        <a href="index">Add Notes</a><br>
        </nav>

        <div class="form-group">
            <label for="begdate">Beginning Date</label>
            <input type="date" class="form-control" id="begDate" name="begDate">
        </div>

        <div class="form-group">
            <label for="endDate">Ending Date</label>
            <input type="date" class="form-control" id="endDate" name="endDate">
        </div>

        <div class="form-group">
            <input type="submit" class="btn btn-success" name="submit" id="submit" value="Get Notes" >
        </div>

        <p> Table goes here </p>
        <?php echo $showtable->getNotes('table'); ?>

</form>

    </main>

</body>
</html>