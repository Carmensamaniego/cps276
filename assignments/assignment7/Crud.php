<?php

class Crud extends Pdomethods{

	public function getNames($type){
		
		/* CREATE AN INSTANCE OF THE PDOMETHODS CLASS*/
		$pdo = new PdoMethods();

		/* CREATE THE SQL */
		$sql = "SELECT * FROM storedfiles";

		//PROCESS THE SQL AND GET THE RESULTS
		$records = $pdo->selectNotBinded($sql);

		/* IF THERE WAS AN ERROR DISPLAY MESSAGE */
		if($records == 'error'){
			return 'There has been and error processing your request';
		}
		else {
			if(count($records) != 0){
				//if($type == 'list'){return $this->createList($records);} //dont think I need this.
				if($type == 'input'){return $this->createInput($records);}	
			}
			else {
				return 'no files found';
			}
		}
	}

	public function addName(){
	
		$pdo = new PdoMethods();

		/* HERE I CREATE THE SQL STATEMENT I AM BINDING THE PARAMETERS */
		$sql = "INSERT INTO storefiles (file_name, file_itself) VALUES (:filename, :file)"; //might need to make file_name and file_itself

			 
	    /* THESE BINDINGS ARE LATER INJECTED INTO THE SQL STATEMENT THIS PREVENTS AGAIN SQL INJECTIONS */
	    $bindings = [
			[':filename',$_POST['filename'],'str'], //filename
			[':file',$_POST['file'],'file'], //filepath  might need direct path  also, is file a 'str' or 'file'?
			//[':eyecolor',$_POST['color'],'str'], //not needed
			//[':state',$_POST['state'],'str'] //not needed
		];

		/* I AM CALLING THE OTHERBINDED METHOD FROM MY PDO CLASS */
		$result = $pdo->otherBinded($sql, $bindings);

		/* HERE I AM RETURNING EITHER AN ERROR STRING OR A SUCCESS STRING */
		if($result === 'error'){
			return 'There was an error adding the file';
		}
		else {
			return 'File has been added';
		}
	}

	

	/*THIS FUNCTION TAKES THE DATA AND RETURNS THE DATA IN INPUT ELEMENTS SO IT CAN BE EDITED.  */
	private function createInput($records){
		$output = "<form method='post' action='fileUploadProc.php'>";  //change update_delete_name.php to something else maybe fileUploadProc.php
		$output .= "<input class='btn btn-success' type='submit' name='update' value='Update'>";
		//$output .= "<input class='btn btn-danger' type='submit' name='delete' value='Delete'>";
		$output .= "<table class='table table-bordered table-striped'><thead><tr>";
		$output .= "<th>Folder</th><th>PDF</th>/th><tbody>"; //change "<th>First Name</th><th>Last Name</th>/th><tbody>";
		foreach ($records as $row){
			$output .= "<tr><td><input type='text' class='form-control' name='filename^^{$row['id']}' value='{$row['first_name']}'></td>";

			$output .= "<td><input type='text' class='form-control' name='file^^{$row['id']}' value='{$row['last_name']}'></td>";

			//$output .= "<td><input type='text' class='form-control' name='color^^{$row['id']}' value='{$row['eye_color']}'></td>";

			
			//$output .= "<td><input type='text' class='form-control' name='state^^{$row['id']}' value='{$row['state']}'></td>";

			//$output .= "<td><input type='checkbox' name='inputDeleteChk[]' value='{$row['id']}'></td></tr>";
		}
		
		$output .= "</tbody></table></form>";
		return $output;
	}
}


?>