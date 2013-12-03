<div id = "temp">
    
    <?php if($result == NULL){ ?>
        <img src = "<?php echo base_url()?>assets/img/loading.gif" class = "lll" />
    <?php } ?>

    <?php if($result != NULL){ ?>
    <h3>Connections</h3>
    <?php } ?>
    <ul class = "s-ul">

        <?php foreach($result as $li) {?>
        <li class = "s-li" onclick = "location.href='<?php echo base_url()?>index.php/profile/open?var1=<?php echo $li['fname']?>&var2=<?php echo $li['lname']?>&var3=<?php echo $li['Position']?>&var4=<?php echo $li['email']?>&var5=<?php echo $li['Country'];?>'">
            <img src = "<?php echo base_url()?>assets/img/person.png" />
            <h4>
                <?php
                    echo $li['fname'] . ' ' . $li['lname'];
                ?>
            </h4>
            <p>
                <?php
                    echo $li['email'];
                ?>
            </p>
        </li>
        <?php } ?>
    </ul>
</div>