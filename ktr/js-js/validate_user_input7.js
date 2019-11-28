//   Numeric expression        /^[0-9]+$/
//   Alphabets expression      /^[a-zA-Z]+$/
//   Alphanumeric              /^[0-9a-zA-Z]+$/
//   Valid email               /^[w-.+]+@[a-zA-Z0-9.-]+.[a-zA-z0-9]{2,4}$/
//
// Form validation code will come here.



   function checkComment()
    
      {  
	  
	     var reg = /^[a-zA-Z]+$/;
      
         if( document.blogForm.comments.value == "" )
         {
            alert( "message required  " );
            document.blogForm.comments.focus() ;
            return false;
         }
         
         
		 
		 
		  
         
         
         
      }
	  
	  