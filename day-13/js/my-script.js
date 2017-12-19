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

function createHeadingParagraphElement() {
    var newHeadingElement = document.createElement('h1');
    var newParagraphElement = document.createElement('p');

    newHeadingElement.innerHTML= "This is a heading.";
    newParagraphElement.innerHTML= "This is a Paragraph.";

    document.getElementById('div').appendChild(newHeadingElement);
    document.getElementById('div').appendChild(newParagraphElement);

}

document.getElementById('btn').onclick = function () {
    createHeadingParagraphElement();
}

$('#firstName').mouseover(function () {
	$('#firstName').focus();
	//$('#tableFullName').text($('#firstName').val());
});


$('#firstName').keyup(function () {
	$('#tableFirstName').text($('#firstName').val());
	$('#tableFullName').text($('#firstName').val());
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
});

// $('#lastName').blur(function () {
// 	$('#tableFullName').text($('#firstName').val() + ' ' +$('#lastName').val());
// });



$('#image1').mouseover(function () {
    var imageSrcValue = $(this).attr('src');
    $('#mainImage').attr('src',imageSrcValue);
})
$('#image2').mouseover(function () {
    var imageSrcValue = $(this).attr('src');
    $('#mainImage').attr('src',imageSrcValue);
})
$('#image3').mouseover(function () {
    var imageSrcValue = $(this).attr('src');
    $('#mainImage').attr('src',imageSrcValue);
})
$('#image4').mouseover(function () {
    var imageSrcValue = $(this).attr('src');
    $('#mainImage').attr('src',imageSrcValue);
})