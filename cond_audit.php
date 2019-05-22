<!DOCTYPE html>
<html>
    <head>
        <title>Checking age</title>
    </head>
    <body>
        <?php
            $age = $_REQUEST['age'];
            $citizen = $_REQUEST['citizen'];
            
            if($age>=18 && $citizen=="true"){
                
                print("You are eligible to vote!");
            } else {
                print("You are not eligible to vote!");
            }
        ?>
    </body>
</html>