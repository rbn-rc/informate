$(document).ready(function() {

	// process the form
	$('form').submit(function(event) {

		$('.warning').remove(); // remove the error text


		var path = window.location.pathname;
		var pos = path.search("survey_gob");
		var type = '';
		if (pos > 0) {
			type = 'gob';
		} else {
			var pos = path.search('survey_mun');
			if  (pos > 0){
				type = 'mun';
			} else {
				type = 'Error of page origin';
			}
		}


		// get the form data
		// there are many ways to get this data using jQuery (you can use the class or id also)
		var formData = {
			'candidato'		: $('input[name=optradio]:checked').val(),
			'tipo'			: type,
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
					if (data.errors.radio){
						$('#message').append('<div class="warning"><h2 class="text-center"><span class="label label-danger">'+ data.errors.radio +' Gracias por participar.</h2></span></div><hr>'); // add the actual error message under our input
				 	}
					//window.document.getElementById('message').innerHTML=data.errors.radio +' Gracias por participar.';				

				} else {

					// ALL GOOD! just show the success message!
					if (data.message){
						$('#message').append('<div class="warning"><h2 class="text-center"><span class="label label-danger">'+ data.message +' Gracias por participar.</h2></span></div><hr>');  // add the actual error message under our input
					}
					//window.document.getElementById('message').innerHTML=data.message +' Gracias por participar.';	

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