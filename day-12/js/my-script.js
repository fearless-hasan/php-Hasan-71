// /**
//  * Created by Web App Develop-PHP on 12/12/2017.
//  */
// $('h2').html('header changed by html');
// alert( $('h1').html());
// $('h2').text('header changed by text');
//
//
//
// alert( $('h1').html('Hello World'));


$('#btn').click(function () {
    var firstNameValue = $('#firstName').val();
    var lastNameValue = $('#lastName').val();
    var fullName = firstNameValue+ ' ' +lastNameValue;
    $('#fullName').val(fullName);
});

$('#addition').click(function () {
    var firstNumberValue = parseInt($('#firstNumber').val());
    var lastNumberValue = parseInt($('#lastNumber').val());
    var answer = firstNumberValue +lastNumberValue;
    $('#answer').val(answer);
});

$('#subtraction').click(function () {
    var firstNumberValue = parseInt($('#firstNumber').val());
    var lastNumberValue = parseInt($('#lastNumber').val());
    var answer = firstNumberValue -lastNumberValue;
    $('#answer').val(answer);
});

$('#multiplication').click(function () {
    var firstNumberValue = parseInt($('#firstNumber').val());
    var lastNumberValue = parseInt($('#lastNumber').val());
    var answer = firstNumberValue *lastNumberValue;
    $('#answer').val(answer);
});
$('#division').click(function () {
    var firstNumberValue = parseInt($('#firstNumber').val());
    var lastNumberValue = parseInt($('#lastNumber').val());
    var answer = firstNumberValue /lastNumberValue;
    $('#answer').val(answer);
});




var submit = document.getElementById('submit') ;

submit.onclick = function() {
    var startingNumberValue = parseInt(document.getElementById('startingNumber').value);
    var endingNumberValue = parseInt(document.getElementById('endingNumber').value);

    var res = 0;
    for(var x = startingNumberValue;x<=endingNumberValue;x++) {
        res+=x;
    }
    document.getElementById('result').value=res;

};


var redBtnElement = document.getElementById('redButton');
redBtnElement.onclick = function() {
    var divOneElement = document.getElementById('divOne');
    // divOneElement.style.backgroundColor = 'red';
    divOneElement.className = 'class-one';
};

var greenBtnElement = document.getElementById('greenButton');
greenBtnElement.onclick = function() {
    var divOneElement = document.getElementById('divOne');
    // divOneElement.style.backgroundColor = 'forestgreen';
    divOneElement.className = 'class-two';
};

var blueBtnElement = document.getElementById('blueButton');
blueBtnElement.onmouseover = function() {
    var divOneElement = document.getElementById('divOne');
    // divOneElement.style.backgroundColor = 'darkcyan';
    divOneElement.className = 'class-three';
};

var defaultBtnElement = document.getElementById('defaultButton');
defaultBtnElement.onmouseover = function() {
    var divOneElement = document.getElementById('divOne');
    // divOneElement.style.backgroundColor = 'white';
    divOneElement.className = 'my-style';
};
