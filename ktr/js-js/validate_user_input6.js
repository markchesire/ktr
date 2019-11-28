//   Numeric expression        /^[0-9]+$/
//   Alphabets expression      /^[a-zA-Z]+$/
//   Alphanumeric              /^[0-9a-zA-Z]+$/
//   Valid email               /^[w-.+]+@[a-zA-Z0-9.-]+.[a-zA-z0-9]{2,4}$/
//
// Form validation code will come here.



   function checkfee()
    
      {  
	  
	     var reg = /^[0-9a-zA-Z/]+$/;
      
         if( document.feeForm.admnumber.value == "" || !reg.test(document.feeForm.admnumber.value))
         {
            alert( "Invalid admission number,try again" );
            document.feeForm.admnumber.focus() ;
            return false;
         }
         
         
		 
		 
		  
         
         
         
      }
	  
	  