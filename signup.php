<!doctype html>
<html>
<head>
<meta charset="UTF-8">

<title>Sign Up</title>
<meta name="viewport" content="width=device-width, initial-scale=1.0">
         <link href="css/style.css" rel="stylesheet">
         <link href="css/responsive.css" rel="stylesheet">
         <link href='http://fonts.googleapis.com/css?family=PT+Sans+Narrow:400,700' rel='stylesheet' type='text/css'>
         <script type="text/javascript" src="js/html5.js"></script>
         <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
 <!--   <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.2.0/css/bootstrap.min.css">-->

</head>

<body>

<?php 
if(isset($_POST['action']))  {
echo "working version of signup";

include('db.php');

if(!$connection)
{
	die('Could not connect:'.mysql_error());
}


	//echo "action occured";
	
  $fullname= mysqli_real_escape_string($connection,$_POST['fullname']);
  $email= mysqli_real_escape_string($connection,$_POST['email']);
  $password= mysqli_real_escape_string($connection,$_POST['password']);
  $experience= mysqli_real_escape_string($connection,$_POST['experience']);
  
  $query="SELECT 'email' FROM `elocute2`.`useruser` WHERE 'email='$email'";
  // echo "query=".$query;
  $result=mysqli_query($connection,$query);
  //echo "result=".$result;
  if($result){
  $numResults=$mysqli_num_rows($result);
  } else {
	$numResults = 0;  
  }
  
  // echo "numResults=".$numResults;
  
  if(!filter_var($email,FILTER_VALIDATE_EMAIL)){
	  $message="Invalid email address please type a valid email!!";
  } else if ($numResults>=1){
	  $message=$email."Email already exist!";
  } else {
	  
  //INSERT INTO 'Elocute'.'user'('email','password') VALUES('msmedhavisaxena@gmail.com', 'helloWorld');
  
  $sql = "INSERT INTO `elocute2`.`useruser`(`fullname`,`email`,`password`,`experience`) 
  VALUES (\"$fullname\",\"$email\",\"$password\",\"$experience\")";
  
  //echo "inserted";
  $retval=mysqli_query($connection,$sql);
  
  if($retval){
	  // this means that our database query was successful!
	  // now redirect them to the Home Page
	  echo ('<div class="message">'); // create a box sayin you have sign in Successfully!!
	 
	  print_r("<script type='text/javascript'>window.location = '/elocute-medhavi1/index.php'</script>");
	  	//header("Location: /index.php"); /* Redirect browser */	
	  //$message="Signup Successfully!! Go to <a href=\"index.php\">login</a>";
	  
  } else {
	  /*$message="Signup Failed!! Please try again.";*/
	  die('Could not enter data:'.mysql_error());
  }
  }}
  //echo "$message";
//mysqli_close($connection);
?>


   <div id="lightbox">
  <p><a href="index.php" title="Click to close">X</a></p>
 <div class="wrap">
       
        <div class="signup">
        <h2>Sign Up with Email<img src="image/email.png"/></h2>
        
  <form class="signup-form" action="" method="POST">
  <?php echo $message;?>
  <input type="name" id="name" name="fullname" placeholder="Full Name" autocomplete="off"/>
  <input type="emailid" id="emailaddress" name="email" placeholder="@ Email Address"/>
  <input type="password" id="password" name="password" placeholder="Password" required maxlength="100"/>
      <!--    <input type="password" id="confirmpassword" placeholder="Confirm Password"/>-->
  <textarea type="text" id="experience" name="experience" placeholder="Share your experience" rows="8"  columns="18"></textarea>
  <input type="submit" id="submit" name="action" value="Sign Up"/>
  
  <!--<button type="submit" id="submit" name="action" value="Sign Up">Sign Up</button>-->
 </form>
        </div>
</div>
</div><!--.wrap-->
 

</body>
</html>
