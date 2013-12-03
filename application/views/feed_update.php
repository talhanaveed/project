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
                                                                    <img src="<?php echo base_url()?>uploads/feed/<?php echo $li['img_path']?>" alt="Picture alone 1" />
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
                                                                <img src = "<?php echo base_url()?>assets/img/sep.png" />
                                                            </li>
                                                            <li>
                                                                <a id = "id-comment" class = "btnnn" data-id = "comment<?php echo $li['id'] ?>" data-ids = "<?php echo $li['id'] ?>">
                                                                    <?php
                                                                        
                                                                        if($li['num'] == 0){
                                                                            echo "Comment";
                                                                        }
                                                                        else{?>
                                                                            <script>get_com(<?php echo $li['id'] ?>)</script>
                                                                            <?php echo "Comment (" . $li['num'] . ")";
                                                                        }
                                                                    ?>
                                                                </a>
                                                                <img src = "<?php echo base_url()?>assets/img/sep.png" />
                                                            </li>
                                                            <li>
                                                                <a >Share</a>
                                                                <img src = "<?php echo base_url()?>assets/img/sep.png" />
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
                                                                <input  data-id = "c-text<?php echo $li['id'] ?>"  id = "c-btn-d<?php echo $li['id'] ?>" class = "btn-ppp" value = "Comment" type = "submit" disabled = "true">
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