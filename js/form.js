$(document).ready(function() {

    // process the form
    $('form').submit(function(event) {

        // get the form data
        var formData = {
            'name'              : $('input[name=name]').val(),
            'email'             : $('input[name=email]').val(),
            'website'           : $('input[name=website]').val()
        };

        console.log(JSON.stringify(formData));      
        // process the form
        if(formData.name!="" && formData.email!="" && formData.website!=""){
            $.ajax({
                type        : 'POST', // HTTP verb type
                url         : 'client_form.php', // the url where we want to POST
                data        : formData, // our data object
                dataType    : 'json', // what type of data do we expect back from the server
                encode      : true,
                cache       : false
            })
    
            // using the done promise callback !
            .done(function(data) {
                // log data to the console
                console.log(JSON.stringify(data)); 
            });
        }
        else{
            alert('Please fill all the field !');
        }
        
        // stop the form from submitting the normal way and refreshing the page
        event.preventDefault();

        //reset form
        $('form').trigger("reset");
    });    

});

