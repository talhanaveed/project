<html>
    <head>
        <title>Welcome! | LinkedIn</title>
        <link rel="stylesheet" type="text/css" href="<?php echo base_url();?>/assets/css/styles/newsfeed.css">
        <script src="<?php echo base_url()?>assets/js/jquery-2.0.3.js"></script>
        <script src="<?php echo base_url()?>assets/js/ajaxfileupload.js"></script>
        <script src="<?php echo base_url()?>assets/js/jquery.embedly-3.1.1.min.js" type="text/javascript"></script>
       <!--  <script src="http://cdn.embed.ly/jquery.embedly-3.1.1.min.js" type="text/javascript"></script>-->
        <!-- ***** IMG ***** -->
        <link rel="stylesheet" href="<?php echo base_url();?>/assets/css/prettyPhoto.css" type="text/css" media="screen" title="prettyPhoto main stylesheet" charset="utf-8" />
        <script src="<?php echo base_url();?>/assets/js/jquery.prettyPhoto.js" type="text/javascript" charset="utf-8"></script>

        <script>var base = "<?php echo base_url()?>index.php/";</script>
          <script type="text/javascript" src="<?php echo base_url();?>/assets/js/feed.js" ></script> 
    </head>

    <body>
        <div id = "body">
            <div class = "link">
                <a href = "#">iWeb - Dedicated Servers - Deal of the Month : 4 Months Free on All Dedicated Servers.</a>
            </div>
            <div class = "body-wrapper">
                
                <div id = "side-bar">
                    <?php if ($known!=null) {?>
                    <div id = "know">
                        <a href = "#"><h2>PEOPLE YOU MAY KNOW</h2></a>
                        <ul class = "side-ul">

                            <?php
                                $count=0;
                                foreach($known as $li){
                            ?>
                            
                            <li class = "side-li">
                                <img src = "../assets/img/person.png" class = "photo" />
                                <span class = "remove"></span>
                                <div class = "k-content">
                                    <a href = "<?php echo base_url()?>index.php/profile/open?var1=<?php echo $li['fname']?>&var2=<?php echo $li['lname']?>&var3=<?php echo $li['Position']?>&var4=<?php echo $li['eemail']?>&var5=<?php echo $li['Country'];?>" class = "k-name">
                                        <?php 
                                            echo $li['fname'] . ' ' . $li['lname'];
                                        ?>,
                                    </a>
                                    <p>
                                        <?php
                                            echo $li['Position'];
                                        ?>
                                     at 
                                        <?php
                                            echo $li['ci'];
                                        ?>
                                    </p>
                                       <?php if($valid[$count]==0) {?>
                                    <div class = "k-connect">
                                        <a href = "<?php echo base_url();?>index.php/invitations/send_invite?var1=<?php echo $li['eemail']?>&var2=<?php echo $li['fname']?>"><span class = "connect-logo"></span>Connect</a>
                                    </div>
                                        <?php }?>
                                </div>
                            </li>

                            <?php  $count=$count+1; }?>
                        </ul>
                    </div>
                    <?php }?>
                    <!-- <div class="add3">
                        <ul class="gallery clearfix">
                            <li><a href="../assets/img/add7.jpg" rel = "prettyPhoto">
                                <img src="../assets/img/add7.jpg" alt = "Linkedin - Special Feature" title = "Click" />
                            </a></li>
                        </ul>
                    </div> -->
                    <div class="add3" style = "display: none">
                        <ul class="gallery clearfix">
                            <li><a href="../assets/img/add4.jpg" rel = "prettyPhoto">
                                <img src="../assets/img/add4.jpg" alt = "Linkedin - Special Feature" title = "Click" />
                            </a></li>
                        </ul>
                    </div>
                    <div class="add3">
                        <ul class="gallery clearfix">
                            <li><a href="../assets/img/add4.jpg" rel = "prettyPhoto">
                                <img src="../assets/img/add4.jpg" alt = "Linkedin - Special Feature" title = "Click" />
                            </a></li>
                        </ul>
                    </div>
                    <div class="add3">
                        <ul class="gallery clearfix">
                            <li><a href="../assets/img/add7.jpg" rel = "prettyPhoto">
                                <img src="../assets/img/add7.jpg" alt = "Linkedin - Special Feature" title = "Click" />
                            </a></li>
                        </ul>
                    </div>
                </div>

                <div id = "main">
                    <div id = "content">
                        <div id = "feed-nhome" class = "section feed feed-nhome feed-redesign">
                            <!-- Display Picture + Share Anything -->
                            <div id = "head">
                                <div class = "head-wrapper">
                                    <a id = "dp">
                                        <img src = "<?php echo base_url()?>uploads/dp/<?php echo $imgpath?>" />
                                    </a>
                                    <div class = "post-module">
                                        <div class = "post-module-in">
                                            
                                            <form  id="slideshare-upload-form" enctype="multipart/form-data" action="" method="" class="is-ready">
                                                <input type="file" name="userfile" class="attach-btn" id="userfile" onchange="preview()"/>
                                            </form>
                                            <form action="" method="" name="postModuleForm" novalidate="novalidate" class="doc-sharing-form post" gbpush="true" id="share-form">
                                                <div id = "share-body">
                                                    <div class = "share-wrapper">
                                                        <textarea name="postText" id="postText-postModuleForm" rows="2" cols="40" class="post-message mentions-input" placeholder="Share an update..." data-base-height="15"></textarea>
                                                    </div>
                                                </div>
                                                <div id = "img-container1">
                                                    <!-- <img src = "<?php //echo base_url()?>files/<?php //echo ?>" /> -->
                                                    <a id="a"></a>
                                                    <input type = "hidden" name  = "link-title" id = "link-input" value = "">
                                                    <input type="hidden" value="" name="image" id = "image" />
                                                </div>
                                                <div class = "cbutton">
                                                    <input id = "p-btn" class = "button-primary" value = "Share" type = "button" style = "display: none">
                                                        <div class="sdiv">

                                                            <select name="select" class = "select" id="select">

                                                                    <option value="connections">Connections</option>
                                                                    <option value="public">Public</option>
                                                            </select>

                                                        </div>
                                                </div>
                                                

                                            </form>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <!-- **** NEWSFEED **** -->
                            <div id="dummy-feed">
                                <div id = "updates-content1">
                                    <ul class = "updates-ul">

                                        <?php
                                            foreach($result as $li){
                                        ?>
                                        <li class = "feed-item">
                                            <div class = "content">
                                                <a href = "<?php echo base_url()?>index.php/profile/open?var1=<?php echo $li['fname']?>&var2=<?php echo $li['lname']?>&var3=<?php echo $li['Position']?>&var4=<?php echo $li['email']?>&var5=<?php echo $li['Country'];?>">
                                                     <img src = "<?php echo base_url()?>uploads/dp/<?php echo $li['imgpath']?>" style="width:50px; height:50px;"/>
                                                </a>
                                                <div class = "feed-body">
                                                    <h2>
                                                        <a href = "<?php echo base_url()?>index.php/profile/open?var1=<?php echo $li['fname']?>&var2=<?php echo $li['lname']?>&var3=<?php echo $li['Position']?>&var4=<?php echo $li['email']?>&var5=<?php echo $li['Country'];?>">
                                                            <?php
                                                                echo $li['fname'] . ' ' . $li['lname'];
                                                            ?>
                                                        </a>
                                                    </h2>
                                                    <div class = "ccc">
                                                        <p>
                                                        <?php
                                                            echo $li['msg'];
                                                        ?>
                                                        </p>
                                                    </div>
                                                    <?php if($li['link']) {?>
                                                    <a class="b" href="<?php echo $li['link']?>"></a>
                                                    <?php }?>

                                                    <?php if($li['img_path']) { ?>
                                                    <div class = "show-image">
                                                        <!-- <a href = "<?php //echo base_url()?>uploads/feed/<?php// echo $li['img_path']?>" rel = "prettyPhoto">
                                                            <img src="<?php //echo base_url()?>uploads/feed/<?php //echo $li['img_path']?>" />
                                                        </a> -->
                                                        <ul class="gallery clearfix">
                                                            <li>
                                                                <a href="<?php echo base_url()?>uploads/feed/<?php echo $li['img_path']?>" rel="prettyPhoto" id = "myimg">
                                                                    <img src="<?php echo base_url()?>uploads/feed/<?php echo $li['img_path']?>" alt = "Linkedin - Special Feature" title = "Click" />
                                                                </a>
                                                            </li>
                                                        </ul>
                                                    </div>
                                                    <?php } ?>

                                                    <div class = "lcs">
                                                        <ul class = "lcs-ul">
                                                            <li>
                                                                <a id="l-id<?php echo $li['id'] ?>" class="like" data-id = "<?php echo $li['id'] ?>" >
                                                                    <?php 

                                                                    if($li['like'] == 0){
                                                                        echo "Like";
                                                                    }
                                                                    else{
                                                                        echo "Like (" . $li['like'] . ")";
                                                                    }

                                                                    ?>
                                                                </a>
                                                                <img src = "../assets/img/sep.png" />
                                                            </li>
                                                            <li>
                                                                <a id = "id-comment" class = "btnnn" data-id = "comment<?php echo $li['id'] ?>" data-ids = "<?php echo $li['id'] ?>">
                                                                    <?php
                                                                        
                                                                        if($li['num'] == 0){
                                                                            echo "Comment";
                                                                        }
                                                                        else{?>
                                                                     
                                                                            <?php echo "Comment (" . $li['num'] . ")";
                                                                        }
                                                                    ?>
                                                                </a>
                                                                <img src = "../assets/img/sep.png" />
                                                            </li>
                                                            <li>
                                                                <a >Share</a>
                                                                <img src = "../assets/img/sep.png" />
                                                            </li>
                                                            <li>
                                                                <span class = "time">
                                                                    <!--<?php
                                                                       // echo CONVERT(VARCHAR(11),GETDATE(),6)
                                                                    ?>-->1m ago
                                                                </span>
                                                            </li>
                                                        </ul>
                                                    </div>
                                                    <input type="hidden" value="<?php echo $li['id'] ?>" name="c-id" id="ic-id" />

                                                    <div  id = "comment<?php echo $li['id'] ?>" class = "comments">
                                                        
                                                       <div id="map-comments<?php echo $li['id'] ?>" class="map-comments">
                                                        </div>

                                                        <!-- <form action = ""> -->
                                                            <div class = "comment-container">
                                                                <textarea data-id = "c-btn<?php echo $li['id'] ?>" data-ids = "c-btn-d<?php echo $li['id'] ?>" id="c-text<?php echo $li['id'] ?>"class = "ctext" placeholder = "Add a comment..."></textarea>
                                                            </div>
                                                            <div class = "cbutton">
                                                                <input data-id = "c-text<?php echo $li['id'] ?>"  id = "c-btn-d<?php echo $li['id'] ?>" class = "btn-ppp" value = "Comment" type = "submit" disabled = "true">
                                                                <input data-id = "c-text<?php echo $li['id'] ?>" data-ids = "<?php echo $li['id'] ?>" id = "c-btn<?php echo $li['id'] ?>" class = "button-primary xyz" value = "Comment" type = "submit" style = "display: none">
                                                            </div>
                                                        <!-- </form> -->
                                                    </div>

                                                </div>
                                            </div>
                                        </li>

                                        <?php } ?>
                                    </ul>
                                        
                                    <div class="feed-no-more">There are no more updates at this time.</div>
                                </div>
                            </div>
                                
                        </div>
                    </div>
                </div>
            </div>
        </div>
            
            
        <!-- ***** FOOTER ***** -->
        <div id = "foot">
            <div class = "foot_foot">
                <ul class = "bot">
                    <li><a href = "<?php echo base_url();?>index.php/main/viewTemp"><strong>Help Center</strong></a></li>
                    <li><a href = "<?php echo base_url();?>index.php/main/viewTemp">About</a></li>
                    <li><a href = "<?php echo base_url();?>index.php/main/viewTemp">Press</a></li>
                    <li><a href = "<?php echo base_url();?>index.php/main/viewTemp">Blog</a></li>
                    <li><a href = "<?php echo base_url();?>index.php/main/viewTemp">Careers</a></li>
                    <li><a href = "<?php echo base_url();?>index.php/main/viewTemp">Advertising</a></li>
                    <li><a href = "<?php echo base_url();?>index.php/main/viewTemp">Talent Solutions</a></li>
                    <li><a href = "<?php echo base_url();?>index.php/main/viewTemp">Tools</a></li>
                    <li><a href = "<?php echo base_url();?>index.php/main/viewTemp">Mobile</a></li>
                    <li><a href = "<?php echo base_url();?>index.php/main/viewTemp">Developers</a></li>
                    <li><a href = "<?php echo base_url();?>index.php/main/viewTemp">Publishers</a></li>
                    <li><a href = "<?php echo base_url();?>index.php/main/viewTemp">Language</a></li>
                    <li class = "last"><a href = "<?php echo base_url();?>index.php/main/viewTemp">Upgrade Your Account</a></li>
                </ul>
                    
                <p id = "bot_logo">
                    <span>LinkedIn zzzzzzzz</span>&copy 2013
                </p>
                    
                <ul class = "legal">
                    <li><a href = "<?php echo base_url();?>index.php/main/userAgreement">User Agreement</a></li>
                    <li><a href = "<?php echo base_url();?>index.php/main/viewPolicy">Privacy Policy</a></li>
                    <li><a href = "<?php echo base_url();?>index.php/main/viewTemp">Community Guidelines</a></li>
                    <li><a href = "<?php echo base_url();?>index.php/main/viewTemp">Cookie Policy</a></li>
                    <li><a href = "<?php echo base_url();?>index.php/main/viewTemp">Copyright Policy</a></li>
                    <li class = "last"><a href = "<?php echo base_url();?>index.php/main/viewTemp">Send Feedback</a></li>
                </ul>
                    
                </p>
            </div>
        </div>
            
    </body>
        <script src="<?php echo base_url();?>/assets/js/jquery.prettyPhoto.js" type="text/javascript" charset="utf-8"></script>
              
    <script>

     
   
       //    ********************* IMG ******************************** //
            $(document).ready(function(){
                $("area[rel^='prettyPhoto']").prettyPhoto();
                
                $(".gallery:first a[rel^='prettyPhoto']").prettyPhoto({animation_speed:'normal',theme:'light_square',slideshow:3000, autoplay_slideshow: true});
                $(".gallery:gt(0) a[rel^='prettyPhoto']").prettyPhoto({animation_speed:'fast',slideshow:10000, hideflash: true});
        
                $("#custom_content a[rel^='prettyPhoto']:first").prettyPhoto({
                    custom_markup: '<div id="map_canvas" style="width:260px; height:265px"></div>',
                    changepicturecallback: function(){ initialize(); }
                });

                $("#custom_content a[rel^='prettyPhoto']:last").prettyPhoto({
                    custom_markup: '<div id="bsap_1259344" class="bsarocks bsap_d49a0984d0f377271ccbf01a33f2b6d6"></div><div id="bsap_1237859" class="bsarocks bsap_d49a0984d0f377271ccbf01a33f2b6d6" style="height:260px"></div><div id="bsap_1251710" class="bsarocks bsap_d49a0984d0f377271ccbf01a33f2b6d6"></div>',
                    changepicturecallback: function(){ _bsap.exec(); }
                });
            });
            </script>
    
            <!-- Google Maps Code -->
            <script type="text/javascript"
                src="http://maps.google.com/maps/api/js?sensor=true">
            </script>
            <script type="text/javascript">
              function initialize() {
                var latlng = new google.maps.LatLng(-34.397, 150.644);
                var myOptions = {
                  zoom: 8,
                  center: latlng,
                  mapTypeId: google.maps.MapTypeId.ROADMAP
                };
                var map = new google.maps.Map(document.getElementById("map_canvas"),
                    myOptions);
              }

            </script>
            <!-- END Google Maps Code -->
    
            <!-- BuySellAds.com Ad Code -->
            <style type="text/css" media="screen">
                .bsap a { float: left; }
            </style>
            <script type="text/javascript">
            (function(){
              var bsa = document.createElement('script');
                 bsa.type = 'text/javascript';
                 bsa.async = true;
                 bsa.src = '//s3.buysellads.com/ac/bsa.js';
              (document.getElementsByTagName('head')[0]||document.getElementsByTagName('body')[0]).appendChild(bsa);
            })();


    
            

    </script>

</html>