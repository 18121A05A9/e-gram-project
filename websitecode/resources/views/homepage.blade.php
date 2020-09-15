<!DOCTYPE html>
<html>
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
					<img id="img1"src="{{asset('images/gram-logo.png')}}" alt="logo">
				</div>
				<div class="col-xs-6">
					<p>Welcome To Nandurbar</p>
				</div>
       
				<div class="col-xs-3">
					<img id="img2"src="{{asset('images/gram-logo.png')}}" alt="logo" class="img-fluid">
					
				</div>
			</section>
		</div>
		<div class="navbar">
<ul id="nav-list">
<li><span class="nav-btn active" id="home-btn" onclick="openhome()">Home</span></li> 
  <li><span class="nav-btn" id="about-btn" onclick="openabout()">About</span></li> 
  <li class="dropdown">
          <span href="#" class="nav-btn" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Akkalkuva<span class="caret"></span></span>
      <ul class="dropdown-menu" id="myDropdown1">
			<input type="text" id="myInput1" onkeyup="filterFunction1()" placeholder="Search for village.." title="Type in a name">
      <li id="menu-list"><a href="villagehome?village=Akkalakuwa">Akkalkuva</a></li>
      <li id="menu-list"><a href="villagehome?village=Alivihir">Alivihir</a></li>
      <li id="menu-list"><a href="villagehome?village=Amali">Amali</a></li>      
      <li id="menu-list"><a href="villagehome?village=Amali Bari">Amali Bari</a></li>
      <li id="menu-list"><a href="villagehome?village=Amaliphali (N.V.)">Amaliphali (N.V.)</a></li>
      <li id="menu-list"><a href="villagehome?village=Ambabari">Ambabari</a></li>
      <li id="menu-list"><a href="villagehome?village=Ambaribar">Ambaribar</a></li>
      <li id="menu-list"><a href="villagehome?village=Ankushvihir (Bri)">Ankushvihir (Bri)</a></li>
      <li id="menu-list"><a href="villagehome?village=Ankushvihir (bri)">Ankushvihir (bri)</a></li>
      <li id="menu-list"><a href="villagehome?village=Arethi">Arethi</a></li>
      <li id="menu-list"><a href="villagehome?village=Bagda">Bagda</a></li>
      <li id="menu-list"><a href="villagehome?village=Balaghat">Balaghat</a></li>
      <li id="menu-list"><a href="villagehome?village=Bamangaon">Bamangaon</a></li>
      <li id="menu-list"><a href="villagehome?village=Bamani">Bamani</a></li>
      <li id="menu-list"><a href="villagehome?village=Bardi">Bardi</a></li>
      <li id="menu-list"><a href="villagehome?village=Barisuga">Barisugas</a></li>
      <li id="menu-list"><a href="villagehome?village=Bedakund">Bedakund</a></li>
      <li id="menu-list"><a href="villagehome?village=Beti">Beti</a></li>
      <li id="menu-list"><a href="villagehome?village=Bhabalpur">Bhabalpur</a></li>
      <li id="menu-list"><a href="villagehome?village=Bhagdari">Bhagdari</a></li>
      <li id="menu-list"><a href="villagehome?village=Bhangrapani">Bhangrapani</a></li>
      <li id="menu-list"><a href="villagehome?village=Bharadipadar">Bharadipadar</a></li>
      <li id="menu-list"><a href="villagehome?village=Bharkund">Bharkund</a></li>
      <li id="menu-list"><a href="villagehome?village=Bhovara">Bhovara</a></li>
      <li id="menu-list"><a href="villagehome?village=Bijaligavhan">Bijaligavhan</a></li>
      <li id="menu-list"><a href="villagehome?village=Bijaripati">Bijaripati</a></li>
      <li id="menu-list"><a href="villagehome?village=Bokhadi">Bokhadi</a></li>
      <li id="menu-list"><a href="villagehome?village=Boripada">Boripada</a></li>
      <li id="menu-list"><a href="villagehome?village=Chandpur">Chandpur</a></li>
      <li id="menu-list"><a href="villagehome?village=Chanwai">Chanwai</a></li>
      <li id="menu-list"><a href="villagehome?village=Chapadi">Chapadi</a></li>
      <li id="menu-list"><a href="villagehome?village=Chhote Udepur">Chhote Udepur</a></li>
      <li id="menu-list"><a href="villagehome?village=Chikhali">Chikhali</a></li>
      <li id="menu-list"><a href="villagehome?village=Chimalkhadi">Chimalkhadi</a></li>
      <li id="menu-list"><a href="villagehome?village=Chivalutar">Chivalutar</a></li>
      <li id="menu-list"><a href="villagehome?village=Dab">Dab</a></li>
      <li id="menu-list"><a href="villagehome?village=Dahel">Dahel</a></li>
      <li id="menu-list"><a href="villagehome?village=Danel">Danel</a></li>
      <li id="menu-list"><a href="villagehome?village=Darasarapadar">Darasarapadar</a></li>
      <li id="menu-list"><a href="villagehome?village=Deomogaranagar (N.V.)">Deomogaranagar (N.V.)</a></li>
      <li id="menu-list"><a href="villagehome?village=Dhankhedi">Dhankhedi</a></li>
      <li id="menu-list"><a href="villagehome?village=Dhebramal">Dhebramal</a></li>
      <li id="menu-list"><a href="villagehome?village=Digiamba">Digiamba</a></li>
      <li id="menu-list"><a href="villagehome?village=Dodwa">Dodwa</a></li>
      <li id="menu-list"><a href="villagehome?village=Dogripada">Dogripada</a></li>
      <li id="menu-list"><a href="villagehome?village=Gadwani">Gadwani</a></li>
      <li id="menu-list"><a href="villagehome?village=Galotha Bk">Galotha Bk</a></li>
      <li id="menu-list"><a href="villagehome?village=Galotha Kh">Galotha Kh</a></li>
      <li id="menu-list"><a href="villagehome?village=Gaman">Gaman</a></li>
      <li id="menu-list"><a href="villagehome?village=Gangapur">Gangapur</a></li>
      <li id="menu-list"><a href="villagehome?village=Gavhali">Gavhali</a></li>
      <li id="menu-list"><a href="villagehome?village=Ghantani">Ghantani</a></li>
      <li id="menu-list"><a href="villagehome?village=Ghunsi">Ghunsi</a></li>
      <li id="menu-list"><a href="villagehome?village=Gotpada">Gotpada</a></li>
      <li id="menu-list"><a href="villagehome?village=Guliamba">Guliamba</a></li>
      <li id="menu-list"><a href="villagehome?village=Guliumbar">Guliumbar</a></li>
      <li id="menu-list"><a href="villagehome?village=Horafali">Horafali</a></li>
      <li id="menu-list"><a href="villagehome?village=Hunakhamb">Hunakhamb</a></li>
      <li id="menu-list"><a href="villagehome?village=Jamali (ka)">Jamali (ka)</a></li>
      <li id="menu-list"><a href="villagehome?village=Jamali (umar-kuwa)">Jamali (umar-kuwa)</a></li>
      <li id="menu-list"><a href="villagehome?village=Jamana">Jamana</a></li>
      <li id="menu-list"><a href="villagehome?village=Jambipani">Jambipani</a></li>
      <li id="menu-list"><a href="villagehome?village=Jangathi">Jangathi</a></li>
      <li id="menu-list"><a href="villagehome?village=Janiamba">Janiamba</a></li>
      <li id="menu-list"><a href="villagehome?village=Jugalkhet">Jugalkhet</a></li>
      <li id="menu-list"><a href="villagehome?village=Junanagarmuthas">Junanagarmuthas</a></li>
      <li id="menu-list"><a href="villagehome?village=Junwani">Junwani</a></li>
      <li id="menu-list"><a href="villagehome?village=Kadwa Mahu">Kadwa Mahu</a></li>
      <li id="menu-list"><a href="villagehome?village=Kakadkhunt">Kakadkhunt</a></li>
      <li id="menu-list"><a href="villagehome?village=Kakdiamba">Kakdiamba</a></li>
      <li id="menu-list"><a href="villagehome?village=Kakerpada">Kakerpada</a></li>
      <li id="menu-list"><a href="villagehome?village=Kanjala">Kanjala</a></li>
      <li id="menu-list"><a href="villagehome?village=Kanjani">Kanjani</a></li>
      <li id="menu-list"><a href="villagehome?village=Kankala">Kankala</a></li>
      <li id="menu-list"><a href="villagehome?village=Kankalamal">Kankalamal</a></li>
      <li id="menu-list"><a href="villagehome?village=Kankali">Kankali</a></li>
      <li id="menu-list"><a href="villagehome?village=Kataskhai">Kataskhai</a></li>
      <li id="menu-list"><a href="villagehome?village=Kathi">Kathi</a></li>
      <li id="menu-list"><a href="villagehome?village=Kauli">Kauli</a></li>
      <li id="menu-list"><a href="villagehome?village=Kawali Gavhan">Kawali Gavhan</a></li>
      <li id="menu-list"><a href="villagehome?village=Kewadi">Kewadi</a></li>
      <li id="menu-list"><a href="villagehome?village=Khadakapani">Khadakapani</a></li>
      <li id="menu-list"><a href="villagehome?village=Khadake">Khadake</a></li>
      <li id="menu-list"><a href="villagehome?village=Khadkuna">Khadkuna</a></li>
      <li id="menu-list"><a href="villagehome?village=Khai">Khai</a></li>
      <li id="menu-list"><a href="villagehome?village=Khapar">Khapar</a></li>
      <li id="menu-list"><a href="villagehome?village=Khapran">Khapran</a></li>
      <li id="menu-list"><a href="villagehome?village=Khatkuwa">Khatkuwa</a></li>
      <li id="menu-list"><a href="villagehome?village=Khatwani">Khatwani</a></li>
      <li id="menu-list"><a href="villagehome?village=Khodasbara">Khodasbara</a></li>
      <li id="menu-list"><a href="villagehome?village=Khodi">Khodi</a></li>
      <li id="menu-list"><a href="villagehome?village=Khuntagavhan">Khuntagavhan</a></li>
      <li id="menu-list"><a href="villagehome?village=Khurchimal">Khurchimal</a></li>
      <li id="menu-list"><a href="villagehome?village=Kolavi">Kolavi</a></li>
      <li id="menu-list"><a href="villagehome?village=Kolavimal">Kolavimal</a></li>
      <li id="menu-list"><a href="villagehome?village=Korai">Korai</a></li>
      <li id="menu-list"><a href="villagehome?village=Kothali">Kothali</a></li>
      <li id="menu-list"><a href="villagehome?village=Koyalivihir">Koyalivihir</a></li>
      <li id="menu-list"><a href="villagehome?village=Kukadipadar">Kukadipadar</a></li>
      <li id="menu-list"><a href="villagehome?village=Kumbharkhan">Kumbharkhan</a></li>
      <li id="menu-list"><a href="villagehome?village=Kuwa">Kuwa</a></li>
      <li id="menu-list"><a href="villagehome?village=Lalpur">Lalpur</a></li>
      <li id="menu-list"><a href="villagehome?village=Mahukhadi">Mahukhadi</a></li>
      <li id="menu-list"><a href="villagehome?village=Mahupada">Mahupada</a></li>
      <li id="menu-list"><a href="villagehome?village=Makranifali">Makranifali</a></li>
      <li id="menu-list"><a href="villagehome?village=Mal">Mal</a></li>
      <li id="menu-list"><a href="villagehome?village=Malpada">Malpada</a></li>
      <li id="menu-list"><a href="villagehome?village=Mandara">Mandara</a></li>
      <li id="menu-list"><a href="villagehome?village=Mandaviamba">Mandaviamba</a></li>
      <li id="menu-list"><a href="villagehome?village=Mandawa">Mandawa</a></li>
      <li id="menu-list"><a href="villagehome?village=Manibeli">Manibeli</a></li>
      <li id="menu-list"><a href="villagehome?village=Mithyafali">Mithyafali</a></li>
      <li id="menu-list"><a href="villagehome?village=Mogra">Mogra</a></li>
      <li id="menu-list"><a href="villagehome?village=Mokas">Mokas</a></li>
      <li id="menu-list"><a href="villagehome?village=Molgi">Molgi</a></li>
      <li id="menu-list"><a href="villagehome?village=Moramba">Moramba</a></li>
      <li id="menu-list"><a href="villagehome?village=Morhi">Morhi</a></li>
      <li id="menu-list"><a href="villagehome?village=Morkhi">Morkhi</a></li>
      <li id="menu-list"><a href="villagehome?village=Movan">Movan</a></li>
      <li id="menu-list"><a href="villagehome?village=Mukhadi">Mukhadi</a></li>
      <li id="menu-list"><a href="villagehome?village=Nain Shewadi">Nain Shewadi</a></li>
      <li id="menu-list"><a href="villagehome?village=Nala">Nala</a></li>
      <li id="menu-list"><a href="villagehome?village=Nawa Nagarmutha">Nawa Nagarmutha</a></li>
      <li id="menu-list"><a href="villagehome?village=Nawagaon">Nawagaon</a></li>
      <li id="menu-list"><a href="villagehome?village=Nawapada">Nawapada</a></li>
      <li id="menu-list"><a href="villagehome?village=Nendwan Bk">Nendwan Bk</a></li>
      <li id="menu-list"><a href="villagehome?village=Nendwan Kh">Nendwan Kh</a></li>
      <li id="menu-list"><a href="villagehome?village=Nimbapati">Nimbapati</a></li>
      <li id="menu-list"><a href="villagehome?village=Odhi">Odhi</a></li>
      <li id="menu-list"><a href="villagehome?village=Oghani">Oghani</a></li>
      <li id="menu-list"><a href="villagehome?village=Ohwa">Ohwa</a></li>
      <li id="menu-list"><a href="villagehome?village=Olpada (N.V.)">Olpada (N.V.)</a></li>
      <li id="menu-list"><a href="villagehome?village=Orpa (N.V.)">Orpa (N.V.)</a></li>
      <li id="menu-list"><a href="villagehome?village=Palaskhobra">Palaskhobra</a></li>
      <li id="menu-list"><a href="villagehome?village=Pandhramati">Pandhramati</a></li>
      <li id="menu-list"><a href="villagehome?village=Patbara">Patbara</a></li>
      <li id="menu-list"><a href="villagehome?village=Pechari Deo">Pechari Deo</a></li>
      <li id="menu-list"><a href="villagehome?village=Pimpalgaon">Pimpalgaon</a></li>
      <li id="menu-list"><a href="villagehome?village=Pimpalkhuta">Pimpalkhuta</a></li>
      <li id="menu-list"><a href="villagehome?village=Pimprapani">Pimprapani</a></li>
      <li id="menu-list"><a href="villagehome?village=Pimpripada">Pimpripada</a></li>
      <li id="menu-list"><a href="villagehome?village=Pimpti">Pimpti</a></li>
      <li id="menu-list"><a href="villagehome?village=Porambi">Porambi</a></li>
      <li id="menu-list"><a href="villagehome?village=Raisingpur">Raisingpur</a></li>
      <li id="menu-list"><a href="villagehome?village=Rajmohi (Mothi)">Rajmohi (Mothi)</a></li>
      <li id="menu-list"><a href="villagehome?village=Rajmohi Chhoti">Rajmohi Chhoti</a></li>
      <li id="menu-list"><a href="villagehome?village=Rampur">Rampur</a></li>
      <li id="menu-list"><a href="villagehome?village=Ranzani">Ranzani</a></li>
      <li id="menu-list"><a href="villagehome?village=Ratanbara">Ratanbara</a></li>
      <li id="menu-list"><a href="villagehome?village=Rethi">Rethi</a></li>
      <li id="menu-list"><a href="villagehome?village=Rojkund">Rojkund</a></li>
      <li id="menu-list"><a href="villagehome?village=Sakliumar">Sakliumar</a></li>
      <li id="menu-list"><a href="villagehome?village=Sallibar">Sallibar</a></li>
      <li id="menu-list"><a href="villagehome?village=Sambar">Sambar</a></li>
      <li id="menu-list"><a href="villagehome?village=Sari">Sari</a></li>
      <li id="menu-list"><a href="villagehome?village=Sheltapani">Sheltapani</a></li>
      <li id="menu-list"><a href="villagehome?village=Shendvan">Shendvan</a></li>
      <li id="menu-list"><a href="villagehome?village=Sinduri">Sinduri</a></li>
      <li id="menu-list"><a href="villagehome?village=Singpur Bk">Singpur Bk</a></li>
      <li id="menu-list"><a href="villagehome?village=Singpur Kh">Singpur Kh</a></li>
      <li id="menu-list"><a href="villagehome?village=Sojdan">Sojdan</a></li>
      <li id="menu-list"><a href="villagehome?village=Sonapati">Sonapati</a></li>
      <li id="menu-list"><a href="villagehome?village=Sorapada">Sorapada</a></li>
      <li id="menu-list"><a href="villagehome?village=Sorchapada (N.V.)">Sorchapada (N.V.)</a></li>
      <li id="menu-list"><a href="villagehome?village=Surgas">Surgas</a></li>
      <li id="menu-list"><a href="villagehome?village=Talamba">Talamba</a></li>
      <li id="menu-list"><a href="villagehome?village=Tawali">Tawali</a></li>
      <li id="menu-list"><a href="villagehome?village=Thana">Thana</a></li>
      <li id="menu-list"><a href="villagehome?village=Thanavihir">Thanavihir</a></li>
      <li id="menu-list"><a href="villagehome?village=Timakmauli">Timakmauli</a></li>
      <li id="menu-list"><a href="villagehome?village=Todikund">Todikund</a></li>
      <li id="menu-list"><a href="villagehome?village=Udepur">Udepur</a></li>
      <li id="menu-list"><a href="villagehome?village=Ukhalipada (N.V.)">Ukhalipada (N.V.)</a></li>
      <li id="menu-list"><a href="villagehome?village=Ukhalsag">Ukhalsag</a></li>
      <li id="menu-list"><a href="villagehome?village=Umaragavhan">Umaragavhan</a></li>
      <li id="menu-list"><a href="villagehome?village=Umarkuva">Umarkuva</a></li>
      <li id="menu-list"><a href="villagehome?village=Umati">Umati</a></li>
      <li id="menu-list"><a href="villagehome?village=Urmalamal">Urmalamal</a></li>
      <li id="menu-list"><a href="villagehome?village=Vadali">Vadali</a></li>
      <li id="menu-list"><a href="villagehome?village=Vakadhaman">Vakadhaman</a></li>
      <li id="menu-list"><a href="villagehome?village=Vanyavihir Bk">Vanyavihir Bk</a></li>
      <li id="menu-list"><a href="villagehome?village=Vanyavihir Kh">Vanyavihir Kh</a></li>
      <li id="menu-list"><a href="villagehome?village=Vehgi">Vehgi</a></li>
      <li id="menu-list"><a href="villagehome?village=Veli">Veli</a></li>
      <li id="menu-list"><a href="villagehome?village=Veri">Veri</a></li>
      <li id="menu-list"><a href="villagehome?village=Virpur">Virpur</a></li>
      <li id="menu-list"><a href="villagehome?village=Wadfali (Na)">Wadfali (Na)</a></li>
      <li id="menu-list"><a href="villagehome?village=Wadfali (R)">Wadfali (R)</a></li>
      <li id="menu-list"><a href="villagehome?village=Wadibar">Wadibar</a></li>
      <li id="menu-list"><a href="villagehome?village=Walamba (k)">Walamba (k)</a></li>
      <li id="menu-list"><a href="villagehome?village=Walamba (R)">Walamba (R)</a></li>
      <li id="menu-list"><a href="villagehome?village=Welkhadi">Welkhadi</a></li>
        </ul>
</li> 
  <li class="dropdown">
          <span href="#" class="nav-btn" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Akrani<span class="caret"></span></span>
          <ul class="dropdown-menu" id="myDropdown2">
			<input type="text" id="myInput2" onkeyup="filterFunction2()" placeholder="Search for village.." title="Type in a name">
      <li><a href="villagehome?village=Achapa">Achapa</a></li>
      <li><a href="villagehome?village=Akwani">Akwani</a></li>
      <li><a href="villagehome?village=Amala">Amala</a></li>
      <li><a href="villagehome?village=Ambari">Ambari</a></li>
      <li><a href="villagehome?village=Asali">Asali</a></li>
      <li><a href="villagehome?village=Astamba">Astamba</a></li>
      <li><a href="villagehome?village=Astamba Forest">Astamba Forest</a></li>
      <li><a href="villagehome?village=Atti">Atti</a></li>
      <li><a href="villagehome?village=Bhabri">Bhabri</a></li>
      <li><a href="villagehome?village=Bhadal">Bhadal</a></li>
      <li><a href="villagehome?village=Bhamane">Bhamane</a></li>
      <li><a href="villagehome?village=Bhanoli">Bhanoli</a></li>
      <li><a href="villagehome?village=Bharad">Bharad</a></li>
      <li><a href="villagehome?village=Bhogawade Bk">Bhogawade Bk</a></li>
      <li><a href="villagehome?village=Bhogawade Kh">Bhogawade Kh</a></li>
      <li><a href="villagehome?village=Bhujgaon">Bhujgaon</a></li>
      <li><a href="villagehome?village=Bhusha">Bhusha</a></li>
      <li><a href="villagehome?village=Bijari">Bijari</a></li>
      <li><a href="villagehome?village=Bilbarpada">Bilbarpada</a></li>
      <li><a href="villagehome?village=Bilgaon">Bilgaon</a></li>
      <li><a href="villagehome?village=Bodala">Bodala</a></li>
      <li><a href="villagehome?village=Bori">Bori</a></li>
      <li><a href="villagehome?village=Borsisa">Borsisa</a></li>
      <li><a href="villagehome?village=Borwan">Borwan</a></li>
      <li><a href="villagehome?village=Chandsaili">Chandsaili</a></li>
      <li><a href="villagehome?village=Chhapari">Chhapari</a></li>
      <li><a href="villagehome?village=Chhinalkuwa">Chhinalkuwa</a></li>
      <li><a href="villagehome?village=Chikhali">Chikhali</a></li>
      <li><a href="villagehome?village=Chinchkathi">Chinchkathi</a></li>
      <li><a href="villagehome?village=Chippal">Chippal</a></li>
      <li><a href="villagehome?village=Chitkhedi">Chitkhedi</a></li>
      <li><a href="villagehome?village=Chittar">Chittar</a></li>
      <li><a href="villagehome?village=Chittar Forest">Chittar Forest</a></li>
      <li><a href="villagehome?village=Chondwade Bk">Chondwade Bk</a></li>
      <li><a href="villagehome?village=Chondwade Kh">Chondwade Kh</a></li>
      <li><a href="villagehome?village=Chulwad">Chulwad</a></li>
      <li><a href="villagehome?village=Dhadgaon">Dhadgaon</a></li>
      <li><a href="villagehome?village=Dhanaje Bk">Dhanaje Bk</a></li>
      <li><a href="villagehome?village=Dhanaje Kh">Dhanaje Kh</a></li>
      <li><a href="villagehome?village=Domkhedi">Domkhedi</a></li>
      <li><a href="villagehome?village=Duttal">Duttal</a></li>
      <li><a href="villagehome?village=Gaurya">Gaurya</a></li>
      <li><a href="villagehome?village=Genda">Genda</a></li>
      <li><a href="villagehome?village=Ghatli">Ghatli</a></li>
      <li><a href="villagehome?village=Godamba">Godamba</a></li>
      <li><a href="villagehome?village=Goradi">Goradi</a></li>
      <li><a href="villagehome?village=Harankhuri">Harankhuri</a></li>
      <li><a href="villagehome?village=Hatdhui">Hatdhui</a></li>
      <li><a href="villagehome?village=Jalola">Jalola</a></li>
      <li><a href="villagehome?village=Jamanvahi">Jamanvahi</a></li>
      <li><a href="villagehome?village=Japi">Japi</a></li>
      <li><a href="villagehome?village=Jarali">Jarali</a></li>
      <li><a href="villagehome?village=Jugani">Jugani</a></li>
      <li><a href="villagehome?village=Junana">Junana</a></li>
      <li><a href="villagehome?village=Kakarda">Kakarda</a></li>
      <li><a href="villagehome?village=Kakarpati">Kakarpati</a></li>
      <li><a href="villagehome?village=Kalibel">Kalibel</a></li>
      <li><a href="villagehome?village=Kamod">Kamod</a></li>
      <li><a href="villagehome?village=Kamod Bk">Kamod Bk</a></li>
      <li><a href="villagehome?village=Kamod Kh">Kamod Kh</a></li>
      <li><a href="villagehome?village=Katra">Katra</a></li>
      <li><a href="villagehome?village=Katri">Katri</a></li>
      <li><a href="villagehome?village=Katri Forest">Katri Forest</a></li>
      <li><a href="villagehome?village=Kela Bk">Kela Bk</a></li>
      <li><a href="villagehome?village=Kela Kh">Kela Kh</a></li>
      <li><a href="villagehome?village=Kelapani">Kelapani</a></li>
      <li><a href="villagehome?village=Keli">Keli</a></li>
      <li><a href="villagehome?village=Kelimojara">Kelimojara</a></li>
      <li><a href="villagehome?village=Khadkale Bk">Khadkale Bk</a></li>
      <li><a href="villagehome?village=Khadkale Kh">Khadkale Kh</a></li>
      <li><a href="villagehome?village=Khadki">Khadki</a></li>
      <li><a href="villagehome?village=Khadkya">Khadkya</a></li>
      <li><a href="villagehome?village=Khamala">Khamala</a></li>
      <li><a href="villagehome?village=Khanbara">Khanbara</a></li>
      <li><a href="villagehome?village=Kharda">Kharda</a></li>
      <li><a href="villagehome?village=Khardi Bk">Khardi Bk</a></li>
      <li><a href="villagehome?village=Khardi Kh">Khardi Kh</a></li>
      <li><a href="villagehome?village=Kharwad">Kharwad</a></li>
      <li><a href="villagehome?village=Khuntamodi">Khuntamodi</a></li>
      <li><a href="villagehome?village=Khushgavhan">Khushgavhan</a></li>
      <li><a href="villagehome?village=Khutwada">Khutwada</a></li>
      <li><a href="villagehome?village=Kuklad">Kuklad</a></li>
      <li><a href="villagehome?village=Kuktar">Kuktar</a></li>
      <li><a href="villagehome?village=Kumbhari">Kumbhari</a></li>
      <li><a href="villagehome?village=Kundal">Kundal</a></li>
      <li><a href="villagehome?village=Kundya">Kundya</a></li>
      <li><a href="villagehome?village=Kusumveri">Kusumveri</a></li>
      <li><a href="villagehome?village=Kuwarkhot">Kuwarkhot</a></li>
      <li><a href="villagehome?village=Lekhada">Lekhada</a></li>
      <li><a href="villagehome?village=Makadkund">Makadkund</a></li>
      <li><a href="villagehome?village=Maktarzira">Maktarzira</a></li>
      <li><a href="villagehome?village=Mal">Mal</a></li>
      <li><a href="villagehome?village=Mal">Mal</a></li>
      <li><a href="villagehome?village=Mandvi Bk">Mandvi Bk</a></li>
      <li><a href="villagehome?village=Mandvi Kh">Mandvi Kh</a></li>
      <li><a href="villagehome?village=Mankhedi Bk">Mankhedi Bk</a></li>
      <li><a href="villagehome?village=Mankhedi Kh">Mankhedi Kh</a></li>
      <li><a href="villagehome?village=Manwani Bk">Manwani Bk</a></li>
      <li><a href="villagehome?village=Manwani Kh">Manwani Kh</a></li>
      <li><a href="villagehome?village=Mojara">Mojara</a></li>
      <li><a href="villagehome?village=Mokh Bk">Mokh Bk</a></li>
      <li><a href="villagehome?village=Mokh Kh">Mokh Kh</a></li>
      <li><a href="villagehome?village=Mundalgaon">Mundalgaon</a></li>
      <li><a href="villagehome?village=Mundalwad">Mundalwad</a></li>
      <li><a href="villagehome?village=Nal Gavhan">Nal Gavhan</a></li>
      <li><a href="villagehome?village=Nandalwad">Nandalwad</a></li>
      <li><a href="villagehome?village=Nawegaon">Nawegaon</a></li>
      <li><a href="villagehome?village=Nigadi">Nigadi</a></li>
      <li><a href="villagehome?village=Nimgavhan">Nimgavhan</a></li>
      <li><a href="villagehome?village=Nimkhedi">Nimkhedi</a></li>
      <li><a href="villagehome?village=Padali">Padali</a></li>
      <li><a href="villagehome?village=Padamund">Padamund</a></li>
      <li><a href="villagehome?village=Palkha">Palkha</a></li>
      <li><a href="villagehome?village=Panbari">Panbari</a></li>
      <li><a href="villagehome?village=Paula">Paula</a></li>
      <li><a href="villagehome?village=Phalai">Phalai</a></li>
      <li><a href="villagehome?village=Pimpalbari">Pimpalbari</a></li>
      <li><a href="villagehome?village=Pimpalchop">Pimpalchop</a></li>
      <li><a href="villagehome?village=Pimpri">Pimpri</a></li>
      <li><a href="villagehome?village=Radikalam">Radikalam</a></li>
      <li><a href="villagehome?village=Rajbardi">Rajbardi</a></li>
      <li><a href="villagehome?village=Ramsala">Ramsala</a></li>
      <li><a href="villagehome?village=Roshamal Bk">Roshamal Bk</a></li>
      <li><a href="villagehome?village=Roshamal Kh">Roshamal Kh</a></li>
      <li><a href="villagehome?village=Sadri">Sadri</a></li>
      <li><a href="villagehome?village=Sawarya">Sawarya</a></li>
      <li><a href="villagehome?village=Sawaryadigar">Sawaryadigar</a></li>
      <li><a href="villagehome?village=Shelda">Shelda</a></li>
      <li><a href="villagehome?village=Shelgada">Shelgada</a></li>
      <li><a href="villagehome?village=Shelkui">Shelkui</a></li>
      <li><a href="villagehome?village=Shikka">Shikka</a></li>
      <li><a href="villagehome?village=Sindidigar">Sindidigar</a></li>
      <li><a href="villagehome?village=Sindvani">Sindvani</a></li>
      <li><a href="villagehome?village=Sirsani">Sirsani</a></li>
      <li><a href="villagehome?village=Sisa">Sisa</a></li>
      <li><a href="villagehome?village=Somane">Somane</a></li>
      <li><a href="villagehome?village=Son Bk">Son Bk</a></li>
      <li><a href="villagehome?village=Son Kh">Son Kh</a></li>
      <li><a href="villagehome?village=Surung">Surung</a></li>
      <li><a href="villagehome?village=Surwani">Surwani</a></li>
      <li><a href="villagehome?village=Talai">Talai</a></li>
      <li><a href="villagehome?village=Telkhedi">Telkhedi</a></li>
      <li><a href="villagehome?village=Tembhala">Tembhala</a></li>
      <li><a href="villagehome?village=Tembhurni">Tembhurni</a></li>
      <li><a href="villagehome?village=Thuwani">Thuwani</a></li>
      <li><a href="villagehome?village=Tinasmal">Tinasmal</a></li>
      <li><a href="villagehome?village=Toranmal (june">Toranmal (june)</a></li>
      <li><a href="villagehome?village=Toranmal (New)">Toranmal (New)</a></li>
      <li><a href="villagehome?village=Trishul">Trishul</a></li>
      <li><a href="villagehome?village=Udadya">Udadya</a></li>
      <li><a href="villagehome?village=Ukhaliamba">Ukhaliamba</a></li>
      <li><a href="villagehome?village=Umarani Bk">Umarani Bk</a></li>
      <li><a href="villagehome?village=Umarani Kh">Umarani Kh</a></li>
      <li><a href="villagehome?village=Vadfalya">Vadfalya</a></li>
      <li><a href="villagehome?village=Vahwani">Vahwani</a></li>
      <li><a href="villagehome?village=Valiamba">Valiamba</a></li>
      <li><a href="villagehome?village=Valval">Valval</a></li>
      <li><a href="villagehome?village=Varkhedi Bk">Varkhedi Bk</a></li>
      <li><a href="villagehome?village=Varkhedi Kh">Varkhedi Kh</a></li>
      <li><a href="villagehome?village=Vavi">Vavi</a></li>
      <li><a href="villagehome?village=Velkhedi">Velkhedi</a></li>
      <li><a href="villagehome?village=Warwali">Warwali</a></li>
      <li><a href="villagehome?village=Zummad">Zummad</a></li>
          </ul>
</li> 
<li class="dropdown">
          <span href="#" class="nav-btn" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Nandurbar<span class="caret"></span></span>
          <ul class="dropdown-menu" id="myDropdown3">
			<input type="text" id="myInput3" onkeyup="filterFunction3()" placeholder="Search for village.." title="Type in a name">
      <li><a href="villagehome?village=Adachhi">Adachhi</a></li>
      <li><a href="villagehome?village=Ajepur">Ajepur</a></li>
      <li><a href="villagehome?village=Akhatwade">Akhatwade</a></li>
      <li><a href="villagehome?village=Akrale">Akrale</a></li>
      <li><a href="villagehome?village=Ambapur">Ambapur</a></li>
      <li><a href="villagehome?village=Amlatne">Amlatne</a></li>
      <li><a href="villagehome?village=Arale">Arale</a></li>
      <li><a href="villagehome?village=Arditara">Arditara</a></li>
      <li><a href="villagehome?village=Asane">Asane</a></li>
      <li><a href="villagehome?village=Ashte">Ashte</a></li>
      <li><a href="villagehome?village=Bahyane">Bahyane</a></li>
      <li><a href="villagehome?village=Bal Amrai">Bal Amrai</a></li>
      <li><a href="villagehome?village=Baldane">Baldane</a></li>
      <li><a href="villagehome?village=Balwand">Balwand</a></li>
      <li><a href="villagehome?village=Bamdod">Bamdod</a></li>
      <li><a href="villagehome?village=Bhadwad">Bhadwad</a></li>
      <li><a href="villagehome?village=Bhagsari">Bhagsari</a></li>
      <li><a href="villagehome?village=Bhaler">Bhaler</a></li>
      <li><a href="villagehome?village=Bhangda">Bhangda</a></li>
      <li><a href="villagehome?village=Bhavanipada">Bhavanipada</a></li>
      <li><a href="villagehome?village=Bhone">Bhone</a></li>
      <li><a href="villagehome?village=Biladi">Biladi</a></li>
      <li><a href="villagehome?village=Borale">Borale</a></li>
      <li><a href="villagehome?village=Chakle">Chakle</a></li>
      <li><a href="villagehome?village=Chaupale">Chaupale</a></li>
      <li><a href="villagehome?village=Dahindule Bk.">Dahindule Bk.</a></li>
      <li><a href="villagehome?village=Dahindule Kh">Dahindule Kh</a></li>
      <li><a href="villagehome?village=Devpur">Devpur</a></li>
      <li><a href="villagehome?village=Dhamdai">Dhamdai</a></li>
      <li><a href="villagehome?village=Dhamdod">Dhamdod</a></li>
      <li><a href="villagehome?village=Dhandhane">Dhandhane</a></li>
      <li><a href="villagehome?village=Dhanora">Dhanora</a></li>
      <li><a href="villagehome?village=Dhekwad">Dhekwad</a></li>
      <li><a href="villagehome?village=Dhirajgaon">Dhirajgaon</a></li>
      <li><a href="villagehome?village=Dhulwad">Dhulwad</a></li>
      <li><a href="villagehome?village=Dudhale">Dudhale</a></li>
      <li><a href="villagehome?village=Fulsare">Fulsare</a></li>
      <li><a href="villagehome?village=Gangapur">Gangapur</a></li>
      <li><a href="villagehome?village=Ghoghalgaon">Ghoghalgaon</a></li>
      <li><a href="villagehome?village=Ghotane">Ghotane</a></li>
      <li><a href="villagehome?village=Ghuli">Ghuli</a></li>
      <li><a href="villagehome?village=Gu.bhavali">Gu.bhavali</a></li>
      <li><a href="villagehome?village=Gu.jambholi">Gu.jambholi</a></li>
      <li><a href="villagehome?village=Haripur">Haripur</a></li>
      <li><a href="villagehome?village=Hatmohide">Hatmohide</a></li>
      <li><a href="villagehome?village=Hatti Indri">Hatti Indri</a></li>
      <li><a href="villagehome?village=Hol T. Haveli">Hol T. Haveli</a></li>
      <li><a href="villagehome?village=Hol T. Ranale">Hol T. Ranale</a></li>
      <li><a href="villagehome?village=Isainagar">Isainagar</a></li>
      <li><a href="villagehome?village=Jalkhe">Jalkhe</a></li>
      <li><a href="villagehome?village=Jambhipada">Jambhipada</a></li>
      <li><a href="villagehome?village=Jun Mohide">Jun Mohide</a></li>
      <li><a href="villagehome?village=Kakarde">Kakarde</a></li>
      <li><a href="villagehome?village=Kalamba">Kalamba</a></li>
      <li><a href="villagehome?village=Kalmadi">Kalmadi</a></li>
      <li><a href="villagehome?village=Kanalde">Kanalde</a></li>
      <li><a href="villagehome?village=Kandre">Kandre</a></li>
      <li><a href="villagehome?village=Karajwe">Karajwe</a></li>
      <li><a href="villagehome?village=Karankheda">Karankheda</a></li>
      <li><a href="villagehome?village=Karjkupe">Karjkupe</a></li>
      <li><a href="villagehome?village=Karli">Karli</a></li>
      <li><a href="villagehome?village=Kathore">Kathore</a></li>
      <li><a href="villagehome?village=Khairale">Khairale</a></li>
      <li><a href="villagehome?village=Khamgaon">Khamgaon</a></li>
      <li><a href="villagehome?village=Khaparkhede">Khaparkhede</a></li>
      <li><a href="villagehome?village=Kharde Kh.">Kharde Kh.</a></li>
      <li><a href="villagehome?village=Khodasgaon">Khodasgaon</a></li>
      <li><a href="villagehome?village=Khokrale">Khokrale</a></li>
      <li><a href="villagehome?village=Khondamali">Khondamali</a></li>
      <li><a href="villagehome?village=Kodhali Kh.">Kodhali Kh.</a></li>
      <li><a href="villagehome?village=Kolde">Kolde</a></li>
      <li><a href="villagehome?village=Koparli">Koparli</a></li>
      <li><a href="villagehome?village=Korit">Korit</a></li>
      <li><a href="villagehome?village=Kothade">Kothade</a></li>
      <li><a href="villagehome?village=Lonkheda">Lonkheda</a></li>
      <li><a href="villagehome?village=Loya">Loya</a></li>
      <li><a href="villagehome?village=Malkhand">Malkhand</a></li>
      <li><a href="villagehome?village=Malpur">Malpur</a></li>
      <li><a href="villagehome?village=Mandal">Mandal</a></li>
      <li><a href="villagehome?village=Mangrul">Mangrul</a></li>
      <li><a href="villagehome?village=Manjre">Manjre</a></li>
      <li><a href="villagehome?village=Nagaon">Nagaon</a></li>
      <li><a href="villagehome?village=Nagsar">Nagsar</a></li>
      <li><a href="villagehome?village=Nalve Bk.">Nalve Bk.</a></li>
      <li><a href="villagehome?village=Nalve Kh.">Nalve Kh.</a></li>
      <li><a href="villagehome?village=Nandarkhe">Nandarkhe</a></li>
      <li><a href="villagehome?village=Nandpur">Nandpur</a></li>
      <li><a href="villagehome?village=Narayanpur">Narayanpur</a></li>
      <li><a href="villagehome?village=Nashinde">Nashinde</a></li>
      <li><a href="villagehome?village=Natawad">Natawad</a></li>
      <li><a href="villagehome?village=Navagaon">Navagaon</a></li>
      <li><a href="villagehome?village=Nimbhel">Nimbhel</a></li>
      <li><a href="villagehome?village=Nimboni Bk.">Nimboni Bk.</a></li>
      <li><a href="villagehome?village=Nimgaon">Nimgaon</a></li>
      <li><a href="villagehome?village=Nyahali">Nyahali</a></li>
      <li><a href="villagehome?village=Osarli">Osarli</a></li>
      <li><a href="villagehome?village=Ozarde">Ozarde</a></li>
      <li><a href="villagehome?village=Pachorabari">Pachorabari</a></li>
      <li><a href="villagehome?village=Palashi">Palashi</a></li>
      <li><a href="villagehome?village=Patharai">Patharai</a></li>
      <li><a href="villagehome?village=Patonda">Patonda</a></li>
      <li><a href="villagehome?village=Pawle">Pawle</a></li>
      <li><a href="villagehome?village=Pimplod">Pimplod</a></li>
      <li><a href="villagehome?village=Pimpri">Pimpri</a></li>
      <li><a href="villagehome?village=Rajale">Rajale</a></li>
      <li><a href="villagehome?village=Rajapur">Rajapur</a></li>
      <li><a href="villagehome?village=Rakaswade">Rakaswade</a></li>
      <li><a href="villagehome?village=Ranale">Ranale</a></li>
      <li><a href="villagehome?village=Ranale Kh">Ranale Kh</a></li>
      <li><a href="villagehome?village=Saitane">Saitane</a></li>
      <li><a href="villagehome?village=Samsherpur">Samsherpur</a></li>
      <li><a href="villagehome?village=Saturkhe">Saturkhe</a></li>
      <li><a href="villagehome?village=Sawalde">Sawalde</a></li>
      <li><a href="villagehome?village=Shahade">Shahade</a></li>
      <li><a href="villagehome?village=Shejve">Shejve</a></li>
      <li><a href="villagehome?village=Shinde">Shinde</a></li>
      <li><a href="villagehome?village=Shindgavhan">Shindgavhan</a></li>
      <li><a href="villagehome?village=Shirwade">Shirwade</a></li>
      <li><a href="villagehome?village=Shivpur">Shivpur</a></li>
      <li><a href="villagehome?village=Shrirampur">Shrirampur</a></li>
      <li><a href="villagehome?village=Songir">Songir</a></li>
      <li><a href="villagehome?village=Sujalpur">Sujalpur</a></li>
      <li><a href="villagehome?village=Sundarde">Sundarde</a></li>
      <li><a href="villagehome?village=Sutare">Sutare</a></li>
      <li><a href="villagehome?village=Talwade Bk">Talwade Bk</a></li>
      <li><a href="villagehome?village=Tarapur">Tarapur</a></li>
      <li><a href="villagehome?village=Thanepada">Thanepada</a></li>
      <li><a href="villagehome?village=Tilali">Tilali</a></li>
      <li><a href="villagehome?village=Tishi">Tishi</a></li>
      <li><a href="villagehome?village=Tokartale">Tokartale</a></li>
      <li><a href="villagehome?village=Umaj">Umaj</a></li>
      <li><a href="villagehome?village=Umarde Bk">Umarde Bk</a></li>
      <li><a href="villagehome?village=Umarde Kh">Umarde Kh</a></li>
      <li><a href="villagehome?village=Umargaon">Umargaon</a></li>
      <li><a href="villagehome?village=Vadbare">Vadbare</a></li>
      <li><a href="villagehome?village=Vaindane">Vaindane</a></li>
      <li><a href="villagehome?village=Vasadare">Vasadare</a></li>
      <li><a href="villagehome?village=Vawad">Vawad</a></li>
      <li><a href="villagehome?village=Velawad">Velawad</a></li>
      <li><a href="villagehome?village=Vikharan">Vikharan</a></li>
      <li><a href="villagehome?village=Virchak">Virchak</a></li>
      <li><a href="villagehome?village=Vyahur">Vyahur</a></li>
      <li><a href="villagehome?village=Wadgaon">Wadgaon</a></li>
      <li><a href="villagehome?village=Wadjakhan">Wadjakhan</a></li>
      <li><a href="villagehome?village=Wadwad">Wadwad</a></li>
      <li><a href="villagehome?village=Waghale">Waghale</a></li>
      <li><a href="villagehome?village=Waghode">Waghode</a></li>
      <li><a href="villagehome?village=Wagshepa">Wagshepa</a></li>
      <li><a href="villagehome?village=Wankute">Wankute</a></li>
      <li><a href="villagehome?village=Warul">Warul</a></li>
      <li><a href="villagehome?village=Waslai">Waslai</a></li>
          </ul>
</li>
<li class="dropdown">
          <span href="#" class="nav-btn" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Navapur<span class="caret"></span></span>
          <ul class="dropdown-menu" id="myDropdown4">
			<input type="text" id="myInput4" onkeyup="filterFunction4()" placeholder="Search for village.." title="Type in a name">

      <li><a href="villagehome?village=Amlan">Amlan</a></li>
      <li><a href="villagehome?village=Amsarpada">Amsarpada</a></li>
      <li><a href="villagehome?village=Anjane">Anjane</a></li>
      <li><a href="villagehome?village=Anthipada">Anthipada</a></li>
      <li><a href="villagehome?village=Bandhare">Bandhare</a></li>
      <li><a href="villagehome?village=Bandharfali">Bandharfali</a></li>
      <li><a href="villagehome?village=Bandharpada">Bandharpada</a></li>
      <li><a href="villagehome?village=Bardipada (N.V.)">Bardipada (N.V.)</a></li>
      <li><a href="villagehome?village=Bari">Bari</a></li>
      <li><a href="villagehome?village=Bedki">Bedki</a></li>
      <li><a href="villagehome?village=Bedkipada">Bedkipada</a></li>
      <li><a href="villagehome?village=Bedkipada (N.V.)">Bedkipada (N.V.)</a></li>
      <li><a href="villagehome?village=Bhadwad">Bhadwad</a></li>
      <li><a href="villagehome?village=Bhamarmal (N.V.)">Bhamarmal (N.V.)</a></li>
      <li><a href="villagehome?village=Bhangarpada">Bhangarpada</a></li>
      <li><a href="villagehome?village=Bhardu">Bhardu</a></li>
      <li><a href="villagehome?village=Bhavare">Bhavare</a></li>
      <li><a href="villagehome?village=Bijadevi">Bijadevi</a></li>
      <li><a href="villagehome?village=Bijgaon">Bijgaon</a></li>
      <li><a href="villagehome?village=Bilbare">Bilbare</a></li>
      <li><a href="villagehome?village=Bilda">Bilda</a></li>
      <li><a href="villagehome?village=Bilgavhan">Bilgavhan</a></li>
      <li><a href="villagehome?village=Bilipada">Bilipada</a></li>
      <li><a href="villagehome?village=Bilmajer">Bilmajer</a></li>
      <li><a href="villagehome?village=Bokalzar">Bokalzar</a></li>
      <li><a href="villagehome?village=Borchak">Borchak</a></li>
      <li><a href="villagehome?village=Borpada">Borpada</a></li>
      <li><a href="villagehome?village=Borzar">Borzar</a></li>
      <li><a href="villagehome?village=Cheda">Cheda</a></li>
      <li><a href="villagehome?village=Chhirve">Chhirve</a></li>
      <li><a href="villagehome?village=Chikhali">Chikhali</a></li>
      <li><a href="villagehome?village=Chinchpada">Chinchpada</a></li>
      <li><a href="villagehome?village=Chitavi">Chitavi</a></li>
      <li><a href="villagehome?village=Chorvihir">Chorvihir</a></li>
      <li><a href="villagehome?village=Chouki">Chouki</a></li>
      <li><a href="villagehome?village=Dapur">Dapur</a></li>
      <li><a href="villagehome?village=Deolipada">Deolipada</a></li>
      <li><a href="villagehome?village=Deolipada">Deolipada</a></li>
      <li><a href="villagehome?village=Deomogara">Deomogara</a></li>
      <li><a href="villagehome?village=Dhanrat">Dhanrat</a></li>
      <li><a href="villagehome?village=Dhavalipada">Dhavalipada</a></li>
      <li><a href="villagehome?village=Dhong">Dhong</a></li>
      <li><a href="villagehome?village=Dhulipada">Dhulipada</a></li>
      <li><a href="villagehome?village=Dogegaon">Dogegaon</a></li>
      <li><a href="villagehome?village=Dudhave">Dudhave</a></li>
      <li><a href="villagehome?village=Gadad">Gadad</a></li>
      <li><a href="villagehome?village=Gangapur">Gangapur</a></li>
      <li><a href="villagehome?village=Ghodajamane">Ghodajamane</a></li>
      <li><a href="villagehome?village=Ghogal">Ghogal</a></li>
      <li><a href="villagehome?village=Gokul Nagar">Gokul Nagar</a></li>
      <li><a href="villagehome?village=Haldani">Haldani</a></li>
      <li><a href="villagehome?village=Hirafali (N.V.)">Hirafali (N.V.)</a></li>
      <li><a href="villagehome?village=Jamade">Jamade</a></li>
      <li><a href="villagehome?village=Jamtalav">Jamtalav</a></li>
      <li><a href="villagehome?village=Kadwan">Kadwan</a></li>
      <li><a href="villagehome?village=Kamod">Kamod</a></li>
      <li><a href="villagehome?village=Karanjali">Karanjali</a></li>
      <li><a href="villagehome?village=Karanji Bk">Karanji Bk</a></li>
      <li><a href="villagehome?village=Karanji Kh">Karanji Kh</a></li>
      <li><a href="villagehome?village=Karanjvel">Karanjvel</a></li>
      <li><a href="villagehome?village=Kareghat">Kareghat</a></li>
      <li><a href="villagehome?village=Kasare">Kasare</a></li>
      <li><a href="villagehome?village=Keli">Keli</a></li>
      <li><a href="villagehome?village=Kelpada">Kelpada</a></li>
      <li><a href="villagehome?village=Khadki">Khadki</a></li>
      <li><a href="villagehome?village=Khairve">Khairve</a></li>
      <li><a href="villagehome?village=Khalibardi">Khalibardi</a></li>
      <li><a href="villagehome?village=Khanapur">Khanapur</a></li>
      <li><a href="villagehome?village=Khandbara">Khandbara</a></li>
      <li><a href="villagehome?village=Kharje">Kharje</a></li>
      <li><a href="villagehome?village=Khatgaon">Khatgaon</a></li>
      <li><a href="villagehome?village=Khekada">Khekada</a></li>
      <li><a href="villagehome?village=Khokarwada">Khokarwada</a></li>
      <li><a href="villagehome?village=Khokase">Khokase</a></li>
      <li><a href="villagehome?village=Kholghar">Kholghar</a></li>
      <li><a href="villagehome?village=Kholvihir">Kholvihir</a></li>
      <li><a href="villagehome?village=Kokniwada">Kokniwada</a></li>
      <li><a href="villagehome?village=Kolde">Kolde</a></li>
      <li><a href="villagehome?village=Kothada">Kothada</a></li>
      <li><a href="villagehome?village=Kotkhamb">Kotkhamb</a></li>
      <li><a href="villagehome?village=Kukaran">Kukaran</a></li>
      <li><a href="villagehome?village=Lakkad Kot">Lakkad Kot</a></li>
      <li><a href="villagehome?village=Mahalkadu">Mahalkadu</a></li>
      <li><a href="villagehome?village=Malvan">Malvan</a></li>
      <li><a href="villagehome?village=Marod">Marod</a></li>
      <li><a href="villagehome?village=Menatalav">Menatalav</a></li>
      <li><a href="villagehome?village=Mendipada">Mendipada</a></li>
      <li><a href="villagehome?village=Mogarani">Mogarani</a></li>
      <li><a href="villagehome?village=Morkaranje">Morkaranje</a></li>
      <li><a href="villagehome?village=Morthuwa (N.V.)">Morthuwa (N.V.)</a></li>
      <li><a href="villagehome?village=Mothi Kadwan">Mothi Kadwan</a></li>
      <li><a href="villagehome?village=Moulipada">Moulipada</a></li>
      <li><a href="villagehome?village=Nagare">Nagare</a></li>
      <li><a href="villagehome?village=Nagziri">Nagziri</a></li>
      <li><a href="villagehome?village=Nanagipada">Nanagipada</a></li>
      <li><a href="villagehome?village=Nandvan">Nandvan</a></li>
      <li><a href="villagehome?village=Navagaon">Navagaon</a></li>
      <li><a href="villagehome?village=Navali">Navali</a></li>
      <li><a href="villagehome?village=Navi Sawarat">Navi Sawarat</a></li>
      <li><a href="villagehome?village=Nawapada">Nawapada</a></li>
      <li><a href="villagehome?village=Nawapada">Nawapada</a></li>
      <li><a href="villagehome?village=Nijampur">Nijampur</a></li>
      <li><a href="villagehome?village=Nimboni">Nimboni</a></li>
      <li><a href="villagehome?village=Nimdarde">Nimdarde</a></li>
      <li><a href="villagehome?village=Palipada">Palipada</a></li>
      <li><a href="villagehome?village=Palshi">Palshi</a></li>
      <li><a href="villagehome?village=Palsun">Palsun</a></li>
      <li><a href="villagehome?village=Panch Amba">Panch Amba</a></li>
      <li><a href="villagehome?village=Pangaran">Pangaran</a></li>
      <li><a href="villagehome?village=Pati">Pati</a></li>
      <li><a href="villagehome?village=Payarvihir">Payarvihir</a></li>
      <li><a href="villagehome?village=Pimpale">Pimpale</a></li>
      <li><a href="villagehome?village=Pimpran">Pimpran</a></li>
      <li><a href="villagehome?village=Pratappur">Pratappur</a></li>
      <li><a href="villagehome?village=Raingan">Raingan</a></li>
      <li><a href="villagehome?village=Raipur">Raipur</a></li>
      <li><a href="villagehome?village=Sagali">Sagali</a></li>
      <li><a href="villagehome?village=Sari">Sari</a></li>
      <li><a href="villagehome?village=Sawarat">Sawarat</a></li>
      <li><a href="villagehome?village=Shegave">Shegave</a></li>
      <li><a href="villagehome?village=Shehi">Shehi</a></li>
      <li><a href="villagehome?village=Shetgaon">Shetgaon</a></li>
      <li><a href="villagehome?village=Shrawani">Shrawani</a></li>
      <li><a href="villagehome?village=Sonare Digar">Sonare Digar</a></li>
      <li><a href="villagehome?village=Sonkhadake">Sonkhadake</a></li>
      <li><a href="villagehome?village=Sonpada">Sonpada</a></li>
      <li><a href="villagehome?village=Suli">Suli</a></li>
      <li><a href="villagehome?village=Talavipada">Talavipada</a></li>
      <li><a href="villagehome?village=Tarapur">Tarapur</a></li>
      <li><a href="villagehome?village=Tarpada">Tarpada</a></li>
      <li><a href="villagehome?village=Thuwa">Thuwa</a></li>
      <li><a href="villagehome?village=Tilasar">Tilasar</a></li>
      <li><a href="villagehome?village=Tinmauli">Tinmauli</a></li>
      <li><a href="villagehome?village=Ukalapani">Ukalapani</a></li>
      <li><a href="villagehome?village=Umaran">Umaran</a></li>
      <li><a href="villagehome?village=Umbardi">Umbardi</a></li>
      <li><a href="villagehome?village=Unchishevdi (N.V.)">Unchishevdi (N.V.)</a></li>
      <li><a href="villagehome?village=Vadade Bk.">Vadade Bk.</a></li>
      <li><a href="villagehome?village=Vadkalambi">Vadkalambi</a></li>
      <li><a href="villagehome?village=Vadkhut">Vadkhut</a></li>
      <li><a href="villagehome?village=Vadphali">Vadphali</a></li>
      <li><a href="villagehome?village=Vagade">Vagade</a></li>
      <li><a href="villagehome?village=Varadipada">Varadipada</a></li>
      <li><a href="villagehome?village=Vasade">Vasade</a></li>
      <li><a href="villagehome?village=Vatvi">Vatvi</a></li>
      <li><a href="villagehome?village=Vavadi">Vavadi</a></li>
      <li><a href="villagehome?village=Vijapur">Vijapur</a></li>
      <li><a href="villagehome?village=Visarwadi">Visarwadi</a></li>
      <li><a href="villagehome?village=Wadsatra">Wadsatra</a></li>
      <li><a href="villagehome?village=Wagadi">Wagadi</a></li>
      <li><a href="villagehome?village=Wakipada">Wakipada</a></li>
      <li><a href="villagehome?village=Wal Amarai">Wal Amarai</a></li>
      <li><a href="villagehome?village=Wanzale">Wanzale</a></li>
      <li><a href="villagehome?village=Watvi">Watvi</a></li>
      <li><a href="villagehome?village=Zamanzar">Zamanzar</a></li>
      <li><a href="villagehome?village=Zamatyawad">Zamatyawad</a></li>
      <li><a href="villagehome?village=Zaripada (N.V.)">Zaripada (N.V.)</a></li>
          </ul>
</li>
<li class="dropdown">
          <span href="#" class="nav-btn" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Sahada <span class="caret"></span></span>
          <ul class="dropdown-menu" id="myDropdown5">
			<input type="text" id="myInput5" onkeyup="filterFunction5()" placeholder="Search for village.." title="Type in a name">   
      <li><a href="villagehome?village=Abhanpur">Abhanpur</a></li>
      <li><a href="villagehome?village=Adgaon">Adgaon</a></li>
      <li><a href="villagehome?village=Akaspur">Akaspur</a></li>
      <li><a href="villagehome?village=Alkhed">Alkhed</a></li>
      <li><a href="villagehome?village=Ambapur">Ambapur</a></li>
      <li><a href="villagehome?village=Amode">Amode</a></li>
      <li><a href="villagehome?village=Anakwade">Anakwade</a></li>
      <li><a href="villagehome?village=Anarad">Anarad</a></li>
      <li><a href="villagehome?village=Asalod">Asalod</a></li>
      <li><a href="villagehome?village=Asus">Asus</a></li>
      <li><a href="villagehome?village=Aurangpur">Aurangpur</a></li>
      <li><a href="villagehome?village=Awage">Awage</a></li>
      <li><a href="villagehome?village=Bahirpur ">Bahirpur</a></li>
      <li><a href="villagehome?village=Bamkheda-t-sarangkheda">Bamkheda-t-sarangkheda</a></li>
      <li><a href="villagehome?village=Bamkheda-t-tarhad">Bamkheda-t-tarhad</a></li>
      <li><a href="villagehome?village=Bhade">Bhade</a></li>
      <li><a href="villagehome?village=Bhadgaon">Bhadgaon</a></li>
      <li><a href="villagehome?village=Bhagapur">Bhagapur</a></li>
      <li><a href="villagehome?village=Bhongra">Bhongra</a></li>
      <li><a href="villagehome?village=Bhortek">Bhortek</a></li>
      <li><a href="villagehome?village=Bhulane">Bhulane</a></li>
      <li><a href="villagehome?village=Bhute">Bhute</a></li>
      <li><a href="villagehome?village=Biladi-t-haveli">Biladi-t-haveli</a></li>
      <li><a href="villagehome?village=Biladi-t-sarangkheda">Biladi-t-sarangkheda</a></li>
      <li><a href="villagehome?village=Borale">Borale</a></li>
      <li><a href="villagehome?village=Bramhanpuri">Bramhanpuri</a></li>
      <li><a href="villagehome?village=Budigavhan">Budigavhan</a></li>
      <li><a href="villagehome?village=Bupkari">Bupkari</a></li>
      <li><a href="villagehome?village=Chandsaili">Chandsaili</a></li>
      <li><a href="villagehome?village=Chandsaili">Chandsaili</a></li>
      <li><a href="villagehome?village=Chikhali Bk">Chikhali Bk</a></li>
      <li><a href="villagehome?village=Chikhali Kh.">Chikhali Kh.</a></li>
      <li><a href="villagehome?village=Chirde">Chirde</a></li>
      <li><a href="villagehome?village=Chirkhan">Chirkhan</a></li>
      <li><a href="villagehome?village=Damalde">Damalde</a></li>
      <li><a href="villagehome?village=Damerkheda">Damerkheda</a></li>
      <li><a href="villagehome?village=Dara">Dara</a></li>
      <li><a href="villagehome?village=Deur">Deur</a></li>
      <li><a href="villagehome?village=Dhandre Bk">Dhandre Bk</a></li>
      <li><a href="villagehome?village=Dhandre Kh.">Dhandre Kh.</a></li>
      <li><a href="villagehome?village=Dhurkheda">Dhurkheda</a></li>
      <li><a href="villagehome?village=Dondwade">Dondwade</a></li>
      <li><a href="villagehome?village=Dongargaon">Dongargaon</a></li>
      <li><a href="villagehome?village=Dudhkheda">Dudhkheda</a></li>
      <li><a href="villagehome?village=Fattepur">Fattepur</a></li>
      <li><a href="villagehome?village=Fes">Fes</a></li>
      <li><a href="villagehome?village=Ganor">Ganor</a></li>
      <li><a href="villagehome?village=Godipur">Godipur</a></li>
      <li><a href="villagehome?village=Gogapur">Gogapur</a></li>
      <li><a href="villagehome?village=Hingani">Hingani</a></li>
      <li><a href="villagehome?village=Hol">Hol</a></li>
      <li><a href="villagehome?village=Hol-gujari">Hol-gujari</a></li>
      <li><a href="villagehome?village=Isalampur">Isalampur</a></li>
      <li><a href="villagehome?village=Jaavade-t-haveli">Jaavade-t-haveli</a></li>
      <li><a href="villagehome?village=Jainagar">Jainagar</a></li>
      <li><a href="villagehome?village=Jam">Jam</a></li>
      <li><a href="villagehome?village=Javade-t-borad">Javade-t-borad</a></li>
      <li><a href="villagehome?village=Javkhede">Javkhede</a></li>
      <li><a href="villagehome?village=Junavane">Junavane</a></li>
      <li><a href="villagehome?village=Kahatul">Kahatul</a></li>
      <li><a href="villagehome?village=Kakarde Bk">Kakarde Bk</a></li>
      <li><a href="villagehome?village=Kakarde Kh">Kakarde Kh</a></li>
      <li><a href="villagehome?village=Kalambu">Kalambu</a></li>
      <li><a href="villagehome?village=Kalmad-t-haveli">Kalmad-t-haveli</a></li>
      <li><a href="villagehome?village=Kalmadi-t-borad">Kalmadi-t-borad</a></li>
      <li><a href="villagehome?village=Kalsadi">Kalsadi</a></li>
      <li><a href="villagehome?village=Kamaravad">Kamaravad</a></li>
      <li><a href="villagehome?village=Kanadi Kh">Kanadi Kh</a></li>
      <li><a href="villagehome?village=Kanadi-t-haveli">Kanadi-t-haveli</a></li>
      <li><a href="villagehome?village=Kansai">Kansai</a></li>
      <li><a href="villagehome?village=Karajai">Karajai</a></li>
      <li><a href="villagehome?village=Karankheda">Karankheda</a></li>
      <li><a href="villagehome?village=Karjot">Karjot</a></li>
      <li><a href="villagehome?village=Katharde Kh">Katharde Kh</a></li>
      <li><a href="villagehome?village=Katharde-digar">Katharde-digar</a></li>
      <li><a href="villagehome?village=Kauthal-t-sarangkheda">Kauthal-t-sarangkheda</a></li>
      <li><a href="villagehome?village=Kauthal-t-shahade">Kauthal-t-shahade</a></li>
      <li><a href="villagehome?village=Kavalith">Kavalith</a></li>
      <li><a href="villagehome?village=Khairve">Khairve</a></li>
      <li><a href="villagehome?village=Khamkheda">Khamkheda</a></li>
      <li><a href="villagehome?village=Khaparkheda">Khaparkheda</a></li>
      <li><a href="villagehome?village=Khargaon">Khargaon</a></li>
      <li><a href="villagehome?village=Khed-digar">Khed-digar</a></li>
      <li><a href="villagehome?village=Kochare">Kochare</a></li>
      <li><a href="villagehome?village=Kondaval">Kondaval</a></li>
      <li><a href="villagehome?village=Kotbandhani">Kotbandhani</a></li>
      <li><a href="villagehome?village=Kothali-t-haveli">Kothali-t-haveli</a></li>
      <li><a href="villagehome?village=Kothali-t-sarangkheda">Kothali-t-sarangkheda</a></li>
      <li><a href="villagehome?village=Kudhavad">Kudhavad</a></li>
      <li><a href="villagehome?village=Kukaval">Kukaval</a></li>
      <li><a href="villagehome?village=Kukdel">Kukdel</a></li>
      <li><a href="villagehome?village=Kurangi">Kurangi</a></li>
      <li><a href="villagehome?village=Kurhavad-t-sarangkheda">Kurhavad-t-sarangkheda</a></li>
      <li><a href="villagehome?village=Kusumwade">Kusumwade</a></li>
      <li><a href="villagehome?village=Lachore">Lachore</a></li>
      <li><a href="villagehome?village=Lakkadkot">Lakkadkot</a></li>
      <li><a href="villagehome?village=Lambole">Lambole</a></li>
      <li><a href="villagehome?village=Langadi-bhavani">Langadi-bhavani</a></li>
      <li><a href="villagehome?village=Lohare">Lohare</a></li>
      <li><a href="villagehome?village=Londhare">Londhare</a></li>
      <li><a href="villagehome?village=Lonkheda">Lonkheda</a></li>
      <li><a href="villagehome?village=Madkani">Madkani</a></li>
      <li><a href="villagehome?village=Malgaon">Malgaon</a></li>
      <li><a href="villagehome?village=Maloni">Maloni</a></li>
      <li><a href="villagehome?village=Manarad">Manarad</a></li>
      <li><a href="villagehome?village=Mandane">Mandane</a></li>
      <li><a href="villagehome?village=Manmodya">Manmodya</a></li>
      <li><a href="villagehome?village=Matkut">Matkut</a></li>
      <li><a href="villagehome?village=Mhasavad">Mhasavad</a></li>
      <li><a href="villagehome?village=Mohide-t-shahade">Mohide-t-shahade</a></li>
      <li><a href="villagehome?village=Mohinde-t-haveli">Mohinde-t-haveli</a></li>
      <li><a href="villagehome?village=Mubarakpur">Mubarakpur</a></li>
      <li><a href="villagehome?village=Nagziri">Nagziri</a></li>
      <li><a href="villagehome?village=Nandarde">Nandarde</a></li>
      <li><a href="villagehome?village=Nandarkheda">Nandarkheda</a></li>
      <li><a href="villagehome?village=Nandya">Nandya</a></li>
      <li><a href="villagehome?village=Navagaon (F.V.)">Navagaon (F.V.)</a></li>
      <li><a href="villagehome?village=Navalpur">Navalpur</a></li>
      <li><a href="villagehome?village=Navanagar">Navanagar</a></li>
      <li><a href="villagehome?village=New-aslod">New-aslod</a></li>
      <li><a href="villagehome?village=Nimbardi (F.V.)">Nimbardi (F.V.)</a></li>
      <li><a href="villagehome?village=Nimbhore">Nimbhore</a></li>
      <li><a href="villagehome?village=Ozarte">Ozarte</a></li>
      <li><a href="villagehome?village=Padalde-bk">Padalde-bk</a></li>
      <li><a href="villagehome?village=Padalde-kh.">Padalde-kh.</a></li>
      <li><a href="villagehome?village=Palasvade">Palasvade</a></li>
      <li><a href="villagehome?village=Pari">Pari</a></li>
      <li><a href="villagehome?village=Pimparde">Pimparde</a></li>
      <li><a href="villagehome?village=Pimplod">Pimplod</a></li>
      <li><a href="villagehome?village=Pimprani">Pimprani</a></li>
      <li><a href="villagehome?village=Pimpri">Pimpri</a></li>
      <li><a href="villagehome?village=Pingane">Pingane</a></li>
      <li><a href="villagehome?village=Prakasha">Prakasha</a></li>
      <li><a href="villagehome?village=Pusanad">Pusanad</a></li>
      <li><a href="villagehome?village=Raikhed">Raikhed</a></li>
      <li><a href="villagehome?village=Rampur">Rampur</a></li>
      <li><a href="villagehome?village=Ranipur">Ranipur</a></li>
      <li><a href="villagehome?village=Sarangkheda">Sarangkheda</a></li>
      <li><a href="villagehome?village=Sasade">Sasade</a></li>
      <li><a href="villagehome?village=Sawakheda">Sawakheda</a></li>
      <li><a href="villagehome?village=Sawalde">Sawalde</a></li>
      <li><a href="villagehome?village=Shahade (r)">Sahada (r)</a></li>
      <li><a href="villagehome?village=Shahane">Shahane</a></li>
      <li><a href="villagehome?village=Shelti">Shelti</a></li>
      <li><a href="villagehome?village=Shirud-digar">Shirud-digar</a></li>
      <li><a href="villagehome?village=Shirud-t-haveli">Shirud-t-haveli</a></li>
      <li><a href="villagehome?village=Shrikhed">Shrikhed</a></li>
      <li><a href="villagehome?village=Sonvad-t-s">Sonvad-t-s</a></li>
      <li><a href="villagehome?village=Sonval-t-borad">Sonval-t-borad</a></li>
      <li><a href="villagehome?village=Sonval-t-haveli">Sonval-t-haveli</a></li>
      <li><a href="villagehome?village=Sultanpur">Sultanpur</a></li>
      <li><a href="villagehome?village=Sulwade">Sulwade</a></li>
      <li><a href="villagehome?village=Talavadi">Talavadi</a></li>
      <li><a href="villagehome?village=Tarhadi-t-borad">Tarhadi-t-borad</a></li>
      <li><a href="villagehome?village=Tawalai">Tawalai</a></li>
      <li><a href="villagehome?village=Tembhali">Tembhali</a></li>
      <li><a href="villagehome?village=Tembhe Bk">Tembhe Bk</a></li>
      <li><a href="villagehome?village=Tembhe-t-s">Tembhe-t-s</a></li>
      <li><a href="villagehome?village=Thengche">Thengche</a></li>
      <li><a href="villagehome?village=Tidhare">Tidhare</a></li>
      <li><a href="villagehome?village=Tikhore">Tikhore</a></li>
      <li><a href="villagehome?village=Titari">Titari</a></li>
      <li><a href="villagehome?village=Torkheda">Torkheda</a></li>
      <li><a href="villagehome?village=Tuki">Tuki</a></li>
      <li><a href="villagehome?village=Ubhadagad">Ubhadagad</a></li>
      <li><a href="villagehome?village=Udhalod">Udhalod</a></li>
      <li><a href="villagehome?village=Ukhalshem">Ukhalshem</a></li>
      <li><a href="villagehome?village=Umarti">Umarti</a></li>
      <li><a href="villagehome?village=Untavad">Untavad</a></li>
      <li><a href="villagehome?village=Vadali">Vadali</a></li>
      <li><a href="villagehome?village=Vadchhil">Vadchhil</a></li>
      <li><a href="villagehome?village=Vadgaon">Vadgaon</a></li>
      <li><a href="villagehome?village=Vaijali">Vaijali</a></li>
      <li><a href="villagehome?village=Varde">Varde</a></li>
      <li><a href="villagehome?village=Vardhe">Vardhe</a></li>
      <li><a href="villagehome?village=Varul-t-s">Varul-t-s</a></li>
      <li><a href="villagehome?village=Virpur">Virpur</a></li>
      <li><a href="villagehome?village=Wadi">Wadi</a></li>
      <li><a href="villagehome?village=Wagharde">Wagharde</a></li>
      <li><a href="villagehome?village=Waghode">Waghode</a></li>
      <li><a href="villagehome?village=Welavad">Welavad</a></li>
          </ul>
</li>
<li class="dropdown">
          <span href="#" class="nav-btn" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Taloda <span class="caret"></span></span>
          <ul class="dropdown-menu" id="myDropdown6">
			<input type="text" id="myInput6" onkeyup="filterFunction6()" placeholder="Search for village.." title="Type in a name">
      <li><a href="villagehome?village=Alwan">Alwan</a></li>
      <li><a href="villagehome?village=Amaled">Amaled</a></li>
      <li><a href="villagehome?village=Amalpada">Amalpada</a></li>
      <li><a href="villagehome?village=Amoni">Amoni</a></li>
      <li><a href="villagehome?village=Ashte Tarf Borad">Ashte Tarf Borad</a></li>
      <li><a href="villagehome?village=Ban">Ban</a></li>
      <li><a href="villagehome?village=Bandhare">Bandhare</a></li>
      <li><a href="villagehome?village=Belipada">Belipada</a></li>
      <li><a href="villagehome?village=Bhavar">Bhavar</a></li>
      <li><a href="villagehome?village=Biyamal">Biyamal</a></li>
      <li><a href="villagehome?village=Borad">Borad</a></li>
      <li><a href="villagehome?village=Budhaval">Budhaval</a></li>
      <li><a href="villagehome?village=Budhavali">Budhavali</a></li>
      <li><a href="villagehome?village=Chaugaon Bk">Chaugaon Bk</a></li>
      <li><a href="villagehome?village=Chaugaon Kh">Chaugaon Kh</a></li>
      <li><a href="villagehome?village=Chhotadhanpur">Chhotadhanpur</a></li>
      <li><a href="villagehome?village=Chinode">Chinode</a></li>
      <li><a href="villagehome?village=Dalelpur">Dalelpur</a></li>
      <li><a href="villagehome?village=Daswad">Daswad</a></li>
      <li><a href="villagehome?village=Dekati">Dekati</a></li>
      <li><a href="villagehome?village=Dhanore">Dhanore</a></li>
      <li><a href="villagehome?village=Dhanpur">Dhanpur</a></li>
      <li><a href="villagehome?village=Ekdhad">Ekdhad</a></li>
      <li><a href="villagehome?village=Gadhavali">Gadhavali</a></li>
      <li><a href="villagehome?village=Gaulanpada">Gaulanpada</a></li>
      <li><a href="villagehome?village=Gopalpur">Gopalpur</a></li>
      <li><a href="villagehome?village=Gunjali">Gunjali</a></li>
      <li><a href="villagehome?village=Halalpur">Halalpur</a></li>
      <li><a href="villagehome?village=Ichhagavhan">Ichhagavhan</a></li>
      <li><a href="villagehome?village=Juwani (F)">Juwani (F)</a></li>
      <li><a href="villagehome?village=Kadhel">Kadhel</a></li>
      <li><a href="villagehome?village=Kakalpur">Kakalpur</a></li>
      <li><a href="villagehome?village=Kalamsare">Kalamsare</a></li>
      <li><a href="villagehome?village=Karde">Karde</a></li>
      <li><a href="villagehome?village=Kazipur Talawadi">Kazipur Talawadi</a></li>
      <li><a href="villagehome?village=Khardi Bk">Khardi Bk</a></li>
      <li><a href="villagehome?village=Khardi Kh">Khardi Kh</a></li>
      <li><a href="villagehome?village=Kharwad">Kharwad</a></li>
      <li><a href="villagehome?village=Khedale">Khedale</a></li>
      <li><a href="villagehome?village=Khusgavhan">Khusgavhan</a></li>
      <li><a href="villagehome?village=Kothar">Kothar</a></li>
      <li><a href="villagehome?village=Kundave">Kundave</a></li>
      <li><a href="villagehome?village=Lakhapur (Rev)">Lakhapur (Rev)</a></li>
      <li><a href="villagehome?village=Lakhapur(F)">Lakhapur(F)</a></li>
      <li><a href="villagehome?village=Lakkadkot">Lakkadkot</a></li>
      <li><a href="villagehome?village=Lobhani">Lobhani</a></li>
      <li><a href="villagehome?village=Mal Kh">Mal Kh</a></li>
      <li><a href="villagehome?village=Malde">Malde</a></li>
      <li><a href="villagehome?village=Mendhwad">Mendhwad</a></li>
      <li><a href="villagehome?village=Mod">Mod</a></li>
      <li><a href="villagehome?village=Modalpada">Modalpada</a></li>
      <li><a href="villagehome?village=Mohida">Mohida</a></li>
      <li><a href="villagehome?village=Morwad">Morwad</a></li>
      <li><a href="villagehome?village=Nalgavhan">Nalgavhan</a></li>
      <li><a href="villagehome?village=Narmadanagar (N.V.)">Narmadanagar (N.V.)</a></li>
      <li><a href="villagehome?village=Navagaon">Navagaon</a></li>
      <li><a href="villagehome?village=Nyuban">Nyuban</a></li>
      <li><a href="villagehome?village=Padalpur">Padalpur</a></li>
      <li><a href="villagehome?village=Padhadi">Padhadi</a></li>
      <li><a href="villagehome?village=Pimparpada">Pimparpada</a></li>
      <li><a href="villagehome?village=Pratappur">Pratappur</a></li>
      <li><a href="villagehome?village=Rajviri">Rajviri</a></li>
      <li><a href="villagehome?village=Rampur">Rampur</a></li>
      <li><a href="villagehome?village=Ranapur">Ranapur</a></li>
      <li><a href="villagehome?village=Ranipur">Ranipur</a></li>
      <li><a href="villagehome?village=Ranzani">Ranzani</a></li>
      <li><a href="villagehome?village=Rapapur">Rapapur</a></li>
      <li><a href="villagehome?village=Ratanpada">Ratanpada</a></li>
      <li><a href="villagehome?village=Razave Reselle (N.V.)">Razave Reselle (N.V.)</a></li>
      <li><a href="villagehome?village=Retpada">Retpada</a></li>
      <li><a href="villagehome?village=Revanagar (N.V.)">Revanagar (N.V.)</a></li>
      <li><a href="villagehome?village=Rozave">Rozave</a></li>
      <li><a href="villagehome?village=Salsadi">Salsadi</a></li>
      <li><a href="villagehome?village=Sardarnagar (N.V.)">Sardarnagar (N.V.)</a></li>
      <li><a href="villagehome?village=Satone">Satone</a></li>
      <li><a href="villagehome?village=Sawar">Sawar</a></li>
      <li><a href="villagehome?village=Sawarpada">Sawarpada</a></li>
      <li><a href="villagehome?village=Selingpur">Selingpur</a></li>
      <li><a href="villagehome?village=Shelwai">Shelwai</a></li>
      <li><a href="villagehome?village=Shirve">Shirve</a></li>
      <li><a href="villagehome?village=Singaspur">Singaspur</a></li>
      <li><a href="villagehome?village=Sojarbara">Sojarbara</a></li>
      <li><a href="villagehome?village=Somawal Bk">Somawal Bk</a></li>
      <li><a href="villagehome?village=Somawal Kh">Somawal Kh</a></li>
      <li><a href="villagehome?village=Sorapada">Sorapada</a></li>
      <li><a href="villagehome?village=Talode (Rural)">Taloda (Rural)</a></li>
      <li><a href="villagehome?village=Talve">Talve</a></li>
      <li><a href="villagehome?village=Tarhavad">Tarhavad</a></li>
      <li><a href="villagehome?village=Umarkuwa">Umarkuwa</a></li>
      <li><a href="villagehome?village=Umri">Umri</a></li>
      <li><a href="villagehome?village=Walheri">Walheri</a></li>
      <li><a href="villagehome?village=Ziri">Ziri</a></li>
          </ul>
</li>
  <li><span class="nav-btn" id="help-btn" onclick="openhelp()">Help</span></li>
</ul>
</div>
<div class="container-fluid" id="nav2">
<section class="row well">
<div id="visit-info" class="col-xs-6">
        <span id="visitors">Our visitors Count</span><br>
       <!-- Start of WebFreeCounter Code -->
<a href="https://www.webfreecounter.com/" target="_blank"><img src="https://www.webfreecounter.com/hit.php?id=gffaao&nd=9&style=5" border="0" alt="free counter"></a>
<!-- End of WebFreeCounter Code -->
        </div>
<div id="google_translate_element" class="col-xs-6"><span id="trans-cont">To Change Content Language</span></div>
</section>
</div>
	</header>
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
	<section id="home-content">
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
<div class="container-fluid" id="about-content">
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
		<span  id="map-ttl">Map of Nandurbar</span>
			<div class="iframe-container text-center">
			<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d55673.01709689226!2d74.21479173468452!3d21.369177586141443!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3bdf09953058e561%3A0x7d3b72c42f40546a!2sNandurbar%2C%20Maharashtra%20425412!5e0!3m2!1sen!2sin!4v1599325154276!5m2!1sen!2sin" width="400" height="300" frameborder="0" style="border:0;" allowfullscreen="" aria-hidden="false" tabindex="0"></iframe>		
		</div>	
			</div>
  </section>

		<section class="row" id="about-img">
			<div class="col-xs-6 col-sm-3" id="gramsev">
			<img src="{{asset('images/collector.png')}}"  alt="collector" width=100%   class="img-fluid img-rounded"> 
      <div id="gs">Collector</div>
      <div id="gs">Dr.Rajendra Bharude</div>	
			</div>
			<div class="col-xs-6 col-sm-3" id="sarpanch">
			<img src="{{asset('images/mp.png')}}"  alt="MP" width=100%  class="img-fluid img-rounded"> 
      <div id="sp">MP</div>	
			<div id="sp">Dr.Heena Gavit</div>	
      
			</div>
			<div class="col-xs-6 col-sm-3" id="krushisev">
				<img src="{{asset('images/krushisev.png')}}"  alt="CEO" width=100%  class="img-fluid img-rounded"> 
        <div>CEO</div>
        <div>CEO Name</div>
        
			</div>
			<div class="col-xs-6 col-sm-3" id="zp">
				<img src="{{asset('images/zp_pres.png')}}"  alt="zp-president" width=100%  class="img-fluid img-rounded">
        <div>ZP President</div> 
        <div>
        Adv. Seema Valvi
        </div>
			</div>
		</section>

</div>
<!--end of about-->


<!--start of help page-->
<div class="container-fluid" id="help-content">
	<section class="row"> 
		<div class="col-xs-12 col-sm-6" id="contact-det">
    <p class="text-center"><span id="help-ttl">Help<span></p>
      <div id="contact-con">
				<p><span >Contact Number: </span><strong>9999999999</strong></p>
        <p><span>Email:</span><strong>E-support@support.com</strong></p>
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
  <script type="text/javascript" src="{{asset('javascript/script.js')}}"></script>
<script type="text/javascript" src="{{asset('javascript/jquery-3.5.1.min.js')}}"></script>
<script type="text/javascript" src="{{asset('javascript/bootstrap.min.js')}}"></script>

<script type="text/javascript">
function googleTranslateElementInit() {
  new google.translate.TranslateElement({pageLanguage: 'en',includedLanguages:'mr,en', layout: google.translate.TranslateElement.InlineLayout.SIMPLE}, 'google_translate_element');
}
</script>

<script type="text/javascript" src="//translate.google.com/translate_a/element.js?cb=googleTranslateElementInit"></script>

</body>
</html>
