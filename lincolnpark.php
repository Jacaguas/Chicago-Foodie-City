
<?php
    /*created variable in order to assign the individual 
      page title to the header code in the php header.php file*/
    $title = "Lincoln Park"; 
    include("header.php");
?>

<body>

    <div class="heading">
        <h1>Lincoln Park</h1>
        <h2>"Cabbage Patch!"</h2>        
    </div>
    <!-- heading div end tag -->

    <div class="sectionbottom">
        <div class="dropdownlist">
            <button class="smallbutton">"Lincoln Park" Restaurants</button>
                <div class="dropdownlistblock">
                    <nav>
                        <div class="dropdownlinks">
                            <ul>
                                <li><a href="alinea.php">Alinea</a></li>
                                <li><a href="#CafeBaBaReeba">Cafe Ba-Ba-Reeba</a></li>
                                <li><a href="#RJGrunts">RJ Grunts</a></li>
                                <li><a href="galit.php">Galit</a></li>
                            </ul>
                        </div>
                    </nav>
                </div>
        </div>
    </div> 
      
    <div>
        <!-- Image of The Lincoln Park (in the Lincoln Park neighborhood/area) across the whole page -->
        <img class=bannerimg id="carousel-img" src="assets/images/lincolnpark/lincolnparkbanner_1.jpg">
    </div>
    <!-- bannerimg div end tag -->   
            
   
        <div class="container">            
            <div class="littlecontainer">
                <!-- This will be a narrative of Lincoln Park -->
                <h1>The "Cabbage Patch"!</h1>
                <p>
                    <!-- Text across the part of the page/container speaking about Lincoln Park -->
                   In the northern region of Chicago, Lincoln Park has an awesome range of attractions
                   and things to do. Nature, history, and recreation are within minutes of 
                   eachother. The very well known Lincoln Park Zoo is one of the many things to do. It is
                   covers the area from Grand Ave at the southern boundary, Ardmore Ave. in the north. Being 
                   very close to the Lake, the North Ave. Beach and Oak Street Beack are popular. 
                   With a large amount of millenials, as one could expect in the #1 Foodie City in the world, 
                   there are many amazing restaurants.      
                </p>
            </div>
            <!-- littlecontainer div end tag -->
            <div class="littleimage">
                <!--map is embedded; code from google maps -->
                <iframe width="100%" height="200" frameborder="0" scrolling="no" marginheight="0" marginwidth="0" src="https://maps.google.com/maps?width=100%25&amp;height=600&amp;hl=en&amp;q=Lincoln%20Park,%20Chicago,%20IL%20+(My%20Business%20Name)&amp;t=&amp;z=14&amp;ie=UTF8&amp;iwloc=B&amp;output=embed"><a href="https://www.gps.ie/">gps devices</a></iframe>
            </div>
            <!-- littleimage div end tag -->
            
        </div>
        <!-- container div end tag -->                 
            
            <!-- Beginning of the second restuarant: Cafe Ba Ba Reeba -->

            <div class="horizontal-rule-container">
                <div class="horizontal-rule"></div>
                <div class="centered-text" id="CafeBaBaReeba">
                    &nbsp;Cafe Ba-Ba-Reeba&nbsp;
                </div>
            </div>
    
            <div class="container">
                
                <div class="littleimage">
                    <img src ="assets/images/lincolnpark/lincolnpark_cafebabareeba2.jpg"/>
                </div>      
                <div class="littlecontainer">
                    <!-- text box related to photo of food on left -->
                    <p>
                        Spanish cuisine is specialized here. Cafe Ba-Ba-Reeba 
                        is considered Chicago's original tapas bar. Here you will find 
                        a menu that is described as "for sharing". Many bite-sized foods like pintxos
                        are available inside this lively restaurant rich with Spanish culture cuisine.
                        Patrons often pair the dishes with Spanish wine,Sangria, or even craft beers.
                    </p>
                </div>
                     
           </div>
         
          
                <!-- start of my experiment with the food pics and drop down -->
                  
                    <div class="sectionfoodpictures">        
                        <div class="dropdownlistforfood">                        
                            <img class="foodimages" src="assets/images/lincolnpark/lincolnpark_cafebaba_empanada.jpg">
                                <div class="dropdownlistblock">
                                    <h3>Handmade Beef Empanada</h3>
                                    <p>Beef Filling,
                                        Chimichurri Sauce (green sauce
                                        flavored with garlic vinegar 
                                        and olive oil),
                                        Flaky Pastry
                                    </p>
                                </div>
                        </div>
                        <!-- second pic -->
                        <div class="dropdownlistforfood">                        
                            <img class="foodimages" src="assets/images/lincolnpark/lincolnpark_cafebaba_friedcalamrari.jpg">
                                <div class="dropdownlistblock">
                                    <h3>Fried Calamari</h3>
                                    <p>Fried Calamari, Tomato Crudo, 
                                       Jalapeño Aioli
                                    </p>
                                </div>
                        </div>
                        <!-- third pic -->
                        <div class="dropdownlistforfood">                        
                            <img class="foodimages" src="assets/images/lincolnpark/lincolnpark_cafebaba_roasteddates.jpg">
                                <div class="dropdownlistblock">
                                    <h3>Roasted Dates in Bacon</h3>
                                    <p>Dates Wrapped In Bacon with 
                                        Apple Reduction
                                    </p>
                                </div>
                        </div>
                        <!-- fourth pic -->
                        <div class="dropdownlistforfood">                        
                            <img class="foodimages" src="assets/images/lincolnpark/lincolnpark_cafebaba_hangersteak.jpg">
                                <div class="dropdownlistblock">
                                    <h3>Hanger Steak Tapa</h3>
                                    <p>Hanger Steak, 
                                        Olive Oil whipped pottoes,
                                        Piquillo Pepper Adobo
                                    </p>
                                </div>
                        </div>
                    </div> 
                <!-- End of my experiment with food pics and drop down -->
            
            
            <div>           
                <div class="containerrestaurantmap" id="bottom">
                    <iframe width="60%" height="400" frameborder="0" scrolling="no" marginheight="0" marginwidth="0" src="https://maps.google.com/maps?width=100%25&amp;height=600&amp;hl=en&amp;q=Cafe%20Ba-Ba-Reeba,%202024%20N%20Halsted%20St,%20Chicago,%20IL%2060614+(My%20Business%20Name)&amp;t=&amp;z=14&amp;ie=UTF8&amp;iwloc=B&amp;output=embed"><a href="https://www.gps.ie/">gps devices</a></iframe>
                </div>
            </div>
        <div class="sectionbottom">        
            
            <!-- button/drop down list of the restaurants on the page for easy return navigation  -->
                   
                <div class="dropdownlist">
                    <button class="smallbutton">"Lincoln Park" Restaurants</button>
                        <div class="dropdownlistblock">
                            <nav>
                                <div class="dropdownlinks">
                                    <ul>
                                    <li><a href="alinea.php">Alinea</a></li>
                                    <li><a href="#CafeBaBaReeba">Cafe Ba-Ba-Reeba</a></li>
                                    <li><a href="#RJGrunts">RJ Grunts</a></li>
                                    <li><a href="galit.php">Galit</a></li>
                                    </ul>
                                </div>
                            </nav>
                        </div>
                </div>
                <div>
                    <p> 
                        Cafe Ba-Ba-Reeba</br>                       
                        2024 N Halsted St, Chicago, IL 60614</br>
                        (773) 935-5000</br>
                        Hours of Operation:</br>
                        Monday to Thursday: 4:00 PM - 9:00 PM</br>
                        Friday: 11:30 AM - 11:00 PM</br>
                        Saturday: 10:00 AM - 11:00 PM</br>
                        Sunday: 10:00 AM - 9:00 PM</br>
                        Website: <a href="https://cafebabareeba.com/">Cafe Ba-Ba-Reeba</a></br>                        
                        
                    </p>
                </div>

            <!--Beginning of the restaurant Italian Village  -->
            <div class="horizontal-rule-container">
                <div class="horizontal-rule"></div>
                <div class="centered-text" id="RJGrunts">
                    &nbsp;RJ Grunts&nbsp;
                </div>
            </div>
    
            <div class="container">
                
                <div class="littleimage">
                    <img src ="assets/images/lincolnpark/lincolnpark_rjgrunts.Jpeg"/>
                </div>      
                <div class="littlecontainer">
                    
                    <!-- text box related to photo of food on left -->
                    <p>
                        I visited Chicago for the first time to welcome in the new year...2024! While there, many locals 
                        that I spoke to would mention the amazing restaurants in the city. As I would search
                        the internet for a new place to eat, I learned that Chicago was voted as the #1 "Foodie" city in the world.
                        There wasn't a day that passed that didn't confirm that. In this website, I hope to bring to you a taste of Chicago.
                        Like most big cities, it has its specific neighborhoods. My time there was mostly 
                        near the downtown area. In each neighborhood like Lincoln Park, The Loop, or the West Loop, and others, 
                        I would experience the amazing food in some well known restaurants in each respective 
                        neighborhood.
                    </p>
                </div>
                     
           </div>
         
          
                <!-- start of my experiment with the food pics and drop down -->
                  
                    <div class="sectionfoodpictures">        
                        <div class="dropdownlistforfood">                        
                            <img class="foodimages" src="assets/images/lincolnpark/lincolnpark_rjgrunts_onionsoup.jpg">
                                <div class="dropdownlistblock">
                                    <h3>Onion Soup</h3>
                                    <p>Chicken Stock, Caramelized Onions,
                                       White Wine, Swiss Cheese top layer,
                                       Italian Bread layed over top
                                    </p>
                                </div>
                        </div>
                        <!-- second pic -->
                        <div class="dropdownlistforfood">                        
                            <img class="foodimages" src="assets/images/lincolnpark/lincolnpark_rjgrunts_yowzaburger.jpg">
                                <div class="dropdownlistblock">
                                    <h3>Yowza Burger</h3>
                                    <p>Beef Patty, Pepperjack Cheese,
                                        Applewood Smoked Bacon,
                                        Homemade Spicy Ketchup,
                                        Toasted Sesame Bun
                                    </p>
                                </div>
                        </div>
                        <!-- third pic -->
                        <div class="dropdownlistforfood">                        
                            <img class="foodimages" src="assets/images/lincolnpark/lincolnpark_rjgrunts_gruntburger.jpg">
                                <div class="dropdownlistblock">
                                    <h3>Grunt Burger</h3>
                                    <p>Beef Patty with Fried Onions and
                                        Blue Cheese over top, Sesame Roll
                                    </p>
                                </div>
                        </div>
                        <!-- fourth pic -->
                        <div class="dropdownlistforfood">                        
                            <img class="foodimages" src="assets/images/lincolnpark/lincolnpark_RJgrunts_frenchtoast.jpg">
                                <div class="dropdownlistblock">
                                    <h3>Pecan Praline French Toast</h3>
                                    <p>French Bread Loaf, Maple Syrup,
                                       Chopped Pecans
                                    </p>
                                </div>
                        </div>
                    </div> 
                <!-- End of my experiment with food pics and drop down -->
            
            
            <div>           
                <div class="containerrestaurantmap" id="bottom">
                    <iframe width="60%" height="400" frameborder="0" scrolling="no" marginheight="0" marginwidth="0" src="https://maps.google.com/maps?width=100%25&amp;height=600&amp;hl=en&amp;q=R.J.%20Grunts,%20%202056%20N.%20Lincoln%20Park%20West,%20Chicago,%20IL%2060614+(My%20Business%20Name)&amp;t=&amp;z=14&amp;ie=UTF8&amp;iwloc=B&amp;output=embed"><a href="https://www.gps.ie/">gps vehicle tracker</a></iframe>
                </div>
            </div>
        <div class="sectionbottom">        
            
            <!-- button/drop down list of the restaurants on the page for easy return navigation  -->
                   
                <div class="dropdownlist">
                    <button class="smallbutton">"Lincoln Park" Restaurants</button>
                        <div class="dropdownlistblock">
                            <nav>
                                <div class="dropdownlinks">
                                    <ul>
                                    <li><a href="alinea.php">Alinea</a></li>
                                    <li><a href="#CafeBaBaReeba">Cafe Ba-Ba-Reeba</a></li>
                                    <li><a href="#RJGrunts">RJ Grunts</a></li>
                                    <li><a href="galit.php">Galit</a></li>
                                    </ul>
                                </div>
                            </nav>
                        </div>
                </div>
                <div>
                    <p>
                        RJ Grunts</br>
                        2056 N Lincoln Park W, Chicago, IL 6061412</br>
                        (773) 929-536313</br>
                        Hours of Operation:</br>
                        Monday to Thursday: 11:00 AM - 9:00 PM</br>
                        Friday: 11:00 AM - 9:30 PM</br>
                        Saturday: 10:30 AM - 9:30 PM</br>
                        Sunday: 10:30 AM - 9:00 PM</br>
                        Brunch on Saturdays and Sundays: 10:30 AM - 2:00 PM</br>
                                                
                    </p>
                </div>


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