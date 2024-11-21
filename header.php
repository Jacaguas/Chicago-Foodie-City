<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php echo $title; ?></title>
    <link rel="stylesheet" type ="text/css" href="styles.css">
    <link rel="icon" type="image/x-icon" href="/images/favicon.ico">

</head>

<header>
<div class="sectioncontainer" id="Top"> 
<button class="hamburgermenu" id="hamburgermenu">&#9776;</button>
<nav class="nav-links" id="nav-links">
 
        <div class="sectiontop">        
            <div class="dropdownlist">
                <button class="droplistbutton">Home</button>
                    <div class="dropdownlistblock">
                        <nav>
                            <div class="dropdownlinks">
                                <ul>
                                    <li><a href="index.php">Home</a></li>
                                    <li><a href="index.php#about">About</a></li>
                                    <li><a href="index.php#personalfavorites">Personal Favorites</a></li>
                                    <li><a href="index.php#findmap">Map of Chicago</a></li>
                                    <li><a href="references.php">References</a></li> 
                                    <li><a href="survey.php">Survey</a></li>                                   

                                </ul>
                            </div>
                        </nav>
                    </div>
            </div>
        </div> 
        <div class="sectiontop">        
            <div class="dropdownlist">
                <button class="droplistbutton">Neighborhoods</button>
                    <div class="dropdownlistblock">
                        <nav>
                            <div class="dropdownlinks">
                                <ul>
                                    <li><a href="theloop.php">The Loop</a></li>
                                    <li><a href="westloop.php">West Loop</a></li>
                                    <li><a href="chinatown.php">Chinatown</a></li>
                                    <li><a href="lincolnpark.php">Lincoln Park</a></li>
                                </ul>
                            </div>
                        </nav>
                    </div>
            </div>
        </div>
        <div class="sectiontop">        
            <div class="dropdownlist">
                <button class="droplistbutton">Acclaimed Restaurants</button>
                    <div class="dropdownlistblock">
                        <nav>
                            <div class="dropdownlinks">
                                <ul>
                                    <li><a href="alinea.php">Alinea (Lincoln Park)</a></li>
                                    <li><a href="portillos.php">Portillos</a></li>
                                    <li><a href="girlandthegoat.php">Girl & the Goat(West Loop)</a></li>
                                    <li><a href="giordanos.php">Giordano's</a></li>
                                    <li><a href="galit.php">Galit (Lincoln Park)</a></li>
                                </ul>
                            </div>
                        </nav>
                    </div>
            </div>
        </div> 
        <div class="sectiontop">        
            <div class="dropdownlist">
                <button class="droplistbutton">Foodie History</button>
                    <div class="dropdownlistblock">
                        <nav>
                            <div class="dropdownlinks">
                                <ul>
                                    <li><a href="foodiehistory.php">Chicago's Foodie History</a></li>
                                    <li><a href="foodiehistory.php#jeanbanchet">Jean Banchet (Legendary Chef)</a></li>
                                    <li><a href="foodiehistory.php#famousfoods">Created Famous Foods</a></li>
                                    <li><a href="foodiehistory.php#meatpacking">Meat Packing</a></li>
                                    <li><a href="foodiehistory.php#mcdonalds">McDonald's Connection</a></li>
                                </ul>
                            </div>
                        </nav>
                    </div>
            </div>
        </div>
</nav>
    </div>

</header>
<!-- need to run this javascript to make the nav responsive across all pages and have a hamburger menu; hiding links and showing when
clicked. -->
<script>
    document.addEventListener('DOMContentLoaded', function() {
    const hamburger = document.getElementById('hamburgermenu');
    const navLinks = document.getElementById('nav-links');

    hamburger.addEventListener('mouseover', function() {
        console.log('Hamburger menu clicked');
        navLinks.classList.add('show');
    });

    navLinks.addEventListener('mouseleave', function() {
        console.log('Hamburger menu clicked');
        navLinks.classList.remove('show');
    });
});
</script>



<!-- 
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title></title>
    <link rel="stylesheet" type="text/css" href="styles.css">
</head>
<body>

<header>
    <div class="navbar" id="navbar">
        <button class="hamburger" id="hamburger">&#9776;</button>
        <nav class="nav-links" id="nav-links">
            <ul>
                <li><a href="index.php">Home</a></li>
                <li><a href="index.php#about">About</a></li>
                <li><a href="index.php#personalfavorites">Personal Favorites</a></li>
                <li><a href="index.php#findmap">Map of Chicago</a></li>
                <li><a href="references.php">References</a></li>
                <li><a href="survey.php">Survey</a></li>
                <li><a href="theloop.php">The Loop</a></li>
                <li><a href="westloop.php">West Loop</a></li>
                <li><a href="chinatown.php">Chinatown</a></li>
                <li><a href="lincolnpark.php">Lincoln Park</a></li>
                <li><a href="alinea.php">Alinea (Lincoln Park)</a></li>
                <li><a href="portillos.php">Portillos</a></li>
                <li><a href="girlandthegoat.php">Girl & the Goat (West Loop)</a></li>
                <li><a href="giordanos.php">Giordano's</a></li>
                <li><a href="galit.php">Galit (Lincoln Park)</a></li>
                <li><a href="foodiehistory.php">Chicago's Foodie History</a></li>
                <li><a href="foodiehistory.php#jeanbanchet">Jean Banchet (Legendary Chef)</a></li>
                <li><a href="foodiehistory.php#famousfoods">Created Famous Foods</a></li>
                <li><a href="foodiehistory.php#meatpacking">Meat Packing</a></li>
                <li><a href="foodiehistory.php#mcdonalds">McDonald's Connection</a></li>
            </ul>
        </nav>
    </div>
</header>

<script>
    const hamburger = document.getElementById('hamburger');
    const navLinks = document.getElementById('nav-links');

    hamburger.addEventListener('click', () => {
        navLinks.classList.toggle('show');
    });
</script>

</body>
</html> -->
