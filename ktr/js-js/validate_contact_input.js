//   Numeric expression        /^[0-9]+$/
//   Alphabets expression      /^[a-zA-Z]+$/
//   Alphanumeric              /^[0-9a-zA-Z]+$/
//   Valid email               /^[w-.+]+@[a-zA-Z0-9.-]+.[a-zA-z0-9]{2,4}$/
//
// Form validation code will come here.



   function checkForm()
    
      {  
	    
	     var reg = /^[a-zA-Z]+$/;
		 var re = /^[0-9]+$/;
		 var regexp = /^[a-zA-Z]*$/;
      
         if( document.contactForm.firstname.value == "" || !reg.test(document.contactForm.firstname.value))
         {
            alert( "Invalid input for firstname.Use alphabets only example mark" );
            document.contactForm.firstname.focus() ;
            return false;
         }
         
         if( document.contactForm.surname.value == "" || !reg.test(document.contactForm.surname.value))
         {
            alert( "Invalid input for surname.Use alphabets only example chesire" );
            document.contactForm.surname.focus() ;
            return false;
         }
		 
		 
		 if( document.contactForm.phone.value == "" || !re.test(document.contactForm.phone.value)) 
		 {
         alert("Invalid input for Phone Number!.Use Numeric characters example 0726179177 ");
         document.contactForm.phone.focus();
         return false;
         }
		 
		
		 
		 if( document.contactForm.responsibility.value == "" || !reg.test(document.contactForm.responsibility.value))
         {
            alert( "Invalid responsibility input.Use alphabets only" );
            document.contactForm.responsibility.focus() ;
            return false;
         }
		 
		 if( document.contactForm.message.value == "")
         {
            alert( "Message required" );
            document.contactForm.message.focus() ;
            return false;
         }
		 
		 
		  
         
         
         
      }
	  
	  