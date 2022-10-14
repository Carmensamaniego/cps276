<?php 

$output = "";

if(count($_POST) > 0){

    require_once 'addNameProc.php';
    $addName = new AddNamesProc();
    if(isset($_POST['addname'])){
        $output = $addName->addClearNames() . $_POST["namelist"];
        $names = explode("\n", $output);
        //print_r($names);
        sort($names);
        $output = implode("\n", $names);
    }
}

   /*<textarea style="height: 500px;" class="form-control" 
id="namelist" name="namelist"><?php echo $output ?></textarea>*/

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
    <title>Add Names</title>
</head>
<body>

    <main class="container"> 
        <form action="index.php" method="post">
        <h1>Add Names</h1>
        <h2></h2>
        <div class="form-group">
            <input type="submit" class="btn btn-success" name="addname" id="addname" value="Add Names" >
            <input type="submit" class="btn btn-success" name="clearnames" id="clearnames" value="Clear Names" >
        </div>

        <div class="form-group">
            <label for="name">Enter Name</label>
            <input type="text" class="form-control" name="name" id="name">
        </div>

        <div class="form-group">
            <label for="namelist">List of Names</label>
            <textarea style="height: 500px;" class="form-control" 
            id="namelist" name="namelist"><?php echo $output ?></textarea>
        </div>

    </main>

</body>
</html>