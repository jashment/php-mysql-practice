<html>
    <body>
        <?php
            $name = "Jordan Ashment";
            
            $poem = "Roses are red, Violets are blue";
            $poem .= "</br>This poem sucks.";
            
            $family = array("Mark", "Joan", "Rick", "Brett", "Kerry", "Kevin");
            $vehicles[0] = "car";
            $vehicles[1] = "airplane";
            $vehicles[2] = "X-wing";
            $vehicles[3] = "Tardis";
            

            print($family[0] . " just purchased a new " . $vehicles[2]);
            print("<br/>");
            echo 'Hello World!';
            echo("<br/>");
            // printf("<br/> I am %d years old", 28);
            // printf("<br/> My name is $name")
            

            echo $poem;
            echo("<br/>");
            
            for($i = 0; $i < count($family); $i++) {
                print($family[$i]);
                print("<br/>");
            }
            
            // Declare array
            $gpas = (
                    "Smith" => 3.25,
                    "Johnson" => 3.1,
                    "Simpson" => 1.6,
                    "Musk" => 4.0
                )
            
            
        ?>
        <form>
                <input type="button" value="Click me!" onclick="window.location.href='https://www.google.com'" />
            </form>
    </body>
</html>