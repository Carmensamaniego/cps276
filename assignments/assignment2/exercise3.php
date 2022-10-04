<?php

   /*  $row = "<tr>";
    $endRow = "</tr>";
    $cell = "<td>";
    $endCell = "</td>";

   function rowsCells() {

        for($i = 1; $1 < 16; $i++) {
            


        }

    }*/

//try 1



$row = "<table border='1'> ";

for ($i = 1; $i < 16; $i++){
        $row .= "<tr> ";
        $j = 1;
        while($j < 6){
            $row .= "<td>Row $i Cell $j </td>";
            $j++;
        }
        $row .= "</tr>";
}

$row .= " </table>";
/*
    //Next try

    $row = "<tr> ";

    for ($i = 1; $i < 16; $i++) {
        for($j = 1; $j < 6; $j++) {
            $row .= "<td> Row $i Cell $j </td>";
            
        
        }
        
    }
    $row .= " </tr>";

    //Next try



    /* 
    $row = "<tr> <td>
    for ($i = 1; $i < 16; $i++) {
        while($j < 6) {
            $j = 1;
            $row .= "Row $i Cell $j </td>";
        }
    } */
        

?>


<!DOCTYPE html>
<html>
<title>HTML Tutorial</title>
<body>


<?php echo $row ?>

</body>
</html>