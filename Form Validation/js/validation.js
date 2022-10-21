function validate() {
    let passwordElement = document.getElementById('passwordID');
    let passwordValue = passwordElement.value;
    if (passwordValue.length >= 6 && passwordValue.length <= 12) {
        alert("valid password");
    }

    let phoneElement = document.getElementById('phoneID');
    let phoneValue = phoneElement.value;
    if(phoneValue.length == 13){
        console.log('valid phone length');
    }

    let emailElement = document.getElementById('emailID');
    let emailValue = emailElement.value;
    if(emailValue.endsWith('@gmail.com')){
        // valid gmail
    }
}

// DRY -> Donot Repeat Yourself