var btnElement = document.getElementById('btn');
	btnElement.onclick = function(){
		var firstNameValue = document.getElementById('firstName').value;
		var lastNameValue = document.getElementById('lastName').value;
		var fullNameValue = firstNameValue +' ' +lastNameValue;
		alert(fullNameValue);
		document.getElementById('fullName').value=fullNameValue;
	};

	var btnAddition = document.getElementById('addition');
	btnAddition.onclick = function(){
		var firstNumberValue = Number(document.getElementById('firstNumber').value);
		var secondNumberValue = Number(document.getElementById('secondNumber').value);
		var resultValue = firstNumberValue+secondNumberValue;
		//alert(fullNameValue);
		document.getElementById('result').value=resultValue;
	};

	var btnAddition = document.getElementById('subtraction');
	btnAddition.onclick = function(){
		var firstNumberValue = Number(document.getElementById('firstNumber').value);
		var secondNumberValue = Number(document.getElementById('secondNumber').value);
		var resultValue = firstNumberValue-secondNumberValue;
		//alert(fullNameValue);
		document.getElementById('result').value=resultValue;
	};

	var btnAddition = document.getElementById('multiplication');
	btnAddition.onclick = function(){
		var firstNumberValue = Number(document.getElementById('firstNumber').value);
		var secondNumberValue = Number(document.getElementById('secondNumber').value);
		var resultValue = firstNumberValue*secondNumberValue;
		//alert(fullNameValue);
		document.getElementById('result').value=resultValue;
	};

	var btnAddition = document.getElementById('division');
	btnAddition.onclick = function(){
		var firstNumberValue = Number(document.getElementById('firstNumber').value);
		var secondNumberValue = Number(document.getElementById('secondNumber').value);
		var resultValue = firstNumberValue/secondNumberValue;
		//alert(fullNameValue);
		document.getElementById('result').value=resultValue;
	};


	var btnAddition = document.getElementById('remainder');
	btnAddition.onclick = function(){
		var firstNumberValue = Number(document.getElementById('firstNumber').value);
		var secondNumberValue = Number(document.getElementById('secondNumber').value);
		var resultValue = firstNumberValue%secondNumberValue;
		//alert(fullNameValue);
		document.getElementById('result').value=resultValue;
	};





	var data=[];

	data[0]=10;
	data[1]=20;
	data[2]=30;

	data['name']='Mosiur';
	data['city']='Dhaka';
	data['country']='Bangladesh';

	for (var a in data) {
		document.write(data[a]+'<br/>');
	}
	document.write(data.length+'<br/>'+'<br/>'+'<br/>');

	
	var paragraphElement = document.getElementsByTagName('p');
	
	document.write(paragraphElement.length+'<br/>'+'<br/>'+'<br/>');
	
	for (var key in paragraphElement) {
		document.write(paragraphElement[key].innerHTML+'<br/>');
	}
	document.write('<br/>'+'<br/>'+'<br/>');


	function demo(firstName, lastName){
		var fullName=firstName +' ' + lastName;
	document.write(fullName+'<br/>'+'<br/>'+'<br/>');
	}

	demo('hasan','ali');