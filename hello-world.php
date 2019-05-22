<html>
    <body>
        <?php
            $name = "Jordan Ashment";
            
            $poem = "Roses are red, Violets are blue";
            $poem .= "</br>This poem sucks.";
            
            echo("<strong>Echo and Print</strong>");
                echo("<br/>");
            
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
                
                echo("<br/><strong>Arrays</strong>");
                echo("<br/>");
            
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
                
                echo("<br/><strong>Multidimentional Arrays</strong>");
                echo("<br/>");
                
                echo($teams['Red Sox'][2]);
                print("<br/>");
                echo($teams['Yankees'][1]);
                
                // Conditionals
                
            $age = 16;
            $citizen = true;
            
            if($age >= 18 && $citizen == true) {
                print("<br/>");
                print($age . " You are old enough to vote!");
            } else {
                print("<br/>");
                print($age . " You're not old enough to vote!");
            }
                
                
        ?>
        
        <h1>Please provide the following info</h1>
        <form action="formProcess.php" method="get">
                <!--<input type="button" value="Click me!" onclick="window.location.href='https://www.google.com'" />-->
                <p>What is your dog's name?
                    <input name="dogName" maxlength="30" />
                </p>
                
                <p>How old is your dog in human years?
                    <input name="dogAge" maxlength="3" />
                </p>
                
                <input type="submit" value="Complete" />
                
            </form>
            
            <form action="cond_audit.php" method="post">
                <p>What is your age?
                    <input type="text" name="age"/></p>
                <p>Are you a citizen?<br/>
                    <input type="radio" name="citizen" value="true"/>Yes<br/>
                    <input type="radio" name="citizen" value="false"/>No<br/>
                    <input type="submit" />
                </p>
            </form>
    </body>
</html>