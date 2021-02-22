<?php 
session_start();

if (isset($_SESSION['id']) && isset($_SESSION['user_name'])) {

 ?>




<!--doctype html-->
<html>
<head>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE-edge">
<meta name="viewport" content="width=device-width, intial-scale=1.0">
<title>Movie plus</title>
<script src="https://kit.fontawesome.com/c8e4d183c2.js" crossorigin="anonymous"></script>
<link rel="stylesheet" href="styles.css">
<link rel="stylesheet" href="https://unpkg.com/flickity@2/dist/flickity.min.css">
<meta name="google-site-verification" content="jrGiiRmk7f0JSC9hYqEwrkyxIGIuTFK67rrxXMiTMNs" />
	
</head>
<body>

<!--navigation-------------->
    <nav>
        <!--logo--------------->
        <a href="#" class="logo">
            <img src="logo2.gif"width="120" height="60">
        </a>
        <!--menu--btn----------------->
        <input type="checkbox" class="menu-btn" id="menu-btn"/>
        <label class="menu-icon" for="menu-btn">
            <span class="nav-icon"></span>
        </label>
        <!--menu-------------->
        <ul class="menu">
            <li><a href="index.html">Home</a></li>
            <li><a href="about.html">About</a></li>
            <li><a href="contact.html">Contact</a></li>
            <li><a href="construction.html">Movies</a></li>
            <li><a href="construction.html">Tv shows</a></li>
        </ul>
        <!--search------------->
        <div class="search">
            <input type="text" placeholder="Find Your Favourtie Movies"/>
            <!--search-icon----------->
            <i class="fas fa-search"></i>
        </div>
    </nav>


  <pre>




</pre>
  <button onclick="myFunction()">
 Dark mode</button>
 
  <pre>
</pre><center>
     <h4>Hello, <?php echo $_SESSION['name']; ?> ...Welcome to MOVIE PLUS..</h4>
</center>




<div class="movies-heading">
        <h2><marquee >Upcoming Blockbusters..</marquee></h2>
    </div>
<pre>

</pre>
<div class="main-carousel">
<div class="cell"><div class="quality"> SARKARU VAARI PAATA</div><img src="svp.jpg"></div>
<div class="cell"><div class="quality"> KGF2</div><img src="kgf2.jpg"></div>
<div class="cell"><div class="quality"> BLACK WIDOW</div><img src="BW.jpg"></div>
<div class="cell"><div class="quality"> RAADHE SHYAM</div><img src="RS.jpg"></div>
<div class="cell"><div class="quality"> LOVESTORY</div><img src="LS.jpg"></div>
<div class="cell"><div class="quality"> VAKEEL SAAB</div><img src="VS.jpg"></div>
<div class="cell"><div class="quality">RRR</div><img src="rrr.jpg"></div>
<div class="cell"><div class="quality"> PUSPA</div><img src="puspa.jpg"></div>

</div>


<script src="https://code.jquery.com/jquery-3.2.1.min.js"></script>
<script src="https://unpkg.com/flickity@2/dist/flickity.pkgd.min.js"></script>
 
<script>

$(".main-carousel").flickity({
cellAlign: 'left', // when start it left
wrapAound: true,
freeScroll: true
});


</script>


<pre>

</pre>







<hr/>
    <!--movies---------------------------->
    <div class="movies-heading">
        <h2><center>Movies</center></h2>
    </div>
    <section id="movies-list">
        <!--box-1------------------------>
        <div class="movies-box">
            <!--img------------>
            <div class="movies-img">
                <div class="quality">HDRip</div>
                <img src="Tenet_movie.jpg">
            </div>
            <!--text--------->
            <a href="http://www.jiorockerss.pw/files/English%20Movies%20(Hollywood)/English%202020%20Movies/Tenet%20(2020)%20English%20HQ%20DVDScr/Tenet%20English%20HQ%20DVDScr%20Single%20Part/Tenet%20(2020)%20English%20HQ%20DVDScr%20Single%20Part.mp4">
                TENET (2021) Full movie
            </a>
        </div>
         <!--box-2------------------------>
         <div class="movies-box">
            <!--img------------>
            <div class="movies-img">
                <div class="quality">HDRip</div>
                <img src="war poster.jpg">
            </div>
            <!--text--------->
            <a href="https://etcrips.to/?p=22848">
                WAR (2019) Full Movie[In Telugu]  | HDRip 
            </a>
        </div>
         <!--box-3------------------------>
         <div class="movies-box">
            <!--img------------>
            <div class="movies-img">
                <div class="quality">HDRip</div>
                <img src="venom.jpg">
            </div>
            <!--text--------->
            <a href="http://www.naadubmovies.com/files/Telugu%20Dubbed%20Movies/Telugu%202018%20Dubbed%20Movies/Venom%20(2018)%20Telugu%20Original%20HD/Venom%20(2018)%20Telugu%20Dubbed%20Original%20HDRip%20Single%20Part.mp4">
                VENOM (2019) Full Movie[In Telugu] With English Subtitles | HDRip 1080p HD
            </a>
        </div>
         <!--box-4------------------------>
         <div class="movies-box">
            <!--img------------>
            <div class="movies-img">
                <div class="quality">HDRip</div>
                <img src="venky mama.jpg">
            </div>
            <!--text--------->
            <a href="http://www.jiorockers.nl/files/Telugu%20Movies/Telugu%202019%20Movies/Venky%20Mama%20(2019)%20Telugu%20Proper%20HDRip/Venky%20Mama%20Telugu%20Proper%20HDRip%20Single%20Part/Venky%20Mama%20(2019)%20Telugu%20Proper%20HDRip%20Single%20Part.mp4">
                VENKY MAMA (2019) Full Movie[In Telugu]  | HDRip 1080p HD
            </a>
        </div>
         <!--box-5------------------------>
         <div class="movies-box">
            <!--img------------>
            <div class="movies-img">
                <div class="quality">HDRip</div>
                <img src="https://i0.wp.com/www.socialnews.xyz/wp-content/uploads/2020/01/28/Nani-First-Look-Poster-as-Rakshasudu-From-V-Movie-.jpg?w=914&quality=90&zoom=1&ssl=1">
            </div>
            <!--text--------->
            <a href="http://www.jiorockers.ws/files/Telugu%20Movies/Telugu%202020%20Movies/V%20(2020)%20Telugu%20Original%20HDRip/V%20Telugu%20Original%20HDRip%20Single%20Part/V%20(2020)%20Telugu%20Original%20HDRip%20Single%20Part.mp4">
                V the Movie (2020) Full Movie[In Telugu] With English Subtitles | HDRip 1080p HD
            </a>
        </div>
         <!--box-6------------------------>
         <div class="movies-box">
            <!--img------------>
            <div class="movies-img">
                <div class="quality">DVDRip</div>
                <img src="slsb.jpg">
            </div>
            <!--text--------->
            <a href="http://www.jiorockers.nl/files/Telugu%20Movies/Telugu%202020%20Movies/Solo%20Brathuke%20So%20Better%20(2020)%20Telugu%20HQ%20PreDVD/Solo%20Brathuke%20So%20Better%20Telugu%20HQ%20PreDVD%20Single%20Part/Solo%20Brathuke%20So%20Better%20(2020)%20Telugu%20HQ%20PreDVD%20Single%20Part.mp4">
                Solo life Soo Better (2020) Full Movie[In Telugu] With English Subtitles | HDRip 1080p HD
            </a>
        </div>
   
      
    <!--box-9------------------------>
         <div class="movies-box">
            <!--img------------>
            <div class="movies-img">
                <div class="quality">DVDRip</div>
                <img src="aakasame nee hadddu ra.jpg">
            </div>
            <!--text--------->
            <a href="http://www.jiorockers.link/files/Telugu%20Movies/Telugu%202020%20Movies/Aakaasam%20Nee%20Haddhu%20Ra%20(2020)%20Telugu%20Original%20HDRip/Aakaasam%20Nee%20Haddhu%20Ra%20Telugu%20Original%20HDRip%20Single%20Part/Aakaasam%20Nee%20Haddhu%20Ra%20(2020)%20Telugu%20Original%20HDRip%20Single%20Part.mp4">
                Aakasame Nee haddu ra (2020) Full Movie[In Telugu] With English Subtitles | HDRip 1080p HD
            </a>
        </div>
    <!--box-10------------------------>
         <div class="movies-box">
            <!--img------------>
            <div class="movies-img">
                <div class="quality">DVDRip</div>
                <img src="alita.jpg">
            </div>
            <!--text--------->
            <a href="http://www.naadubmovies.com/files/Telugu%20Dubbed%20Movies/Telugu%202019%20Dubbed%20Movies/Alita%20Battle%20Angel%20(2019)%20Telugu%20HDRip%20(Original%20Audio)/Alita%20Battle%20Angel%20(2019)%20Telugu%20HDRip%20Single%20Part%20(Original%20Audio).mp4">
                Alita Battle angel (2019) Full Movie[In Telugu] With English Subtitles | HDRip 1080p HD
            </a>
        </div>
	      <!--box-11------------------------>
         <div class="movies-box">
            <!--img------------>
            <div class="movies-img">
                <div class="quality">DvdRip</div>
                <img src="krack.jpg">
            </div>
            <!--text--------->
            <a href="http://www.jiorockers.nl/files/Telugu%20Movies/Telugu%202021%20Movies/Krack%20(2021)%20Telugu%20HQ%20PreDVD%20-%20TBL/Krack%20Telugu%20HQ%20PreDVD%20Single%20Part/Krack%20(2021)%20Telugu%20HQ%20PreDVD%20Single%20Part.mp4">
                Krack (2021) Full Movie[In Telugu]  | HDRip 720p HD
            </a>
        </div>
	    
	          <!--box-12------------------------>
         <div class="movies-box">
            <!--img------------>
            <div class="movies-img">
                <div class="quality">DvdRip</div>
                <img src="master.jpeg">
            </div>
            <!--text--------->
            <a href="http://www.jiorockers.site/files/Telugu%20Movies/Telugu%202021%20Movies/Master%20(2021)%20Telugu%20Proper%20HQ%20PreDVD/Master%20Telugu%20Proper%20HQ%20PreDVD%20Single%20Part/Master%20(2021)%20Telugu%20Proper%20HQ%20PreDVD%20Single%20Part.mp4
">
                Master (2021) Full Movie[In Telugu]  | HDRip 720p HD
            </a>
        </div>
	           <!--box-13------------------------>
         <div class="movies-box">
            <!--img------------>
            <div class="movies-img">
                <div class="quality">DvdRip</div>
                <img src="Red.jpg">
            </div>
            <!--text--------->
            <a href="http://www.jiorockers.site/files/Telugu%20Movies/Telugu%202021%20Movies/Red%20(2021)%20Telugu%20HQ%20PreDVD/Red%20Telugu%20HQ%20PreDVD%20Single%20Part/Red%20(2021)%20Telugu%20HQ%20PreDVD%20Single%20Part.mp4

">
                Red (2021) Full Movie[In Telugu]  | HDRip 720p HD
            </a>
        </div>
	      
	   	           <!--box-14------------------------>
         <div class="movies-box">
            <!--img------------>
            <div class="movies-img">
                <div class="quality">DvdRip</div>
                <img src="alludu adhurs.jpg">
            </div>
            <!--text--------->
            <a href="http://www.jiorockers.site/files/Telugu%20Movies/Telugu%202021%20Movies/Alludu%20Adhurs%20(2021)%20Telugu%20HQ%20PreDVD/Alludu%20Adhurs%20Telugu%20HQ%20PreDVD%20Single%20Part/Alludu%20Adhurs%20(2021)%20Telugu%20HQ%20PreDVD%20Single%20Part.mp4
">
                Alludu Adhurs (2021) Full Movie[In Telugu]  | HDRip 720p HD
            </a>
        </div>
	      
	       	           <!--box-15------------------------>
         <div class="movies-box">
            <!--img------------>
            <div class="movies-img">
                <div class="quality">DvdRip</div>
                <img src="Bangaru bullodu.jpg">
            </div>
            <!--text--------->
            <a href="http://www.jiorockers.site/files/Telugu%20Movies/Telugu%202021%20Movies/Bangaru%20Bullodu%20(2021)%20Telugu%20HQ%20PreDVD/Bangaru%20Bullodu%20Telugu%20HQ%20PreDVD%20Single%20Part/Bangaru%20Bullodu%20(2021)%20Telugu%20HQ%20PreDVD%20Single%20Part.mp4
">
                Bangaru Bullodu (2021) Full Movie[In Telugu]  | HDRip 720p HD
            </a>
        </div>
	    	       	           <!--box-16------------------------>
         <div class="movies-box">
            <!--img------------>
            <div class="movies-img">
                <div class="quality">DvdRip</div>
                <img src="color-photo.jpg">
            </div>
            <!--text--------->
            <a href="http://www.jiorockers.site/files/Telugu%20Movies/Telugu%202020%20Movies/Colour%20Photo%20(2020)%20Telugu%20Original%20HDRip/Colour%20Photo%20Telugu%20Original%20HDRip%20Single%20Part/Colour%20Photo%20(2020)%20Telugu%20Original%20HDRip%20Single%20Part.mp4
		     ">
                Color photo (2021) Full Movie[In Telugu]  | HDRip 720p HD
            </a>
        </div>
	        	       	           <!--box-17------------------------>
         <div class="movies-box">
            <!--img------------>
            <div class="movies-img">
                <div class="quality">DvdRip</div>
                <img src="30 days.jpeg">
            </div>
            <!--text--------->
            <a href="http://www.jiorockers.site/files/Telugu%20Movies/Telugu%202021%20Movies/30%20Rojullo%20Preminchadam%20Ela%20(2021)%20Telugu%20Proper%20PreDVD/30%20Rojullo%20Preminchadam%20Ela%20Telugu%20Proper%20PreDVD%20Single%20Part/30%20Rojullo%20Preminchadam%20Ela%20(2021)%20Telugu%20Proper%20PreDVD%20Single%20Part.mp4
		     ">
                30 Rojullo preminchadam ala.. (2021) Full Movie[In Telugu]  | HDRip 720p HD
            </a>
        </div>
	            	       	           <!--box-18------------------------>
         <div class="movies-box">
            <!--img------------>
            <div class="movies-img">
                <div class="quality">DvdRip</div>
                <img src="zr.jpeg">
            </div>
            <!--text--------->
            <a href="http://www.jiorockers.site/files/Telugu%20Movies/Telugu%202021%20Movies/Zombie%20Reddy%20(2021)%20Telugu%20HQ%20PreDVD/Zombie%20Reddy%20Telugu%20HQ%20PreDVD%20Single%20Part/Zombie%20Reddy%20(2021)%20Telugu%20HQ%20PreDVD%20Single%20Part.mp4">
                Zombie Reddy.. (2021) Full Movie[In Telugu]  | HDRip 720p HD
            </a>
        </div>
	                	       	           <!--box-19------------------------>
         <div class="movies-box">
            <!--img------------>
            <div class="movies-img">
                <div class="quality">DvdRip</div>
                <img src="scary stories tells in dark.jpg">
            </div>
            <!--text--------->
            <a href="https://gofile.io/d/g1nmYM">
                Scary Stories Tells in Dark.. (2019) Full Movie[In Telugu]  | HDRip 720p HD
            </a>
        </div>
	    
	                    	       	           <!--box-20------------------------>
         <div class="movies-box">
            <!--img------------>
            <div class="movies-img">
                <div class="quality">DvdRip</div>
                <img src="uppena.jpg">
            </div>
            <!--text--------->
            <a href="https://drive.google.com/file/d/1NO26v-5gfy2UONqXVVNfJ9l16y2MrMFb/view?usp=drivesdk
		     ">
                Uppena (2021) Full Movie[In Telugu]  | HDRip 720p HD
            </a>
        </div>
	    
	                        	       	           <!--box-21------------------------>
         <div class="movies-box">
            <!--img------------>
            <div class="movies-img">
                <div class="quality">DvdRip</div>
                <img src="live.jpg">
            </div>
            <!--text--------->
            <a href="https://files.im/snxlo6a1gmjy
		     ">
                Live telecast (2021) Full Movie[In Telugu]  | HDRip 720p HD
            </a>
        </div>
	    
	    
	    
	    
	  
	      
	    
	    
	    
	    
	    
	    
    </section>
<!--btns--------------->
    <div class="btns">
        <a href="#">Previous</a>
        <a href="movies page2.html">Next</a>
    </div>

<script>
function myFunction() {
   var element = document.body;
   element.classList.toggle("dark-mode");
}
</script>
<center>
<button ><a href="logout.php"><h3>Logout</h3></a> </button>
</center>
    <!--footer------------------>
    <footer>
        <p>Site by Akhil kumar</p>
        <p>Copyright 2021 - By AkhilMovies</p>
    </footer>
</body>
</html>
<?php 
}else{
     header("Location: index.php");
     exit();
}
 ?>