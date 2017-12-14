
var st = ''

var c = document.getElementById('c');
c.onclick = function() {	
	document.getElementById('result').value=0;	
	document.getElementById('resultString').value='';
	document.getElementById('flagMinus').value='';	
};

var backspace = document.getElementById('backspace');
backspace.onclick = function() {	
	document.getElementById('result').value=Number(document.getElementById('result').value)/10;	
	document.getElementById('resultString').value='';
};

var one = document.getElementById('one');
one.onclick = function() {	
	document.getElementById('result').value=Number(document.getElementById('result').value)*10+1;	
	document.getElementById('resultString').value=Number(document.getElementById('resultString').value)+'1';	
};
var two = document.getElementById('two');
two.onclick = function() {	
	document.getElementById('result').value=Number(document.getElementById('result').value)*10+2;	
	document.getElementById('resultString').value=Number(document.getElementById('resultString').value)+'2';	
};



var btnElement = document.getElementById('btn');
	btnElement.onclick = function(){
		var firstNameValue = document.getElementById('firstName').value;
		var lastNameValue = document.getElementById('lastName').value;
		var fullNameValue = firstNameValue +' ' +lastNameValue;
		alert(fullNameValue);
		document.getElementById('fullName').value=fullNameValue;
	};

	var btnAddition = document.getElementById('normAddition');
	btnAddition.onclick = function(){
		var firstNumberValue = Number(document.getElementById('firstNumber').value);
		var secondNumberValue = Number(document.getElementById('secondNumber').value);
		var resultValue = firstNumberValue+secondNumberValue;
		//alert(fullNameValue);
		document.getElementById('normResult').value=resultValue;
	};

	var btnAddition = document.getElementById('normSubtraction');
	btnAddition.onclick = function(){
		var firstNumberValue = Number(document.getElementById('firstNumber').value);
		var secondNumberValue = Number(document.getElementById('secondNumber').value);
		var resultValue = firstNumberValue-secondNumberValue;
		//alert(fullNameValue);
		document.getElementById('normResult').value=resultValue;
	};

	var btnAddition = document.getElementById('normMultiplication');
	btnAddition.onclick = function(){
		var firstNumberValue = Number(document.getElementById('firstNumber').value);
		var secondNumberValue = Number(document.getElementById('secondNumber').value);
		var resultValue = firstNumberValue*secondNumberValue;
		//alert(fullNameValue);
		document.getElementById('normResult').value=resultValue;
	};

	var btnAddition = document.getElementById('normDivision');
	btnAddition.onclick = function(){
		var firstNumberValue = Number(document.getElementById('firstNumber').value);
		var secondNumberValue = Number(document.getElementById('secondNumber').value);
		var resultValue = firstNumberValue/secondNumberValue;
		//alert(fullNameValue);
		document.getElementById('normResult').value=resultValue;
	};


	var btnAddition = document.getElementById('normRemainder');
	btnAddition.onclick = function(){
		var firstNumberValue = Number(document.getElementById('firstNumber').value);
		var secondNumberValue = Number(document.getElementById('secondNumber').value);
		var resultValue = firstNumberValue%secondNumberValue;
		//alert(fullNameValue);
		document.getElementById('normResult').value=resultValue;
	};
