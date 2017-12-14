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
		document.getElementById('result').value=resultValue;
	};

	var btnAddition = document.getElementById('normSubtraction');
	btnAddition.onclick = function(){
		var firstNumberValue = Number(document.getElementById('firstNumber').value);
		var secondNumberValue = Number(document.getElementById('secondNumber').value);
		var resultValue = firstNumberValue-secondNumberValue;
		//alert(fullNameValue);
		document.getElementById('result').value=resultValue;
	};

	var btnAddition = document.getElementById('normMultiplication');
	btnAddition.onclick = function(){
		var firstNumberValue = Number(document.getElementById('firstNumber').value);
		var secondNumberValue = Number(document.getElementById('secondNumber').value);
		var resultValue = firstNumberValue*secondNumberValue;
		//alert(fullNameValue);
		document.getElementById('result').value=resultValue;
	};

	var btnAddition = document.getElementById('normDivision');
	btnAddition.onclick = function(){
		var firstNumberValue = Number(document.getElementById('firstNumber').value);
		var secondNumberValue = Number(document.getElementById('secondNumber').value);
		var resultValue = firstNumberValue/secondNumberValue;
		//alert(fullNameValue);
		document.getElementById('result').value=resultValue;
	};


	var btnAddition = document.getElementById('normRemainder');
	btnAddition.onclick = function(){
		var firstNumberValue = Number(document.getElementById('firstNumber').value);
		var secondNumberValue = Number(document.getElementById('secondNumber').value);
		var resultValue = firstNumberValue%secondNumberValue;
		//alert(fullNameValue);
		document.getElementById('result').value=resultValue;
	};
