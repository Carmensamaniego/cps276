<?php

   class Sets {
        public function numberSets(){
            for ($i = 0; $i < 10; $i++) {
                if ($i % 2 == 0){
                continue;
                }
                echo "$i<br>";
            }
            
                
        }
    }

    $ul = "<ul>";

    for ($i = 1; $i < 5; $i++){
        $ul .= "<li>$i";
        $j=1;
        $ul .= "<ul>";
        while($j < 6){
            $ul .= "<li>$j</li>";
            $j++;
        }
        $ul .= "</ul></li>";

    }

    $ul .= "</ul>";


       

?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <title>MySQL PHP Test</title>
</head>
<body class="container">
    <?php  
    echo $ul;
    ?>
</body>
</html>