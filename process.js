var Afirstname = [];
var Alastname = [];
var Aemail =[];
var Apass = [];
function addUser(){
    var firstname = document.getElementById("firstname").value;
    var lastname = document.getElementById("lastname").value;
    var email = document.getElementById("email").value;
    var password = document.getElementById("password").value;

    Afirstname.push(firstname);
    Alastname.push(lastname);
    Aemail.push(email);
    Apass.push(password);

    console.log(Afirstname);
    console.log(Alastname);
    console.log(Aemail);
    console.log(Apass);
}