 <div id="con">
     
    <h3>Invitations (<?php echo count($result) ?>)</h3>
    <ol class="inbox-list1">

        <?php foreach ($result as $row) { ?>
        <li  class="inbox-item1">
            
            
            <img class="photo1" src="<?php echo base_url()?>assets/img/person.png" alt="" height="40" width="40">
            <div class="item-content1">
                
                <input type="hidden" value="<?php echo $row['email']?>" name="email">
                    
                <div class="participants1">
                    
                    <strong>  
                        <a href="#">
                            <?php
                                echo $row['fname'] . " " . $row['lname'];
                            ?>
                        </a>
                    </strong>
                    <div class="date1"><?php echo $row['date']?></div>
                        
                </div>
                <div class="headline1">
                    <?php
                        echo $row['fposition'] . " " . $row['fplace'];    
                    ?>                       
                </div>
                
                <div class="inbox-actions1">
                    <ul>
                        <li>
                            <a class="btn-ternary1" href="<?php echo base_url();?>index.php/invitations/add?var1=<?php echo $row['email']?>" >Accept</a>
                        </li>
                        <li>
                            <a class="btn-quaternary1" href="<?php echo base_url();?>index.php/invitations/ignore?var1=<?php echo $row['email']?>">Ignore</a>    
                        </li>
                    </ul>
                </div>
                
            </div>

            

        </li>
        <?php }?>
                    
    </ol>
        
</div>
