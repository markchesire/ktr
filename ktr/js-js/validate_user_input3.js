//   Numeric expression        /^[0-9]+$/
//   Alphabets expression      /^[a-zA-Z]+$/
//   Alphanumeric              /^[0-9a-zA-Z]+$/
//   Valid email               /^[w-.+]+@[a-zA-Z0-9.-]+.[a-zA-z0-9]{2,4}$/
//
// Form validation code will come here.



   function check()
    
      {  
	  
	     var reg = /^[a-zA-Z]+$/;
      
         if( document.formReg.firstname.value == "" || !reg.test(document.formReg.firstname.value))
         {
            alert( "Invalid input for firstname.Use alphabets only example mark" );
            document.formReg.firstname.focus() ;
            return false;
         }
         
         if( document.formReg.surname.value == "" || !reg.test(document.formReg.surname.value))
         {
            alert( "Invalid input for surname.Use alphabets only example chesire" );
            document.formReg.surname.focus() ;
            return false;
         }
		 
		 var re = /^[0-9a-zA-Z/]+$/;
		 if( document.formReg.admnumber.value == "" || !re.test(document.formReg.admnumber.value)) 
		 {
         alert("Invalid input for Admission Number!.Use alphanumeric characters example ktr/00100");
         document.formReg.admnumber.focus();
         return false;
         }
		  
         
         
         
      }
	  
	  