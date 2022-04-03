function emptyValidation() {
    var a = document.forms["Form"]["email"].value;
    var b = document.forms["Form"]["password"].value;
    if (a == "" || email == null) {
       alert("Email must be filled out");
       return false;
    }
    if (b == "" || password == null) {
        alert("Password must be filled out");
        return false;
     }
     else{
         alert("You have successfully loged in!");
         return true;
     }
 }