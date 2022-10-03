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

/*

    $row = "<tr>";
    //$cell = 0;

    for ($i = 1; $i < 16; $i++){
        $row .= "<tr>Row $i ";
        $j = 1;
        $row .= "<tr>";
        while($j < 5){
            $row .= "<td>Cell $j </td>";
            $j++;
        }
        $row .= "</td></tr>";

    }

    $row .= "</td>"; */

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

<h1>This is a heading</h1>

<?php echo $row ?>

<table border="1">
 <tr>
 <td>Cell 1</td>
 <td>Cell 2</td>
 </tr>
</table>

</body>
</html>