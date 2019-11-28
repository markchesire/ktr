//   Numeric expression        /^[0-9]+$/
//   Alphabets expression      /^[a-zA-Z]+$/
//   Alphanumeric              /^[0-9a-zA-Z]+$/
//   Valid email               /^[w-.+]+@[a-zA-Z0-9.-]+.[a-zA-z0-9]{2,4}$/
//
// Form validation code will come here.



   function validate()
    
      {  
	  
	     var reg = /^[a-zA-Z]+$/;
      
         if( document.myForm.firstname.value == "" || !reg.test(document.myForm.firstname.value))
         {
            alert( "Invalid input for firstname.Use alphabets only example mark" );
            document.myForm.firstname.focus() ;
            return false;
         }
         
         if( document.myForm.surname.value == "" || !reg.test(document.myForm.surname.value))
         {
            alert( "Invalid input for surname.Use alphabets only example chesire" );
            document.myForm.surname.focus() ;
            return false;
         }
		 
		 var re = /^[0-9]+$/;
		 if( document.myForm.idnumber.value == "" || !re.test(document.myForm.idnumber.value)) 
		 {
         alert("National ID number cannot be empty!.Use numbers only example 00000234");
         document.myForm.idnumber.focus();
         return false;
         }
		  
         
         
         
      }
	  
	  