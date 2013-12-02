<div id="map-comments<?php echo $feedID?>" class="map-comments">

	<ul class="com-ul">
		
		<?php foreach ($comment as $com) { ?>			
		<li class="com-li">

			<img src="<?php echo base_url()?>uploads/dp/<?php echo $com['imgpath']?>" onclick = "location.href='<?php echo base_url()?>index.php/profile/open?var1=<?php echo $com['fname']?>&var2=<?php echo $com['lname']?>&var3=<?php echo $com['Position']?>&var4=<?php echo $com['email']?>&var5=<?php echo $com['Country'];?>'" />
			<div class="com-body">
				<a href="<?php echo base_url()?>index.php/profile/open?var1=<?php echo $com['fname']?>&var2=<?php echo $com['lname']?>&var3=<?php echo $com['Position']?>&var4=<?php echo $com['email']?>&var5=<?php echo $com['Country'];?>"><?php echo $com['fname'] ." ". $com['lname']?></a>
				<p><?php echo $com['msg']?></p>
			</div> 
		</li>
		<?php }?>
	</ul>

</div>