function validation(){
    const nameRegex=/^[a-z A-Z 0-9]+$/;
    const userNameRegex=/^[a-z A-Z 0-9 _]+$/;
    const passwordRegex=/^(?=.*\d)(?=.*[a-z])(?=.*[A-Z].{8})$/;
    const phoneNoRegex=/^\d{10}$/;
    const emailRegex=/^[^\s@]+@[^\s@]+\.[^\s@]+$/;

    const fName=document.getElementById('fname').value;
    const lName=document.getElementById('lname').value;
    const userName=document.getElementById('uname').value;
    const email=document.getElementById('email').value;
    const phone=document.getElementById('contact').value;
    const newPassword=document.getElementById('npassword').value;
    const conPassword=document.getElementById('cpassword').value;

    if(!nameRegex.test(fName)){
        alert("Invalid First Name");
        return false;
    }

    
    if(!nameRegex.test(lName)){
        alert("Invalid Last Name");
        return false;
    }

    
    if(!userNameRegex.test(userName)){
        alert("Invalid User Name");
        return false;
    }

    
    if(!emailRegex.test(email)){
        alert("Invalid email");
        return false;
    }

    
    if(!phoneNoRegex.test(phone)){
        alert("Invalid Phone Number");
        return false;
    }

    
    if(!passwordRegex.test(newPassword)){
        alert("Invalid Password");
        return false;
    }

    if(newpassword!=test(conPassword)){
        alert("Password is not matching");
        return false;
    }
    
}