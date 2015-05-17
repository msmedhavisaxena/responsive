<!doctype html>
<html>
<head>
<meta charset="UTF-8">
<title>Engage</title>
<meta name="viewport" content="width=device-width, initial-scale=1.0">
         <link href="css/style.css" rel="stylesheet">
         <link href="css/responsive.css" rel="stylesheet">
         <link href='http://fonts.googleapis.com/css?family=PT+Sans+Narrow:400,700' rel='stylesheet' type='text/css'>
         <script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.4/js/bootstrap.min.js"></script>
         <script type="text/javascript" src="js/html5.js"></script>
         <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
         
   <script type="text/javascript" src="javascript/jquery.1.9.1.js"></script><!-- javascript/jquery-->
   <!-- <script src="//embed.flowplayer.org/5.5.2/embed.min.js"></script>  from Flowplayer-->
   
<script type="text/javascript" src="js/script.js"></script> <!--for search dropdown menu-->
          <!---types of jquery-
  <script src="javascript/jquery.jcarousel.min.js" type="text/javascript"></script>
  <script src="javascript/jquery.pikachoose.min.js" type="text/javascript"></script>--
		<script type="text/javascript" language="javascript">
        $(document).ready(
				function () {
				    $("#pikame").PikaChoose();<!--#pikame-- from the ul name--
       
				});
    </script>-->
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
         <!-- <li><a href="help.php">Help</a></li>-->
           <li class="button"><a href="about.php">Who we are?</a></li>
         </ul>
        </nav>
       </div>
    </header>
    
   
     <div class="main" id="main-engage"> <!-- banner ads-->
    </div>
    
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
          <!--<form action="#"> -php on find help with zipcode(maybe)-->
                <span class="fa-search"></span>
                   <input type="search" id="findhelpinp" placeholder="Search"/>
          <!--</form>-->
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
     

     <div class="engage">
      <span>Meet the people who have their experience to help and trained the hearing challenged children.</span>
     <ul>
             <li><iframe src="https://www.youtube.com/embed/DRYi69a8Gl8" frameborder="0" allowfullscreen></iframe></li>
             <br><p class="title"><highlight>Dr.Mynders:Audiologist</highlight><br>These Labiodental sounds require the involvement of the teeth and lips. "V" and "F" are pronounced using the upper teeth and lower lip.</p>
             <li><iframe src="https://www.youtube.com/embed/er-LPLjYMyw" allowfullscreen></iframe></li><br>
             <p class="title"><highlight>Dr.Hannah Tannah:Speech Therapist</highlight><br>These sounds are produced with the lips close together or touching: the lips touch at one phase of the production of the bilabial consonants "P","B","M" but  not for the bilabial"W".</p>  
            <li><iframe src="https://www.youtube.com/embed/TiR1e928BSo" allowfullscreen></iframe></iframe></li><br>
             <p class="title"><highlight>Mrs.Anjali Asthana:Parents in Ann Arbor</highlight><br>Alveolar sounds are pronounced with the tip of the tongue close to the alveolar ridge, the part just behind our teeth. N and S are the most common sounds in human languages.Alveolar consonants in English are "T","D","N","L".</p>  
             <li><iframe src="https://www.youtube.com/embed/T5lPx9j3rZg" allowfullscreen></iframe></li><br>
             <p class="title"><highlight>Mrs.Shubra Shrivastava:Teacher for special children</highlight><br>Consonant Digraphs are composed of two letters and together they produce a single sound.</p>  
          </ul>
     </div>
 <!-- <div class="engage"> data-rtmp="rtmp://rtmp.flowplayer.org/cfx/st/" data-ratio="0.5625"Enter the video of the other people-->
  <!--large video--
     <video controls><source type="video/mp4" src="video/Devanshi Saksena.mp4"></video>	<!--try with flowplayer--		
          
  <div class="pikachoose"><!--display on larger gallery[try]--
      <ul id="pikame">
      <li><a href="#"><video controls><source type="video/mp4" src="video/anjali.mp4"></video></a></li>
      <li><a href="#"><video controls><source type="video/mp4" src="video/ananya.mp4"></video></a></li>
      <li><a href="#"><video controls><source type="video/mp4" src="video/amit.mp4"></video></a></li>
      </ul>
            </div>
					</div><!-END OF LARGER GALLERY-->
                      
                    
<!--  <div class="cycle-slideshow"
    data-cycle-fx=scrollHorz
    data-cycle-timeout=0
    data-cycle-prev=#prev
    data-cycle-next=#next
    data-cycle-auto-height="640:360"
    data-cycle-slides=">a"
    data-cycle-youtube=true
    data-cycle-youtube-autostart=true
    >
    <a href="http://www.youtube.com/v/f7AU2Ozu8eo?version=3&hl=en_US&rel=0">Paul Irish</a>
    <a href="http://www.youtube.com/v/seX7jYI96GE?version=3&hl=en_US&rel=0">Alex Russel</a>
</div>
   Try that 
   
   <div class="cycle-slideshow"
    data-cycle-fx=scrollHorz
    data-cycle-timeout=0
    data-cycle-prev=#prev2
    data-cycle-next=#next2
    data-cycle-auto-height="640:360"
    data-cycle-slides=">a,>img"
    data-cycle-youtube=true
    data-cycle-youtube-autostart=false
    >
    <a href="http://www.youtube.com/v/f7AU2Ozu8eo?version=3&hl=en_US&rel=0">Paul Irish</a>
    <a href="http://www.youtube.com/v/seX7jYI96GE?version=3&hl=en_US&rel=0">Alex Russel</a>
    <img src="http://jquery.malsup.com/cycle2/images/p1.jpg">
    <img src="http://jquery.malsup.com/cycle2/images/p2.jpg">
</div> -->    

    
       
    <!-- flowplayer <div class="flowplayer" data-origin="https://flowplayer.org/" data-analytics="UA-27182341-1" data-rtmp="rtmp://s3b78u0kbtx79q.cloudfront.net/cfx/st" style="width: 640px; height: 360px;">
                <video controls>
                <source type="video/mp4" src="http://drive.flowplayer.org/225917/58015-VID20150412WA0044.mp4">
                
                </video>
                </div>-->
             
     </div><!--end of enter video of the other people-->
     
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