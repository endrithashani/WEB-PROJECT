function emptyValidation() {
    var a = document.forms["Formm"]["emri"].value;
    var b = document.forms["Formm"]["mbiemri"].value;
    var c = document.forms["Formm"]["email"].value;
    var e = document.forms["Formm"]["password"].value;
    var f = document.forms["Formm"]["password2"].value; 

   
   if (a == "" || emri == null) {
       alert("Emri must be filled out");
       return false;
    }

    if (b == "" || mbiemri == null) {
        alert("Mbiemri must be filled out");
        return false;
     }

     if (c == "" || email1 == null) {
        alert("Email must be filled out");
        return false;
     }
     //konfirmimi i emailit
     if(konemail1.equals(email1)){
         alert("Email and Konfirmo Email do not match");
         return true;
     }

     if (e == "" || password == null) {
        alert("Password must be filled out");
        return false;
     }

     if (f == "" || password2 == null) {
        alert("Konfirmo password must be filled out");
        return false;
     }
     //konfirmimi i passwordit
     if(password2.equals(password)){
        alert("Password and Konfirmo password do not match");
        return true;
    }
}
