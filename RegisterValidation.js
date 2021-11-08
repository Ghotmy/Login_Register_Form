let btn= document.getElementById('btn');
btn.addEventListener("click",CheckAll);

function CheckAll(e){
    let email = document.getElementById('email').value;
    let name = document.getElementById('name').value;
    let pass=   document.getElementById('pass').value;
    let passConf=   document.getElementById('passConf').value;

    if(!validateIfEmpty(name,email,pass,passConf) || !validateEmail(email) || !validatePassword(pass,passConf)){
        e.preventDefault();
    }
}

//Check if Empty
function validateIfEmpty(name,email,pass,passConf){
    let msgString="";
    if(!name){
        msgString="Name ";
    }
    if(!email) {
        msgString+="Email ";
    }
    if(!pass) {
        msgString+="Password ";
    }
    if(!passConf) {
        msgString+="Confirm Password";
    }
    if(msgString){
        alert("Please Enter Your "+msgString);
        return false;
    }
    return true
}

//Check Email Format
function validateEmail(email)
{
    var mailformat = /^\w+([\.-]?\w+)*@\w+([\.-]?\w+)*(\.\w{2,3})+$/;
    if(email.match(mailformat)){ return true; } 
    else 
    {   alert("invalid email address!");
        return false;
    }
}

//Check Password Match
function validatePassword(pass1,pass2)
{
    console.log(pass1.length);
    if(pass1.length<6){
        alert("Pasword must be at least 6 characters");
        return false;
    }
    if(pass1!=pass2){
        alert("Passwords don't match")
        return false;
    }
    return true;
}
