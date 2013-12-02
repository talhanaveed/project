<html>
    
    <head>
        
<!--        <link href="<?php //echo base_url();?>/assets/css/bootstrap.css" rel="stylesheet" type="text/css" />
    
        <script src="<?php // echo base_url();?>/assets/js/bootstrap.js" ></script>-->
        <link href="<?php echo base_url();?>/assets/css/styles/profile_header.css" rel="stylesheet" type="text/css" />
        <script src="<?php echo base_url();?>/assets/js/jquery-1.10.2.js" ></script>

            
            
    </head>
        
    <body>
        
        
        <div id="header" class="header">
            <div class="wrapper">
                
                <div class="first-child">
                    <h2 class="logo-container" tabindex="0">
                        <a href="<?php echo base_url();?>index.php/home" class="logo" id="in-logo">
                        </a>
                    </h2>
                        
                    <form id="global-search"  method="get" accept-charset="UTF-8" name="commonSearch" class="global-search" action="<?php echo base_url();?>index.php/search/get">
                        <fieldset>
                            <div class="search-scope" id="control_gen_2">
                                
                                
                                <span class="label">
                                    
                                    <span class="search-dropdown" >All</span>
                                    <a href="#" class="dropdown-toggle" data-toggle="dropdown"> <b class="caret"></b></a>
                                 
                                                                                         
                                </span>
                                    
                                <select name="type" id="main-search-category" class="search-category">
                                    
                                    <option class="all" title="Search for people, jobs, companies, and more..." value="all">All</option>
                                    <option class="people" title="Keyword, name, company or title" value="people">People</option>
                                    <option class="jobs"  title="Keyword, company or job title" value="jobs">Jobs</option>
                                    <option class="companies"  title="Keyword"  value="companies">Companies</option>
                                    <option class="groups" title="Keyword" value="groups">Groups</option>
                                    <option class="edu"  title="Keyword" value="edu">Universities</option>
                                    <option class="inbox"  title="Keyword" value="inbox">Inbox</option>
                                        
                                </select>
                            </div>
                            <div class="search-box-container" id="search-box-container">
                                <input type="text" class="search-text" id="search-input" name = "search-field" placeholder="Search for people, jobs, companies, and more..." autocomplete="off">
                                  <div id = "drop-search">
                                    <div id = "temp">
                                    </div>
                                </div>
                            </div>
                            <button class="search-button" id="search-button" type="submit">
                                <span></span>
                            </button>
                                
                        </fieldset>
                            
                            
                        <div class="advanced-search-outer">
                            <div class="advanced-search-inner">
                                <a href="<?php echo base_url();?>index.php/search" class="advanced-search" id="advanced-search">Advanced
                                    
                                </a>
                            </div>
                                
                        </div>
                    </form>
                </div>
                    
                <div class="last-child">
                    <ul class="nav utilities" role="navigation" id="control_gen_20">
                        <li class="nav-item2" >
                            <a href="<?php echo base_url()?>index.php/invitations" class="activity-toggle inbox-alert" id="invi">
                                
                            </a>
                                <span id="header-messages-count" class="gem"></span>
                                <div class="drop-div" id="drop">
                                <div id="con">
                                    
                                </div>   
                            </div>
                        </li>
                        <li class="nav-item2" >
                            <a href="" class="activity-toggle notifications-alert" id="noti">
                                
                            </a>
                                
                        </li>
                        <li class="nav-item2" >
                            
                            <a href="#" class="activity-toggle add-connections-btn" id="adc">
                                
                            </a>
                        </li>
                        <li class="nav-item2" >
                            

                            <a href="<?php echo base_url();?>index.php/profile/edit_profile" class="logout" id="invi2">
                                <img src="<?php echo base_url()?>uploads/dp/<?php echo $imgpath?>">
                            </a>
                            <div class="drop-div2" id="logout">
                                <div id="con">
                                      <h3><?php echo $fname?> <?php echo $lname?></h3>
                                      <ul class="s-ul">
                                        <li class="s-li2" onclick = location.href="<?php echo base_url();?>index.php/home/userAgreement">
                                        
                                              <p>User Agreement</p>
                                        </li>
                                         <li class="s-li2" onclick = location.href="<?php echo base_url();?>index.php/home/viewPolicy">
                                           
                                              <p>Privacy Policy</p>

                                        </li>
                                        <li class="s-li2" onclick = location.href="<?php echo base_url();?>index.php/login/login/do_logout" >
                                           
                                              <p>Logout</p>
                                        </li>
                                      </ul>
                                </div>   
                            </div>
                        </li>
                            
                    </ul>
                        
                </div>
                    
            </div>
                
        </div>
        <div class="main-navigation" id="main-navigation" style="position: static; width: auto;">
            <div class="wrapper">
                <ul class="nav" role="navigation" id="control_gen_6">
                    
                    
                    <li class="nav-item">
                        <a href="<?php echo base_url();?>index.php/home" class="nav-link">
                            Home
                        </a>
                    </li>
                        
                        
                        
                    <li class="nav-item">
                        <a href="<?php echo base_url();?>index.php/profile/edit_profile" class="nav-link">
                            Profile
                        </a>
                        <ul class="sub-nav" id="profile-sub-nav">
                            
                            <li>
                                <a href="<?php echo base_url();?>index.php/profile/edit_profile">
                                    Edit Profile
                                </a>
                            </li>
                                
                            <li>
                                <a href="#">
                                    Who's Viewed Your Profile
                                </a>
                            </li>
                                
                        </ul>
                    </li>
                        
                        
                        
                    <li class="nav-item">
                        <a href="#" class="nav-link">
                            Network
                        </a>
                        <ul class="sub-nav">
                            <li>
                                <a href="#">
                                    Contacts
                                </a>
                            </li>
                            <li>
                                <a href="#">
                                    Add Connections
                                </a>
                            </li>
                            <li>
                                <a href="<?php echo base_url();?>index.php/alumni/get">
                                    Find Alumni
                                </a>
                            </li>
                        </ul>
                    </li>
                        
                    <li class="nav-item">
                        <a href="#" class="nav-link">
                            Jobs
                        </a>
                            
                    </li>
                        
                    <li class="nav-item">
                        <a href="#" class="nav-link">
                            Interests
                        </a>
                        <ul class="sub-nav" id="interests-sub-nav">
                            <li>
                                
                                <a href="#">
                                    Companies
                                </a>
                                    
                            </li>
                                
                            <li>
                                <a href="#">
                                    Groups
                                </a>
                            </li>
                                
                            <li>
                                
                                <a href="#">
                                    Influencers
                                </a>
                            </li>
                                
                            <li>
                                <a href="#">
                                    Education
                                </a>
                            </li>
                                
                        </ul>
                    </li>
                </ul>
                <ul class="nav premium-nav" role="navigation" id="control_gen_7">
                    <li class="nav-item">
                        <a href="#" class="nav-link">
                            
                            
                            Business Services
                                
                                
                        </a>
                        <ul class="sub-nav" id="business-sub-nav">
                            <li>
                                <a href="#">
                                    Post a Job
                                </a>
                            </li>
                                
                                
                            <li>
                                <a href="#" target="_blank">
                                    Talent Solutions
                                </a>
                            </li>
                                
                            <li>
                                
                                <a href="#" target="_blank">
                                    Advertise
                                </a>
                            </li>
                                
                                
                        </ul>
                    </li>
                        
                        
                    <li class="nav-item">
                        
                        <a href="#" class="nav-link">
                            Upgrade
                        </a>
                            
                    </li>
                </ul>
            </div>
            <div class="spacer" style="clear: both;"></div>
        </div>
            
    </body>
          <script src="<?php echo base_url();?>/assets/js/profile_header.js" ></script>
          <script> 
            $( "#search-input" ).keyup(function() {
              if($("#search-input").val() === ''){
                $('#drop-search').hide();
              }
              else{
                $('#drop-search').show();
                get_ajax(); 
              }
            });
        $('body').on('click', function(e){
            $('#drop-search').hide();
        });

        function get_ajax(){
            //  $.ajax({
            //     type:"post",
            //     url:"search/get_result",
            // }).done(function(msg){
            //     //alert(msg);
            //     $("#temp").replaceWith(msg);
            // });
            var base = "<?php echo base_url()?>index.php/";
            var find = $('#search-input').val();
            $.ajax({
                type: "POST",
                url: base+ "search/get_result",
                data: {find: find},
                success: function(msg){
                    $("#temp").replaceWith(msg);
                }
            });
        }
          </script>
</html>