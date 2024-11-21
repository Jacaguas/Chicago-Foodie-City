<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>References</title>
</head>
<body>
    <button><a href="index.php" style="text-decoration: none;">Home</a></button>
    <h1>References</h1>
    <p style="line-height: 2.5;">
        https://encyclopedia.chicagohistory.org/pages/804.html</br>

        
        https://www.lib.uchicago.edu/</br>
        Meatpacking in the Midwest: The Thomas E. Wilson Family Collection</br>

        Chicago Tribune; Story by Shanzeh Ahmad, Chicago Tribune;11/24/2023</br>

        Gage: source www.theinfatuation.com/chicago/reviews/the-gage</br>

        Italian Village: source https://www.thevillage-chicago.com</br>

        https://www.thrillist.com/venues/eat/chicago/restaurants/italian-village</br>

        Images:</br>
        Chicago Skyline (banner of home page)</br>
        Aerial view of Chicago, on Lake Michigan in Illinois (alphacoders.com)</br>
        Home page first row</br>
        https://www.conciergepreferred.com/the-taste-of-chicago-summer-food-festival/#</br>

        
        Neighborhoods:</br>

        Restaurants:</br>

        www.loop.com</br>



</p>
<p>
    <h1>Technologies/Methods Used</h1>
    <ul>
        <li>1. Box shadow</li>
        <li>2. Inside page navigation</li>
        <li>3. Embedded Interactive Maps</li>
        <li>4. Drop Down Lists</li>
        <li>5. Horizontal Line custom layout(to create break in line with subject text/name in between the flow of the line)</li>
        <li>6. Individual smaller images of food with their own drop down of ingredients/description</li>
        <li>7. CSS: reverse row</li>
        <li>8. CSS: use of nth child to alternate lay out of container items</li>
        <li>9. CSS: use of child rules</li>
        <li>10.CSS: border radius for images and containers</li>
        <li>11.CSS: Flex Wrap</li>
        <li>12.CSS: Translate: Transform; to create the horizontal rule effect with text between the flow of the line</li>
        <li>13.Navigation:from one page to specific section in another page (See all pages:navigation to section within same page, 
            and navigation from within a page at the sub navigation links down the page. 
            For example: Loop page has a small button that when clicked or hovered over
            displays a list of restaurants found in that neighborhood "The Loop". One or two may fall
            under the "Acclaimed Restaurants" list and so the restuarant has its own page. I provide that link to that.)</li>
        <li>14.Hamburger menu: used CSS to style (line 439-473) and make items appear over the other items on the page when user
            hovers or clicks the menu icon; 
            
        <li>15.JAVA SCRIPT COMPONENT and DHTML COMBINED!</br>
            Banner Images: fading slowly into new ones continuously;used key frames in CSS (line 394-396)to change opacity from 0 to 1 to 
            appear like smooth transition.</br>
            used Document Object Model to obtain Title page names (indexbanner.js file; line 6-22) in order to manipulate the code when calling images from the respective files.</li>
        <li>16.Survey form (more fields added!! see page survey.php): has check boxes, radio buttons, and text box for write in review.</li>
        <li>17.Data validated: in php, java script, and then sanitized before sending up to the server/database.</li>
        <li>18.Restructured files for images: place images in folders according to the page.</li>
        <li>Using the w3 schools html validator was not working because the files are php.</li>
        
    </ul>
</p>
<button><a href="index.php" style="text-decoration: none;">Home</a></button>
</body>
<?php
    include("footer.php"); 
?>
</html>