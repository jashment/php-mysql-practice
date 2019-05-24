<!DOCTYPE html>
<html>
    <head>
        <title> Saving Files </title>
    </head>
    <body>
        <?php
            $fileName = "names.txt";
            $fp = fopen($fileName, 'w') or die ("Can't open the file!");
            
            $name = array("Roger", "Homer", "Peter", "Fry", "Stan");
            
            for($i=0; $i< count($name); $i++){
                fwrite($fp, $name[$i]. "\n");
            }
            
            fwrite($fp , "###END OF NAMES LIST###\n");
            
            fclose($fp);
            
            print("List of names saved.");
        ?>
    </body>
</html>