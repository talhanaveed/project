<!doctype html>
<html>
<head>
   <script src="<?php echo base_url()?>assets/js/jquery-2.0.3.js"></script>
       <script src="<?php echo base_url()?>assets/js/ajaxfileupload.js"></script>
   <script> var base = "<?php echo base_url()?>index.php/" </script>
   <script src="<?php echo base_url()?>assets/js/upload.js"></script>

   <link href="<?php echo base_url()?>assets/css/style1.css" rel="stylesheet" />
</head>
<body>
    <div id = "body">
            
            <div class = "body-wrapper">
                
                <div id = "main">
                    <div id = "content">
                        <div id = "top-card">
                            <div class = "profile-card">
                                <div id= "dp" class = "profile-picture">
                                    
                                        <img src = "<?php echo base_url()?>uploads/dp/<?php echo $imgpath?>" />
                                    
                                </div>

                                <div class = "profile-overview">
                                    <div class = "profile-overview-content">
                                        <h1>Change Your Profile Picture</h1>
                                         <form method="post" action="" id="upload_file">
                                         
                                       
                                            <!-- <label for="userfile">File</label> -->
                                            <!-- <span class = "myfile"> -->
                                              <input type="file" name="userfile" id="userfile" value = "Upload File" size = "20px" />
                                            <!-- </span> -->
                                       
                                            <input type="submit" name="submit" id="submit" class = "button-primary" value = "Apply" >
                                         </form>
                                    </div>
                                </div>

                            </div>
                        </div>
                    </div>
                </div>
            </div>
    </div>
   
  
</body>

 <script>

 </script>
</html>