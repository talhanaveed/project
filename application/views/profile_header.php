<html>
    
    <head>
        
<!--        <link href="<?php echo base_url();?>/assets/css/bootstrap.css" rel="stylesheet" type="text/css" />
        <script src="<?php echo base_url();?>/assets/js/jquery.js" ></script>
        <script src="<?php echo base_url();?>/assets/js/bootstrap.js" ></script>-->
        <link href="<?php echo base_url();?>/assets/css/styles/profile_header.css" rel="stylesheet" type="text/css" />
            
            
    </head>
        
    <body>
        
        <div id="header" class="header">
            <div class="wrapper">
                
                <div class="first-child">
                    <h2 class="logo-container" tabindex="0">
                        <a href="<?php echo base_url();?>" class="logo" id="in-logo">
                        </a>
                    </h2>
                        
                    <form id="global-search"  method="get" accept-charset="UTF-8" name="commonSearch" class="global-search">
                        <fieldset>
                            <div class="search-scope" id="control_gen_2">
                                
                                
                                <span class="label">
                                    
                                    <span class="styled-dropdown-select-all" >All</span>
                                    <!--                                          <a href="#" class="dropdown-toggle" data-toggle="dropdown"> <b class="caret"></b></a>
                                                                              <ul class="dropdown-menu">
                                                                                <li><a href="#">Action</a></li>
                                                                                <li><a href="#">Another action</a></li>
                                                                                <li><a href="#">Something else here</a></li>
                                                                                    
                                                                              </ul>-->
                                    
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
                                <input type="text" class="search-text" id="search-input" placeholder="Search for people, jobs, companies, and more...">
                            </div>
                            <button class="search-button" id="search-button" type="submit">
                                <span></span>
                            </button>
                                
                        </fieldset>
                            
                            
                        <div class="advanced-search-outer">
                            <div class="advanced-search-inner">
                                <a href="#" class="advanced-search" id="advanced-search">Advanced
                                    
                                </a>
                            </div>
                                
                        </div>
                    </form>
                </div>
                    
                <div class="last-child">
                    <ul class="nav utilities" role="navigation" id="control_gen_20">
                        <li class="nav-item2 activity-tab" >
                            <a href="#" class="activity-toggle inbox-alert">
                                
                            </a>
                        </li>
                        <li class="nav-item2 activity-tab" >
                            <a href="#notifications" class="activity-toggle notifications-alert">
                                
                            </a>
                            
                        </li>
                        <li class="nav-item2 activity-tab" >
                            
                            <a href="#" class="activity-toggle add-connections-btn">
                                
                            </a>
                        </li>
                        
                    </ul>
                        
                </div>
                    
            </div>
                
        </div>
        <div class="main-navigation" id="main-navigation" style="position: static; width: auto;">
            <div class="wrapper">
                <ul class="nav" role="navigation" id="control_gen_6">
                    
                    
                    <li class="nav-item">
                        <a href="#" class="nav-link">
                            Home
                        </a>
                    </li>
                    
                    
                    
                    <li class="nav-item">
                        <a href="#" class="nav-link">
                            Profile
                        </a>
                        <ul class="sub-nav" id="profile-sub-nav">
                            
                            <li>
                                <a href="#">
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
                                <a href="#">
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
</html>