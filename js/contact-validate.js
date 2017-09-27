function validateName() {

  var name = document.getElementById('contact-name').value;

  if(name.length == 0) {

    producePrompt('Enter Full Name.', 'name-error' , 'red')
    return false;

  }
	
  producePrompt(' ', 'name-error', 'green');
  return true;

}

function validatePhone() {

  var phone = document.getElementById('contact-phone').value;

    if(phone.length == 0) {
      producePrompt('Enter Mobile number.', 'phone-error', 'red');
      return false;
    }

    if(phone.length != 10) {
      producePrompt('You have not entered 10 digits', 'phone-error', 'red');
      return false;
    }

    if(!phone.match(/^[0-9]{10}$/)) {
      producePrompt('Only digits, please...' ,'phone-error', 'red');
      return false;
    }

    producePrompt(' ', 'phone-error', 'green');
    return true;

}

function validateEmail() {

  var email = document.getElementById('contact-email').value;

  if(email.length == 0) {

    producePrompt('Email address is not filled out!','email-error', 'red');
    return false;

  }

  if(!email.match(/^[A-Za-z\._\-[0-9]*[@][A-Za-z]*[\.][a-z]{2,4}$/)) {

    producePrompt(' ', 'email-error', 'red');
    return false;

  }

  producePrompt(' ', 'email-error', 'green');
  return true;

}

function validateMessage() {
  var message = document.getElementById('contact-message').value;
//  var required = 10;
  var left = required - message.length;

  if (left > 0) {
    producePrompt(' Can\'t be empty','message-error','red');
    return false;
  }

  producePrompt(' ', 'message-error', 'green');
  return true;

}

function validateForm() {
  if (!validateName() || !validatePhone() || !validateEmail() || !validateMessage()) {
    jsShow('submit-error');
    producePrompt('Please Fill up all cells', 'submit-error', 'red');
    setTimeout(function(){jsHide('submit-error');}, 2000);
	return false;
  }
  else {

  }
}

function jsShow(id) {
  document.getElementById(id).style.display = 'block';
}

function jsHide(id) {
  document.getElementById(id).style.display = 'none';
}




function producePrompt(message, promptLocation, color) {

  document.getElementById(promptLocation).innerHTML = message;
  document.getElementById(promptLocation).style.color = color;


}
