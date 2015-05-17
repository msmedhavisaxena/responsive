<!DOCTYPE html>
<html>
  <head> 
    <title>Elocute</title>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
         <link href="css/style.css" rel="stylesheet" />
         <link href="css/responsive.css" rel="stylesheet"/>
         <link href='http://fonts.googleapis.com/css?family=PT+Sans+Narrow:400,700' rel='stylesheet' type='text/css'/>
<!--	 <script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.4/js/bootstrap.min.js"></script>-->
         <script type="text/javascript" src="js/html5.js"></script>
         <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
		 <script type="text/javascript" src="js/script.js"></script><!--dropdown menu search-->
	<!--	 <script type="text/javascript" src="js/jquery.cycle2.video.js"></script> -thats for video loopshow-->
    <!--[if (lt IE 9)&(!IEMobile)]>
<link rel="stylesheet" type="text/css" href="responsive.css" />
<![endif]-->
  </head>
  
  <body>
  
  <header>
   <div id="logo">
   <a href="index.php"><figure><img src="image/logo.png" alt="ngo"></figure>
   </div>
   
    <div class="log"> <!-- login form-/sign up form-->
       <nav>
         <ul>
           <li><a href="login.php">Login</a></li>
     <!--  <li><a href="help.php">Help</a></li>-->
           <li class="button"><a href="about.php">Who we are?</a></li>
         </ul>
         </nav>
       </div>
    </header>
    
  
  <!--   <div class="main" id="main-index">  banner ads-->
  <div class="main" id="main-index"> <!-- banner ads-->
  
     <div class="innerbg"></div>
     
    <div class="words" style="background-repeat:no-repeat !important; background-size:100% auto !important; background-position:left top !important;">
    
    <!--Begin of Words-->
    <span id="speak">SPEAK</span><br>
    <span id="vision">let your vision guide your voice</span><br>
    <span id="signup"><a href="signup.php">Sign Up Today</a></span>
    </div> <!--End of words-->
    </div><!--End of Banner Ads-->
    
    <div class="nav-bar"><!--navigation bar-->
    
          <div class="link"><!--navigation links-->
               <ul>
                   <li><a href="hear1.php">Hear</a></li>
                   <li><a href="observe.php">Observe</a></li>
                   <li><a href="pronounce.php">Pronounce</a></li>
                   <li><a href="engage.php">Engage</a></li>
               </ul>
           </div> <!--end of navigation links-->
               
         <div class="helpright"> <!--find help-->
            <div class="search"><!-- Search-->
          <!--   <form action="#"> -php on find help with zipcode(maybe)-->
                <span class="fa-search"></span>
                   <input type="search" id="findhelpinp" placeholder="Search">
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
     
     <div class="container">
     
          <div class="leftcol"> <!--video-training-->
         <ul>
           <li><a href="hear.php"><img src="image/hearbtn.jpg"/></a></li>
           <li><a href="pronounce.php"><img src="image/pronouncevideo.jpg"/></a></li>
         </div>
         
         <div class="rightcol"><!--jquery loopshow-->
         <iframe src="https://www.youtube.com/embed/gWzecxrzst0" frameborder="0" allowfullscreen></iframe>
            <!-- put the video-->
         </div>
      
     </div> 
     
  <!--   <div class="community">creating the button for Join the community--
     <span>Join the Community</span>
     </div><!--end of creating the buttom for Join the community-->
     
     
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
  <script type="text/javascript">
 var images = [
  "image/ads.jpg",
  "image/ads-1.jpg",
  "image/ads-2.jpg",
  "image/ads-3.jpg",
  "image/ads-4.jpg",
  "image/ads-5.jpg"
];
var $body = $("#main-index"),
    $bg = $(".innerbg"),
    n = images.length,
    c = 0; // Loop Counter

// Preload Array of images...
for(var i=0; i<n; i++){
  var tImg = new Image();
  tImg.src = images[i];
}

$body.css({backgroundImage : "url("+images[c]+")"}); 

(function loopBg(){
  $bg.hide().css({backgroundImage : "url("+images[++c%n]+")"}).delay(2000).fadeTo(1200, 1, function(){
    $body.css({backgroundImage : "url("+images[c%n]+")"}); 
    loopBg();
  });
}());
 </script>  

</body>
</html>   
           
           
      