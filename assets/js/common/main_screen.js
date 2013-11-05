 function validateForm()
                  { 
                      
                       document.getElementById('firstname-error').style.display='none';
                       document.getElementById('lastname-error').style.display='none';
                         document.getElementById('email-error').style.display='none';
                            document.getElementById('email-error2').style.display='none';
                            document.getElementById('pass-error').style.display='none'; 
                              document.getElementById('pass-error2').style.display='none';
                               document.getElementById('alert').style.display='none';
                    var check=0;
                    var val = document.forms["signup-form"]["firstname"].value;
                
                    var val2 = document.forms["signup-form"]["lastname"].value;
                    var val3 = document.forms["signup-form"]["email-field"].value;
                    var val4 = document.forms["signup-form"]["pass-field"].value;
                    if (val == "")  
                          {  
                          document.getElementById('firstname-error').style.display='block';

                            check=1;
                          }  
                      if(val2=="")
                          {
                           document.getElementById('lastname-error').style.display='block';   
                        
                           
                          check=1;
                          }
                  if(val3=="")
                          {
                              document.getElementById('email-error').style.display='block';
                       
                            
                          check=1;
                          }
                    else if(val3.length<3 && val3.length>0)
                    {

                      // var emailReg= /^([\w-\.]+@[\w-]+\.)+[\w-]{2,4})?$/;
                      // if(!emailReg.test(val3))
                      // {
                      //    document.getElementById('email-error').style.display='block';
                      //     check=1;
                      // }
                      // else
                      // {
                      document.getElementById('email-error2').style.display='inline';
                      check=1;
                    // }

                    }
                     if(val4=="")
                          {
                          document.getElementById('pass-error').style.display='inline';  
                          
                          check=1;
                          }
                     else if(val4.length<6 && val3.length>0)
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