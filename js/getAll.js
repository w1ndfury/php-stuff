$(document).ready(function() {

    $("#display").click(function() {                

      $.ajax({    //create an ajax request to get_all_clients.php
        type: "GET",
        url: "get_all_clients.php",              
        cache: false,            
        success: function(data){			
			$('#responsecontainer').html(data); 
		}

    });

    
});
});
