<?php

    class NewFile{



       // $output = "";

        function createNewFile(){
            if(isset($_POST['submit'])){
                if(is_dir("directories/".$_POST['foldername'])){
                    return "A directory already exists with that name";

                
               
            }
            else{
                $path = "directories/".$_POST['foldername'];

                //return "directory does not exist";
                 mkdir ($path);
                chmod($path, 0777);
                $handle = fopen($path . "/readme.txt", "w");
                fwrite($handle, $_POST['textcontent']);
                fclose($handle);
                return "\n File and Directory was created <br> <a href=$path/readme.txt
                >Path where file is located </a> \n";

            }
        }

        }

    

    }




?>