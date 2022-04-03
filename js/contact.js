function emptyValidation() {

    var b = document.forms["Formm"]["mesazhi"].value;
    var a=document.forms["Formm"]["inputat"].value;
    if (a == "" || inputat == null) {
       alert("Emri dhe Email duhet te plotesohen");
    }
    if (b == "" || email == null) {
        alert("Mesazhi nuk duhet te jete i zbrazet!");
     }
 }