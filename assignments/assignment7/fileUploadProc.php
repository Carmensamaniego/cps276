<?php
//assignment7





    
    if (isset( $_POST["submit"])){
        processFile();
    }
    else {
        $output = "";
    }
    
    function processFile(){
        
        global $output;

                
        if ($_FILES["file"]["error"] == 4){
            $output = "<p>No file was uploaded. Make sure you choose a file to upload.<p>";
        }
    
        elseif($_FILES["file"]["size"] > 100000 || $_FILES["file"]["error"] == 1){
            $output = "<p>File is too big</p>";
        }
    
        elseif ($_FILES["file"]["type"] != "application/pdf") {
    
            $output = "<p>File must be a PDF</p>";
        }
    
        elseif (!move_uploaded_file( $_FILES["file"]["tmp_name"], "storedfiles/" . $_FILES["file"]["name"])){
                $output = "<p>Sorry, there was a problem uploading that photo.</p>";
        }
        else {
            // I think I have to fix this.
            //Also, is this what goes in our data table?
            //move_uploaded_file( $_FILES["file"]["tmp_name"], "storedfiles/" . $_FILES["file"]["filename"])
            $output = "<p>File has been added.</p>";
            //store file path storedfiles/$_FILES['file']['name']  will store someting like storedfiles/newlestter1.pdf  you will have to pu
            //this as anchor element <a href="russet-V8/~cs/storedfiles/newletter1.pdf">
        }
    
    }
    





 

 
?>