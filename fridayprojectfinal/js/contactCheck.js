var checkContactForm = function () {
	var name = document.getElementById("contactName");
	var email = document.getElementById("contactEmail");
	var message = document.getElementById("contactMessage");

	var nameVal = name.value;
		emailVal = email.value;
		massageVal = message.value;

	if (nameVal.length == 0 || emailVal.length == 0 || messageVal.length == 0) {
		alert("Please fill all the fields.");
		return false;
	}
}

  
