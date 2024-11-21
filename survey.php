<!-- this page wiil contain a form to gather opinions and suggestions from visitors
to the entire website -->

<?php

    $title = "Survey"; 

    include("header.php");

    include("/home/MAIN/hr6049/dbConn.php");

    include ("validate-sanitize.php");

    $review = "";

    $firstQuestion = "";
    $secondQuestion = "";
    $thirdQuestion = "";

    //Form: Web Design variables 
    $drewAttention = "";
    $clear = "";
    $helpful = "";
    $notClear = "";
    $notHelpful = "";

    //Form: Web Content variables               
    $easyToRead =  "";
    $interesting = "";
    $informative = "";
    $confusing = "";
    $hardToRead = "";
    $needMore = "";

   

    $submission_successful = false; 

    if(!empty($_POST['firstname']) && !empty($_POST['lastname']) && !empty($_POST['email'])) {
        //sending the input data to sanitize methods in my validate-sanitize.php page
        $firstName = sanitize($_POST['firstname']);
        $lastName = sanitize($_POST['lastname']);
        $email = sanitize($_POST['email']);
        $review = sanitize($_POST['review']);
       
         //sanitize email
         if (!emailCheck($email)) {            
            echo "Please enter the correct email format</br>";
            echo "<button onclick='window.location=\"survey.php\";'>Back</button>";//w3 schools provided way to redirect user back to the form if email entered is in wrong format.
            exit; 
        }
        
       

        $firstQuestion = isset($_POST['firstquestion']) ? $_POST['firstquestion'] : "No answer";
        $secondQuestion = isset($_POST['secondquestion']) ? $_POST['secondquestion'] : "No answer";
        $thirdQuestion = isset($_POST['thirdquestion']) ? $_POST['thirdquestion'] : "No answer";

        $drewAttention = isset($_POST['drewattention']) ? 1 : 0;//$_POST['drewattention'];//isset($_POST['drewattention']) ? $_POST['drewattention'] : 0;        
        $clear = isset($_POST['clear']) ? 1 : 0;
        $helpful = isset($_POST['helpful']) ? 1 : 0;  
        $notClear = isset($_POST['notclear']) ? 1 : 0; 
        $notHelpful = isset($_POST['nothelpful']) ? 1 : 0; 

        $easyToRead = isset($_POST['easytoread']) ? 1 : 0; 
        $interesting = isset($_POST['interesting']) ? 1 : 0; 
        $informative = isset($_POST['informative']) ? 1 : 0; 
        $confusing = isset($_POST['confusing']) ? 1 : 0; 
        $hardToRead = isset($_POST['hardtoread']) ? 1: 0; 
        $needMore = isset($_POST['needmore']) ? 1 : 0; 

  
                
        $sql = "INSERT INTO `chicagoreview` (`firstname`, `lastname`, `email`, `review`, `firstquestion`, `secondquestion`, `thirdquestion`, 
                `drewattention`, `clear`, `helpful`, `notclear`, `nothelpful`, 
                `easytoread`, `interesting`, `informative`, `confusing`, `hardtoread`, `needmore`)
                VALUES (?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?);";
                
        
        $stmt = $conn->prepare($sql);

        $stmt->bind_param('sssssssiiiiiiiiiii', $firstName, $lastName, $email, $review, $firstQuestion, $secondQuestion, $thirdQuestion, 
                                      $drewAttention, $clear, $helpful, $notClear, $notHelpful, 
                                      $easyToRead, $interesting, $informative, $confusing, $hardToRead, $needMore);
        $stmt->execute();
        $stmt->close();


        $submission_successful = true;

        //redirecting the user after they submit the form in order to keep them from refreshing the browser and creating duplicate rows in the database.
         //header("Location: survey.php");
       
        //exit();
    }
    
    //trying to fix the problem: when I delete the databas data, and try to refresh the webpage in order to not
            //have any data displayed, I still get the last input made and duplicate rows in the database
    

            
        if($submission_successful){
            $review = "";

            $firstName = "";
            $lastName = "";
    
            $firstQuestion = "";
            $secondQuestion = "";
            $thirdQuestion = "";
        
            //Form: Web Design variables 
            $drewAttention = "";
            $clear = "";
            $helpful = "";
            $notClear = "";
            $notHelpful = "";
        
            //Form: Web Content variables               
            $easyToRead =  "";
            $interesting = "";
            $informative = "";
            $confusing = "";
            $hardToRead = "";
            $needMore = "";
        }


?>
<body>

<h3>Survey/Review</h3>

<div class="bigformdiv">
    <form class="formdiv" action="survey.php" method="POST" onsubmit="return validate()">
        <!-- Provide seperate sections of the survey; easier to follow and reference -->
        
        <fieldset>
            <!-- collecting information to personalize this survey -->
            <legend style="color:coral;">Personal Information</legend>
            <label for="firstname">First Name</label>
            <input type="text" name="firstname" id="firstname">
            <label for="lasttname">Last Name</label>
            <input type="text" name="lastname" id="lastname"></br>
            <label for="email">Email</label>
            <input type="text" name="email" id="email">
        </fieldset></br>

        <fieldset>
        <legend style="color:coral;">Review My Favorite Place</legend>
            <p>Tell us what you think of the "Foodie City"!</p>
            <!-- Will try to make the text box larger -->
            <textarea class="textarea" id="review" name="review"></textarea>
        </fieldset>
        
        <fieldset>
        <!-- will remove the in-line styling for the legend elements and redo in the sytles sheet.
            I need to format and align the headings with the radio buttons -->
        <legend style="color:coral;">Website Navigation</legend>
            <table class="table">
                <tr class="formsmallheader" id="fromsmallheader">
                    <th></th>
                    <th>Yes</th>
                    <th>Some</th>
                    <th>No</th>                
                </tr>
                <tr>
                    <td>Was it easy to get to a page?</td>
                    <td><input type="radio" name="firstquestion" value="yes"></td>
                    <td><input type="radio" name="firstquestion" value="somewhat"></td>
                    <td><input type="radio" name="firstquestion" value="no"></td>                
                </tr>
                <tr>
                    <td>Was it easy to get back to a page?</td>
                    <td><input type="radio" name="secondquestion" value="yes"></td>
                    <td><input type="radio" name="secondquestion" value="somewhat"></td>
                    <td><input type="radio" name="secondquestion" value="no"></td>                
                </tr>
                <tr>
                    <td>Was it easy to get information on a restaurant's location/contact information?</td>
                    <td><input type="radio" name="thirdquestion" value="yes"></td>
                    <td><input type="radio" name="thirdquestion" value="somewhat"></td>
                    <td><input type="radio" name="thirdquestion" value="no"></td>                
                </tr>
            </table>          
        </fieldset>
        <fieldset>
            <legend style="color:coral;">Design</legend>
        <div class="surveydiv">
            <div class="surveysmalldiv">
                <p>Banner Images At Top of The Pages</p>
                <input type="checkbox" id="drewattention" name="drewattention">
                <label for="drewattention">Drew Attention</label></br>
                <input type="checkbox" id="clear" name="clear">
                <label for="clear">Clear</label></br>
                <input type="checkbox" id="helpful" name="helpful">
                <label for="helpful">Helpful</label></br>
                <input type="checkbox" id="notclear" name="notclear">
                <label for="notclear">Not Clear</label></br>
                <input type="checkbox" id="nothelpful" name="nothelpful">
                <label for="nothelpful">Not Helpful</label></br>
            </div>
            <div class="surveysmalldiv">
                <p>Content</p>
                <input type="checkbox" id="easytoread" name="easytoread">
                <label for="easytoread">Easy to read</label></br>
                <input type="checkbox" id="interesting" name="interesting">
                <label for="interesting">Interesting</label></br>
                <input type="checkbox" id="informative" name="informative">
                <label for="informative">Informative</label></br>
                <input type="checkbox" id="confusing" name="confusing">
                <label for="confusing">Confusing</label></br>
                <input type="checkbox" id="hardtoread" name="hardtoread">
                <label for="hardtoread">Hard to read</label></br>
                <input type="checkbox" id="needmore" name="needmore">
                <label for="needmore">Need more</label></br>
            </div>
        </div>
        </fieldset>
            <!-- validating form; using the onclick attribute, calling validate function in the java script file -->
        <input class="formbtn"type="submit" value="submit"> 
                
    </form>
</div>


<?php
//trying to place the flag in the right place so that I can keep from having duplicate data; I cannot clear the last data entry.
//it keeps displaying the last entry and saving to the database...creating duplicate rows.
if($submission_successful){
    $review = "";

    $firstName = "";
    $lastName = "";

    $firstQuestion = "";
    $secondQuestion = "";
    $thirdQuestion = "";

    //Form: Web Design variables 
    $drewAttention = "";
    $clear = "";
    $helpful = "";
    $notClear = "";
    $notHelpful = "";

    //Form: Web Content variables               
    $easyToRead =  "";
    $interesting = "";
    $informative = "";
    $confusing = "";
    $hardToRead = "";
    $needMore = "";
}

?>

<div>
    <!-- I NEED TO PLACE THE FETCH ASSOC HERE TO GET THE DATA FROM THE DATABASE-->
    
    <div>

        <?php

            $sql = "SELECT * FROM `chicagoreview` LIMIT 50";

            $result = $conn->query($sql);

            //$row = $result->fetch_assoc()
            if ($result && $result->num_rows > 0) {
                    while($row = $result->fetch_assoc()){


                        //check the radio buttons and checkboxes boolean values using ternary statements; assigning to variable then 
                        //echo the results to print out for a more pleasing display

                        //Web write-in review
                        $review = $row['review'];

                        //Web navigation answers
                    

                        //Web Design answers
                        $drewAttention = $row['drewattention'] == 1 ? "Drew attention" : "";
                        $clear = $row['clear'] == 1 ? "Clear" : "";
                        $helpful = $row['helpful'] == 1 ? "Helpful" : "";
                        $notClear = $row['notclear'] == 1 ? "Not Clear" : "";
                        $notHelpful = $row['nothelpful'] == 1 ? "Not Helpful" : "";

                        //Web Content answers                
                        $easyToRead = $row['easytoread'] == 1 ? "Easy to read" : "";
                        $interesting = $row['interesting'] == 1 ? "Interesting" : "";
                        $informative = $row['informative'] == 1 ? "Informative" : "";
                        $confusing = $row['confusing'] == 1 ? "Confusing" : "";
                        $hardToRead = $row['hardtoread'] == 1 ? "Hard to read" : "";
                        $needMore = $row['needmore'] == 1 ? "Need more" : "";
                ?>
                <div class="surveyprintwritein">
                        <?php
                            echo "<p class='name-email'> Name: " . $row['firstname'] . " " . $row['lastname'] . "</p>";
                            echo "<p class='name-email'> Email: " . $row['email'] . "</p>";
                        ?>
                </div>
                <div class="reviewmessage">

                        <?php
                            //Was it easy to get information on a restaurant's location/contact information?echo "<h4>My Review</h4></br>";
                            echo "<p style='margin-top: 0'>$review</p>";            
                        ?>

                </div>
                
            
            </div>            
                
        </div>    
        
            <div class="surveyprint">

                <div class="webnavanswers">

                    <?php
                        echo "<h3>Navigation</h3>";
                        echo "<p> Was it easy to get to a page? " . $row['firstquestion'] . "</p>";
                        echo "<p> Was it easy to get back to a page? " . $row['secondquestion'] . "</p>";
                        echo "<p> Was it easy to get information on a restaurant's location/contact information? " . $row['thirdquestion'] . "</p>";                  
                    ?>

                </div>

                <div class="designanswers">
                    <?php
                        echo "<h3>Design</h3>";
                        echo "<p>$drewAttention</p>";
                        echo "<p>$clear</p>";
                        echo "<p>$helpful</p>";
                        echo "<p>$notClear</p>";
                        echo "<p>$notHelpful</p>";
                            
                    ?>

                </div>
                <div class="contentanswers">
                    <?php
                        echo "<h3>Content</h3>";
                        echo "<p>$easyToRead</p>";
                        echo "<p>$interesting</p>";
                        echo "<p>$informative</p>";
                        echo "<p>$confusing</p>";
                        echo "<p>$hardToRead</p>";
                        echo "<p>$needMore</p>";

                        $easyToRead =  "";
                        $interesting = "";
                        $informative = "";
                        $confusing = "";
                        $hardToRead = "";
                        $needMore = "";

                        
                    ?>

                </div>
 
                <hr>
            </div>
            <?php  
                }  
          
                    
                    }else{
                        echo ("There are no reviews entered.");
                    }
                    
                ?>

                
</div>



    <!-- will validate form with the java script file; function called "validate" -->
         <script src="assets/scripts/indexbanner.js"></script>
</body>
<?php
    include("footer.php");  
?>