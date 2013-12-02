         $('body').on('mouseover', function(event){
                   
            get_not();
        });
        $('#invi').on('mouseover', function(event){
            $('body').find('#drop').fadeIn(200);
            get_data();
        });
        //            
        $('#drop').on('mouseover', function(event){
            $(this).show();
        });
        $('#drop').on('mouseout', function(event){
            $('body').find('#drop').hide();
        });
        $('#noti').on('mouseover', function(event){
            $('body').find('#drop').hide();
        });
        $('#adc').on('mouseover', function(event){
            $('body').find('#logout').hide();
        });


       
        $('#invi2').on('mouseover', function(event){
            $('body').find('#logout').fadeIn(200);
            // get_data();
        });
        //            
        $('#logout').on('mouseover', function(event){
            $(this).show();
        });
        $('#logout').on('mouseout', function(event){
            $('body').find('#logout').hide();
        });
        $('#noti').on('mouseover', function(event){
            $('body').find('#logout').hide();
        });
        $('#adc').on('mouseover', function(event){
            $('body').find('#logout').hide();
        });
//        $( "#search-input" ).keyup(function() {
//            if($("#search-input").val() === ''){
//                $('#drop-search').hide();
//            }
//            else{
//                $('#drop-search').show(); 
//            }
//        });
        $('body').on('click', function(e){
            $('#drop-search').hide();
        });
        
        function get_data()
        {
              if (!window.location.origin)
     window.location.origin = window.location.protocol+"//"+window.location.host;
 var url2 = window.location.origin + "/index.php/invitations/fetch";
            $.ajax({
                type:"get",
                url:url2,
            }).done(function(msg){
                
                $("#con").replaceWith(msg);
            });
        }
        function get_not()
        {
              if (!window.location.origin)
     window.location.origin = window.location.protocol+"//"+window.location.host;
 var url2 = window.location.origin + "/index.php/invitations/fetch_not_count";
            $.ajax({
                type:"get",
                url:url2,
            }).done(function(msg){
                if(msg!=='0')
                $("#header-messages-count").html(msg);
            else
                $("#header-messages-count").html("");
            });
        }
        
// function get_data()
//        {
//              if (!window.location.origin)
//     window.location.origin = window.location.protocol+"//"+window.location.host;
// var url2 = window.location.origin + "/Project/index.php/invitations/fetch_count";
//            $.ajax({
//                type:"get",
//                url:url2,
//            }).done(function(msg){
//                
//                $("#con").replaceWith(msg);
//            });
//        }
//  $( "#search-input" ).keyup(function() {
//          if($("#search-input").val() === ''){
//            $('#drop-search').hide();
//          }
//          else{
//            $('#drop-search').show();
//            get_result(); 
//          }
//        });
//        $('body').on('click', function(e){
//            $('#drop-search').hide();
//        });
//
//        function get_result(){
//            //  $.ajax({
//            //     type:"post",
//            //     url:"search/get_result",
//            // }).done(function(msg){
//            //     //alert(msg);
//            //     $("#temp").replaceWith(msg);
//            // });
//            var base = "<?php echo base_url()?>index.php/";
//            var find = $('#search-input').val();
//            $.ajax({
//                type: "POST",
//                url: base + "search/get_result",
//                data: {find: find},
//                success: function(msg){
//                    $("#temp").replaceWith(msg);
//                }
//            });
//        }

$(function(){
    $('.s-li').click(function(){
        alert('wow');
    });
});

// <?php echo base_url()?>index.php/profile/open?var1=<?php echo $li['fname']?>&var2=<?php echo $li['lname']?>&var3=<?php echo $li['Position']?>&var4=<?php echo $li['email']?>&var5=<?php echo $li['Country'];?>