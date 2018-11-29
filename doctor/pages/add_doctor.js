
var designation=document.getElementById("designation");

function submitClick(){
	var firebaseRef=firebase.database().ref();

	var designation_value=designation.value;

	firebaseRef.push().set(designation_value);
	window.alert("Data submited");
}

console.log(designation);
