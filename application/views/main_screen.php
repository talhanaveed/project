<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html>

<head>
<link href="<?php echo base_url();?>/assets/css/styles/MyStyle.css" rel="stylesheet" type="text/css" />
<script type="text/javascript" src="<?php echo base_url();?>/assets/js/common/main_screen.js" ></script>
</head>

<body>

<!--*********************************************************************-->

<div id="body" >

	<div id="mid-content">
          <div id="alert">
 <div class="alert2">
 <p><strong>There were one or more errors in your submission. Please correct the marked field(s) below.</strong></p>
 </div>
</div>

		<div id="content1">
			<h1>
				Over 225 million professionals use LinkedIn to exchange information, ideas and opportunities
			</h1>

			<ul class="liststyle1">
      		<li id="reconnect"> Stay informed about your contacts and industry </li>
      		<li id="answers"> Find the people & knowledge you need to achieve your goals </li>
     	    <li id="power"> Control your professional identity online </li>
   			</ul>

		</div>

<!--*********************************************************************-->

     <div id="content2" >

        <div id="signup_box_header">
                Join LinkedIn Today
        </div>
              
            <div id="signup_box_form">
  
              <form method="POST" action="<?php echo base_url();?>index.php/signup/signup/process" id="signup-form" name="signup-form" onsubmit="return validateForm();" >
                <input type="hidden" name="isJsEnabled" value="true">    
                <ul>
                <li id="first-name">
            
                  <label>First Name:</label>
                  <div class = "temp">
                    <span class = "error" id="firstname-error">Please enter a first name.</span>
                    <input type="text" id="firstname" class="inputfield" name="firstname">
                  </div>
                </li>
            
                <li id="last-name">
            
                  <label >Last Name:</label>
                  <div class = "temp">
                    <span class = "error" id="lastname-error">Please enter a last name.</span>
                    <input type="text" id="lastname" class="inputfield" name="lastname">
                  </div>
                

                </li>
            
                <li id="email-address">
            
                  <label>Email:</label>
                  <div class = "temp">
                    <span class = "error" id="email-error">Please enter a valid email address.</span>
                   <span class = "error" id="email-error2">The text you provided is too short (the minimum length is 3 characters, your text contains 1 characters).</span>
                    <input type="text" id="email" name="email-field" class="inputfield" >
                  </div>
              
                </li>

                <li id="password">
            
                <label >Password:</label>

                <div class = "temp">
                  <span class = "error" id="pass-error">Please enter a password.</span>
                  <span class = "error" id="pass-error2">The password you provided must have at least 6 characters.</span>
                  <input type="password" id="email" name="pass-field" class="inputfield" name="password">
                </div>
                
                <p class="hint">6 or more characters</p>
               

       
                </li>
                </ul> 
          
                <p class="action">
                <input type="submit" name="" value="Join Now" id="btn-submit" class="signup_button" > <a>*</a>
                </p>
                
              <div>
                <p class="message">Already on LinkedIn?
                <a href="login" class="message2">Sign in.</a>
                </p>
              </div>


		    </div>    
	</div>

<!--*********************************************************************-->
 <div id="search_box">

    <div id="search">
   
      <form name="searchForm" action="#" method="get">
          <h3>Search for someone by name:</h3>

             <ul style="display: inline;">
                <li style="display: inline;">
              
                   <label id="first_name" style="display: none;">First Name</label>
               
                   <input type="text" class="inputfield2" placeholder="First Name">

               </li>
          

                <li style="display: inline;">              
                
                  <label id="last_name" style="display: none;">Last Name</label>    

                   <input type="text" class="inputfield2" placeholder="Last Name">
           
               </li>

             </ul>
     

               <input class="button_2" style="display: inline;" type="submit" name="search" value="Go">
    </form>
  
   </div>

   <div id="directory">
    <h3>
    
    
        LinkedIn member directory:
      
    
  </h3>
  <ol type="a" class="primary">
    
      
        <li>
          <a href="<?php echo base_url();?>index.php/main/viewTemp">a</a>
        </li>
      
    
      
        <li>
          <a href="<?php echo base_url();?>index.php/main/viewTemp">b</a>
        </li>
      
    
      
        <li>
          <a href="<?php echo base_url();?>index.php/main/viewTemp">c</a>
        </li>
      
    
      
        <li>
          <a href="<?php echo base_url();?>index.php/main/viewTemp">d</a>
        </li>
      
    
      
        <li>
          <a href="<?php echo base_url();?>index.php/main/viewTemp">e</a>
        </li>
      
    
      
        <li>
          <a href="<?php echo base_url();?>index.php/main/viewTemp">f</a>
        </li>
      
    
      
        <li>
          <a href="<?php echo base_url();?>index.php/main/viewTemp">g</a>
        </li>
      
    
      
        <li>
          <a href="<?php echo base_url();?>index.php/main/viewTemp">h</a>
        </li>
      
    
      
        <li>
          <a href="<?php echo base_url();?>index.php/main/viewTemp">i</a>
        </li>
      
    
      
        <li>
          <a href="<?php echo base_url();?>index.php/main/viewTemp">j</a>
        </li>
      
    
      
        <li>
          <a href="<?php echo base_url();?>index.php/main/viewTemp">k</a>
        </li>
      
    
      
        <li>
          <a href="<?php echo base_url();?>index.php/main/viewTemp">l</a>
        </li>
      
    
      
        <li>
          <a href="<?php echo base_url();?>index.php/main/viewTemp">m</a>
        </li>
      
    
      
        <li>
          <a href="<?php echo base_url();?>index.php/main/viewTemp">n</a>
        </li>
      
    
      
        <li>
          <a href="<?php echo base_url();?>index.php/main/viewTemp">o</a>
        </li>
      
    
      
        <li>
          <a href="<?php echo base_url();?>index.php/main/viewTemp">p</a>
        </li>
      
    
      
        <li>
          <a href="<?php echo base_url();?>index.php/main/viewTemp">q</a>
        </li>
      
    
      
        <li>
          <a href="<?php echo base_url();?>index.php/main/viewTemp">r</a>
        </li>
      
    
      
        <li>
          <a href="<?php echo base_url();?>index.php/main/viewTemp">s</a>
        </li>
      
    
      
        <li>
          <a href="<?php echo base_url();?>index.php/main/viewTemp">t</a>
        </li>
      
    
      
        <li>
          <a href="<?php echo base_url();?>index.php/main/viewTemp">u</a>
        </li>
      
    
      
        <li>
          <a href="<?php echo base_url();?>index.php/main/viewTemp">v</a>
        </li>
      
    
      
        <li>
          <a href="<?php echo base_url();?>index.php/main/viewTemp">w</a>
        </li>
      
    
      
        <li>
          <a href="<?php echo base_url();?>index.php/main/viewTemp">x</a>
        </li>
      
    
      
        <li>
          <a href="<?php echo base_url();?>index.php/main/viewTemp">y</a>
        </li>
      
    
      
        <li>
          <a href="<?php echo base_url();?>index.php/main/viewTemp">z</a>
        </li>
      
       <li>
         <a href="<?php echo base_url();?>index.php/main/viewTemp" id="parent">more</a>
         
        
        </li>
    
      <li class="country-search">
        Browse members <a href="<?php echo base_url();?>index.php/main/country">by country</a>
      </li>

     
      
 
    
  </ol> 
   </div>
 
 <p id="agreement">
          <strong>*</strong> By joining LinkedIn, you agree to LinkedIn's <a href="<?php echo base_url();?>index.php/main/userAgreement">User Agreement</a>, 
          <a href="<?php echo base_url();?>index.php/main/viewPolicy">Privacy Policy</a> and <a href="<?php echo base_url();?>index.php/main/viewTemp">Cookie Policy</a>.
    </p>
  </div>

</div>

<!--*********************************************************************-->


</body>
</html>