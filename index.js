var loginButton = $(".login-button")
var registerButton = $(".register-button")
$(window).on("hashchange", function(){
	if(location.hash.slice(1)=="register"){
		$(".card").addClass("extend");
		$("#login").removeClass("selected");
		$("#register").addClass("selected");
		registerButton.prop('disabled', true);
	} else {
		$(".card").removeClass("extend");
		$("#login").addClass("selected");
		$("#register").removeClass("selected");
	}
});
$(window).trigger("hashchange");




$(document).ready(function(){
	
	$(".email-validation").focusout(function(){
		var self = $(this);
		if(!self.val().includes('@')){
			self.closest('.input-container').find('.error-validation').show()
			loginButton.prop('disabled', true);
			registerButton.prop('disabled', true);
			
		}
		else {
			self.closest('.input-container').find('.error-validation').hide()
			loginButton.prop('disabled', false);
			registerButton.prop('disabled', false);
		}
		
	});

	$(".password-validation").keyup(function(){
		var self = $(this);
		if(self.val().length < 6){
			self.closest('.input-container').find('.error-validation').show()
			loginButton.prop('disabled', true);
			registerButton.prop('disabled', true);
		}
		else {
			console.log(($(".email-validation").val().length))
			if($(".register-control-lenght").val().length != 0){
				registerButton.prop('disabled', false);
			}
			if($(".login-control-lenght").val().length != 0){
				loginButton.prop('disabled', false);

			}
			self.closest('.input-container').find('.error-validation').hide()
		}
		
	});

	
	

	
});