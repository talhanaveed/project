<html>
    <head>
        <title>Profile! | LinkedIn</title>
        <link rel="stylesheet" type="text/css" href="<?php echo base_url();?>/assets/css/styles/profile.css">
        <!-- <script type="text/javascript" src="<?php echo base_url();?>/assets/js/advanced_search.js" ></script> -->
    </head>
        
    <body>
        <div id = "body">
            
            <div class = "body-wrapper">
                
                <div id = "main">
                    <div id = "content">
                        <div id = "top-card">
                            <div class = "profile-card">
                                <div class = "profile-picture">
                                    <a href = "#">
                                        <img src = "<?php echo base_url()?>assets/img/person.png" />
                                    </a>
                                </div>
                                    
                                <div class = "profile-overview">
                                    <div class = "profile-overview-content">
                                        <div class = "name">
                                            <h1><?php echo $fname; echo " "; echo $lname; ?></h1>
<!--                                            <abbr title="DaMoN AcE is a 1st degree contact" class="degree-icon ">1<sup>st</sup></abbr>-->
                                        </div>
                                            
                                        <div id="headline" class="editable-item">
                                            <p class="title "><?php echo $title?></p>
                                        </div>
                                            
                                        <div id="location" class="editable-item">
                                            <dl>
                                                <dt>Location</dt>
                                                <dd>
                                                    <span class="locality">
                                                        <a href="#" name="location" title="Find other members in Pakistan"><?php echo $country?></a>
                                                    </span>
                                                </dd>
                                                <dt>Industry</dt>
                                                <dd class="industry">
                                                    <a href="#" name="industry" title="Find other members in this industry"><?php echo $place?></a>
                                                </dd>
                                            </dl>
                                        </div>
                                         <?php if($email!=$myemail){
                                             if(!$valid){?>
                                        
                                        <div class = "profile-actions">
                                            <a href = "<?php echo base_url();?>index.php/invitations/send_invite?var1=<?php echo $email?>&var2=<?php echo $fname?>" class = "button-primary">Connect</a>
                                        </div>
                                             <?php }}?>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
            
    </body>
</html>