//var database = firebase.database();
//var ref=database.ref('doctors');

// function writeUserData(userId, name, email, imageUrl) {
//   firebase.database().ref('users/' + userId).set({
//     username: name,
//     email: email,
//     profile_picture : imageUrl
//   });
// }

fun add(){
	var designation=document.getElementById("designation").value;
	alert(designation);
	function writeUserData(designation) {
	  firebase.database().ref('doctors').set({
	    designation: designation
	  });
	}
}

console.log(writeUserData(designation));