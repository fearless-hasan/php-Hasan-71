// var btnElement = document.getElementById('btn');
// btnElement.onclick = function(){
//     var firstNameValue = document.getElementById('firstName').value;
//     var lastNameValue = document.getElementById('lastName').value;
//     var fullNameValue = firstNameValue +' ' +lastNameValue;
//     alert(fullNameValue);
//     document.getElementById('tableFirstName').value=firstNameValue;
//     document.getElementById('tableLastName').value=lastNameValue;
//     document.getElementById('tableFullName').value=fullNameValue;
//     document.getElementById('full').value=fullNameValue;
// };


function CheckFirstName() {
    var firstNameLength = $('#firstName').val().length;
    if(firstNameLength>=6 && firstNameLength<=15){
        $('#firstNameError').text(' ');
        return true;
    } else{
        $('#firstNameError').text('First name should be between 6 to 15 character.');
        return false;
    }
}

function CheckLastName() {
    var lastNameLength = $('#lastName').val().length;
    if(lastNameLength>=6 && lastNameLength<=15){
        $('#lastNameError').text(' ');
        return true;
    } else{
        $('#lastNameError').text('Last name should be between 6 to 15 character.');
        return false;
    }
}

function ConfirmGender() {
    var genderValue = $('input[type="radio"]:checked').val();
    if(genderValue == 'male' || genderValue == 'female'){
        $('#genderError').text('');
        return true;
    } else{
        $('#genderError').text('Please select a gender');
        return false;
    }
}

function CheckEmail() {
    var pattern = RegExp(/^[+a-zA-Z0-9._-]+@[a-zA-Z0-9.-]+\.[a-zA-Z]{3,4}$/i);
    if(pattern.test($('#email').val())){
        $('#emailError').text(' ');
        return true;

    } else{
        $('#emailError').text('Enter a valid email');
        return false;
    }
}

function CheckPassword(password) {
    var password = password.length;
    if(password>=6){
        $('#passwordError').text(' ');
        return true;
    } else{
        $('#passwordError').text('Password at least 6 digit length');
        return false;
    }
}


function ConfirmPassword() {
    var password = $('#password').val();
    var confirmPassword = $('#confirmPassword').val();
    if(password == confirmPassword){
        $('#confirmPasswordError').text(' ');
        return true;
    } else{
        $('#confirmPasswordError').text('Password not Match');
        return false;
    }
}

function ConfirmDistrict() {
    var districtName = $('#districtName').val();
    if(districtName == ' '){
        $('#districtNameError').text('Select a District');
        return false;
    } else{
        $('#districtNameError').text('');
        return true;
    }
}



$('#firstName').mouseover(function () {
	$('#firstName').focus();
	//$('#tableFullName').text($('#firstName').val());
});
$('#firstName').keyup(function () {
	$('#tableFirstName').text($('#firstName').val());
	$('#tableFullName').text($('#firstName').val());
    CheckFirstName();
});
$('#firstName').blur( function () {
        CheckFirstName();
});
$('#firstName').click( function () {
        CheckFirstName();
});


$('#lastName').mouseover(function () {
    $('#lastName').focus();
    //$('#tableFullName').text($('#firstName').val());
});
$('#lastName').keyup(function () {
	var temp = $('#firstName').val();

	$('#tableLastName').text($('#lastName').val());

	temp = temp +' '+$('#lastName').val();
	$('#tableFullName').text(temp);
    CheckLastName();
});
$('#lastName').blur( function () {
    CheckLastName();
});
$('#lastName').click( function () {
    CheckLastName();
});


$('input[type="radio"]').blur(function () {
    ConfirmGender();
});

$('#email')
    .click(function () {
        CheckEmail();
    })
    .keyup(function () {
        CheckEmail();
    })
    .blur(function () {
        CheckEmail();
    })
;

$('#password')
    .click( function () {
        CheckPassword($(this).val());
    })
    .keyup(function () {
        CheckPassword($(this).val());
    })
    .blur( function () {
        CheckPassword($(this).val());
    })
;


$('#checkbox').click(function () {
    if(this.checked){
        $('#password').attr('type', 'text');
    } else {
        $('#password').attr('type', 'password');
    }
});

$('#confirmPassword')
    .click( function () {
        ConfirmPassword();
    })
    .keyup(function () {
        ConfirmPassword();
    })
    .blur( function () {
        ConfirmPassword();
    })
;

$('#districtName')
    .change(function () {
        ConfirmDistrict();
    })
    .blur(function () {
        ConfirmDistrict();
    })
;


$('#imageName')
    .change(function () {
        // var input = document.getElementById("imageName");
        var input = $('#imageName')[0];
        var fReader = new FileReader();
        fReader.readAsDataURL(input.files[0]);
        fReader.onloadend = function (event) {
            var img = $('#image')[0];
            img.src = event.target.result;
        }
        $('#show').css('display', 'block');
    })
;

$('#btn').submit(function () {
    if(CheckFirstName()==true && CheckLastName()==true && ConfirmGender()==true && CheckEmail()==true && CheckPassword()==true && ConfirmPassword()==true && ConfirmDistrict()==true) {
        return true;
    } else {
        return false;
    }
});

// $('#btnSecond').click(function () {
//
//     $('#image').attr('src','../day-8/images/1.jpg');
// });



// $('#lastName').blur(function () {
// 	$('#tableFullName').text($('#firstName').val() + ' ' +$('#lastName').val());
// });


