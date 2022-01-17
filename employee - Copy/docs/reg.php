
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
    <title>Registration</title>
    
  </head>
  <body>
    <section class="material-half-bg">
      <div class="cover"></div>
    </section>
    <section class="login-content">
      <div class="logo">
        <h1>SNACK HACK</h1>
      </div>
    
        <container style="background-color: white; height: 1270px;width: 400px;">
      <div style="width: 300px; position: absolute; left: 530px;">
        <form class="forget-form" name="myform" method="post" onsubmit="return validate()" enctype="multipart/form-data">
          <!-- <div class="reg"  data-toggle="flip"> -->
          <h3 class="login-head" style="margin-top: 25px;"><i class="fa fa-lg fa-fw fa-user"></i>User Registration</h3>
          <div style="margin-top: 25px;">
          <div class="form-group">
            <label class="control-label">NAME</label>
            <input class="form-control" type="text"  name="name" pattern="[A-Za-z\s]{1,20}" placeholder="Name" autocomplete ="off">
            
          </div>
          <div class="form-check">
            <label class="control-label">GENDER</label><br>

            <input type="radio" class="form-check-input" id="gen"  name="gender" value="male"> Male <br>
            <input type="radio"  class="form-check-input" id="gen"  name="gender" value="female"> Female
            
          </div>
          <div class="form-group">
            <label class="control-label">DOB</label>
            <input class="form-control" type="date" name="dob"  placeholder="enter DOB">
           
          </div>
          <div class="form-group">
            <label class="control-label">IMAGE</label>
            <input class="form-control" type="file" name="file"  placeholder="enter image">
           
          </div>

          <div class="form-group">
            <label class="control-label">ADDRESS</label>
            <input class="form-control" type="textarea"  name="address"  placeholder="Address" autocomplete ="off">
            
          </div>
          
          <div class="form-group">
            <label class="control-label">DISTRICT</label>
            <select id="district-dropdown" name="district" class="form-control">
            <option value="">Select district</option>
              <?php
              require_once "db.php";
              $result = mysqli_query($conn,"SELECT * FROM district");
              while($row = mysqli_fetch_array($result)) {
              ?>
              <option value="<?php echo $row['id'];?>"><?php echo $row["name"];?></option>
              <?php
              }
              ?>
            </select>
            
          </div>
          <div class="form-group">
            <label class="control-label">CITY</label>
            <select id="city-dropdown" name="city" class="form-control">  
            
              </select>
          </div>
          <div class="form-group">
            <label class="control-label">PIN</label>
            <input class="form-control" type="text"  pattern="[0-9]{6}" placeholder="Pin number"  name="pin" autocomplete ="off">
            
          </div>
          <div class="form-group">
            <label class="control-label">EMAIL</label>
            <input class="form-control" type="email" name="email" placeholder="Email" autocomplete ="off">
           
          </div>
          <div class="form-group">
            <label class="control-label">PHNO</label>
            <input class="form-control" type="number" placeholder="Phone number" name="phno" autocomplete ="off">
            
          </div>
          <div class="form-group">
            <label class="control-label">USERNAME</label>
            <input class="form-control" type="text" placeholder="User name" name="uname" autocomplete ="off">
            
          </div>
          <div class="form-group">
            <label class="control-label">PASSWORD</label>
            <input class="form-control" type="password" placeholder="Password" name="pswd" autocomplete ="off">
          </div>
          <div class="form-group">
            <label class="control-label">CONFIRM PASSWORD</label>
            <input class="form-control" type="password" placeholder="Confirm Password" name="cpswd" autocomplete ="off">
          </div>
          <div class="form-group">
            <label class="control-label">ROLE</label>
            <select id="role" name="role" class="form-control" required>
              <option value="select" selected disabled>select</option> 
              <option value="kitchen boy">KITCHEN BOY</option>
              <option value="receptionist">RECEPTIONIST</option>
              </select>
          </div>
          <!-- <div class="form-group btn-container">
           
          </div> -->
          <div class="form-group mt-3">
      <input type="submit" class="btn btn-primary btn-block" name="btn"  value="Sumit">
      
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
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script>
      function validate()  
          {  
               if (document.myform.name.value.trim()=="")
                {
                 alert("Please put your name");
                 document.myform.name.focus();
                 return false;
                }
                // if (document.myform.name.value.trim()== false)
                // {
                //  alert("Please put your gender");
                //  document.myform.gender.focus();
                //  return false;
                // }
               if (document.myform.dob.value =="" )
                {
                 alert("Please put your  date of birth as MM/DD/YYYY");
                 document.myform.dob.focus();
                 return false;
                }
                if (document.myform.file.value =="" )
                {
                 alert("Please put your  image");
                 document.myform.file.focus();
                 return false;
                }
                if (document.myform.address.value.trim() =="" )
                {
                 alert("Please put your address");
                 document.myform.address.focus();
                 return false;
                }
               
                if (document.myform.district.value.trim() =="" ||document.myform.district.value =="select"  )
                {
                 alert("Please select  your district");
                 document.myform.district.focus();
                 return false;
                }
                if (document.myform.city.value.trim() =="" ||document.myform.city.value =="select"  )
                {
                 alert("Please select  your city");
                 document.myform.city.focus();
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
                 if (document.myform.role.value.trim() =="" ||document.myform.role.value =="select"  )
                {
                 alert("Please select  your role");
                 document.myform.district.focus();
                 return false;
                }
                else {
                return true;  
                }
          }
    </script>
    <script>
   $(document).ready(function() {
$('#district-dropdown').on('change', function() {
var state_id = this.value;
$.ajax({
url: "cities-by-district.php",
type: "POST",
data: {
    d_id: state_id    //d_id is the foreignkey of city table
},
cache: false,
success: function(result){
$("#city-dropdown").html(result);

}
});
});    

});
    </script>
  </body>
</html>
<?php

if(isset($_POST['btn']))
{
  $name=$_POST['name'];
  $gender=$_POST['gender'];
  $dob=$_POST['dob'];

  $image=basename($_FILES["file"]["name"]);
  $targetDir="image/";
  $targetFilePath=$targetDir.$image;
  move_uploaded_file($_FILES["file"]["tmp_name"],$targetFilePath);

  $address=$_POST['address'];
  $district=$_POST['district'];
  $city=$_POST['city'];
  $pin=$_POST['pin'];
  $email=$_POST['email'];
  $phno=$_POST['phno'];
  $uname=$_POST['uname'];
  $pswd=$_POST['pswd'];
  $role=$_POST['role'];
   $sq="INSERT INTO `login_tb`(`username`, `password`, `role`, `status`) VALUES ('$uname','$pswd','$role',1)";
   mysqli_query($conn, $sq);
   $roleID=mysqli_insert_id($conn);
   $reg="INSERT INTO `registraion_tb`(`Lg_id`, `name`, `gender`, `dob`,`image`,`address`, `district_id`, `city_id`, `pin`, `email`, `phno`) VALUES ('$roleID','$name','$gender','$dob','$image','$address','$district','$city','$pin','$email','$phno')";
   mysqli_query($conn,$reg); 
   echo "<script>location='page-login.php'</script>";
}
?>

