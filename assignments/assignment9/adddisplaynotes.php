<?php

require_once("Pdo_methods.php");

//$page = new Pages();


class DisplayFunctions extends PdoMethods {


    public function addanote(){
        // move this to adddisplaynotes maybe?
        $dateofnote = $_POST["datetime"];
        $t = strtotime($dateofnote); //timestamp 1970
        //$dateint = gettype((int)$t);
        //echo(date('l dS \o\f F Y h:i:s A', $t));  this was an example to help from tutor
        //$formatDate = (date("n/d/Y h:i a", $t)); //used page 318
        //echo $formatDate;
	
        $pdo = new PdoMethods();

         

        $thenote = $_POST["notes"];

        /* HERE I CREATE THE SQL STATEMENT I AM BINDING THE PARAMETERS */
        $sql = "INSERT INTO notes (the_date, the_note) VALUES (:thedate, :thenote)";
        //I need to figure this out up here
            
        /* THESE BINDINGS ARE LATER INJECTED INTO THE SQL STATEMENT THIS PREVENTS AGAIN SQL INJECTIONS */
        $bindings = [
            [':thedate',$t,'str'], //change from str?
            [':thenote',$_POST['notes'],'str']  //text instead of str?
        ];
    
        /* I AM CALLING THE OTHERBINDED METHOD FROM MY PDO CLASS */
        $result = $pdo->otherBinded($sql, $bindings);
    
        /* HERE I AM RETURNING EITHER AN ERROR STRING OR A SUCCESS STRING */
        if($result === 'error'){
            return 'There was an error';
        }
        else {
            return 'Notes added';
        }
    }

    public function getNotes($type){
       if(isset($_POST['submit'])){     
        /* CREATE AN INSTANCE OF THE PDOMETHODS CLASS*/
        $pdo = new PdoMethods();

        /* CREATE THE SQL */ // select all sql working, must connect the other still...
        //$sql = "SELECT the_date, the_note FROM notes WHERE the_date BETWEEN :begDate AND :endDate ORDER BY the_date DESC";
        $sql = "SELECT * FROM notes";

       /* if(isset($_POST['submit'])){
            $selectBeg = $_POST["begDate"];
            $b = strtotime($selectBeg);
            $begint = gettype((int)$b);
            $selectEnd = $_POST["endDate"];
            $e = strtotime($selectEnd);
            $endint = gettype((int)$e);
            //echo gettype($selectBeg);
       }

        $bindings = [ 
            [':begDate',$begint,'int'], 
            [':endDate',$endint,'int']  
        ];*/

        //PROCESS THE SQL AND GET THE RESULTS
        $records = $pdo->selectNotBinded($sql);

        /* IF THERE WAS AN ERROR DISPLAY MESSAGE */
        if($records == 'error'){
            return 'There has been and error processing your request';
        }
        else {
            if(count($records) != 0){
                if($type == 'table'){return $this->makeTable($records);}	
            }
            else {
                return 'no notes';
            }
        }
    }

    }


    private function makeTable($records){
        $output = "<table class='table table-bordered table-striped'><thead><tr>";
		$output .= "<th>Date</th><th>Note</th></tr><tbody>";
		foreach ($records as $row){
            $output .= "<tr><td>{$row['the_date']}</td>";
            

            $output .= "<td>{$row['the_note']}</td></tr>";
		}
		
		$output .= "</tbody></table></form>";
		return $output;
    }



}



?>

