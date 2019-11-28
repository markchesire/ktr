//   Numeric expression        /^[0-9]+$/
//   Alphabets expression      /^[a-zA-Z]+$/
//   Alphanumeric              /^[0-9a-zA-Z]+$/
//   Valid email               /^[w-.+]+@[a-zA-Z0-9.-]+.[a-zA-z0-9]{2,4}$/
//
// Form validation code will come here.



   function validate()
    
      {  
	  
	     var reg = /^[a-zA-Z]+$/;
        var re = /^[0-9a-zA-Z]+$/;
         
         if( document.myForm.username.value == "" || !reg.test(document.myForm.username.value))
         {
            alert( "Invalid input for username.Use alphabets only example chesire" );
            document.myForm.username.focus() ;
            return false;
         }
		 
		 if( document.myForm.password.value == "" || !re.test(document.myForm.password.value)) 
		 {
         alert("Invalid input for password!.Use Alphanumeric characters");
         document.myForm.password.focus();
         return false;
         }
		}
	  
	  