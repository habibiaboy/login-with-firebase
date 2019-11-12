firebase.auth().onAuthStateChanged(function(user) {
  if (user) {
    // User Sign in
    document.getElementById("user_div").style.display = "block";
    document.getElementById("login_div").style.display = "none";

     var user = firebase.auth().currentUser;

     if (user != null) {

      var email_id = user.email;

      document.getElementById("user_param").innerHTML = "Welcome User :" + email_id;

      }
  


  } else {
    // No user is signed in.
    document.getElementById("user_div").style.display = "none";
    document.getElementById("login_div").style.display = "block";

  }
});
function login(){

  var userEmail = document.getElementById("email_field").value;
  var userPass = document.getElementById("password_field").value;

  // var userEmail = "firebase01@gmail.com";
  // var userPass = "welcome1"

  // window.alert(userEmail +" "+userPass);

  firebase.auth().signInWithEmailAndPassword(userEmail, userPass).catch(function(error) {
  // Handle Errors here.
  var errorCode = error.code;
  var errorMessage = error.message;

  if (userEmail != "" && userPass!="") {
      return true;
    }else{
      alert('Username dan Password harus di isi !');
      return false;
    }

  // window.alert("Error: " + "TEST" + errorMessage);
  });


}


function logout(){
  firebase.auth().signOut().then(function() {
    window.alert("Anda Telah Keluar");
  }).catch(function(error) {
    // An error happened.
  });
}