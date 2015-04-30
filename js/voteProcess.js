$(document).ready(function() {

	// process the form
	$('form').submit(function(event) {


		// get the form data
		// there are many ways to get this data using jQuery (you can use the class or id also)
		var formData = {
			'candidato' 				: $('input[name=optradio]:checked').val(),
		};

		// process the form
		$.ajax({
			type 		: 'POST', // define the type of HTTP verb we want to use (POST for our form)
			url 		: 'voteCount.php', // the url where we want to POST
			data 		: formData, // our data object
			dataType 	: 'json', // what type of data do we expect back from the server
			encode 		: true,

			success: function(html){
                //alert('Request sucessful.');
              },
            complete:function(jqXHR, textStatus) {
                //alert("request complete "+textStatus);
             },
            error: function(xhr, textStatus, errorThrown){
                alert('request failed->' + errorThrown);
                //alert(xhr.responseText);

            }

		})
			// using the done promise callback
			.done(function(data) {

				// log data to the console so we can see
				console.log(data); 

				// here we will handle errors and validation messages
				if ( ! data.success) {
					
					// handle errors ---------------
					
					$('#message').append( data.errors.radio + ' Gracias por participar.'); // add the actual error message under our input
					

				} else {

					// ALL GOOD! just show the success message!
					$('#message').append(data.message +' Gracias por participar.'); // add the actual error message under our input

					// usually after form submission, you'll want to redirect
					//window.location = '../'; // redirect a user to another page

				}
			})

			// using the fail promise callback
			.fail(function(data) {

				// show any errors
				// best to remove for production
				console.log(data);
			});

		// stop the form from submitting the normal way and refreshing the page
		event.preventDefault();
	});

});