<!DOCTYPE html>
<html>
  <head> 
    <title>Elocute</title>
    <meta name="viewport" content="wdth=device-width, initial-scale=1.0">
         <link href="css/style.css" rel="stylesheet">
         <link href='http://fonts.googleapis.com/css?family=PT+Sans+Narrow:400,700' rel='stylesheet' type='text/css'>
         <script type="text/javascript" src="js/html5.js"></script>
         <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
		 <script type="text/javascript" src="js/script.js"></script>
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
    
  
     <div class="main" id="main-index" style="background-repeat:no-repeat !important; background-size:100% auto !important; background-position:left top !important; position:relative;"> <!-- banner ads-->
	 <div class="innerbg" style="position:absolute; width:100%; height:100%; background-repeat:no-repeat !important; background-size:100% auto !important; background-position:left top !important;"></div>
    <div class="words" style="background-repeat:no-repeat !important; background-size:100% auto !important; background-position:left top !important;"><!--Begin of Words-->
    <span id="speak">SPEAK</span><br>
    <span id="vision">let your vision guide your voice</span><br>
    <span id="signup"><a href="signup.php">Sign Up Today</a></span>
    </div> <!--End of words-->
    </div><!--End of Banner Ads-->
    
    <div class="nav-bar"><!--navigation bar-->
    
          <div class="link"><!--navigation links-->
               <ul>
                   <li><a href="hear.php">Hear</a></li>
                   <li><a href="observe.php">Observe</a></li>
                   <li><a href="pronounce.php">Pronounce</a></li>
                   <li><a href="engage.php">Engage</a></li>
               </ul>
           </div> <!--end of navigation links-->
               
         <div class="helpright"> <!--find help-->
            <div class="search">
                <span class="fa-search"></span>
                   <input type="search" id="findhelpinp" placeholder="Find Help"/>
				   <div class="searchdropdown">
					<ul>
						<li><a href="audiologists.php">Audiologists</a></li>
						<li><a href="speech-therapist.php">Speech Therapist</a></li>
						<li><a href="special-schools.php">Special Schools</a></li>
					</ul>
				   </div>
            </div>
          </div><!-- end of find help-->
     </div> <!--end of navigation bar-->
     
     <div class="container">
     
         <div class="leftcol"> <!--video-training-->
           <img src="image/videotrain.jpg"/> <br>
           <img src="image/pronouncevideo.jpg"/>
         </div>
         
         <div class="rightcol"><!--jquery loopshow-->
            <img src="image/jqueryloop.jpg"/> <!-- put the video-->
         </div>
      
     </div> 
     
     <div class="community"><!--creating the button for Join the community-->
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
  "image/ads.jpeg",
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