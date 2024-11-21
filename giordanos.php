<?php
    /*created variable in order to assign the individual 
      page title to the header code in the php header.php file*/
    $title = "Giordanos"; 
    include("header.php");
?>
<body>
    
    <div class="heading">
        <h1>Acclaimed Restaurant</h1>
        <h2>"Giordano's"</h2>        
    </div>
    <!-- heading div end tag -->

    <div class="sectionbottom">
        <div class="dropdownlist">
            <button class="smallbutton">"Giordano's" Highlights</button>
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
        <!-- Image of Giordano's restaurant; across the whole page -->
        <img class=bannerimg id="carousel-img" src="assets/images/giordanos/giordanosbanner_1.jpg">
    </div>
    <!-- bannerimg div end tag -->   

    <!--break line with heading   -->   
    <div class="horizontal-rule-container">
        <div class="horizontal-rule"></div>
        <div class="centered-text" id="giordano's">
            &nbsp;Giordano's&nbsp;
        </div>
    </div>
            
   
    <!-- <div class="bigcontainer"> -->
        <div class="container">            
            <div class="littlecontainer">
                <!-- This will be a narrative of Girl and The Goat -->
                <h1>"THE Deep Dish Pizza Place To Go"!</h1>
                <p>
                    <!-- Text across the part of the page/container speaking about Giordano's -->
                    This staple of Chicago is a product of Italian immigrants. 
                    Starting as a simple and humble sandwich place, the family owned business became
                    would make a pizza that was recogized as the best in Chicago. The stuffed 
                    pizza is now entrenched in Chicago culture. Giordano's remains one
                    of if not the best at making the Deep Dish pizza.
                                     
                </p>
            </div>
            <!-- littlecontainer div end tag -->
            <div class="littleimage">
                <!--map to find Giordano's is embedded; code from google maps -->
                <iframe width="100%" height="200" frameborder="0" scrolling="no" marginheight="0" marginwidth="0" src="https://maps.google.com/maps?width=100%25&amp;height=600&amp;hl=en&amp;q=130%20E%20Randolph%20St,%20Chicago,%20IL%2060601+(My%20Business%20Name)&amp;t=&amp;z=14&amp;ie=UTF8&amp;iwloc=B&amp;output=embed"><a href="https://www.gps.ie/">gps trackers</a></iframe>
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
                <img src ="assets/images/giordanos/giordanos_award2.jpg"/>
            </div>      
            <div class="littlecontainer">
                <h1></h1>
                <!-- text box related to photo of restaurant on left -->
                <p>
                    NBC,CBS Chicago, the New York Times, and others have
                    claimed Giordano's as having Chicago's best pizza. The
                    pizza is so sought after that Giordano's provides ships 
                    out thousands of frozen pizzas a week.
            
                </p>
            </div>
                 
       </div>    
      
            
    <div class="sectionbottom">        
        
        <!-- button/drop down list of the restaurants on the page for easy return navigation  -->
               
            <div class="dropdownlist">
                <button class="smallbutton">"Giordano's" Highlights</button>
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
                    &nbsp;Deep Dish Pizza&nbsp;
                </div>
            </div>
    
            <div class="container">
                
                <div class="littleimage">
                    <img src ="assets/images/giordanos/giordanos_awards.jpg"/>
                </div>      
                <div class="littlecontainer">
                    <h1></h1>
                    <!-- text box related to photo of food on left -->
                    <p>
                        Deep Dish Pizza is one of the highlights of Chicago! Giordano's 
                        is at the top with this pizza. Cooked in a deep pizza pan with stuffed crust,
                        there is more space to load with toppings. One slice is a hefty serving.
                        Nonetheless, the key at Giordano's is the quality of the crust and sauce.
                        Locals and visitor's alike flood Giordano's.
                    </p>
                </div>
                     
           </div>
         
          
                <!-- start of my experiment with the food pics and drop down -->
                  
                    
        <div class="sectionbottom">        
            
            <!-- button/drop down list of the restaurants on the page for easy return navigation  -->
                   
                <div class="dropdownlist">
                    <button class="smallbutton">"Giordano's" Highlights</button>
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
                    &nbsp;Chicken Parmesian&nbsp;
                </div>
            </div>
            <div class="container">
                
                <div class="littleimage">
                    <img src ="assets/images/giordanos/giordanos_chickenparm.jpg"/>
                </div>      
                <div class="littlecontainer">
                    <h1></h1>
                    <!-- text box related to photo of food on left -->
                    <p>
                        Although known mainly for their Deep Dish Pizza, Giordano's
                        has other fantastic options on the menu. One of which is their Chicken Parmesian.
                        The same roots that make up the deep dish pizza, are reflected in 
                        the special sauce prepared for this dish. 
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