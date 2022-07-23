const uname2 = document.getElementById('UserName');
const email = document.getElementById('emailAddress');
const fullname = document.getElementById('name');
const company = document.getElementById('company');
const password = document.getElementById('password');


anime({
    targets: '#RegistrationForm' ,
    translatex: 250
});

function emptyForm(){   
    let 
    formInput = uname2.value;
    formInput += email.value;
    formInput += fullname.value;
    formInput += company.value;
    formInput += password.value;

    if(formInput==""){
        alert("Please fill the empty fields");
        return false;
    }else{
        return true; 
    }


}


