//   Numeric expression        /^[0-9]+$/
//   Alphabets expression      /^[a-zA-Z]+$/
//   Alphanumeric              /^[0-9a-zA-Z]+$/
//   Valid email               /^[w-.+]+@[a-zA-Z0-9.-]+.[a-zA-z0-9]{2,4}$/
//
// Form validation code will come here.



   function check()
    
      {  
	  
	     var reg = /^[0-9a-zA-Z]+$/;
      
         if( document.adminlogin.username.value == "" || !reg.test(document.adminlogin.username.value))
         {
            alert( "Invalid username" );
            document.adminlogin.username.focus() ;
            return false;
         }
         
         if( document.adminlogin.password.value == "" || !reg.test(document.adminlogin.password.value))
         {
            alert( "Invalid password" );
            document.adminlogin.password.focus() ;
            return false;
         }
		 
		 
		  
         
         
         
      }
	  
	  