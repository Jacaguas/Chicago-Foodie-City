<?php
    /*created variable in order to assign the individual 
      page title to the header code in the php header.php file*/
    $title = "Girl And The Goat"; 
    include("header.php");
?>
<body>
    
    <div class="heading">
        <h1>Acclaimed Restaurant</h1>
        <h2>"Girl and The Goat"</h2>        
    </div>
    <!-- heading div end tag -->

    <div class="sectionbottom">
        <div class="dropdownlist">
            <button class="smallbutton">"Girl and The Goat" Highlights</button>
                <div class="dropdownlistblock">
                    <nav>
                        <div class="dropdownlinks">
                            <ul>
                                <li><a href="#awards">Awards</a></li>
                                <li><a href="#populardish1">Popular Dish 1</a></li>
                                <li><a href="#populardish2">Popular Dish 2</a></li>
                                
                            </ul>
                        </div>
                    </nav>
                </div>
        </div>
    </div> 
      
    <div>
        <!-- Image of Girl and The Goat restaurant; across the whole page -->
        <img class=bannerimg id="carousel-img" src="assets/images/girlandthegoat/girlandthegoatbanner_1.jpg">
    </div>
    <!-- bannerimg div end tag -->   

    <!--break line with heading   -->   
    <div class="horizontal-rule-container">
        <div class="horizontal-rule"></div>
        <div class="centered-text" id="girlandthegoat">
            &nbsp;Girl and The Goat&nbsp;
        </div>
    </div>
            
   
    <!-- <div class="bigcontainer"> -->
        <div class="container">            
            <div class="littlecontainer">
                <!-- This will be a narrative of Girl and The Goat -->
                <h1>"Family-Style with a twist"!</h1>
                <p>
                    <!-- Text across the part of the page/container speaking about Lincoln Park -->
                   This is a family-style restaurant that provides unique twist to the 
                   presentation of food and the ambiance. Patrons will say that they are
                   treated like family at Girl and The Goat. Part of the service includes
                   colorful names to the dishes like, "Crispy Pig Face","Yay for Apple", or iventive ones like "Wood-Grilled Brocoli".
                   and "Goat Empanadas". There is always something new to discover as the menu
                   changes seasonally.
                                     
                </p>
            </div>
            <!-- littlecontainer div end tag -->
            <div class="littleimage">
                <!--map to find Portillos is embedded; code from google maps -->
                <iframe width="100%" height="200" frameborder="0" scrolling="no" marginheight="0" marginwidth="0" src="https://maps.google.com/maps?width=100%25&amp;height=600&amp;hl=en&amp;q=809%20west%20randolph%20ave,%20chicago%20illinois+(My%20Business%20Name)&amp;t=&amp;z=14&amp;ie=UTF8&amp;iwloc=B&amp;output=embed"><a href="https://www.gps.ie/">gps vehicle tracker</a></iframe>
            </div>
            <!-- littleimage div end tag -->
            
        </div>
        <!-- container div end tag -->

        <!--break line with heading   -->
        <div class="horizontal-rule-container">
            <div class="horizontal-rule"></div>
            <div class="centered-text" id="awards">
                &nbsp;Awards&nbsp;
            </div>
        </div>

        <div class="container">
            
            <div class="littleimage">
                <!-- awards -->
                <img src ="assets/images/girlandthegoat/girlandthegoat_award.jpg"/>
            </div>      
            <div class="littlecontainer">
                <h1></h1>
                <!-- text box related to photo of restaurant on left -->
                <p>
                    Saveur Magazine's "America's Best New Restaurant" was earned with their first
                    restaurant review. The were nominated for the same recognition by the James Beard Award committee.
                    They have also earned a Michelin Star recognition...earning a star. Their Chef, Stephanie Lizard, has
                    earned Best New Chef.
                </p>
            </div>
                 
       </div>    
      
            
    <div class="sectionbottom">        
        
        <!-- button/drop down list of the restaurants on the page for easy return navigation  -->
               
            <div class="dropdownlist">
                <button class="smallbutton">"Girl and The Goat" Highlights</button>
                    <div class="dropdownlistblock">
                        <nav>
                            <div class="dropdownlinks">
                                <ul>
                                    <li><a href="#awards">Awards</a></li>
                                    <li><a href="#populardish1">Popular Dish 1</a></li>
                                    <li><a href="#populardish2">Popular Dish 2</a></li>
                                </ul>
                            </div>
                        </nav>
                    </div>
            </div>                                              
        

            <!-- Beginning of the second restuarant: The Gage -->

            <div class="horizontal-rule-container">
                <div class="horizontal-rule"></div>
                <div class="centered-text" id="populardish1">
                    &nbsp;Pig Face with Egg and Potato Straw&nbsp;
                </div>
            </div>
    
            <div class="container">
                
                <div class="littleimage">
                    <img src ="assets/images/girlandthegoat/girlandthegoat_pig-face-with-egg-and.jpg"/>
                </div>      
                <div class="littlecontainer">
                    <h1></h1>
                    <!-- text box related to photo of food on left -->
                    <p>
                        This pork sandwich is seasoned with cilantro, lime, and coriander.
                        It is rolled up sliced and cooked in a wooden oven. The crispy outcome
                        is finished off with Tamarind vinaigrette, Red-wine maple gastrique,
                        fried potato sticks, then topped with an egg. THIS is the signature
                        dish at Girl and The Goat.
                    </p>
                </div>
                     
           </div>
         
          
                <!-- start of my experiment with the food pics and drop down -->
                  
                    
        <div class="sectionbottom">        
            
            <!-- button/drop down list of the restaurants on the page for easy return navigation  -->
                   
                <div class="dropdownlist">
                    <button class="smallbutton">"Girl and The Goat" Highlights</button>
                        <div class="dropdownlistblock">
                            <nav>
                                <div class="dropdownlinks">
                                    <ul>
                                        <li><a href="#awards">Awards</a></li>
                                        <li><a href="#populardish1">Popular Dish 1</a></li>
                                        <li><a href="#populardish2">Popular Dish 2</a></li>
                                    </ul>
                                </div>
                            </nav>
                        </div>
                </div>
                
            <!--Beginning of the restaurant Italian Village  -->
            <div class="horizontal-rule-container">
                <div class="horizontal-rule"></div>
                <div class="centered-text" id="populardish2">
                    &nbsp;Grilled Broccolli&nbsp;
                </div>
            </div>
            <div class="container">
                
                <div class="littleimage">
                    <img src ="assets/images/girlandthegoat/girlandthegoat_grilledbroccolli.jpg"/>
                </div>      
                <div class="littlecontainer">
                    <h1></h1>
                    <!-- text box related to photo of food on left -->
                    <p>
                        A unique way to eat broccoli! They make a cream cheese sauce comprised of heavy cream, 
                        blue cheese crumbles, sugar, salt and pepper flakes. They also add yogurt.
                        A homemade version of the Girl and the Goat grilled broccoli 
                        from chef, Stephanie Izard's restaurant in Chicago.
                        
                    </p>
                </div>                     
           </div>
        
        <div class="sectionbottom">        
                
            <div>
                <button class="buttonbacktotop"><a href="#top">Back to top of page</a></button>
            </div>
        
    </div> 
    <!-- script call placed at the end of the body to let all of the html and elements load first  -->
    <script src="assets/scripts/indexbanner.js"></script>
</body>
<?php
    include("footer.php"); 
?>