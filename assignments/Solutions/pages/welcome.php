
<?php


//require_once "addAdmin.php";  if statement for checking status
//require_once('pages/routes.php'); for $navAdmin and $navStaff


function init(){
    security();

//echo $nav;
    //echo $_SESSION['name'];
    //print_r($_SESSION);

    $name = $_SESSION['name'];
    return ["<h1>Welcome</h1><p>Welcome $name</p>",""];
    //echo $name;
    //echo var_dump($records);

}

?>