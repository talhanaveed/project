<html>
    <head>
    
        <link href="<?php echo base_url();?>/assets/css/styles/invitations.css" rel="stylesheet" type="text/css" />
<!--          <link href="<?php echo base_url();?>/assets/css/styles/invitations.css" rel="stylesheet" type="text/css" />-->
    </head>
    
    <body>
        <div id="body" class="" role="main">
            <div class="wrapper2">
                <div id="main" class="grid-c">
                    <div id="sidebar" class="sidebar">
                        
                        <div id="inbox-nav">
                            <ul>
                                <li class="nav-search ">
                                    
                                    
                                    <form action="#" method="POST" name="inboxSearchForm" novalidate="novalidate">
                                        
                                        <input type="text" name="keywords" value="" id="keywords-inboxSearchForm" class="text" placeholder="Search Inbox">
                                        <input class="search-go" type="submit" value="Search" name="search">
                                        
                                    </form>
                                    
                                    
                                    
                                </li>
                                <li class="nav-compose  notTop">
                                    <a href="#"><p>Compose Message</p></a>
                                </li>
                                <li class="nav-inbox active"><a href="/inbox/invitations/pending">Inbox</a></li>
                                <li class="nav-sent "><a href="/inbox/invitations/sent">Sent</a></li>
                                <li class="nav-archived "><a href="/inbox/messages/archive">Archived</a></li>
                                <li class="nav-trash "><a href="/inbox/messages/trash">Trash</a></li>
                            </ul>
                        </div>
                        
                        
                    </div>
                    <div id="content" class="inbox">
                        <div id="inbox-tabview" class="inbox-tabview">
                            <ul class="tabs inbox-tabview-nav">
                                <li class="">
                                    <a href="#">
                                        <em>Messages</em>
                                        
                                    </a>
                                </li>
                                <li class="selected">
                                    <a href="#">
                                        <em>Invitations</em>
                                        
                                    </a>
                                </li>
                            </ul>
                            <div class="content">
                                
                                <div id="invitations" class=" inbox-null">
                                    <form  method="POST" action="<?php echo base_url();?>index.php/invitations/add" name="bulkActionForm"  id="bulk-form">
                                        
                                        <div class="new-bulk">
                                            <a class="new-link btn-quaternary" href=#">Add connections</a>
                                            <ul class="bulk">
                                                
                                                <li><input class="btn-quaternary" type="submit" name="bulkInvitationAccept" value="Accept" disabled=""></li>
                                                <li><input class="btn-quaternary" type="submit" name="bulkInvitationIgnore" value="Ignore" disabled=""></li>
                                                
                                                
                                                
                                            </ul>
                                        </div>
                                        <div class="select-filters-sort">
                                            
                                            <div class="select">
                                                
                                                <ul>
                                                    <h4>Select:</h4>
                                                    <li><a class="select-all" href="#">All</a></li>
                                                    <li><a class="select-none disabled" href="#">None</a></li>
                                                </ul>
                                            </div>
                                        </div>
                                        <ol class="inbox-list ">
                                        
                                            <?php foreach ($result as $row)
                                                {?>
                                            <li  class="inbox-item invitation-item">
                                                <input class="chk" type="checkbox" name="mboxItemGIDs" >
                                               
                                                <img class="photo" src="<?php echo $row['imgpath']?>" alt="" height="40" width="40">
                                                <div class="item-content">
                                               
                                                  <input type="hidden" value="<?php echo $row['email']?>" name="email">
                                                    <div class="date"><?php echo $row['date']?></div>
                                                    <span class="participants">
                                                        <span class="new-miniprofile-container">
                                                            <strong>
                                                                
                                                                <a href="#">
                                                                   <?php echo $row['fname']; 
                                                                   echo " ";
                                                                   echo $row['lname'];?>
                                                                </a>
                                                                
                                                            </strong>
                                                        </span>
                                                    </span>
                                                    <span class="headline">
                                                       <?php echo $row['fposition'];
                                                       echo " - ";
                                                       echo $row['fplace'];
                                                       
                                                       
                                                       ?>
                                                        
                                                   </span>
                                                    <p class="msg">
                                                        
                                                        <span class="note">
                                                            I'd like to add you to my professional network on LinkedIn.
                                                        </span>
                                                        
                                                    </p>
                                                    <div class="inbox-actions">
                                                        <ul>
                                                            <li>
                                                                <div class="primary-actions" id="control_gen_10">
                                                                    <span class="btn-menu btn-ternary btn-split">
                                                                        <a class="accept btn btn-ternary" href="<?php echo base_url();?>index.php/invitations/add?var1=<?php echo $row['email']?>" >Accept</a>
<!--                                                                       <input type="submit" value="Accept">-->
                                                                        <span class="toggle-btn"></span></span>
                                                                </div>
                                                            </li>
                                                            <li>
                                                                
                                                                <a class="ignore btn-quaternary" href="#">Ignore</a>
                                                                
                                                                
                                                            </li>
                                                            <li>
                                                                
                                                                <a class="ignore btn-quaternary" href="#">Report Spam</a>
                                                                
                                                                
                                                            </li>
                                                        </ul>
                                                    </div>
                                                </div>
                                            </li>
                                                <?php }?>
                                          
                                        </ol>
                               
                                </div>
                            </div>
                            
                        </div>
                    </div>
                    <div id = "col3">
                        
                        <div class = "add1">
                            <a href = "#">
                                <img src = "/Project/assets/img/add1.png" />
                            </a>
                        </div>
                        
<!--                        <div class = "add2">
                            <a href = "#">
                                <img src = "/Project/assets/img/add2.png" />
                            </a>
                        </div>-->
                        
                    </div>
                </div>
            </div>
        </div>
    </body>
</html>

