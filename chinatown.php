<?php
    /*created variable in order to assign the individual 
      page title to the header code in the php header.php file*/
    $title = "Chinatown"; 
    include("header.php");
?>

<body>

    <div class="heading">
        <h1>Chinatown</h1>
        <h2>"Southside Gem!!!"</h2>        
    </div>
    <!-- heading div end tag -->

    <div class="sectionbottom">
        <div class="dropdownlist">
            <button class="smallbutton">"Chinatown" Restaurants</button>
                <div class="dropdownlistblock">
                    <nav>
                        <div class="dropdownlinks">
                            <ul>
                                <li><a href="#QingXiangYuanDumplings">Qing Xiang Yuan Dumplings</a></li>
                                <li><a href="#MingHinCuisine">Ming Hin Cuisine</a></li>
                                <li><a href="#MCCBChicago">MCCB Chicago</a></li>
                            </ul>
                        </div>
                    </nav>
                </div>
        </div>
    </div> 
      
    <div>
        <!-- Image of Chinatown strip (in Chinatown neighborhood/area) across the whole page -->
        <img class="bannerimg" id="carousel-img" src="assets/images/chinatown/chinatownbanner_1.jpg">
    </div>
    <!-- bannerimg div end tag -->   
            
   
    <div class="bigcontainer">
        <div class="container">            
            <div class="littlecontainer">
                <!-- This will be a narrative and intro in to the Chinatown area -->
                <h1>Old Chinatown!</h1>
                <p>
                    <!-- Text across the whole page speaking about Chinatown -->
                    Chinatown is very much a part of the vast cultural vibe in Chicago. 
                    A ton of the things to do are downtown, but this must-see place is 
                    in the Southside of Chicago. The rich cultural destination lies at 
                    the intersection of Wentworth Avenue and Cermak Road in what was once called "Old Chinatown". 
                    You are welcomed by the huge Chinatown Gate. The area is small in relation to the Loop 
                    downtown. However, the enclave is just as vibrant, especially during events like the 
                    Chinese Lunar New Year Celebration, where you could see colorful floats 
                    representative of the rich Chinese culture. Or enjoy the Food and 
                    Walking Tours through the neighborhood.
                                     
                </p>
            </div>
            <!-- littlecontainer div end tag -->
            <div class="littleimage">
                
                <iframe width="100%" height="200" frameborder="0" scrolling="no" marginheight="0" marginwidth="0" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d11887.512019063188!2d-87.6469182078371!3d41.852452587989674!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x880e2c6094f0e2f3%3A0xd6ba620cfbe60bb1!2sChinatown%2C%20Chicago%2C%20IL%2060616!5e0!3m2!1sen!2sus!4v1708747154839!5m2!1sen!2sus"></iframe>
            </div>
            <!-- littleimage div end tag -->
            
        </div>
        <!-- container div end tag -->
        

        <!-- testing -->

        <div class="horizontal-rule-container">
            <div class="horizontal-rule"></div>
            <div class="centered-text">
                &nbsp;Qing Xiang Yuan Dumplings&nbsp;
            </div>
        </div>

        <div class="container" id="QingXiangYuanDumplings">
            
            <div class="littleimage">
                <img src ="assets/images/chinatown/chinatown_qxy_dumplings.jpg"/>
            </div>      
            <div class="littlecontainer">
                
                <!-- text box related to photo of food on left -->
                <p>
                   One of my personal favorites! This place is exclusively
                   known for its amazing dumplings. They not only rely heavily on
                   traditional seasoning, but traditional cooking methods to 
                   produce an incredible fresh dumpling.There is a very cozy feel
                   to this place...it is tucked away, just around the corner from the
                   Chinatown Square, open air mall. Before being very well known for
                   its dumplings, it once was an intimate tea house. It is now
                   very well acclaimed even outside of Chicago. 
                </p>
            </div>
                 
       </div>
     
      
            <!-- start of my experiment with the food pics and drop down -->
              
                <div class="sectionfoodpictures">        
                    <div class="dropdownlistforfood">                        
                        <img class="foodimages" src="assets/images/chinatown/chinatown_quoy_lambskew.jpg">
                            <div class="dropdownlistblock">
                                <h3>Lamb Kabob</h3>
                                <p>Marinated Grilled Lamb, Coriander,
                                    ginger, cumin chili,
                                    Grilled or Roasted
                                </p>
                            </div>
                    </div>
                    <!-- second pic -->
                    <div class="dropdownlistforfood">                        
                        <img class="foodimages" src="assets/images/chinatown/chinatown_qxy_lambcoriander.jpg">
                            <div class="dropdownlistblock">
                                <h3>Lamb-Coriander Dumplings</h3>
                                <p>Dumpling Wrapper, Lamb filling,
                                    Pan-Frying, Served with a dipping sauce
                                    (soy or vinegar based)
                                </p>
                            </div>
                    </div>
                    <!-- third pic -->
                    <div class="dropdownlistforfood">                        
                        <img class="foodimages" src="assets/images/chinatown/chinatown_qxy_soupdump.jpg">
                            <div class="dropdownlistblock">
                                <h3>Pork Soup Dumplings</h3>
                                <p>Filled with soup, in a firmer wrapper,
                                    tender pork, mushrooms, cabbage
                                </p>
                            </div>
                    </div>
                    <!-- fourth pic -->
                    <div class="dropdownlistforfood">                        
                        <img class="foodimages" src="assets/images/chinatown/chinatown_qxy_friedporkcab.jpg">
                            <div class="dropdownlistblock">
                                <h3>Pork Dumplings</h3>
                                <p>Ground pork filling, minced ginger,Garlic
                                    soy sauce, Shaocing wine (or dry sherry)
                                    sesame oil, cabbage (finely chopped),dipping
                                    sauce
                                </p>
                            </div>
                    </div>
                </div> 
            <!-- End of my experiment with food pics and drop down -->
        
        
        <div>           
            <div class="containerrestaurantmap" id="bottom">
                <iframe width="60%" height="400" frameborder="0" scrolling="no" marginheight="0" marginwidth="0" src="https://maps.google.com/maps?width=100%25&amp;height=600&amp;hl=en&amp;q=Qing%20Xiang%20Yuan%20Dumplings,%202002%20S%20Wentworth%20Ave,%20Ste%20103,%20Chicago,%20IL%2060616+(My%20Business%20Name)&amp;t=&amp;z=14&amp;ie=UTF8&amp;iwloc=B&amp;output=embed"><a href="https://www.gps.ie/">gps systems</a></iframe>
            </div>
        </div>
    <div class="sectionbottom">        
        
        <!-- button/drop down list of the restaurants on the page for easy return navigation  -->
               
            <div class="dropdownlist">
                <button class="smallbutton">"Chinatown" Restaurants</button>
                    <div class="dropdownlistblock">
                        <nav>
                            <div class="dropdownlinks">
                                <ul>
                                    <li><a href="#QingXiangYuanDumplings">Qing Xiang Yuan Dumplings</a></li>
                                    <li><a href="#MingHinCuisine">MingHin Cuisine</a></li>
                                    <li><a href="#MCCBChicago">MCCB Chicago</a></li>
                                </ul>
                            </div>
                        </nav>
                    </div>
            </div>
            <div>
                <p>
                    2002 S Wentworth Ave, Ste 103, Chicago, IL 60616 </br>
                    (312) 799-1118</br>
                    Operating Hours:</br>
                    Monday to Sunday: 11:30 AM - 9:00 PM</br>
                    Website: <a href="https://qxydumplings.com/">Qing Xiang Yuan Dumplings</a>
                </p>
            </div>

            <!-- Beginning of the second restuarant: The Gage -->

            <div class="horizontal-rule-container" id="MingHinCuisine">
                <div class="horizontal-rule"></div>
                <div class="centered-text">
                    &nbsp;MingHin Cuisine&nbsp;
                </div>
            </div>
    
            <div class="container">
                
                <div class="littleimage">
                    <img src ="assets/images/chinatown/chinatown_minghin3.jpg"/>
                </div>      
                <div class="littlecontainer">
                    
                    <!-- text box related to photo of food on left -->
                    <p>
                        They have not been around as long as some of the other restaurants in the area,
                        but this family-sytle restaurant has found its lane using authentic
                        Hong Kong Cuisine. They are a fixture in Chicago and its suburbs, with locations spread 
                        all around. It has been widely recognize for excellence, receiving 
                        awards perenially. It is moslty known by Chicagoans for its service.
                        
                    </p>
                </div>
                     
           </div>
         
          
                <!-- start of my experiment with the food pics and drop down -->
                  
                    <div class="sectionfoodpictures">        
                        <div class="dropdownlistforfood">                        
                            <img class="foodimages" src="assets/images/chinatown/chinatown_minghin_shrimproll.jpg">
                                <div class="dropdownlistblock">
                                    <h3>Sesame Balls (Jian Dui)</h3>
                                    <p>Lotus Paste Filling, Rice flour,
                                        sesame seeds, shrimp,steamed, and 
                                        a dipping sauce
                                    </p>
                                </div>
                        </div>
                        <!-- second pic -->
                        <div class="dropdownlistforfood">                        
                            <img class="foodimages" src="assets/images/chinatown/chinatown_minghin_orangechick.jpg">
                                <div class="dropdownlistblock">
                                    <h3>Orange Chicken (陳皮雞)</h3>
                                    <p>Tender Chicken, Orange Sauce,
                                        Cornstarch, Scallions, Orange Zest
                                    </p>
                                </div>
                        </div>
                        <!-- third pic -->
                        <div class="dropdownlistforfood">                        
                            <img class="foodimages" src="assets/images/chinatown/chinatown_minghin_macaustyleroastporkbelly.jpg">
                                <div class="dropdownlistblock">
                                    <h3>Macau Style Roast Pork Belly</h3>
                                    <p>Braised pork belly, 
                                        Crispy crackling skin
                                       

                                    </p>
                                </div>
                        </div>
                        <!-- fourth pic -->
                        <div class="dropdownlistforfood">                        
                            <img class="foodimages" src="assets/images/chinatown/chinatown_minghin_bbqporkbun.jpg">
                                <div class="dropdownlistblock">
                                    <h3>BBQ Pork Bun (Char Siu Bao)</h3>
                                    <p>Soft and fluffy steamed 
                                        bun stuffed with bbq pork,
                                        seasoned/flavored sweet
                                        and savory.


                                    </p>
                                </div>
                        </div>
                    </div> 
                <!-- End of my experiment with food pics and drop down -->
            
            
            <div>           
                <div class="containerrestaurantmap" id="bottom">
                    <iframe width="60%" height="400" frameborder="0" scrolling="no" marginheight="0" marginwidth="0" src="https://maps.google.com/maps?width=100%25&amp;height=600&amp;hl=en&amp;q=MingHin%20Cuisine,%202168%20S%20Archer%20Ave,%20Chicago,%20IL%2060616+(My%20Business%20Name)&amp;t=&amp;z=14&amp;ie=UTF8&amp;iwloc=B&amp;output=embed"><a href="https://www.gps.ie/">gps tracker sport</a></iframe>
                </div>
            </div>
        <div class="sectionbottom">        
            
            <!-- button/drop down list of the restaurants on the page for easy return navigation  -->
                   
                <div class="dropdownlist">
                    <button class="smallbutton">"Chinatown" Restaurants</button>
                        <div class="dropdownlistblock">
                            <nav>
                                <div class="dropdownlinks">
                                    <ul>
                                        <li><a href="#QingXiangYuanDumplings">Qing Xiang Yuan Dumplings</a></li>
                                        <li><a href="#MingHinCuisine">MingHin Cuisine</a></li>
                                        <li><a href="#MCCBChicago">MCCB Chicago</a></li>
                                    </ul>
                                </div>
                            </nav>
                        </div>
                </div>
                <div>
                    <p>
                        2168 S Archer Ave, Chicago, IL 60616</br>
                        (312) 808-1999</br>
                        Operating Hours:</br>
                        Monday to Sunday: 11:00 AM - 9:00 PM</br>
                        Website: <a href="https://minghincuisine.com/">MingHin Cuisine</a></br>
                        
                    </p>
                </div>

            <!--Beginning of the restaurant MCCB Chicago  -->
            <div class="horizontal-rule-container">
                <div class="horizontal-rule"></div>
                <div class="centered-text">
                    &nbsp;MCCB Chicago&nbsp;
                </div>
            </div>
    
            <div class="container" id="MCCBChicago">
                
                <div class="littleimage">
                    <img src ="assets/images/chinatown/chinatown_mccbchicago.jpg"/>
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
                            <img class="foodimages" src="assets/images/chinatown/chinatown_MCCBcuminlamb.jpg">
                                <div class="dropdownlistblock">
                                    <h3>Cumin Lamb</h3>
                                    <p> Marinated high-quality cuts of lamb, 
                                        Cumin Seeds,
                                        Dried red Chilies,
                                        Garlic and Ginger,
                                        Soy Sauce and Dark Soy Sauce,
                                        Fresh green scallions,
                                        Sichuan Peppercorns
                                    </p>
                                </div>
                        </div>
                        <!-- second pic -->
                        <div class="dropdownlistforfood">                        
                            <img class="foodimages" src="assets/images/chinatown/chinatown_MCCBmapotofu.jpg">
                                <div class="dropdownlistblock">
                                    <h3>Mapo Tofu</h3>
                                    <p>Soft Tofu, Ground Pork,
                                        Sichuan Peppercorns, Chili Bean Sauce,
                                        Garlic and Ginger, Scallions, Chili Oil, 
                                        and Soy Sauce
                                    </p>
                                </div>
                        </div>
                        <!-- third pic -->
                        <div class="dropdownlistforfood">                        
                            <img class="foodimages" src="assets/images/chinatown/chinatown_MCCBcrabrangoon.jpg">
                                <div class="dropdownlistblock">
                                    <h3>Crab Rangoon</h3>
                                    <p>Wonton wrappers, Cream Cheese,
                                        Crab meat, Green Onion, Worcestershire sauce,
                                        Garlic powder,Soy Sauce, Dipping Sauce
                                    </p>
                                </div>
                        </div>
                        <!-- fourth pic -->
                        <div class="dropdownlistforfood">                        
                            <img class="foodimages" src="assets/images/chinatown/chinatownMCCBdrychilichicken.jpg">
                                <div class="dropdownlistblock">
                                    <h3>Dry Chili Chicken</h3>
                                    <p>Chicken, Dried Red Chillies,
                                        Sichuan Peppercorns, Garlic and 
                                        Ginger, Soy Sauce, Scallions, 
                                    </p>
                                </div>
                        </div>
                    </div> 
                <!-- End of my experiment with food pics and drop down -->
            
            
            <div>           
                <div class="containerrestaurantmap" id="bottom">
                    <!-- map is embedded from google maps  -->
                    <iframe width="60%" height="400" frameborder="0" scrolling="no" marginheight="0" marginwidth="0" src="https://maps.google.com/maps?width=100%25&amp;height=600&amp;hl=en&amp;q=MCCB%20Chicago,%202138%20S%20Archer%20Ave,%20Chicago,%20IL%2060616+(My%20Business%20Name)&amp;t=&amp;z=14&amp;ie=UTF8&amp;iwloc=B&amp;output=embed"><a href="https://www.gps.ie/">gps trackers</a></iframe>
                </div>
            </div>
        <div class="sectionbottom">        
            
            <!-- button/drop down list of the restaurants on the page for easy return navigation  -->
                   
                <div class="dropdownlist">
                    <button class="smallbutton">"Chinatown" Restaurants</button>
                        <div class="dropdownlistblock">
                            <nav>
                                <div class="dropdownlinks">
                                    <ul>
                                        <li><a href="#QingXiangYuanDumplings">Qing Xiang Yuan Dumplings</a></li>
                                        <li><a href="#MingHinCuisine">MingHin Cuisine</a></li>
                                        <li><a href="#MCCBChicago">MCCB Chicago</a></li>
                                    </ul>
                                </div>
                            </nav>
                        </div>
                </div>
                <div>
                    <p>
                        2138 S Archer Ave, Chicago, IL 60616</br>
                        (312) 881-0168</br>
                        Operating Hours:</br>
                        Wednesday to Monday: 12:00 PM - 9:00 PM</br>
                        Tuesday: Closed</br>
                        Website: <a href="https://mccbchicago.com/">MCCB Chicago</a></br>                        
                    </p>
                </div>


            <div>
                <button class="buttonbacktotop"><a href="#top">Back to top of page</a></button>
            </div>
        </div> 
    </div>
    <!-- script call placed at the end of the body to let all of the html and elements load first  -->
    <script src="assets/scripts/indexbanner.js"></script>
</body>
<?php
    include("footer.php"); 
?>