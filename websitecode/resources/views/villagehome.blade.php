<!DOCTYPE html>
<head>
<meta charset="utf-8">
	<meta http-equiv="X-UA-compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width,initial-scale=1">
	<title>E-Gram</title>
	<link rel="stylesheet" type="text/css" href="{{asset('css/bootstrap.min.css')}}">
	<link rel="stylesheet" type="text/css" href="{{asset('css/styles.css') }}">
    <link href="https://fonts.googleapis.com/css2?family=Gentium+Basic:ital@1&display=swap" rel="stylesheet">
	<link href="https://fonts.googleapis.com/css2?family=Lora&display=swap" rel="stylesheet">
</head>
<body>
	<button onclick="topFunction()" id="myBtn"  title="Go to top">&#8593;</button>

	<header>
		<div class="container-fluid" id="nav-top">
			<section class="row">
				<div class="col-xs-3">
					<img src="{{asset('images/gram-logo.png')}}" alt="logo" class="img-fluid" id="img1">
				</div>
				<div class="col-xs-6">
					<p>Welcome To <span id="villagename"></span></p>
				</div>
				<div class="col-xs-3">
					<img src="{{asset('images/gram-logo.png')}}" alt="logo" class="img-fluid" id="img2">
					
				</div>
			</section>
		</div>
		<div class="navbar">
<ul id="nav-list">
<li><span class="nav-btn active nav-village" id="vilhome-btn" onclick="openvillagehome()">Home</span></li> 
  <li><span class="nav-btn nav-village" id="vilabout-btn" onclick="openvillageabout()">About Us</span></li> 
  <li><span class="nav-btn nav-village" id="egram-btn" onclick="openvillagegram()">E-Gram</span></li> 
  <li><span class="nav-btn nav-village" id="ekrushi-btn" onclick="openvillagekrushi()">E-Krushi</span></li>
  <li><span class="nav-btn nav-village" id="eschool-btn" onclick="openvillageschool()">E-School</span></li>
  <li><span class="nav-btn nav-village" id="vilhelp-btn" onclick="openvillagehelp()">Help</span></li>
</ul>
</div>
<div id="google_translate_element" class="well"><span id="trans-cont">To Change Content Language</span></div>
	</header>
<section id="vilagehome_content">
	<!--start of slider banner-->
	<div class="container-fluid" id="effect">
		<div id="myCarousel" class="carousel slide" data-ride="carousel">
    <!-- Indicators -->
    <ol class="carousel-indicators">
      <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
      <li data-target="#myCarousel" data-slide-to="1"></li>
      <li data-target="#myCarousel" data-slide-to="2"></li>
    </ol>

    <!-- Wrapper for slides -->
    <div class="carousel-inner" role="listbox">
      <div class="item active">
        <img src="{{asset('images/e-school.png')}}" alt="slide1" width=100% height=auto class="img-fluid">  
        <div class="carousel-caption">
          <span>E-School</span>
          
        </div>
    </div>

      <div class="item">
        <img src="{{asset('images/e-krushi.png')}}"  alt="slide2" width=100% height=auto  class="img-fluid">   
         <div class="carousel-caption">
         <span>E-Krushi</span>
         
        </div> 
      </div>
    
      <div class="item">
        <img src="{{asset('images/e-gram.png')}}" alt="slide3" width=100% height=auto class="img-fluid">  
         <div class="carousel-caption">
         <span>E-Gram</span>
         
        </div> 
      </div>
   </div>
    <!-- Left and right controls -->
    <a class="left carousel-control" href="#myCarousel" role="button" data-slide="prev">
      
      <span class="sr-only">Previous</span>
    </a>
    <a class="right carousel-control" href="#myCarousel" role="button" data-slide="next">
     
      <span class="sr-only">Next</span>
    </a>
    </div>
	 </div>
	<!--end of slider banner-->
	<!--start of home content-->
	<div class="container-fluid" id="parts">
		<section class="row">
			<div class="col-xs-2 well" id="part1">
				
			</div>
			<div class="col-xs-8 well well-lg" id="part2">
				<span id="notice">Notice Board</span>
				<section id="notice-info">
				<div><span>&#9734;</span>  Soil Health Card Scheme</div>
				<div><span>&#9734;</span> Pradhan Mantri Fasal Bima Yojana (PMFBY) </div>
				<div><span>&#9734;</span>  Paramparagat Krishi Vikas Yojana (PKVY) </div>
				<div><span>&#9734;</span>  National Scheme of Incentives to Girls for Secondary Education</div>
				<div><span>&#9734;</span> National Merit-cum-Means Scholarship Scheme</div>
				</section>
			</div>
			<div class="col-xs-2 well" id="part3">
				
			</div>
		</section>
	</div>	
</section>
<!--end of home content-->

<!--start of about-->
<div class="container-fluid" id="villageabout_content">
	<section class="row" id="about-info">
		<div class="col-sm-6 col-xs-12" id="about">
		<p class="text-center"><span id="abt-ttl">About Us<span></p>
			<section id="about-info" class="text-center"> 
			Imagine greeting someone for the first time and beginning the conversation by reading him or her a press release. Ridiculous, right?

		I can’t tell you why so many companies shift into a journalistic-imbued writing style when it comes to crafting copy for their About Page, but I can tell you it makes for a dreadful first impression.

		So faux pas number one for the About Page is writing it with a sleep-inducing tone. Don’t let your page sound like a funeral. Make it sound like a party.

		You’re here. Woo-hoo! We’re excited to tell you why this is the place to be.

		Let the party begin. The About Page on the Moz site kicks off the party with a fun headline, unconventional image and scroll-worthy storytelling-style content.
			</section>			
		</div>
		<div class="col-sm-6 col-xs-12 text-center well">
		<p  id="map-ttl">Map of <span id="mapname"></span></p>
			<div class="iframe-container text-center">
			<iframe id="map" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d55673.01709689226!2d74.21479173468452!3d21.369177586141443!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3bdf09953058e561%3A0x7d3b72c42f40546a!2sNandurbar%2C%20Maharashtra%20425412!5e0!3m2!1sen!2sin!4v1599325154276!5m2!1sen!2sin" width="400" height="300" frameborder="0" style="border:0;" allowfullscreen="" aria-hidden="false" tabindex="0"></iframe>		
		</div>	
			</div>
	</section>
	
		<section class="row" id="about-img">
			<div class="col-xs-4" id="gramsev">
			<img src="{{asset('images/gramsev.png')}}"  alt="gramsevak" width=100%   class="img-fluid img-rounded"> 
			<div id="gs">Gramsevak</div>	
			</div>
			<div class="col-xs-4 " id="sarpanch">
			<img src="{{asset('images/sarpanch.png')}}"  alt="sarpanch" width=100%  class="img-fluid img-rounded"> 
			<div id="sp">Sarpanch</div>	
			</div>
			<div class="col-xs-4" id="krushisev">
				<img src="{{asset('images/krushisev.png')}}"  alt="krushisevak" width=100%  class="img-fluid img-rounded"> 
				<div>Krushisevak</div>
			</div>
			</section>
		<section class="row" id="about-img">
			<div class="col-xs-4" id="zp">
				<img src="{{asset('images/zp.png')}}"  alt="zp-teacher" width=100%  class="img-fluid img-rounded">
				<div>ZP Teacher</div>
			</div>
			<div class="col-xs-4" id="zp">
				<img src="{{asset('images/zp.png')}}"  alt="Talathir" width=100%  class="img-fluid img-rounded">
				<div>Talathi</div> 
			</div>
			<div class="col-xs-4" id="zp">
				<img src="{{asset('images/zp.png')}}"  alt="RTI Officer" width=100%  class="img-fluid img-rounded">
				<div>RTI Officer</div> 
			</div>
		</section>
</div>
<!--end of about-->
<!--start of egram-->
<div class="container-fluid well" id="villagegram_content">
  <p class="text-center" id="title">Welcome To GramPanchayat <span id="panchayat_name"></span></p>
  <hr> 
  <span id="title2">Annual Fund: </span>
  <br>
  <br>
  <p id="title2">Beneficiary List</p>
  <ul id="newli">
		  <li>Dummy text you can change</li>
		  <li>Dummy text you can change</li>
		  <li>Dummy text you can change</li>
		  <li>Dummy text you can change</li>
		  <li>Dummy text you can change</li>
		  
	  </ul>
  <hr>
  <p id="title2">Expenditure of RTI</p>
  <ul id="newli">
		  <li>Dummy text you can change</li>
		  <li>Dummy text you can change</li>
		  <li>Dummy text you can change</li>
		  <li>Dummy text you can change</li>
		  <li>Dummy text you can change</li>
		  
	  </ul>
</div>
<!--end of egram-->
<!--start of ekrushi-->
<div class="container-fluid well" id="villagekrushi_content">
  <p class="text-center" id="title">Welcome To Krushi Vibhag <span id="krushi_name"></span></p>
<hr> 
  <p id="title2">Beneficiary List</p>
  <ul id="newli">
		  <li>Dummy text you can change</li>
		  <li>Dummy text you can change</li>
		  <li>Dummy text you can change</li>
		  <li>Dummy text you can change</li>
		  <li>Dummy text you can change</li>
		  
	  </ul>
  <hr>
  <p id="title2">Scheme Announcement-Daily</p>
  <ul id="newli">
		  <li>Dummy text you can change</li>
		  <li>Dummy text you can change</li>
		  <li>Dummy text you can change</li>
		  <li>Dummy text you can change</li>
		  <li>Dummy text you can change</li>
		  
	  </ul>
</div>
<!--end of ekrushi-->
<!--start of eschool-->
<div class="container-fluid well" id="villageschool_content">
  <p class="text-center" id="title">Welcome To Z.P School <span id="school_name"></span></p>
  <hr>
<p id="title2">Total No. Of Students: </p>
<hr>
<p id="title2" class="text-center">Notice/Anouncements</p>
  <ul id="newli">
		  <li>Dummy text you can change</li>
		  <li>Dummy text you can change</li>
		  <li>Dummy text you can change</li>
		  <li>Dummy text you can change</li>
		  <li>Dummy text you can change</li>
		  
	  </ul>
</div>
<!--end of eschool-->
<!--start of help page-->
<div class="container-fluid" id="villagehelp_content">
	<section class="row"> 
		<div class="col-xs-12 col-sm-6" id="contact-det">
		<p class="text-center"><span id="help-ttl">Help<span></p>
      <div id="contact-con">
				<p><span >Contact Number: </span><strong id="village_contact">9999999999</strong></p>
        <p><span>Email:</span><strong id="village_email">village@support.com</strong></p>
      </div>
			</div>
		<div class="col-xs-12 col-sm-6 well" id="complain-content">
		<form action="">
			<div class="text-center"><span id="comp-ttl">COMPLAINT LODGE</span></div>
			<label for="name">Name</label>
			<input type="text" id="name" name="name" placeholder="Your name.." required>

			<label for="email">Email</label>
			<input type="text" id="email" name="email" placeholder="Your Email..">

			<label for="village">Village</label>
			<input type="text" id="village" name="village" placeholder="Your Village.." required>
			<label for="against">Against</label>
			<input type="text" id="against" name="against" placeholder="officer Name.." required>

			<label for="note">Note</label>
			<textarea id="note" name="note" placeholder="Write about complaint.." style="height:100px" required></textarea>
			<button type="submit" id="complaint-sub" class="btn btn-default">Submit</button>
			
		</form>
		</div>
	</section>
</div>
<!--end of help page-->
	<footer></footer>
<script type="text/javascript" src="{{asset('javascript/jquery-3.5.1.min.js')}}"></script>
<script type="text/javascript" src="{{asset('javascript/bootstrap.min.js')}}"></script>
<script type="text/javascript" src="{{asset('javascript/script.js')}}"></script>
<script type="text/javascript" src="{{asset('javascript/script1.js')}}"></script>

<script type="text/javascript">
function googleTranslateElementInit() {
  new google.translate.TranslateElement({pageLanguage: 'en',includedLanguages:'mr,en', layout: google.translate.TranslateElement.InlineLayout.SIMPLE}, 'google_translate_element');
}
</script>

<script type="text/javascript" src="//translate.google.com/translate_a/element.js?cb=googleTranslateElementInit"></script>

</body>
</html>