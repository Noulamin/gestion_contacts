
function check_sign_up()
{
    let name = document.getElementById("name").value;
    let password = document.getElementById("password").value;
    let c_password = document.getElementById("c_password").value; 
    
    if(!(/^[a-zA-Z ]{2,30}$/.test(name)))
    {
        document.getElementById("name").style.border = "0.17vw solid red";
        document.getElementById("warning").textContent = "Enter a valid name";
        return false;
    }
    else
    if(password == "")
    {
        document.getElementById("name").style.border = "0.1vw solid #BEBEBE";
        document.getElementById("password").style.border = "0.17vw solid red";
        document.getElementById("warning").textContent = "Enter password";
        return false;
    }
    else
    if(c_password == "")
    {
        document.getElementById("name").style.border = "0.1vw solid #BEBEBE";
        document.getElementById("password").style.border = "0.1vw solid #BEBEBE";
        document.getElementById("c_password").style.border = "0.17vw solid red";
        document.getElementById("warning").textContent = "Confirm password";
        return false;
    }
    else
    if(password != c_password)
    {
        document.getElementById("name").style.border = "0.1vw solid #BEBEBE";
        document.getElementById("password").style.border = "0.17vw solid red";
        document.getElementById("c_password").style.border = "0.17vw solid red";
        document.getElementById("warning").textContent = "Password does not match";
        return false;
    }
    else
    {
        return true;
    }    
}

function check_sign_in()
{
    let name = document.getElementById("name").value;
    let password = document.getElementById("password").value;
    
    if(name == "")
    {
        document.getElementById("name").style.border = "0.17vw solid red";
        document.getElementById("warning").textContent = "Enter username";
        return false;
    }
    else
    if(password == "")
    {
        document.getElementById("name").style.border = "0.1vw solid #BEBEBE";
        document.getElementById("password").style.border = "0.17vw solid red";
        document.getElementById("warning").textContent = "Enter password";
        return false;
    }
    else
    {
        return true;
    }    
}

function check_contact()
{
    let name = document.getElementById("name").value;
    let email = document.getElementById("email").value;
    let phone = document.getElementById("phone").value;
    let address = document.getElementById("address").value; 
    
    if(!(/^[a-zA-Z ]{2,30}$/.test(name)))
    {
        document.getElementById("name").style.border = "0.17vw solid red";
        document.getElementById("warning").textContent = "Enter a valid name";
        return false;
    }
    else
    if(phone == "")
    {
        document.getElementById("name").style.border = "0.1vw solid #BEBEBE";
        document.getElementById("email").style.border = "0.1vw solid #BEBEBE";
        document.getElementById("phone").style.border = "0.17vw solid red";
        document.getElementById("warning").textContent = "Enter phone number";
        return false;
    }
    else
    if(!(/^\w+([\.-]?\w+)*@\w+([\.-]?\w+)*(\.\w{2,3})+$/.test(email)))
    {   
        document.getElementById("name").style.border = "0.1vw solid #BEBEBE";
        document.getElementById("email").style.border = "0.17vw solid red";
        document.getElementById("phone").style.border = "0.1vw solid #BEBEBE";
        document.getElementById("warning").textContent = "Enter a valid email address";
        return false;
    }
    else
    if(address == "")
    {
        document.getElementById("name").style.border = "0.1vw solid #BEBEBE";
        document.getElementById("email").style.border = "0.1vw solid #BEBEBE";
        document.getElementById("phone").style.border = "0.1vw solid #BEBEBE";
        document.getElementById("address").style.border = "0.17vw solid red";
        document.getElementById("warning").textContent = "Enter address";
        return false;
    }
    else
    {
        return true;
    }     
}

