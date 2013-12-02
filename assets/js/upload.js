//  function preview() {
         
//     // $('#userfile').change(function(e) {
//       // e.preventDefault();
  
//       // var base = "<?php echo base_url()?>index.php/";
//       $.ajaxFileUpload({
//          url         : base + "profile/upload_file", 
//          secureuri      :false,
//          fileElementId  :'userfile',
//          dataType    : 'json',
//          // data        : {
//          //    'title'           : $('#title').val()
//          // },
//          success  : function (data, status){
       
//             if(data.status != 'error'){
//                 refresh_files();
//                // $('#img-container').show('1000');
//                // $('#p-btn').css('margin-top', '10px');
//                // $('#p-btn').show();
//             }
//             // alert(data.msg);
//          }
//       });
//       return false;
//     // });
// }


  $(function() {
            $('#upload_file').submit(function(e) {
              e.preventDefault();  
      
              // var base = "<?php echo base_url()?>index.php/";

              $.ajaxFileUpload({
                 url         : base + "profile/upload_file", 
                 secureuri      :false,
                 fileElementId  :'userfile',
                 dataType    : 'json',
                 // data        : {
                 //    'title'           : $('#title').val()
                 // },
                 success  : function (data, status)
                 {
                    if(data.status != 'error')
                    {
                        refresh_files();
                       // // $('#img-container').show('1000');
                       // $('#p-btn').css('margin-top', '10px');
                       // $('#p-btn').css('display', 'block');
                    }
                 }
              });
              return false;
            });
        });


function refresh_files(){

    // var base = "<?php echo base_url()?>index.php/";
    $.get(base + "profile/files")
        .success(function (data){
      // $('#files').html(data);
      $("#dp").replaceWith(data);
        // $('#img-container1').show();
        // alert(data);
    });
}