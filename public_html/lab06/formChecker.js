// Validate the input from the customer before submitting
// the form to the server.
function usernameCheck(input) {
    var username = input.value;
    var usernameRegex = /^[a-zA-Z0-9._-]+@[a-zA-Z0-9.-]+\.[a-zA-Z]{2,4}$/;

    if (usernameRegex.test(username)) {
        input.setCustomValidity('');

    }
    else {
        input.setCustomValidity('Username must be in the form of an email address (' + usernameRegex.source + ')');

    }
}

function check(input) {
    // make sure the password is not blank
    if (input.value == "") {
        input.setCustomValidity('Enter a password.');
    } else {
        // input is valid -- reset the error message
        input.setCustomValidity('');
    }
}
