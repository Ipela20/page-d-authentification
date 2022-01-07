function validation()                                    
{ 
    var email = document.forms["RegForm"]["email"];    
    var password = document.forms["RegForm"]["password"];  
    if (email.value == "")                                   
    { 
        alert("Mettez une adresse email valide."); 
        email.focus(); 
        return false; 
    }    
    if (email.value.indexOf("@", 0) < 0)                 
    { 
        alert("Mettez une adresse email valide."); 
        email.focus(); 
        return false; 
    }    
    if (email.value.indexOf(".", 0) < 0)                 
    { 
        alert("Mettez une adresse email valide."); 
        email.focus(); 
        return false; 
    }    
    if (password.value == "")                        
    { 
        alert("Saisissez votre mot de passe"); 
        password.focus(); 
        return false; 
    }    
    if (password.value == confirmPassword.value)                        
    { 
        alert("Saisissez votre mot de passe"); 
        password.focus(); 
        return false; 
    } 
    return true; 
}

function validationSign()                                    
{ 
    var name = document.forms["RegFormSign"]["nom"];               
    var email = document.forms["RegFormSign"]["email"];    
    var phone = document.forms["RegFormSign"]["phone"];  
    var password = document.forms["RegFormSign"]["password"];  
    var confirmPassword = document.forms["RegFormSign"]["confirmPassword"];  

    if (name.value == "")                                  
    { 
        alert("Mettez votre nom."); 
        name.focus(); 
        return false; 
    }
    if (email.value == "")                                   
    { 
        alert("Mettez une adresse email valide."); 
        email.focus(); 
        return false; 
    }    
    if (email.value.indexOf("@", 0) < 0)                 
    { 
        alert("Mettez une adresse email valide."); 
        email.focus(); 
        return false; 
    }    
    if (email.value.indexOf(".", 0) < 0)                 
    { 
        alert("Mettez une adresse email valide."); 
        email.focus(); 
        return false; 
    }    
    if (phone.value == "")                           
    { 
        alert("Mettez votre numéro de téléphone."); 
        phone.focus(); 
        return false; 
    }    
    if (password.value == "")                        
    { 
        alert("Saisissez votre mot de passe"); 
        password.focus(); 
        return false; 
    }    
    if (password.value != confirmPassword.value)                        
    { 
        alert("Le mot de passe renseigné ne correspond pas"); 
        password.focus(); 
        return false; 
    } 
    return true; 
}