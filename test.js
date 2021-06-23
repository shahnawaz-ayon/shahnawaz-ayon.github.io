var userName="ayon";
var passWord="1234";
  
  
    
    function getInfo() {
         var username= document.getElementById("username").value;
         var password= document.getElementById("password").value;
    
   
    
    if (username=userName && password == passWord){
        
    
    alert(userName+" is logged in")
    window.location = "http://www.google.com";
    return
    
        }
        else
        {
            alert("incorrect password")
          }
        
    
    }

