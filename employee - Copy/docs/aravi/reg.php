<?php 

if(isset($_POST['btn'])){

header("location:page-login.php");

}


?>
<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- Main CSS-->
    <link rel="stylesheet" type="text/css" href="css/main.css">
    <!-- Font-icon css-->
    <link rel="stylesheet" type="text/css" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <title>Login</title>
  </head>
  <body>
    <section class="material-half-bg">
      <div class="cover"></div>
    </section>
    <section class="login-content">
      <div class="logo">
        <h1>SNACK HACK</h1>
      </div>
      <!-- <div class="login-box"> -->
        <!-- <form class="login-form" action="#" method="post" onsubmit="return validate()">
          <h3 class="login-head"><i class="fa fa-lg fa-fw fa-user"></i>SIGN IN</h3>
          <div class="form-group">
            <label class="control-label">USERNAME</label>
            <input class="form-control" type="text" placeholder="Email" autofocus>
          </div>
          <div class="form-group">
            <label class="control-label">PASSWORD</label>
            <input class="form-control" type="password" placeholder="Password">
          </div>
          <div class="form-group">
            <div class="utility">
              <div class="animated-checkbox">
                <label>
                  <input type="checkbox"><span class="label-text">Stay Signed in</span>
                </label>
              </div>
              <p class="semibold-text mb-2"><a href="#" data-toggle="flip">New User?</a></p>
            </div>
          </div>
          <div class="form-group btn-container">
           <!-- <i class="fa fa-sign-in fa-lg fa-fw"></i> -->
            <!-- <input type="submit" class="btn btn-primary btn-block" name="submit" value="SIGN IN">
          </div>
        </form> --> 
        <container style="background-color: white; height: 1040px;width: 400px;">
      <div style="width: 300px; position: absolute; left: 530px;">
        <form class="forget-form" name="myform" method="post" onsubmit="return validate()">
          <!-- <div class="reg"  data-toggle="flip"> -->
          <h3 class="login-head" style="margin-top: 25px;"><i class="fa fa-lg fa-fw fa-user"></i>User Registration</h3>
          <div style="margin-top: 25px;">
          <div class="form-group">
            <label class="control-label">NAME</label>
            <input class="form-control" type="text"  name="name" pattern="[A-Za-z\s]{1,20}" placeholder="Name">
          </div>
          <div class="form-group">
            <label class="control-label">DOB</label>
            <input class="form-control" type="date" name="dob"  placeholder="enter DOB" >
          </div>
          <div class="form-group">
            <label class="control-label">ADDRESS</label>
            <input class="form-control" type="textarea"  name="address"  placeholder="Address" >
          </div>
          <div class="form-group">
            <label class="control-label">CITY</label>
            <select id="city" name="city" class="form-control" required>
              <option value="select" selected disabled>select</option>    
              <option value="kanjirappally">kanjirappally</option>
              <option value="koovappally">koovappally</option>
              <option value="26">26</option>
              <option value="Mundakayam">Mundakayam</option>
              </select>
          </div>
          <div class="form-group">
            <label class="control-label">DISTRICT</label>
            <select id=" District" name="district" class="form-control"  required>
              <option value="select" selected disabled>select</option>    
              <option value="Wayanad">Wayanad</option>
              <option value="kozhikode">kozhikode</option>
              <option value="kozhikode">kottayam</option>
              </select>
          </div>
          <div class="form-group">
            <label class="control-label">PIN</label>
            <input class="form-control" type="text"  pattern="[0-9]{6}" placeholder="Pin number"  name="pin">
          </div>
          <div class="form-group">
            <label class="control-label">EMAIL</label>
            <input class="form-control" type="email" name="email" placeholder="Email">
          </div>
          <div class="form-group">
            <label class="control-label">PHNO</label>
            <input class="form-control" type="number" placeholder="Phone number" name="phno">
          </div>
          <div class="form-group">
            <label class="control-label">USERNAME</label>
            <input class="form-control" type="text" placeholder="User name" pattern="[A-Za-z\s]{1,20}" name="uname">
          </div>
          <div class="form-group">
            <label class="control-label">PASSWORD</label>
            <input class="form-control" type="password" placeholder="Password" name="pswd">
          </div>
          <div class="form-group">
            <label class="control-label">CONFIRM PASSWORD</label>
            <input class="form-control" type="password" placeholder="Confirm Password" name="cpswd">
          </div>
          <!-- <div class="form-group btn-container">
           
          </div> -->
          <div class="form-group mt-3">
      <button class="btn btn-primary btn-block" name="btn" > REGISTER</button>
      
           <!-- <input type="submit" class="btn btn-primary btn-block" value="REGISTER" > -->
          </div>
        <!-- </div> -->
        </form>
      </div>
      
      </container>
      
    </section>
    
    <!-- Essential javascripts for application to work-->
    <script src="js/jquery-3.2.1.min.js"></script>
    <script src="js/popper.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/main.js"></script>
    <!-- The javascript plugin to display page loading on top-->
    <script src="js/plugins/pace.min.js"></script>
    <script type="text/javascript">
      // Login Page Flipbox control
      $('.login-content [data-toggle="flip"]').click(function() {
      	$('.login-box').toggleClass('flipped');
      	return false;
      });
    </script>
    <script>
      function validate()  
          {  
               if (document.myform.name.value.trim()=="")
                {
                 alert("Please put your name");
                 document.myform.name.focus();
                 return false;
                }
               if (document.myform.dob.value =="" )
                {
                 alert("Please put your  date of birth as MM/DD/YYYY");
                 document.myform.dob.focus();
                 return false;
                }
                if (document.myform.address.value.trim() =="" )
                {
                 alert("Please put your address");
                 document.myform.address.focus();
                 return false;
                }
                if (document.myform.city.value.trim() =="" ||document.myform.city.value =="select"  )
                {
                 alert("Please select  your city");
                 document.myform.city.focus();
                 return false;
                }
                if (document.myform.district.value.trim() =="" ||document.myform.district.value =="select"  )
                {
                 alert("Please select  your district");
                 document.myform.district.focus();
                 return false;
                }
                if (document.myform.pin.value.trim() =="")
                {
                 alert("Please put your pin number");
                 document.myform.pin.focus();
                 return false;
                }
               
                var x=document.myform.email.value;  
                var atposition=x.indexOf("@");  
                var dotposition=x.lastIndexOf(".");  
                if (atposition<1 || dotposition<atposition+2 || dotposition+2>=x.length)
                  {  
                    alert("Please enter a valid e-mail address \n atpostion:"+atposition+"\n dotposition:"+dotposition);  
                    return false;  
                    
                  } 
                  if (document.myform.phno.value.trim()=="")
                 {
                   alert("Please put your phone number");
                   document.myform.phno.focus();
                   return false;
                 } 
                  if (document.myform.phno.value.length < 10 || document.myform.phno.value.length > 10 )
                 {
                   alert("Please put your 10 digit phone number");
                  //  document.myform.phno.focus();
                   return false;
                 }  
                 if (document.myform.uname.value.trim() =="")
                 {
                 alert("Please put your user name");
                 document.myform.uname.focus();
                 return false;
                 }
                if (document.myform.pswd.value.trim() =="" )
                 {
                 alert("Please put your password");
                 document.myform.pswd.focus();
                 return false;
                 }
                 if (document.myform.cpswd.value.trim() =="")
                 {
                 alert("Please put your confirm password");
                 document.myform.cpswd.focus();
                 return false;
                 }
                else if (document.myform.pswd.value != document.myform.cpswd.value )
                 {
                 alert("Please put same password");
                 document.myform.cpswd.focus();
                 return false;
                 }
                else {
                return true;  
                }
          }
    </script>
  </body>
</html>

