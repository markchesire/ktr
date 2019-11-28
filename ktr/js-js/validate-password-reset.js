//   Numeric expression        /^[0-9]+$/
//   Alphabets expression      /^[a-zA-Z]+$/
//   Alphanumeric              /^[0-9a-zA-Z]+$/
//   Valid email               /^[w-.+]+@[a-zA-Z0-9.-]+.[a-zA-z0-9]{2,4}$/
//
// Form validation code will come here.



   function checkRegister()
    
      {  
	    
	     var reg = /^[a-zA-Z]+$/;
		 var expmail = /^[a-z@.]+$/;
		 var re = /^[0-9a-zA-Z/]+$/;
		 var regexp = /^[a-zA-Z]*$/;
		 var exp = /^[0-9+]+$/ ;
		 var expyear = /^[0-9/]+$/ ;
		 var endyear = /^[0-9]+$/ ;
		
      
        
         
         if( document.registerForm.username.value == "" || !reg.test(document.registerForm.username.value))
         {
            alert( "Invalid input for username.Try again use Alphabets only" );
            document.registerForm.username.focus() ;
            return false;
         }

          if( document.registerForm.staffno.value == "" || !exp.test(document.registerForm.staffno.value))
         {
            alert( "Invalid input for staff NO.Try again e.g 2456" );
            document.registerForm.staffno.focus() ;
            return false;
         }

         if( document.registerForm.mobilenumber.value == "" || !exp.test(document.registerForm.mobilenumber.value))
         {
            alert( "Invalid input for mobilenumber.Try again e.g 2456" );
            document.registerForm.mobilenumber.focus() ;
            return false;
         }
		 
		 
		   
         
      }
	  
	  