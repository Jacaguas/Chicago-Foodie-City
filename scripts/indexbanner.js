/*must get the title of the visited page(loading page) in order to access the 
related images for the banner carousel*/
var titleOfLoadingPage;
var images; 
var index = 1;
var banner = document.getElementById('carousel-img');

document.addEventListener("DOMContentLoaded", function(){

    titleOfLoadingPage = document.title.toLowerCase().replace(/\s/g, '');
    
    //debugging: trying to see if the page is loading and that the title of the page is captured
    console.log("Loaded Page:", titleOfLoadingPage);

    /*I will rename all of the banner images so that they have only name of the pagebanner_1, or 2, and so on */
    images = [titleOfLoadingPage+'/'+ titleOfLoadingPage + 'banner_1.jpg',titleOfLoadingPage+'/'+ titleOfLoadingPage + 'banner_2.jpg', titleOfLoadingPage+'/'+ titleOfLoadingPage + 'banner_3.jpg'];
    

    //setting a smooth transition from one banner image to the next; running array of images
    //in interval, using animation attributes(see css file)
    setInterval(bannerChange,6000);
})

function bannerChange(){    
    
    // Update img using the rest of the file path constructed above as well as 
    //the related array of imgages to the specific page navigated to by the user
    banner.src = 'assets/images/' + images[index]; 
    console.log(images);  
    
    index++;
    if(index == 3)
    {
        index = 0;
    } 

}
//validating for empty fields before passing form to the validate-sanitize.php page to sanitize.
function validate(){
    var firstName = document.getElementById('firstname').value;
    var lastName = document.getElementById('lastname').value;
    var email = document.getElementById('email').value;

    if(firstName == '' || lastName == '' || email == ''){
        alert("Please be sure to fill out the form correctly: Name and Email. Do not leave empty.");
        return false;
    }else{
       
        return true;
    }
}


