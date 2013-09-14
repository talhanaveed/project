                <script type="text/javascript">

           function validateForm()
                  {
                     document.getElementById('signup_error2').style.display='block';
                  var x=getElementById('email').value;
                  var atpos=x.indexOf("@");
                  var dotpos=x.lastIndexOf(".");
                  if (atpos<1 || dotpos<atpos+2 || dotpos+2>=x.length)
                  {
                  alert("Not a valid e-mail address");
                  document.getElementById('signup_error2').style.display='block';
           
                  return false;
                  }
                  }
        
          </script>


              <script type="text/javascript">
            var e = document.getElementById('parent');
            e.onmouseover = function() {
             document.getElementById('popup').style.display = 'block';
                }
                e.onmouseout = function() {
             document.getElementById('popup').style.display = 'none';
                }
   
          </script>

            <div id="popup" style="display: none">
            some text here
          </div>