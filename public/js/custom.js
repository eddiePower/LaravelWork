var hidden = false;

$(function () {
    $('#sidebarCollapse').on('click', function () 
    {
        $('#sidebar').toggleClass('active');
        if(hidden == true)
        {
	        hidden = false;
	        //console.log("The Menu is now open.");
        }
        else
        {
	        hidden = true;
	       // console.log("The Menu is now hidden.");
        }
    }); //end of the collapse sidebar on click call.  
}); //end of the on page ready jQuery.

