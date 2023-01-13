$(document).ready(function(){
			$('#send_message').click(function(e){
				
				
				e.preventDefault();
				
				
				var error = false;
				var name = $('#name').val();
                
				var phone = $('#phone').val();
				
				var email = $('#email').val();
                var country = $('#country').val();
                var interest = $('#interest').val();
                var quantity = $('#quantity').val();
                var company = $('#company').val();
                var address = $('#address').val();
                 var message = $('#message').val();
                 
                
				
				if(name.length == 0){
					var error = true;
					$('#name_error').fadeIn(500);
				}else{
					$('#name_error').fadeOut(500);
				}
                
                if(phone.length == 0){
					var error = true;
					$('#phone_error').fadeIn(500);
				}else{
					$('#phone_error').fadeOut(500);
				}
                
                if(email.length == 0 || email.indexOf('@') == '-1'){
					var error = true;
					$('#email_error').fadeIn(500);
				}else{
					$('#email_error').fadeOut(500);
				}
                
                if(country.length == 0){
					var error = true;
					$('#country_error').fadeIn(500);
				}else{
					$('#country_error').fadeOut(500);
				}
                
                if(interest.length == 0){
					var error = true;
					$('#interest_error').fadeIn(500);
				}else{
					$('#interest_error').fadeOut(500);
				}
                
                if(quantity.length == 0){
					var error = true;
					$('#quantity_error').fadeIn(500);
				}else{
					$('#quantity_error').fadeOut(500);
				}
                
                
                  if(company.length == 0){
					var error = true;
					$('#company_error').fadeIn(500);
				}else{
					$('#company_error').fadeOut(500);
				}
                
                 if(address.length == 0){
					var error = true;
					$('#address_error').fadeIn(500);
				}else{
					$('#address_error').fadeOut(500);
				}
                
				
				if(message.length == 0){
					var error = true;
					$('#message_error').fadeIn(500);
				}else{
					$('#message_error').fadeOut(500);
				}
				
				
				if(error == false){
					
					$('#send_message').attr({'disabled' : 'true', 'value' : 'Sending...' });
					
					$.post("email/send_email.php", $("#contact_form").serialize(),function(result){
                        
                      
					
						if(result == 'sent'){
                            
							
							function resetForm($form) {
														$form.find('input:text, input:password, input:file, select, textarea').val('');
														$form.find('input:radio, input:checkbox')
															 .removeAttr('checked').removeAttr('selected');
													}
							resetForm($('#contact_form'));
							 $('#button').remove();
							 $('#buttonclr').remove();
							$('#mail_success').fadeIn(500);
						}else{
							$('#mail_fail').fadeIn(500);
							$('#send_message').removeAttr('disabled').attr('value', 'Submit');
						}
					});
				}
			});    
		});