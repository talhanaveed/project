
function change(e)
{
	
	document.getElementById('jjj').style.display = 'none';
	document.getElementById('check-box').style.display = 'none';
	document.getElementById('eprofile').style.display='none';
	document.getElementById('cprofile').style.display='none';
	document.getElementById('seek').style.display='none';	
	document.getElementById('cjprofile').style.display='none';	
	document.getElementById('time-period').style.display='none';	
	document.getElementById('school').style.display='none';	
	document.getElementById('Dates').style.display='none';
	document.getElementById('error1').style.display='none';
    document.getElementById('error2').style.display='none';
    document.getElementById('error3').style.display='none';
	
	if(e==1)
	{
		document.getElementById('jjj').style.display='block';
		document.getElementById('cprofile').style.display='block';
		document.getElementById('check-box').style.display='block';	

	}
	else if(e==2)
	{
		document.getElementById('seek').style.display='inline';	
		document.getElementById('cjprofile').style.display='block';	
		document.getElementById('time-period').style.display='block';
		document.getElementById('check-box').style.display='block';	
	}
	else if(e==3)
	{
		document.getElementById('school').style.display='block';	
		document.getElementById('Dates').style.display='block';	

	
	}
	else if(e==4)
	{
		s = document.getElementById('checkbox');
		c1 = document.getElementById('check1');
		c2 = document.getElementById('check2');

		if(c1.checked){
			
			document.getElementById('jjj').style.display = "block";
			document.getElementById('check-box').style.display = "block";
			
			if(s.checked){
				document.getElementById('eprofile').style.display='block';
			}
			else{
				document.getElementById('cprofile').style.display='block';	
			}

		}
		else if(c2.checked){

			document.getElementById('seek').style.display = "block";
			document.getElementById('check-box').style.display = "block";
			document.getElementById('time-period').style.display='block';

			if(s.checked){
				document.getElementById('eprofile').style.display='block';
			}
			else{
				document.getElementById('cjprofile').style.display='block';	
			}
		}	


	}
}

function validateForm()
{

				
                    var check=0;
                
                    s = document.getElementById('checkbox');
					c1 = document.getElementById('check1');
					c2 = document.getElementById('check2');
					document.getElementById('error1').style.display='none';
                    document.getElementById('error2').style.display='none';
                
                    var val1 = document.forms["step1-form"]["job-title"].value;
                    var val2 = document.forms["step1-form"]["company"].value;
                    var val3 = document.forms["step1-form"]["industry"].value;
                   
                   	var val4= document.forms["step1-form"]["sjob"].value;
                   	var val5= document.forms["step1-form"]["scompany"].value;
                   	var val6= document.forms["step1-form"]["school"].value;

                   	var syear= document.forms["step1-form"]["syear"].value;
                   	var eyear= document.forms["step1-form"]["eyear"].value;

                   	var sy= document.forms["step1-form"]["sY"].value;
                   	var ey= document.forms["step1-form"]["eY"].value;
       


                    if(c1.checked)
                    {
                 
                      if(val1=="")
                          {
                           document.getElementById('error1').style.display='block';   
                        
                           
                          check=1;
                          }
                       if(s.checked)
                       {
                       	if(val3=="")
                       	{
                       		  document.getElementById('error2').style.display='block';   
                        	check=1;

                       	}

                       }
                       else 
                       {
                       	if(val2=="")
                       	{
                       	  document.getElementById('error2').style.display='block';   
                        	check=1;
                        }
                       }
                    }
                    else if(c2.checked)
                    {
                 
                      if(val4=="")
                          {
                           document.getElementById('error1').style.display='block';   
                        
                           
                          check=1;
                          }
                      if(syear=="" || eyear=="")
                         {
                           document.getElementById('error3').style.display='inline';   
                        
                           
                          check=1;
                          }

                       if(s.checked)
                       {
                       	if(val3=="")
                       	{
                       		  document.getElementById('error2').style.display='block';   
                        	check=1;

                       	}

                       }
                       else 
                       {
                       	if(val5=="")
                       	{
                       	  document.getElementById('error2').style.display='block';   
                        	check=1;
                        }
                       }
                    }
                    else
                    {
                    	if(val6=="")
                       	{
                       		  document.getElementById('error1').style.display='block';   
                        	check=1;

                       	}
                       	  if(sy=="" || ey=="")
                         {
                           document.getElementById('error3').style.display='inline';   
                        
                           
                          check=1;
                          }


                    }
         
                     
                          if(check==1)
                          {         
                            return false;
                          }
                          else
                          {
                            return true;
                        }
}