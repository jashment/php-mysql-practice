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
            
            // Associative array
            $gpas = array(
                    "Smith" => 3.25,
                    "Johnson" => 3.1,
                    "Simpson" => 1.6,
                    "Musk" => 4.0
                );
            
            print("<br/>");
            print("Eric Smith has a gpa of " . $gpas["Smith"]);
            print("<br/>");
            
            
            //Multi Dimensional Arrays
            
            $teams = array(
                    "Yankees" => array(
                            "Rivera",
                            "Jeter",
                            "Granderson",
                            "Sabathia",
                            "Gardner"
                        ),
                    "Mets" => array(
                            "Dickey",
                            "Acosta",
                            "Pelfrey"
                        ),
                    "Red Sox" => array(
                            "Ortiz",
                            "Bard",
                            "Buckholz",
                            "Beckett"
                        )
                );
                
                echo($teams['Red Sox'][2]);
                print("<br/>");
                echo($teams['Yankees'][1]);
        ?>
        <form>
                <input type="button" value="Click me!" onclick="window.location.href='https://www.google.com'" />
            </form>
    </body>
</html>