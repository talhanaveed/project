<div id = "img-container1">
	<!-- <img src = "/Project/assets/img/paper_clip.png" class = "paper-clip" /> -->
	<a id = "a"></a>
	<input type = "hidden" name  = "link-title" id = "link-input" value = "">
<!-- 	 <input type="hidden" value="" name="image" id = "image" /> -->
	<div style = "padding: 10px 0 10px 10px; postition: relative;  float: left">
    	<img src = "<?php echo base_url()?>uploads/feed/<?php echo $filename?>" class = "share-img" id="img-src"/>
    	<input type="hidden" value="<?php echo $filename?>" name="image" id = "image" />
	</div>
	<!-- <div style = "padding: 10px; float: right; width: 250px; margin-top: 90px;">
		<p style = "margin: 0; font-size: 13px"><?php //echo $filename ?></p>
	</div> -->
</div>
