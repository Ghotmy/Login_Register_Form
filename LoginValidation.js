let btn= document.getElementById('btn');
btn.addEventListener("click",CheckAll);

function CheckAll(e){
    let email = document.getElementById('email').value;
    let pass=   document.getElementById('pass').value;
    
    if(!email && !pass){
        alert("Please Enter Your Email and Password");
        e.preventDefault();
    }
    else if(!email) {
        alert("Please Enter Your Email");
        e.preventDefault();
    }
    else if(!pass) {
        alert("Please Enter Your Password");
        e.preventDefault();
    }
}
