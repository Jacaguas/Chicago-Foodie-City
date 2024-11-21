<?php
    /*created variable in order to assign the individual 
      page title to the header code in the php header.php file*/
    $title = "West Loop"; 
    include("header.php");
?>

<body>

    <div class="heading">
        <h1>West Loop</h1>
        <h2>"Restaurant Row: Randolph St."</h2>        
    </div>
    <!-- heading div end tag -->

    <div class="sectionbottom">
        
        <div class="dropdownlist">
            <button class="smallbutton">"West Loop" Restaurants</button>
                <div class="dropdownlistblock">
                    <nav>
                        <div class="dropdownlinks">
                            <ul>
                                <li><a href="#Momotaro">Momotaro</a></li>
                                <li><a href="#Monteverde">Monteverde</a></li>
                                <li><a href="#Au Cheval">Au Cheval</a></li>                                 
                            </ul>
                        </div>
                    </nav>
                </div>
        </div>
    </div> 
      
    <div>
        <!-- Image of the Fulton-Randolph Market (in The West Loop neighborhood/area) across the whole page -->
        <img class=bannerimg id="carousel-img" src="assets/images/westloop/westloopbanner_1.jpg">
    </div>
    <!-- bannerimg div end tag -->  
    
            
   
        <div class="container">            
            <div class="littlecontainer">
                <!-- This will be a narrative and intro in to the West Loop neighborhood -->
                <h1>Home of Restaurant Row!</h1>
                <p>
                    <!-- Text across the whole page speaking about the West Loop -->
                    For most of its history, since having its first settlements around the mid-19th 
                    century, this area would be home to Chicago’s produce and meatpacking industries. 
                    Many of the old warehouses still line the streets of Randolph st and Fulton-Market st. 
                    Resilient Chicagoans helped to evolve the region into a must-see part of Chicago. 
                    The area is now a trendy neighborhood with acclaimed restaurants, art galleries, 
                    and condos. All foodies now recognize the West Loop…"The Fulton-Randolph Market”…
                    as a vibrant culinary scene. 
                                     
                </p>
            </div>
            <!-- littlecontainer div end tag -->
            <div class="littleimage">
                                <!-- used google maps embed map tool -->
                <iframe width="100%" height="200" frameborder="0" scrolling="no" marginheight="0" marginwidth="0" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d23763.458714561002!2d-87.67264745056605!3d41.88355830171352!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x880e2cda3388b6dd%3A0x942c920a8b709156!2sWest%20Loop%2C%20Chicago%2C%20IL!5e0!3m2!1sen!2sus!4v1708736849923!5m2!1sen!2sus"></iframe>
            </div>
            <!-- littleimage div end tag -->
            
        </div>
        <!-- container div end tag -->

        <!-- beginning of the first restaurant, Momotaro -->
        <div class="horizontal-rule-container">
            <div class="horizontal-rule"></div>
            <div class="centered-text" id="Momotaro">
                &nbsp;Momotaro&nbsp;
            </div>
        </div>  

        <div class="container">
            
            <div class="littleimage">
                <img src ="assets/images/westloop/westloop_momotaro.jpg"/>
            </div>      
            <div class="littlecontainer">
                
                <!-- text box related to photo of food on left -->
                <p>
                    Beautiful Japanese restaurant in an area full of competition.
                    It is considered fine Japanese Cuisine led by Executive Chef
                    Gene Kato. The Royale burger is one of the must have items.
                </p>
            </div>
                 
       </div>
     
      
            <!-- start of my experiment with the food pics and drop down -->
              
                <div class="sectionfoodpictures">        
                    <div class="dropdownlistforfood">                        
                        <img class="foodimages" src="assets/images/westloop/westloop_blackwidrolls.jpg">
                            <div class="dropdownlistblock">
                                <h3>Soft Shell Crab Maki</h3>
                                <p>Sushi Rice, Nori (Seaweed)
                                    Soft-Shell Crab Tempura, Avocado
                                    Spicy Mayo, Tobiko(Flying Fish Roe)
                                    Sesame Seeds, Green Onions or Scallions
                                </p>
                            </div>
                    </div>
                    <!-- second pic -->
                    <div class="dropdownlistforfood">                        
                        <img class="foodimages" src="assets/images/westloop/westloop_momotar_spicy hon maguro.jpg">
                            <div class="dropdownlistblock">
                                <h3>Maguro</h3>
                                <p>Maguro(Bluefin Tuna), Garlic Shoyu
                                    Turnip, Puffed Buckwheat, Spicy Sauce
                                
                                </p>
                            </div>
                    </div>
                    <!-- third pic -->
                    <div class="dropdownlistforfood">                        
                        <img class="foodimages" src="assets/images/westloop/westloop_momo_windycityrolls.jpg">
                            <div class="dropdownlistblock">
                                <h3>Soft Shell Crab</h3>
                                <p>Sushi Rice, Seaweed
                                    Soft-Shell Crab Tempura,
                                    Spicy Mayo,
                                    Sesame Seeds, Green Onions
                                </p>
                            </div>
                    </div>
                    <!-- fourth pic -->
                    <div class="dropdownlistforfood">                        
                        <img class="foodimages" src="assets/images/westloop/west_momo_wagyu.jpg">
                            <div class="dropdownlistblock">
                                <h3>Miyazaki Wagyu Nigiri</h3>
                                <p>Miyazaki Wagyu, Nigiri Rice,
                                    Ponzu Sauce, Yuzu Kosho
                            
                                </p>
                            </div>
                    </div>
                </div> 
            <!-- End of my experiment with food pics and drop down -->
        
        
        <div>           
            <div class="containerrestaurantmap" id="bottom">
                <iframe width="60%" height="400" frameborder="0" scrolling="no" marginheight="0" marginwidth="0" src="https://maps.google.com/maps?width=100%25&amp;height=600&amp;hl=en&amp;q=Momotaro,%20820%20W%20Lake%20St,%20Chicago,%20IL%2060607+(My%20Business%20Name)&amp;t=&amp;z=14&amp;ie=UTF8&amp;iwloc=B&amp;output=embed"><a href="https://www.gps.ie/">gps devices</a></iframe>
            </div>
        </div>
    <div class="sectionbottom">        
        
        <!-- button/drop down list of the restaurants on the page for easy return navigation  -->
               
            <div class="dropdownlist">
                <button class="smallbutton">"West Loop" Restaurants</button>
                    <div class="dropdownlistblock">
                        <nav>
                            <div class="dropdownlinks">
                                <ul>
                                    <li><a href="#Momotaro">Momotaro</a></li>
                                    <li><a href="#Monteverde">Monteverde</a></li>
                                    <li><a href="#Au Cheval">Au Cheval</a></li>
                                </ul>
                            </div>
                        </nav>
                    </div>
            </div>
            <div>
                <p>
                    Momotaro </br>
                    820 W Lake St, Chicago, IL 60607</br>
                    (312) 733-4818</br>
                    Hours:</br>
                    Monday: 5:00 PM - 10:00 PM</br>
                    Tuesday: 5:00 PM - 10:00 PM</br>
                    Wednesday: 5:00 PM - 10:00 PM</br>
                    Thursday: 5:00 PM - 10:00 PM</br>
                    Friday: 4:30 PM - 11:00 PM</br>
                    Saturday: 4:30 PM - 11:00 PM</br>
                    Sunday: 5:00 PM - 10:00 PM </br>
                    Website: <a href="https://momotarochicago.com/">Momotaro</a>
                </p>
            </div>

            <!-- Beginning of the second restuarant: Monteverde -->

            <div class="horizontal-rule-container">
                <div class="horizontal-rule"></div>
                <div class="centered-text" id="Monteverde">
                    &nbsp;Monteverde&nbsp;
                </div>
            </div>  
    
            <div class="container">
                
                <div class="littleimage">
                    <img src ="assets/images/westloop/westloop_monteverde.jpg"/>
                </div>      
                <div class="littlecontainer">
                    
                    <!-- text box related to photo of food on left -->
                    <p>
                       This restaurant holds to many traditions in Italian culture 
                       and cuisine. Chef Sarah Grueneberg brings her rich worldly 
                       experiences to Monteverde using hand-crafted high quality
                       ingredients. Pasta is made fresh, daily. It is this that helps
                       this place stand out.
                    </p>
                </div>
                     
           </div>
         
          
                <!-- start of my experiment with the food pics and drop down -->
                  
                    <div class="sectionfoodpictures">        
                        <div class="dropdownlistforfood">                        
                            <img class="foodimages" src="assets/images/westloop/west_monteverde_tiramisu.jpg">
                                <div class="dropdownlistblock">
                                    <h3>Tiramisu</h3>
                                    <p>Ladyfingers(Savoiardi),Mascarpone Cheese,
                                        Egg Yolks, Sugar, Espresso(used to soak
                                        the ladyfingers), Cocoa Powder
                                    </p>
                                </div>
                        </div>
                        <!-- second pic -->
                        <div class="dropdownlistforfood">                        
                            <img class="foodimages" src="assets/images/westloop/west_monte_butterscotch.jpg">
                                <div class="dropdownlistblock">
                                    <h3>Butterscotch Budino</h3>
                                    <p>Dark Brown Sugar, Heavy Cream,
                                        Milk, Egg Yolks
                                    </p>
                                </div>
                        </div>
                        <!-- third pic -->
                        <div class="dropdownlistforfood">                        
                            <img class="foodimages" src="assets/images/westloop/west_monte_gnotcheti.jpg">
                                <div class="dropdownlistblock">
                                    <h3>Gnocchetti with Basil Pesto and Ricotta</h3>
                                    <p>Gnocchetti Pasta (small pillowy potato
                                        dumplings), Basil Pesto, Housemade Ricotta
                                        Sardinian Pecorino, Toasted Pine Nuts
                                    </p>
                                </div>
                        </div>
                        <!-- fourth pic -->
                        <div class="dropdownlistforfood">                        
                            <img class="foodimages" src="assets/images/westloop/west_monte_burrata.jpg">
                                <div class="dropdownlistblock">
                                    <h3>Burrata e Ham</h3>
                                    <p>Burrata Cheese, Rosemary Tigelle, 
                                        Prosciutto di San Daniele, Homemade
                                        Prosciutto Butter, Seasonal Mostarda
                                    </p>
                                </div>
                        </div>
                    </div> 
                <!-- End of my experiment with food pics and drop down -->
            
            
            <div>           
                <div class="containerrestaurantmap" id="bottom">
                    <iframe width="60%" height="400" frameborder="0" scrolling="no" marginheight="0" marginwidth="0" src="https://maps.google.com/maps?width=100%25&amp;height=600&amp;hl=en&amp;q=Monteverde,%20Chicago,%20Illinois+(My%20Business%20Name)&amp;t=&amp;z=14&amp;ie=UTF8&amp;iwloc=B&amp;output=embed"><a href="https://www.gps.ie/">gps vehicle tracker</a></iframe>
                </div>
            </div>
        <div class="sectionbottom">        
            
            <!-- button/drop down list of the restaurants on the page for easy return navigation  -->
                   
                <div class="dropdownlist">
                    <button class="smallbutton">"West Loop" Restaurants</button>
                        <div class="dropdownlistblock">
                            <nav>
                                <div class="dropdownlinks">
                                    <ul>
                                        <li><a href="#Momotaro">Momotaro</a></li>
                                        <li><a href="#Monteverde">Monteverde</a></li>
                                        <li><a href="#Au Cheval">Au Cheval</a></li>
                                    </ul>
                                </div>
                            </nav>
                        </div>
                </div>
                <div>
                    <p>
                        Monteverde</br>
                        1020 W Madison St, Chicago, IL 60607</br>
                        +1 312-888-3041</br>
                        Operating Hours:</br>
                        Tuesday to Thursday: 11:30 AM - 9:30 PM</br>
                        Friday and Saturday: 11:30 AM - 10:30 PM</br>
                        Website: <a href="https://monteverdechicago.com/">Monteverde</a></br>
                        
                    </p>
                </div>

            <!--Beginning of the restaurant Au Cheval  -->
            <div class="horizontal-rule-container">
                <div class="horizontal-rule"></div>
                <div class="centered-text" id="Au Cheval">
                    &nbsp;Au Cheval&nbsp;
                </div>
            </div>  
            <div class="container" id="Au Cheval">
                
                <div class="littleimage">
                    <img src ="assets/images/westloop/westloop_aucheval.jpg"/>
                </div>      
                <div class="littlecontainer">
                    
                    <!-- text box related to photo of food on left -->
                    <p>
                        A diner-style is the mark of Au-Cheval..with
                        one unique traditon, eggs. Many of the dishes 
                        incorporate eggs in some way. Patrons love it!
                        The signature "Cheesburger With Egg" is a must.
                        First come first serve basis at this popular West Loop 
                        diner. 
            
                    </p>
                </div>
                     
           </div>
         
          
                <!-- start of my experiment with the food pics and drop down -->
                  
                    <div class="sectionfoodpictures">        
                        <div class="dropdownlistforfood">                        
                            <img class="foodimages" src="assets/images/westloop/west_aucheval_eggbaconburg.jpg">
                                <div class="dropdownlistblock">
                                    <h3>Cheeseburger with Egg</h3>
                                    <p>Burger Patty(seasoned with salt and pepper)
                                        Bacon,Fried Egg, Lettuce, Bun
                                    </p>
                                </div>
                        </div>
                        <!-- second pic -->
                        <div class="dropdownlistforfood">                        
                            <img class="foodimages" src="assets/images/westloop/west_aucheval_foiegrasscrambledeggs.jpg">
                                <div class="dropdownlistblock">
                                    <h3>Soft-Scrambled Eggs with Foie Gras and Toast</h3>
                                    <p>Soft-Scrambled Eggs, Foie Gras (duck or goose liver),
                                        Toast
                                    </p>
                                </div>
                        </div>
                        <!-- third pic -->
                        <div class="dropdownlistforfood">                        
                            <img class="foodimages" src="assets/images/westloop/west_aucheval_honeyfriedchick.jpg">
                                <div class="dropdownlistblock">
                                    <h3>General Jane’s Honey-Fried Chicken</h3>
                                    <p>Fried Chicken(brined and seasoned)
                                        Honey Butter
                                    </p>
                                </div>
                        </div>
                        <!-- fourth pic -->
                        <div class="dropdownlistforfood">                        
                            <img class="foodimages" src="assets/images/westloop/west_aucheval_mornay.jpg">
                                <div class="dropdownlistblock">
                                    <h3>Croque Madame</h3>
                                    <p>Bechamel Sauce, Gruyere Cheese,
                                        Parmesan Cheese
                                    </p>
                                </div>
                        </div>
                    </div> 
                <!-- End of my experiment with food pics and drop down -->
            
            
            <div>           
                <div class="containerrestaurantmap" id="bottom">
                    <iframe width="60%" height="400" frameborder="0" scrolling="no" marginheight="0" marginwidth="0" src="https://maps.google.com/maps?width=100%25&amp;height=600&amp;hl=en&amp;q=Au%20Cheval,%20800%20W%20Randolph%20St,%20Chicago,%20IL%2060607+(My%20Business%20Name)&amp;t=&amp;z=14&amp;ie=UTF8&amp;iwloc=B&amp;output=embed"><a href="https://www.gps.ie/">gps devices</a></iframe>
                </div>
            </div>
        <div class="sectionbottom">        
            
            <!-- button/drop down list of the restaurants on the page for easy return navigation  -->
                   
                <div class="dropdownlist">
                    <button class="smallbutton">"West Loop" Restaurants</button>
                        <div class="dropdownlistblock">
                            <nav>
                                <div class="dropdownlinks">
                                    <ul>
                                        <li><a href="#Momotaro">Momotaro</a></li>
                                        <li><a href="#Monteverde">Monteverde</a></li>
                                        <li><a href="#Au Cheval">Au Cheval</a></li>
                                    </ul>
                                </div>
                            </nav>
                        </div>
                </div>
                <div>
                    <p>
                        Au Cheval</br>
                        800 W Randolph St, Chicago, IL 60607</br>
                        Phone Number: (312) 929-4580</br> 
                        Hours:</br>
                        Monday-Saturday: 10:00 AM - 11:15 PM</br>
                        Sunday: 10:00 AM - 10:15 PM</br>
                        Takeout and Delivery Hours: Monday-Sunday: 11:00 AM – 7:00 PM</br>
                        Valet Parking Available at Trivoli Tavern: 114 N Green St.</br> 
                        Hours of Operation:</br>
                        Monday - Friday: 3:45 PM - Close</br>
                        Saturdays & Sundays: 10:15 AM - Close</br>
                        *Please note that Au Cheval does not accept reservations;</br>
                        guests are welcome on a first-come, first-serve basis.</br>
                        Enjoy their passion for eggs and diner-style fare!</br>
                        Website: <a href="https://auchevaldiner.com/">Au Cheval</a></br>
                        
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