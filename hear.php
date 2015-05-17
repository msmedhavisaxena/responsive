<!doctype html>
<html>
<head>
<meta charset="UTF-8">
<title>Hear</title>
<meta name="viewport" content="width=device-width, initial-scale=1.0">
         <link href="css/style.css" rel="stylesheet">
         <link href="css/responsive.css" rel="stylesheet">
         <link href='http://fonts.googleapis.com/css?family=PT+Sans+Narrow:400,700' rel='stylesheet' type='text/css'>
         <script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.4/js/bootstrap.min.js"></script>
         <script type="text/javascript" src="js/html5.js"></script>
         <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
         <script type="text/javascript" src="js/jquery.cycle2.js"></script>
         <script type="text/javascript" src="js/script.js"></script> <!--for search dropdown menu-->
   <script>      
         $('#right').cycle({ 
    fx:      'scrollRight', 
    next:   '#right', 
    timeout:  0, 
    easing:  'easeInOutBack' 
});
</script>
  </head>
  
  <body>
  
  <header>
  
   <div id="logo">
   <a href="index.php"><figure><img src="image/logo.png" alt="ngo"></figure>
   </div>
   
    <div class="log"> <!-- login form-/sign up form-->
       <nav>
           <ul>
           <li><a href="index.php">Log out</a></li>
<!--       <li><a href="help.php">Help</a></li>-->
           <li class="button"><a href="about.php">Who we are?</a></li>
         </ul>
         </nav>
       </div>
    </header>
    
    <div class="main" id="main-hear"> <!-- banner ads-->
    <div class="words">
    <span>Become a better</span><br>
    <span id="listen">Listener</span>
    </div>
    </div>
    
    <div class="nav-bar"><!--narvigation bar-->
    
          <div class="link"><!--navigation links-->
               <ul>
                   <li><a href="hear.php">Hear</a></li>
                   <li><a href="observe.php">Observe</a></li>
                   <li><a href="pronounce.php">Pronounce</a></li>
                   <li><a href="engage.php">Engage</a></li>
               </ul>
           </div> <!--end of navigation links-->
               
         <div class="helpright"> <!--find help-->
            <div class="search"><!-- Search-->
          <!--   <form action="#"> -php on find help with zipcode(maybe)-->
                <span class="fa-search"></span>
                   <input type="search" id="findhelpinp" placeholder="Search"/>
          <!--  </form>-->
             <div class="searchdropdown">
					<ul>
						<li><a href="audiologists.php">Audiologists</a></li>
						<li><a href="speech-therapist.php">Speech Therapist</a></li>
						<li><a href="special-schools.php">Special Schools</a></li>
					</ul>
            </div><!--end of searchdropdown menu-->
           </div><!--end of Search-->
          </div><!-- end of find help-->
     </div> <!--end of navigation bar-->
     
     <div class="hear"><!-- begin of Hear project-->
       <ul>
          <li><img src="image/truck.png" alt="#"/><audio controls>
  <source src="mp4ogg/truck.ogg" type="audio/ogg">
  <source src="mp4ogg/truck.mp4" type="audio/mpeg"></audio></li>
          <li><img src="image/bike.png" alt="#"/><audio controls>
  <source src="mp4ogg/bike.ogg" type="audio/ogg">
  <source src="mp4ogg/bike.mp4" type="audio/mpeg"></audio></li>
          <li><img src="image/helicopter.png" alt="#"/><audio controls>
  <source src="mp4ogg/helicopter.ogg" type="audio/ogg">
  <source src="mp4ogg/helicopter.mp4" type="audio/mpeg"></audio></li>
          <li><img src="image/car.png" alt="#"/><audio controls>
  <source src="mp4ogg/car.ogg" type="audio/ogg">
  <source src="mp4ogg/car.mp3" type="audio/mpeg"></audio></li>
          <li><img src="image/ambulance.png" alt="#"/><audio controls>
  <source src="mp4ogg/ambulance.ogg" type="audio/ogg">
  <source src="mp4ogg/ambulance.mp4" type="audio/mpeg"></audio></li>
          <li><img src="image/firemen.png" alt="#"/><audio controls>
  <source src="mp4ogg/firemen.ogg" type="audio/ogg">
  <source src="mp4ogg/firemen.mp4" type="audio/mpeg"></audio></li>
  </ul>
    </div> 
     
     
        <div id="footer"> <!--begin of footer-->
        <div class="leftbox"><!--what is elocute?-->
        <p><b>Elocute</b> means to<b>"SPEAK"</b>.  It is an act and expression.  It also means to have a pleasant tone and sound, good audible pitch, clarity of sound and words.  It should be sensible and intelligible.  Its a project for the "World of hearing challenged".  <a href="#">(Learn More)</a></p>
        </div> <!--end of Content--what is elocute?-->
  
      <div class="rightbox"><!--  begin of the rightfooter-->
     
        <div class="social"><!--social media icons-->
            <ul>
              <li><a href="https://twitter.com/med_1986"><img src="image/twitter.png"/></a></li>
              <li><a href="http://www.facebook.com/medhavi.saxena.1"><img src="image/fb.png"/></a></li>
              <li><a href="#"><img src="image/rss.png"/></a></li>
              <li><a href="#"><img src="image/google.png"/></a></li>
            </ul>
          </div>   <!--end of social media icons-->  
          
           <div class="line"><img src="image/line.png"/></div>
           
           <div class="courtesy"><!--about, privacy, contact-->
             <ul>
               <li><a href="about.php">About</a></li>
               <li><a href="privacy.php">Privacy</a></li>
               <li><a href="contact.php">Contact</a></li>
             </ul>
              <span>&copy;Copyright 2015 Elocute, Inc. All Rights Reserved. </span>
           </div> <!-- end of about, privacy, contact-->
     </div><!--  end of rightfooter-->
       
  </div> <!--end of footer-->   
     
     <div class="clear"></div>
</body>
</html>   