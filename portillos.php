<?php
    /*created variable in order to assign the individual 
      page title to the header code in the php header.php file*/
    $title = "Portillos"; 
    include("header.php");
?>
<body>

    <div class="heading">
        <h1>Acclaimed Restaurant</h1>
        <h2>"Portillos"</h2>        
    </div>
    <!-- heading div end tag -->

    <div class="sectionbottom">
        <div class="dropdownlist">
            <button class="smallbutton">"Portillos" Highlights</button>
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
        <!-- Image of Portillos restaurant; across the whole page -->
        <img class=bannerimg id="carousel-img" src="assets/images/portillos/portillosbanner_1.jpg">
    </div>
    <!-- bannerimg div end tag -->   

    <!--break line with heading   -->   
    <div class="horizontal-rule-container">
        <div class="horizontal-rule"></div>
        <div class="centered-text" id="portillos">
            &nbsp;Portillos&nbsp;
        </div>
    </div>
            
   
    <!-- <div class="bigcontainer"> -->
        <div class="container">            
            <div class="littlecontainer">
                <!-- This will be a narrative of Alinea -->
                <h1>"Iconic Chicago Hot Dogs"!</h1>
                <p>
                    <!-- Text across the part of the page/container speaking about Portillos -->
                   You here of the wind, the deep dish pizza, and of course, "Chicago-style" hot dogs! Even though the 
                   large chain is present all over the U.S. now, Portillos is a staple of the Chicago foodie scene and one of the go to spots for this particular style 
                   of hot-dog. It is particular because of the poppy seed roll, huge pepper and pickle tucked beside
                   the dog, and other condiments. However, any local will also tell you that the Italian Beef Sandwich
                   is a must at Portillos. 
                                     
                </p>
            </div>
            <!-- littlecontainer div end tag -->
            <div class="littleimage">
                <!--map to find Portillos is embedded; code from google maps -->
                <iframe width="100%" height="200" frameborder="0" scrolling="no" marginheight="0" marginwidth="0" src="https://maps.google.com/maps?width=100%25&amp;height=600&amp;hl=en&amp;q=100%20W.%20Ontario%20St.,%20Chicago,%20IL%2060654+(My%20Business%20Name)&amp;t=&amp;z=14&amp;ie=UTF8&amp;iwloc=B&amp;output=embed"><a href="https://www.gps.ie/">gps vehicle tracker</a></iframe>
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
                <img src ="assets/images/portillos/portillos_award.jpg"/>
            </div>      
            <div class="littlecontainer">
                <h1>Awards</h1>
                <!-- text box related to photo of restaurant on left -->
                <p>
                    Portillos was recognized as Top 5 Fast Casual Restaurants in the Country (2020).
                    Also, the USA Today had Portillos as the 4th best fast-casual restaurant, nationwide.
                    Nonetheless, it is worth mentioning that a lot of recognition is 
                    given to Portillos as an employer. It has earned multiple Best in Biz Awards due to its 
                    performance as an employer with benefits, etc..
                    
                </p>
            </div>
                 
       </div>    
      
            
    <div class="sectionbottom">        
        
        <!-- button/drop down list of the restaurants on the page for easy return navigation  -->
               
            <div class="dropdownlist">
                <button class="smallbutton">"Portillos" Highlights</button>
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
                    &nbsp;Chicago-Style Hot Dog&nbsp;
                </div>
            </div>
    
            <div class="container">
                
                <div class="littleimage">
                    <img src ="assets/images/portillos/portillos_hotdog.jpg"/>
                </div>      
                <div class="littlecontainer">
                    <h1>No Ketchup Allowed!</h1>
                    <!-- text box related to photo of food on left -->
                    <p>
                        The Chicago-Style is of yellow mustard, chopped onions, relish, huge tomato
                        wedges, huge pickle spear, and celery salt. It is forbidden to have ketchup 
                        on this dog. It just doesn't go with it. Local custom is to rebuke those who
                        do. 
                    </p>
                </div>
                     
           </div>
         
          
                <!-- start of my experiment with the food pics and drop down -->
                  
                    
        <div class="sectionbottom">        
            
            <!-- button/drop down list of the restaurants on the page for easy return navigation  -->
                   
                <div class="dropdownlist">
                    <button class="smallbutton">"Portillos" Highlights</button>
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
                    &nbsp;Italian Beef Sandwich&nbsp;
                </div>
            </div>
            <div class="container">
                
                <div class="littleimage">
                    <img src ="assets/images/portillos/portillos_beefsandwich.jpg"/>
                </div>      
                <div class="littlecontainer">
                    <h1></h1>
                    <!-- text box related to photo of food on left -->
                    <p>
                        The Italian Beef Sandwich is certainly a hearty sandwich.The thin sliced beef,
                        seasoned very well in herbs and spices, in an awesome roll (crusty top), would satisfy
                        anyone. A unique thing is that the sandwich is soaked in a flavorful seasoned juice.
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