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
		
      
        
         
         if( document.registerForm.firstname.value == "" || !reg.test(document.registerForm.firstname.value))
         {
            alert( "Invalid input for firstname.Try again" );
            document.registerForm.firstname.focus() ;
            return false;
         }
		 
		 
		 if( document.registerForm.surname.value == "" || !reg.test(document.registerForm.surname.value)) 
		 {
         alert("Invalid input for surname!.Try again ");
         document.registerForm.surname.focus();
         return false;
         }
		 
		 
		  if( document.registerForm.admno.value == "" || !re.test(document.registerForm.admno.value))
         {
            alert( "Invalid input for admission number.Try again e.g ktr/203/00101" );
            document.registerForm.admno.focus() ;
            return false;
         }
		 
		 if( document.registerForm.phone.value == "" || !exp.test(document.registerForm.phone.value)) 
		 {
         alert("Invalid input for phone number.Try again e.g 0726179177");
         document.registerForm.phone.focus();
         return false;
         }
		 if( document.registerForm.address.value == "" || !expmail.test(document.registerForm.address.value)) 
		 {
         alert("Invalid input for email-address.Try again e.g chesire.marks@gmail.com");
         document.registerForm.address.focus();
         return false;
         }
		 if( document.registerForm.year.value == "" || !expyear.test(document.registerForm.year.value)) 
		 {
         alert("Invalid input for year of study.Try again e.g 2008/2011");
         document.registerForm.year.focus();
         return false;
         }
		 if( document.registerForm.endyear.value == "" || !endyear.test(document.registerForm.endyear.value)) 
		 {
         alert("Invalid input for year of study.Try again e.g 2008");
         document.registerForm.endyear.focus();
         return false;
         }
         

		 
		 
		
		 
		
		 
		 
		  
         
         
         
      }
	  
	  