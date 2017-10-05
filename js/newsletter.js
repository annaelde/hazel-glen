// Configures SweetAlert2 newsletter sign-up modal.
// Only runs if it's the user's first visit (checked with cookie).
$(function() 
{
	var emailStatus = false;
	var thisCookie = document.cookie.split("; ");

	for (i = 0; i < thisCookie.length; i++) {
		if (thisCookie[i].split("=")[0] == "email")
			emailStatus = thisCookie[i].split("=")[1];
	}

	if (emailStatus == false)
	{
		swal({
		  title: "Sign up for our newsletter!",
		  text: "Enter your email address below to subscribe to our online newsletter.",
		  input: "email",
		  confirmButtonText: "Sign Up",
		  cancelButtonText: "No Thanks",
		  showCancelButton: true,
		  animation: "slide-from-top",
		  inputPlaceholder: "My email is..."
		}).then(function(email){
			if (email == false) return false;	  
			if (email == "") 
			{
		    	swal.showInputError("Enter an email or press cancel.");
		    	return false;
			}
			expireDate = new Date();
			expireDate.setMonth(expireDate.getMonth()+6);
			document.cookie = "email=" + "true" + "; expires=" + expireDate.toGMTString();
			$.post("subscribe.php", {email: email});
			swal({
				type: 'success',
				html: "Your email " + email + " has been subscribed to our newsletter."
		 	})
		 }, function(cancel)
		 {
		 	expireDate = new Date();
			expireDate.setMonth(expireDate.getMonth()+6);
			document.cookie = "email=" + "true" + "; expires=" + expireDate.toGMTString();
		 })
	}
});