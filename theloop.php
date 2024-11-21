<?php
    $title = "The Loop"; 
    include("header.php");
?>

<body>
 
    <div class="heading">
        <h1>The Loop</h1>
        <h2>"Everyone's Neighborhood!"</h2>        
    </div>
    <!-- heading div end tag -->

    <div class="sectionbottom">
        <div class="dropdownlist">
            <button class="smallbutton">"The Loop" Restaurants</button>
                <div class="dropdownlistblock">
                    <nav>
                        <div class="dropdownlinks">
                            <ul>
                                <li><a href="giordanos.php">Giordano's</a></li>
                                <li><a href="#TheGage">The Gage</a></li>
                                <li><a href="#ItalianVillage">Italian Village</a></li>                                    
                                <li><a href="galit.php">Galit</a></li>
                            </ul>
                        </div>
                    </nav>
                </div>
        </div>
    </div> 
      
    <div>
        <!-- Image of The Bean (in The Loop neighborhood/area) across the whole page -->
        <img class=bannerimg id="carousel-img" src="assets/images/theloop/theloopbanner_1.jpg">
    </div>
    <!-- bannerimg div end tag -->   
            
   
    <!-- <div class="bigcontainer"> -->
        <div class="container">            
            <div class="littlecontainer">
                <!-- This will be a narrative and intro in to the purpose of the site and its content -->
                <h1>The heart of downtown Chicago!</h1>
                <p>
                    <!-- Text across the whole page speaking about the foodie city and my experience there -->
                    The Loop is the bustling center of the Windy City. Most natives explain the nickname, "The Loop", as 
                    a reference to the looping train rails that loop in almost figure 8 paths around the area. 
                    It is marked as the area within Lake St. (Northern Boundary), Wabash Ave. (Eastern Boundary), Van Buren St. (Southern Edge), 
                    and Wells St. (Western Boundary). The Community Alliance, a city planning organization, has also tagged the area, "Everyone's Neighborhood"! 
                    When you try some of the iconic restaurants and dishes from places like Giordano's, Italian Village, and Galit, you will want to call
                    it home!
                                     
                </p>
            </div>
            <!-- littlecontainer div end tag -->
            <div class="littleimage">                
                <iframe width="100%" height="200" frameborder="0" scrolling="no" marginheight="0" marginwidth="0" src="https://maps.google.com/maps?width=100%25&amp;height=600&amp;hl=en&amp;q=The%20Loop,%20Chicago,%20Illinois+(My%20Business%20Name)&amp;t=&amp;z=14&amp;ie=UTF8&amp;iwloc=B&amp;output=embed"><a href="https://www.gps.ie/">gps trackers</a></iframe>
            </div>
            <!-- littleimage div end tag -->
            
        </div>
        <!-- container div end tag -->

        <!-- Beginning of the restuarant: The Gage -->        
        <!--break line with heading   -->
        <div class="horizontal-rule-container">
            <div class="horizontal-rule"></div>
            <div class="centered-text" id="TheGage">
                &nbsp;The Gage&nbsp;
            </div>
        </div>  

            <div class="container">                
                <div class="littleimage">
                    <img src ="assets/images/theloop/the_gage.jpg"/>
                </div>      
                <div class="littlecontainer">
                    
                    <!-- text box related to photo of food on left -->
                    <p>
                        An iconic bar/restaurant in the Loop with 10 plus years in operation. 
                        The Gage is known as a place for “bar food”, having a vintage feel that 
                        is influenced by those found in Ireland and England. Some of the popular 
                        foods on the menu include bison tartare. It is considered upscale yet affordable 
                        and near most of the must-see tourist spots in downtown Chicago. 
                    </p>
                </div>                     
           </div>
         
          
                <!-- start of my experiment with the food pics and drop down -->
                  
                    <div class="sectionfoodpictures">        
                        <div class="dropdownlistforfood">                        
                            <img class="foodimages" src="assets/images/theloop/loop_venisonburger.jpg">
                                <div class="dropdownlistblock">
                                    <h3>Venison Burger</h3>
                                    <p> Ground venison (80% lean to 20% pork fat ratio),                                        
                                        Worcestershire sauce,
                                        Special Gage roll,
                                        Sauteed sweet onions and peppers 
                                        
                                    </p>
                                </div>
                        </div>
                        <!-- second pic -->
                        <div class="dropdownlistforfood">                        
                            <img class="foodimages" src="assets/images/theloop/loop_porkbelly.jpg">
                                <div class="dropdownlistblock">
                                    <h3>Biscuits and Gravy Benedict</h3>
                                    <p>Cheesy Buttermilk Biscuits
                                        Poached Eggs
                                        Hollandaise Sauce
                                        Herbed Buttermilk Dressing

                                    </p>
                                </div>
                        </div>
                        <!-- third pic -->
                        <div class="dropdownlistforfood">                        
                            <img class="foodimages" src="assets/images/theloop/loop_steakfriteslobsterroll.jpg">
                                <div class="dropdownlistblock">
                                    <h3>The Gage Lobster Roll</h3>
                                    <p>Wood-Grilled Bavette Steak, crispy
                                        fries, Lobster,
                                        Buttered, Griddled New England Split-Top Bun
                                        Mayonaise, Lemon Butter, Secret Seasoning
                                    </p>
                                </div>
                        </div>
                        <!-- fourth pic -->
                        <div class="dropdownlistforfood">                        
                            <img class="foodimages" src="assets/images/theloop/loop_smokedsalmon.jpg">
                                <div class="dropdownlistblock">
                                    <h3>The Gage Smoked Salmon Benedict</h3>
                                    <p>Thick Bacon, Crispy and Fresh
                                        Smoked Salmon, Well-Toasted Bread
                                
                                    </p>
                                </div>
                        </div>
                    </div> 
                <!-- End of my experiment with food pics and drop down -->
            
            
            <div>           
                <div class="containerrestaurantmap" id="bottom">
                    <iframe width="60%" height="400" frameborder="0" scrolling="no" marginheight="0" marginwidth="0" src="https://maps.google.com/maps?width=100%25&amp;height=600&amp;hl=en&amp;q=The%20Gage,%20Chicago,%20Illinois+(My%20Business%20Name)&amp;t=&amp;z=14&amp;ie=UTF8&amp;iwloc=B&amp;output=embed"><a href="https://www.gps.ie/">gps tracker sport</a></iframe>
                </div>
            </div>
        <div class="sectionbottom">        
            
            <!-- button/drop down list of the restaurants on the page for easy return navigation  -->
                   
                <div class="dropdownlist">
                    <button class="smallbutton">"The Loop" Restaurants</button>
                        <div class="dropdownlistblock">
                            <nav>
                                <div class="dropdownlinks">
                                    <ul>
                                        <li><a href="giordanos.php">Giordano's</a></li>
                                        <li><a href="#TheGage">The Gage</a></li>
                                        <li><a href="#ItalianVillage">Italian Village</a></li>                                    
                                        <li><a href="galit.php">Galit</a></li>
                                    </ul>
                                </div>
                            </nav>
                        </div>
                </div>
                <div>
                    <p>
                        The Gage</br>
                        contact at 312.372.4001</br>
                        24 S Michigan Ave, Chicago, IL 60603</br>
                        KITCHEN HOURS</br>
                        (hours may be subject to change)</br>
                        Monday - Thursday 11am - 11pm</br>
                        Friday 11am - 12am</br>
                        Saturday 10am - 12am</br>
                        Sunday 10am - 11pm</br>
                        Website: <a href="https://thegagechicago.com/">The Gage</a>
                        
                    </p>
                </div>

            <!--Beginning of the restaurant Italian Village  -->
            <div class="horizontal-rule-container">
                <div class="horizontal-rule"></div>
                <div class="centered-text" id="ItalianVillage">
                    &nbsp;Italian Village&nbsp;
                </div>
            </div>  
    
            <div class="container">
                
                <div class="littleimage">
                    <img src ="assets/images/theloop/italian_village.jpg"/>
                </div>      
                <div class="littlecontainer">
                    
                    <!-- text box related to photo of food on left -->
                    <p>
                        Another Chicago landmark! Italian Village is a casual restaurant. 
                        It is the oldest Italian restaurant in Chicago that has expanded 
                        mightily over the years. The “Italian Village” is now a pasta haven 
                        with multiple restaurants within one historic building. Founded in 1927, 
                        the “Village” and those that came after, are all the legacy of one family. 
                        In addition to Italian cuisine, the Italian Village has the largest wine 
                        cellar in the Midwest. It holds over 45,000 bottles. 
                    </p>
                </div>
                     
           </div>
         
          
                <!-- start of my experiment with the food pics and drop down -->
                  
                    <div class="sectionfoodpictures">        
                        <div class="dropdownlistforfood">                        
                            <img class="foodimages" src="assets/images/theloop/loop_italianvillage_fetucini.jpg">
                                <div class="dropdownlistblock">
                                    <h3>Fettucine Alfredo</h3>
                                    <p>Fettuccine Noodles, Garlic
                                        Butter and Cream Sauce,
                                        Parmesan and Romano Cheese
                                    </p>
                                </div>
                        </div>
                        <!-- second pic -->
                        <div class="dropdownlistforfood">                        
                            <img class="foodimages" src="assets/images/theloop/loop_italvill_ravioli.jpg">
                                <div class="dropdownlistblock">
                                    <h3>Four Cheese Ravioli</h3>
                                    <p>Pillowy ravioli filled with
                                        Romano and Ricotta cheese, 
                                        served with Marinara or Alfredo sauce
                                    </p>
                                </div>
                        </div>
                        <!-- third pic -->
                        <div class="dropdownlistforfood">                        
                            <img class="foodimages" src="assets/images/theloop/loop_italvill_chickenvesuv.jpg">
                                <div class="dropdownlistblock">
                                    <h3>Chicken Vesuvio</h3>
                                    <p>Chicken on the Bone, Potatoes
                                        Garlic, Oregano, Splash of
                                        White Wine, Parsley
                                    </p>
                                </div>
                        </div>
                        <!-- fourth pic -->
                        <div class="dropdownlistforfood">                        
                            <img class="foodimages" src="assets/images/theloop/loop_italvill_vealmars.jpg">
                                <div class="dropdownlistblock">
                                    <h3>Veal Marsala</h3>
                                    <p>Veal cutlets, Extra Virgin
                                        Olive Oil and unsalted Butter
                                        Garlic and Shallots
                                        Mushrooms, Dry Marsala Wine
                                        Chicken Stock
                                    </p>
                                </div>
                        </div>
                    </div> 
                <!-- End of my experiment with food pics and drop down -->
            
            
            <div>           
                <div class="containerrestaurantmap" id="bottom">
                    <iframe width="60%" height="400" frameborder="0" scrolling="no" marginheight="0" marginwidth="0" src="https://maps.google.com/maps?width=100%25&amp;height=600&amp;hl=en&amp;q=Italian%20Village,%2071%20W.%20Monroe,%20Chicago,%20IL%2060603+(My%20Business%20Name)&amp;t=&amp;z=14&amp;ie=UTF8&amp;iwloc=B&amp;output=embed"><a href="https://www.gps.ie/">gps devices</a></iframe>
                </div>
            </div>
        <div class="sectionbottom">        
            
            <!-- button/drop down list of the restaurants on the page for easy return navigation  -->
                   
                <div class="dropdownlist">
                    <button class="smallbutton">"The Loop" Restaurants</button>
                        <div class="dropdownlistblock">
                            <nav>
                                <div class="dropdownlinks">
                                    <ul>
                                        <li><a href="giordanos.php">Giordano's</a></li>
                                        <li><a href="#TheGage">The Gage</a></li>
                                        <li><a href="#ItalianVillage">Italian Village</a></li>                                    
                                        <li><a href="galit.php">Galit</a></li>
                                    </ul>
                                </div>
                            </nav>
                        </div>
                </div>
                <div>
                    <p>
                        Italian Village Restaurants</br>
                        71 W. Monroe, Chicago, IL 60603</br>
                        312.332.7005</br>
                        Friday: 11 AM - 8:30 PM</br>
                        Saturday: 11 AM - 8:30 PM</br>
                        Sunday: 11 AM - 8:30 PM</br>
                        Monday: 11 AM - 8:30 PM</br>
                        Tuesday: 11 AM - 8:30 PM</br>
                        Wednesday: 11 AM - 8:30 PM</br>
                        Thursday: 11 AM - 8:30 PM</br>
                        See hours on official site</br>
                        Dine-in · Takeout / Delivery</br>
                        Website: <a href="https://italianvillage-chicago.com/">Italian Village</a>
                        
                        
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