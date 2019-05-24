<!DOCTYPE html>
<html>
    <head>
        <title>Appending to a file</title>
    </head>
    <body>
        <?php
            $file = "airlines.txt";
            $fp = fopen($file, 'a') or die ("Can't open file");
            
            $airline1 = "Delta";
            $airline2 = "Frontier";
            
            fwrite($fp, $airline1 . "\n");
            fwrite($fp, $airline2 . "\n");
            
            
        ?>
    </body>
</html>