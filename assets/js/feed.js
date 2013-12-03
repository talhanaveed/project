// background: -webkit-gradient(linear, left top, left bottom, color-stop(0, #73aec9), color-stop(5%, #73aec9), color-stop(5%, #338ab0), color-stop(100%, #0571a6));

// $(document).ready(function(){
// 	$('id-comment').click(function(){
// 		$('comment').hide();
// 	});
// });



// $(function(){
//     $( ".ctext" ).keyup(function() {
//           if($(this).val() != ''){
//             $('#c-btn-d').hide();
//             $('#c-btn').show();
//           }
//           else{
//             $('#c-btn-d').show();
//             $('#c-btn').hide();
//           }
//     });
// });

// $(function(){
//     $( ".ctext" ).keyup(function() {
//           if($(this).val() != ''){
//             $('#' + $(this).data('ids')).hide();
//             $('#' + $(this).data('id')).show();
//           }
//           else{
//             $('#' + $(this).data('ids')).show();
//             $('#' + $(this).data('id')).hide();
//           }
//     });
// });

   $('#dummy-feed').on('keyup', '.ctext', function() {
          if($(this).val() != ''){
            $('#' + $(this).data('ids')).hide();
            $('#' + $(this).data('id')).show();
          }
          else{
            $('#' + $(this).data('ids')).show();
            $('#' + $(this).data('id')).hide();
          }
    });


function validateUrl(url) { 
  var pattern = "(http://)?(([0-9a-z_!'().&=$%-]: )?[0-9a-z_!'().&=$%-]@)?(([0-9]{1,3}\.){3}[0-9]{1,3}|([0-9a-z_!'()-]\.)([0-9a-z][0-9a-z-]{0,61})?[0-9a-z]\.[a-z]{2,6})(:[0-9]{1,4})?((/?)|(/[0-9a-z_!*'().;?:@&=$,%#-])/?)$";
   if(url.match(pattern)) { 
    return true; } 
    else { 
      return false; 
    } 
  }
// $(document).ready(function(){
//     $('.btnnn').click(function(){
//         $('#' + $(this).data('id')).slideToggle('fast');
//         $('.comment-container').css('border-color', '#c1c1c1'); 
//     });
// });

// $(function(){
//     $('.comment-container').bind('click', function(){
//         $(this).css('border-color', '#00688B');
//     });
// });

// $(function(){
//     $('.share-wrapper').click(function(){
//         $(this).css('border-color', '#00688B');
//     });
// });
      $('#dummy-feed').on('click', '.like', function(){
                var id= $(this).data('id');
                // var base = "<?php echo base_url()?>index.php/";
                $.ajax({
                type: "POST",
                url: base + "home/like",
                data: {id : id},
                success: function(blu){
                    if(blu==0){ 
                       $('#l-id'+id).html(
                        "Like"
                        );
                        }
                    else
                    {
                        $('#l-id'+id).html(
                            "Like ("+blu+")"
                            );
                    }    
                }
                    });
                });


$(function(){
       $.embedly.defaults.key = 'ceacc377e4664cdfa0f5a359be04a26e';
     $('.b').embedly();
    $( "#postText-postModuleForm" ).keyup(function() {
          if($(this).val() != '')
          {
              $('#p-btn').show();
              $.embedly.defaults.key = 'ceacc377e4664cdfa0f5a359be04a26e';
                var x = document.getElementById('postText-postModuleForm').value;
              // alert(x);
               // $('#img-container1').html( '<a id="a" href="'+x+'"></a>');
               if(validateUrl(x))
               {
                document.getElementById('a').href = x;
                $('#a').embedly();
              
              $.embedly.extract(x, {key: 'ceacc377e4664cdfa0f5a359be04a26e'}).progress(function(e){
                $('#link-input').val(e.url);
                    if(e.title)
                    {
                      $('#img-container1').show();
                      $('#p-btn').show();
                    }
                    else
                    {
                      //$('#p-btn').hide();
                    }
              });
            }
        
          }
          else{
              if($('#link-input').val().length <= 1){
                $('#p-btn').hide();
              }
          }
    });
});
$('#dummy-feed').on('click', '.btnnn', function(){

    var id = $(this).data('ids');
    var ids = $(this).data('id');
    get_com(id);
    $('#' + $(this).data('id')).slideToggle('fast');
    $('.comment-container').css('border-color', '#c1c1c1');
    
});

function get_com(id, ids){
        $.ajax({
        type: "POST",
        url: base + "home/display_com",
        data: {id : id},
        success: function(blu){
          $('#map-comments'+id).replaceWith(blu);
        }
  });
}

$('#dummy-feed').on('click', '.xyz',function(){

    var id = ($(this).data('ids'));
    var msg = $('#' + $(this).data('id')).val();
    post_com(id,msg);
    $('#c-btn-d'+id).show();
    $('#c-btn'+id).hide();
});
      
function post_com(id, msg){
    $.ajax({
        type: "POST",
        url: base + "home/comment",
        data: {id : id, msg : msg},
        success: function(blu){
            $('#map-comments'+id).replaceWith(blu);
             $('.ctext').val(null);
        }
    });
 }
  // $(function(){
  //           $('#p-btn').click(function(){
  //               get_ax();
  //           });
  //       })

  //       function get_ax(){
        
  //           // var base = "<?php echo base_url()?>index.php/";
  //           var image = $('#image').val();
  //           var msg = $('#postText-postModuleForm').val();
  //           var status = $('#select').val();
  //           var link= $('#link-input').val();
  //           $.ajax({
  //               type: "POST",
  //               url: base + "home/text",
  //               data: {msg : msg, image : image, status : status, link : link},
  //               success: function(blu){
                    
  //                    $('#p-btn').css('display', 'none');
  //                   $("#updates-content1").replaceWith(blu);
  //                    $.embedly.defaults.key = 'ceacc377e4664cdfa0f5a359be04a26e';
  //                   $('.b').embedly();

  //                   // $('#img-container1').hide();
  //                    document.getElementById('postText-postModuleForm').value=null;
  //                    $('#img-container1').html('<a id="a"></a><input type = "hidden" name  = "link-title" id = "link-input" value = ""><input type="hidden" value="" name="image" id = "image" />');
                                                    
  //                    document.getElementById('image').value = null;

  //                    // document.getElementById('img-src').src = null;
  //                    $('#img-container1').hide();
                     

  //               }
  //           });
  //     }

 function preview() {
         
            // $('#userfile').change(function(e) {
              // e.preventDefault();
          
              // var base = "<?php echo base_url()?>index.php/";

              $.ajaxFileUpload({
                 url         : base + "home/upload_file", 
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
                       // $('#img-container').show('1000');
                       $('#p-btn').css('margin-top', '10px');
                       $('#p-btn').show();
                    }
                    // alert(data.msg);
                 }
              });
              return false;
            // });
        }

        function refresh_files(){

            // var base = "<?php echo base_url()?>index.php/";
            $.get(base + "home/files")
                .success(function (data){
              // $('#files').html(data);
              $("#img-container1").replaceWith(data);
                $('#img-container1').show();
                // alert(data);
            });
        }

// $('.fullscreen').click(function(){
//   $('iframe').css('maxWidth', '1000px');
//   $('iframe').css('maxHeight', '1000px');
// });


