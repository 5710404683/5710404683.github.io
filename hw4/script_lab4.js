

$('#submit').click(function() {
	// console.log("22");
	var gender = $('input[name=sex]:radio:checked').val();
	
	// console.log(gender);
	
	if ($("#fname").val() == '' || $("#lname").val() == '') {
    // setflag = false;
    alert("Please Enter Character.");
	}
	if(gender =="female"){
		// console.log(22);
    	$("body").css("background-image","url(img_lab4/female1.jpg)");
    	// $(".radio").css("background-color","rgba(109, 97, 99, 0.7)");
    	$("#demo").css('color', '#FF9999');
    	// $("body").css("background-color", "yellow");
    	if(submitBday()<13){
			$("body").css("font-family", 'Itim');
			$("body").css("font-size", "43px");
			$("#demo").css('color', '#696969');
			$("body").css("background-image","url(img_lab4/kid.jpg)");
		// $("body").css("background-color", "yellow");
		}
	}
	if(gender =="male"){
		$("body").css("background-image","url(img_lab4/man1.jpg)");
		$("#demo").css('color', 'white');
		    	if(submitBday()<13){
			$("body").css("font-family", 'Itim');
			$("#demo").css('color', '#696969');
			$("body").css("background-image","url(img_lab4/kid.jpg)");
		}
	}

 });
$('#clear').click(function() { 

$("#fname").val("");
$("#lname").val("");
$("#birth").val("");
});
function submitBday() {
    // var Q4A = "Your birthday is: ";
    var Bdate = document.getElementById('birth').value;
    var Bday = new Date(Bdate);
    var age = (Date.now() - Bday) / (31557600000);
    // Q4A += Bdate + ". You are " + ~~ ((Date.now() - Bday) / (31557600000));
    // var theBday = document.getElementById('resultBday');
    // theBday.innerHTML = Q4A;
    return age;
}