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
                
            $age = 28;
            $citizen = true;
            
            if($age >= 18 && $citizen) {
                print("<br/>");
                print($age . " You are old enough to vote!");
            } else {
                print("<br/>");
                print($age . " You're not old enough to vote!");
            }
                
                
                print("<br/>");
                print("<br/>");
                
                // Switch Case Break
                
                print("<strong>Switch Case Break</strong>");
                print("<br/>");
                
                $grade = 'A';
                
                switch($grade) {
                    case 'A':
                    case 'a': 
                        print("That's a great grade!");
                    break;
                    
                    case 'B': 
                    case 'b':
                        print("B is above average");
                    break;
                    
                    case 'C':
                    case 'c':
                        print("C is an average grade");
                    break;
                    
                    case 'D':
                    case 'd':
                        print("D is a low passing grade");
                    break;
                    
                    case 'F':
                    case 'f':
                        print("F is a failing grade.  You must retake the course");
                    break;
                    
                    default: print("Letter grade not recognized!");
                }
                
                print("<br/>");
                print("<br/>");
                
                print("<strong>Ternary Operator</strong>");
                print("<br/>");
                
                $voteString = ($age >= 18) ? "Can Vote" : "Can't Vote";
                
                print $voteString;
                
                $testScore = 67;
                
                $pass = ($testScore >= 60) ? true : false;
                
                print("<br/>");
                print($pass);
                
                
                print("<br/>");
                print("<br/>");
                
                print("<strong>Loops</strong>");
                print("<br/>");
                
                $i = 0;
                while($i < 10){
                    print($i);
                    print("<br/>");
                    $i++;
                }
                
        ?>
        
        <h1>Forms</h1>
        <br/>
        <h2>Please provide the following info</h2>
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