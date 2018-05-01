/*
 *
 * My General script stuff for my Laravel 5 testing grounds.
 *
 */

// When the user scrolls down 20px from the top of the document, show the button
window.onscroll = function() { scrollFunction() };

function scrollFunction() 
{
    if (document.body.scrollTop > 20 || document.documentElement.scrollTop > 20) 
    {
        document.getElementById("myBtn").style.display = "block";
        //console.log("inside the scroll function - show the button");
    } 
    else 
    {
        document.getElementById("myBtn").style.display = "none";
       // console.log("inside the scroll function - hide the button");
    }
}

// When the user clicks on the button, scroll to the top of the document
function topFunction() 
{
	//console.log("Inside the topFunction about to scroll to page top or 0");
    document.body.scrollTop = 0;
    document.documentElement.scrollTop = 0;
}
    