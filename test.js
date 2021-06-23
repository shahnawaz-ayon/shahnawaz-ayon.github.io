var userName="ayon";
var passWord="1234";
  
  
    
    function getInfo() {
         var username= document.getElementById("username").value;
         var password= document.getElementById("password").value;
    
   
    
    if (username=userName && password == passWord){
        
    
    alert("Hello "+ userName+" Administrative login successful")
    window.location = "https://www.linkedin.com/in/shahnawaz-ayon-b3bb7816/";
    return
    
        }
        else
        {
     alert("incorrect password")
     window.location = "Loginfailed.html";
          }
        
    
    }

