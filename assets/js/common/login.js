
  

           function validateForm()
                  { 
                  	  
                    var check=0;
             
                    var val3 = document.forms["signin-form"]["email-field"].value;
                    var val4 = document.forms["signin-form"]["pass-field"].value;
             
                  if(val3=="")
                          {
                              document.getElementById('email-error').style.display='block';
                       
                            
                          check=1;
                          }
                    else if(val3.length<3 && val3.length>0)
                    {

                 
                      document.getElementById('email-error2').style.display='block';
                      check=1;

                    }
                     if(val4=="")
                          {
                          document.getElementById('pass-error').style.display='inline';  
                          
                          check=1;
                          }
                     else if(val4.length<4 && val3.length>0)
                          {
                           document.getElementById('pass-error2').style.display='inline';
                          check=1;


                          }
                       
                        
                          if(check==1)
                          {
                          	 document.getElementById('alert').style.display='block';
              
                            return false;
                          }
                          else
                            return true;
                 
                 }
        
