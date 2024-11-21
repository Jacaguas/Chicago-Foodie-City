<?php
    /*created variable in order to assign the individual 
      page title to the header code in the php header.php file*/
    $title = "Galit"; 
    include("header.php");
?>
<body>
    
    <div class="heading">
        <h1>Acclaimed Restaurant</h1>
        <h2>"Galit"</h2>        
    </div>
    <!-- heading div end tag -->

    <div class="sectionbottom">
        <div class="dropdownlist">
            <button class="smallbutton">"Galit" Highlights</button>
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
        <!-- Image of Galit restaurant; across the whole page -->
        <img class=bannerimg id="carousel-img" src="assets/images/galit/galitbanner_1.jpg">
    </div>
    <!-- bannerimg div end tag -->   

    <!--break line with heading   -->   
    <div class="horizontal-rule-container">
        <div class="horizontal-rule"></div>
        <div class="centered-text" id="galit">
            &nbsp;Galit&nbsp;
        </div>
    </div>
            
   
    <!-- <div class="bigcontainer"> -->
        <div class="container">            
            <div class="littlecontainer">
                <!-- This will be a narrative of Girl and The Goat -->
                <h1>"Middle Eastern Cuisine"!</h1>
                <p>
                    <!-- Text across the part of the page/container speaking about Lincoln Park -->
                    This Jewish owned restaurant serves popular ethnic foods from the Middle East. 
                    Some of the foods prepared and served here have roots from other cultures 
                    like the Palestenian culture. Located in the bustling business district in Chicago, "The Loop", 
                    Galit is very popular among all ethnicities.
                                     
                </p>
            </div>
            <!-- littlecontainer div end tag -->
            <div class="littleimage">
                <!--map to find Galit is embedded; code from google maps -->
                <iframe width="100%" height="200" frameborder="0" scrolling="no" marginheight="0" marginwidth="0" src="https://maps.google.com/maps?width=100%25&amp;height=600&amp;hl=en&amp;q=Galit,%202429%20N%20Lincoln%20Ave,%20Chicago,%20IL%2060614+(My%20Business%20Name)&amp;t=&amp;z=14&amp;ie=UTF8&amp;iwloc=B&amp;output=embed"><a href="https://www.gps.ie/">gps devices</a></iframe>
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
                <img src ="assets/images/galit/galit_award.jpg"/>
            </div>      
            <div class="littlecontainer">
                <h1>Awards</h1>
                <!-- text box related to photo of restaurant on left -->
                <p>
                   The Michelin recognition of one star. Wine Spectator's 
                   "Award Of Excellence", and the James Beard Foundation
                   Award For Excellence. 
                   
                </p>
            </div>
                 
       </div>    
      
            
    <div class="sectionbottom">        
        
        <!-- button/drop down list of the restaurants on the page for easy return navigation  -->
               
            <div class="dropdownlist">
                <button class="smallbutton">"Galit" Highlights</button>
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
                    &nbsp;Salatim (Spreads and Pickles)&nbsp;
                </div>
            </div>
    
            <div class="container">
                
                <div class="littleimage">
                    <img src ="assets/images/galit/galit_dish1.jpg"/>
                </div>      
                <div class="littlecontainer">
                    <h1></h1>
                    <!-- text box related to photo of food on left -->
                    <p>
                        As an appetizer, the flamed pita with awesome spreads would set the tone for
                        a great dining experience. This particular dish is Hummus, pita, and salatim. 
                        Salatim includes pumpkin tershi, labneh, ezme, and pickles. These ingredients are very 
                        particular to the Palestinian culture. 
                        The reviews on this dish are amazing! It is said that it has a unique creaminess and texture that makes it unique. 
                    </p>
                </div>
                     
           </div>
         
          
                <!-- start of my experiment with the food pics and drop down -->
                  
                    
        <div class="sectionbottom">        
            
            <!-- button/drop down list of the restaurants on the page for easy return navigation  -->
                   
                <div class="dropdownlist">
                    <button class="smallbutton">"Galit" Highlights</button>
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
                
            <!--Beginning of the second popular dish  -->
            <div class="horizontal-rule-container">
                <div class="horizontal-rule"></div>
                <div class="centered-text" id="populardish2">
                    &nbsp;Lamb Shawarma&nbsp;
                </div>
            </div>
            <div class="container">
                
                <div class="littleimage">
                    <img src ="assets/images/galit/galit_lamb-Shawarma.jpg"/>
                </div>      
                <div class="littlecontainer">
                    <h1></h1>
                    <!-- text box related to photo of food on left -->
                    <p>
                        This would be a meat lovers dream! The slices of marinated lamb
                        are served very tender with warm pita bread. The proces of cooking
                        this delight is very slow, of course after marinating the lamb.
                        This flavor packed meat is then cooked very slow.                
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