<?php

require_once("Pdo_methods.php");

//$page = new Pages();


class DisplayFunctions extends PdoMethods {


    public function addanote(){
        // move this to adddisplaynotes maybe?
        $dateofnote = $_POST["datetime-local"];
        $t = strtotime($dateofnote); //timestamp 1970
        //echo(date('l dS \o\f F Y h:i:s A', $t));  this was an example to help from tutor
        //$formatDate = (date('n\/d\/Y g\:i a', $t)); //used page 318
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
            //[':eyecolor',$_POST['color'],'str'],
            //[':state',$_POST['state'],'str']
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
            
        /* CREATE AN INSTANCE OF THE PDOMETHODS CLASS*/
        $pdo = new PdoMethods();

        /* CREATE THE SQL */
        $sql = "SELECT * FROM notes";

        //PROCESS THE SQL AND GET THE RESULTS
        $records = $pdo->selectNotBinded($sql); //  <------ here is $records, Carmen!!!! see Pdo-methods and dbconn

        /* IF THERE WAS AN ERROR DISPLAY MESSAGE */
        if($records == 'error'){
            return 'There has been and error processing your request';
        }
        else {
            if(count($records) != 0){
                if($type == 'list'){return $this->createList($records);}
                if($type == 'input'){return $this->createInput($records);}
                if($type == 'table'){return $this->createTable($records);}	
            }
            else {
                return 'no names found';
            }
        }
    }

    private function createTable($records) {
        //$dateofnote = $_POST["datetime-local"];
        //$t = strtotime($dateofnote); //timestamp 1970
        //$formatDate = (date('n\/d\/Y g\:i a', $t));
        $w = "<table border='2'>
        <tr><td>Date</td><td>Note</td></tr>"; // maybe add  <th></th> later?
        foreach ($records as $row){
            $t = $row['the_date'];
            $formatDate = (date('n\/d\/Y g\:i a', $t));
            $w .= "<td>{$formatDate} </td> <td> {$row['the_note']}</td>";
        }
        $w .= "</table>";
        return $w;
    }

    // I need to change the code in here to make my table look better. 
    private function createList($records){
		$list = '<ol>';
		foreach ($records as $row){
        
			$list .= "<li>Name: {$row['the_date']} {$row['the_note']}</li>";
		}
		$list .= '</ol>';
		return $list;

        //from assignment2
        /*
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
        */
	}


    private function filterNotes($records) {
        //change begDate and endDate for input in displaypage.php
        $sql = "SELECT the_date, the_note FROM notes WHERE the_date BETWEEN :begDate AND :endDate ORDER BY hte_date DESC";
        $bindings = [
            [':thedate',$t,'str'], //change from str?
            [':thenote',$_POST['notes'],'str']  //text instead of str?
            //[':eyecolor',$_POST['color'],'str'],
            //[':state',$_POST['state'],'str']
        ];
    
        /* I AM CALLING THE OTHERBINDED METHOD FROM MY PDO CLASS */
        $result = $pdo->otherBinded($sql, $bindings);
        return $result;
    }

}



?>

