<?php


class AddNamesProc {



    /*$name = $_POST["name"];
    $sortNameArray = explode(" ",$name);
    $firstName = $nameArray[0];
    $lastName = $nameArray[1];
    $nameFormat = $lastName . ", " . $firstName;*/

        function addClearNames() {
            
            $name = $_POST["name"];
            $nameBreak = explode(" ",$name);
            $firstName = $nameBreak[0];
            $lastName = $nameBreak[1];
            $nameFormat = "$lastName, $firstName";
            $nameArray = "";
            

            if(isset($_POST['addname'])){
            
                $nameArray = "$nameFormat \n";

            

                return $nameArray;

            }

            if(isset($_POST['clearnames'])){
                return null;
            }
            
        }



        }
    

?>