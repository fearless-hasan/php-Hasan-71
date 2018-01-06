
var resultString = [
	'',
	''
];

var number = [
	0,
	0,
	0
];

var indicator = 0;
var operator = '';
var flagMinus = '';
var pointCount = 0;
var resultValue;

operateFunction = function() {
	number[0] = Number(resultString[0]);
	number[1] = Number(resultString[1]);
	if(operator==''){
		number[3]=Number(resultString[0]);
	} else if(operator=='+'){
		number[3] = number[0]+number[1];
	} else if(operator=='-'){
		number[3] = number[0]-number[1];
	} else if(operator=='*'){
		number[3] = number[0]*number[1];
	} else if(operator=='/'){
		number[3] = number[0]/number[1];
	} else if(operator=='%'){
		number[3] = number[0]%number[1];
	}
	if(number[3]<0) flagMinus='-';
	else flagMinus='';
	// resultString[0] += resultString[1]; 
	resultString[0] = String(number[3]);
	resultString[1] = '';
};

squareRoot = function(){
	number[0] = Number(resultString[indicator]);
	number[3] = Math.sqrt(number[0]);
	resultString[indicator] = String(number[3]);
};

valueInverse = function(){
	number[0] = Number(resultString[indicator]);
	number[3] = 1/number[0];
	resultString[indicator] = String(number[3]);
};

valueSquare = function(){
	number[0] = Number(resultString[indicator]);
	number[3] = number[0]*number[0];
	resultString[indicator] = String(number[3]);
};

var c = document.getElementById('c');
c.onclick = function() {
	resultString[0] = '';
	resultString[1] = '';
	operator = '';
	flagMinus = '';
	pointCount = 0;
	indicator = 0;
	document.getElementById('flagMinus').value = '';	
	document.getElementById('resultString').value=resultString[0] + ' ' + operator + ' ' + resultString[1];	
	document.getElementById('flagMinus').value=flagMinus;
	document.getElementById('result').value= '0';			
};

var ce = document.getElementById('ce');
ce.onclick = function() {	
	resultString[indicator]='';
	pointCount = 0;
	document.getElementById('resultString').value=resultString[0] + ' ' + operator + ' ' + resultString[1];
	flagMinus='';
	document.getElementById('flagMinus').value=flagMinus;
	document.getElementById('result').value= '0';	
};

var backspace = document.getElementById('backspace');
backspace.onclick = function() {	
	var size = resultString[indicator].length;
	resultString[indicator]=resultString[indicator].slice(0,size-1);
	document.getElementById('resultString').value=resultString[0] + ' ' + operator + ' ' + resultString[1];
	if(size==0) flagMinus='';
	document.getElementById('flagMinus').value=flagMinus;		
	document.getElementById('result').value = resultString[indicator];
	
};


var inverse = document.getElementById('inverse');
inverse.onclick = function() {	
	valueInverse();
	document.getElementById('resultString').value=resultString[0] + ' ' + operator + ' ' + resultString[1];	
	document.getElementById('result').value = resultString[indicator];	
};

var sqrt = document.getElementById('sqrt');
sqrt.onclick = function() {		
	squareRoot();
	document.getElementById('resultString').value=resultString[0] + ' ' + operator + ' ' + resultString[1];	
	document.getElementById('result').value = resultString[indicator];	
	flagMinus = '';
	document.getElementById('flagMinus').value=flagMinus;
};

var square = document.getElementById('square');
square.onclick = function() {	
	valueSquare();
	document.getElementById('resultString').value=resultString[0] + ' ' + operator + ' ' + resultString[1];	
	document.getElementById('result').value = resultString[indicator];	
	flagMinus = '';
	document.getElementById('flagMinus').value=flagMinus;
};

var remainder = document.getElementById('remainder');
remainder.onclick = function() {	
	operateFunction();
	operator = '%';
	indicator = 1;
	pointCount = 0;
	if(resultString[0]=='') resultString[0]='0';		
	document.getElementById('resultString').value=resultString[0] + ' ' + operator + ' ' + resultString[1];
	document.getElementById('result').value = String(Math.abs(number[3]));	
	document.getElementById('flagMinus').value=flagMinus;	
	flagMinus = '';	
};

var division = document.getElementById('division');
division.onclick = function() {	
	operateFunction();
	operator = '/';
	indicator = 1;
	pointCount = 0;
	if(resultString[0]=='') resultString[0]='0';		
	document.getElementById('resultString').value=resultString[0] + ' ' + operator + ' ' + resultString[1];
	document.getElementById('result').value = String(Math.abs(number[3]));
	document.getElementById('flagMinus').value=flagMinus;	
	flagMinus = '';
};

var multiplication = document.getElementById('multiplication');
multiplication.onclick = function() {	
	operateFunction();
	operator = '*';
	indicator = 1;
	pointCount = 0;
	if(resultString[0]=='') resultString[0]='0';		
	document.getElementById('resultString').value=resultString[0] + ' ' + operator + ' ' + resultString[1];
	document.getElementById('result').value = String(Math.abs(number[3]));	
	document.getElementById('flagMinus').value=flagMinus;
	flagMinus = '';
};

var subtraction = document.getElementById('subtraction');
subtraction.onclick = function() {	
	operateFunction();
	operator = '-';
	indicator = 1;
	pointCount = 0;
	if(resultString[0]=='') resultString[0]='0';		
	document.getElementById('resultString').value=resultString[0] + ' ' + operator + ' ' + resultString[1];
	document.getElementById('result').value = String(Math.abs(number[3]));	
	document.getElementById('flagMinus').value=flagMinus;
	flagMinus = '';
};

var addition = document.getElementById('addition');
addition.onclick = function() {	
	operateFunction();
	operator = '+';
	indicator = 1;
	pointCount = 0;
	if(resultString[0]=='') resultString[0]='0';		
	document.getElementById('resultString').value=resultString[0] + ' ' + operator + ' ' + resultString[1];
	document.getElementById('result').value = String(Math.abs(number[3]));	
	document.getElementById('flagMinus').value = flagMinus;
	flagMinus = '';
};

var equal = document.getElementById('equal');
equal.onclick = function() {	
	operateFunction();
	operator = '';
	indicator = 0;
	pointCount = 0;
	document.getElementById('resultString').value=resultString[0] + ' ' + operator + ' ' + resultString[1];	
	document.getElementById('flagMinus').value = flagMinus;	
	document.getElementById('result').value = String(Math.abs(number[3]));	
};

var reverse = document.getElementById('reverse');
reverse.onclick = function() {
	if(flagMinus==''){
		flagMinus = '-';
		resultString[indicator]='-'+resultString[indicator];
	} else {
		flagMinus = '';
		var size = resultString[indicator].length;
		resultString[indicator]=resultString[indicator].slice(1,size);
	}
	document.getElementById('resultString').value=resultString[0] + ' ' + operator + ' ' + resultString[1];	
	document.getElementById('flagMinus').value = flagMinus;	
};

var seven = document.getElementById('seven');
seven.onclick = function() {	
	resultString [indicator] += '7';
	document.getElementById('resultString').value=resultString[0] + ' ' + operator + ' ' + resultString[1];
	document.getElementById('result').value= String(Math.abs(Number(resultString[indicator])));
};

var eight = document.getElementById('eight');
eight.onclick = function() {	
	resultString [indicator] += '8';
	document.getElementById('resultString').value=resultString[0] + ' ' + operator + ' ' + resultString[1];
	document.getElementById('result').value= String(Math.abs(Number(resultString[indicator])));
};

var nine = document.getElementById('nine');
nine.onclick = function() {	
	resultString [indicator] += '9';
	document.getElementById('resultString').value=resultString[0] + ' ' + operator + ' ' + resultString[1];
	document.getElementById('result').value= String(Math.abs(Number(resultString[indicator])));
};

var four = document.getElementById('four');
four.onclick = function() {	
	resultString [indicator] += '4';
	document.getElementById('resultString').value=resultString[0] + ' ' + operator + ' ' + resultString[1];
	document.getElementById('result').value= String(Math.abs(Number(resultString[indicator])));
};

var five = document.getElementById('five');
five.onclick = function() {	
	resultString [indicator] += '5';
	document.getElementById('resultString').value=resultString[0] + ' ' + operator + ' ' + resultString[1];
	document.getElementById('result').value= String(Math.abs(Number(resultString[indicator])));
};

var six = document.getElementById('six');
six.onclick = function() {	
	resultString [indicator] += '6';
	document.getElementById('resultString').value=resultString[0] + ' ' + operator + ' ' + resultString[1];
	document.getElementById('result').value= String(Math.abs(Number(resultString[indicator])));
};

var one = document.getElementById('one');
one.onclick = function() {	
	resultString [indicator] += '1';
	document.getElementById('resultString').value=resultString[0] + ' ' + operator + ' ' + resultString[1];
	document.getElementById('result').value= String(Math.abs(Number(resultString[indicator])));
};

var two = document.getElementById('two');
two.onclick = function() {	
	resultString [indicator] += '2';
	document.getElementById('resultString').value=resultString[0] + ' ' + operator + ' ' + resultString[1];
	document.getElementById('result').value= String(Math.abs(Number(resultString[indicator])));
};

var three = document.getElementById('three');
three.onclick = function() {	
	resultString [indicator] += '3';
	document.getElementById('resultString').value=resultString[0] + ' ' + operator + ' ' + resultString[1];
	document.getElementById('result').value= String(Math.abs(Number(resultString[indicator])));
};

var zero = document.getElementById('zero');
zero.onclick = function() {	
	if(resultString [indicator] != ''){
		resultString [indicator] += '0';
		document.getElementById('resultString').value=resultString[0] + ' ' + operator + ' ' + resultString[1];
		document.getElementById('result').value= String(Math.abs(Number(resultString[indicator])));
	}
};


var point = document.getElementById('point');
point.onclick = function() {
	if(pointCount==0){
		pointCount=1;
		resultString [indicator] += '.';
	}	
	document.getElementById('resultString').value=resultString[0] + ' ' + operator + ' ' + resultString[1];
	document.getElementById('result').value= String(Math.abs(Number(resultString[indicator])));
};










var btnAddition = document.getElementById('normAddition');
btnAddition.onclick = function(){
	var firstNumberValue = Number(document.getElementById('firstNumber').value);
	var secondNumberValue = Number(document.getElementById('secondNumber').value);
	resultValue = firstNumberValue+secondNumberValue;
	//alert(fullNameValue);
	document.getElementById('normResult').value=resultValue;
};

var btnSubtraction = document.getElementById('normSubtraction');
btnSubtraction.onclick = function(){
	var firstNumberValue = Number(document.getElementById('firstNumber').value);
	var secondNumberValue = Number(document.getElementById('secondNumber').value);
	resultValue = firstNumberValue-secondNumberValue;
	//alert(fullNameValue);
	document.getElementById('normResult').value=resultValue;
};

var btnMultiplication = document.getElementById('normMultiplication');
btnMultiplication.onclick = function(){
	var firstNumberValue = Number(document.getElementById('firstNumber').value);
	var secondNumberValue = Number(document.getElementById('secondNumber').value);
	resultValue = firstNumberValue*secondNumberValue;
	//alert(fullNameValue);
	document.getElementById('normResult').value=resultValue;
};

var btnDivision = document.getElementById('normDivision');
btnDivision.onclick = function(){
	var firstNumberValue = Number(document.getElementById('firstNumber').value);
	var secondNumberValue = Number(document.getElementById('secondNumber').value);
	resultValue = firstNumberValue/secondNumberValue;
	//alert(fullNameValue);
	document.getElementById('normResult').value=resultValue;
};


var btnRemainder = document.getElementById('normRemainder');
btnRemainder.onclick = function(){
	var firstNumberValue = Number(document.getElementById('firstNumber').value);
	var secondNumberValue = Number(document.getElementById('secondNumber').value);
	resultValue = firstNumberValue%secondNumberValue;
	//alert(fullNameValue);
	document.getElementById('normResult').value=resultValue;
};




$(test).keypress(function(e){
    var checkWebkitandIE=(e.which==26 ? 1 : 0);
    var checkMoz=(e.which==122 && e.ctrlKey ? 1 : 0);

    if (checkWebkitandIE || checkMoz) alert("sadf");
});
