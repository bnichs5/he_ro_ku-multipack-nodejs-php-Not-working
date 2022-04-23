<!DOCTYPE html>
  
<html lang="en">

<head profile="http://www.w3.org/2005/10/profile">
	<meta charset=utf-8 />
	<title>Plex Export</title>
	<meta name="viewport" content="width=device-width, initial-scale=0.65,minimum-scale=0.65,maximum-scale=0.65" />
	<link rel="icon" type="image/x-icon" href="assets2/images/favicon.ico">
	
	

    <style type="text/css">
   
/*
	Plex Export Stylesheet
	Author: Luke Lanchester <luke@lukelanchester.com>
	Author: dpDesignz <webmaster@dpdesignz.co.nz>
	Changes for Dark Mode made by Dragos
	https://github.com/themsk666/Plex-Export-Dark
*/
* { margin: 0; padding: 0; border: 0; list-style: none; font-weight: normal; }
body {
	display: grid; grid-template-columns: 1fr; grid-template-rows: auto 1fr auto;
	min-height: 100vh;
	font-family: "Arial","Helvetica",sans-serif; font-size: 12px; color: #fff;
	background:#282B2E;
}
body > main.container {
	display: grid; grid-template-columns: 200px 1fr; grid-gap: 2px;
	box-shadow: 0px 0px 20px 10px rgba(0,0,0,0.65);
}
strong {
	font-weight: 600;
}
.clear {
	clear: both;
}
.hide {
	display: none;
}
.container {
	/* width: 1200px; Choose a custom width or leave at 100% for full-screen */
	width: 100%;
	padding: 0; margin: 0 auto;
	background-color: #282B2E;
	clear: both;
}








/* HEADER //////////////////////////////////////////////////////////////////////////*/

#header {
	display: grid; grid-template-columns: repeat(2, 1fr);
	height: 95px;
	background: #282B2E;
	position:relative;
}
#header h1 {
	width: 299px; height: 95px;
	margin-left: 16px;
	background: url(../images/logo.png) no-repeat;
}
#header h1 span { display: none; }
#header p {
	text-align: right;
	height: 95px;
	overflow: hidden;
}
#header p span {
	display: block;
	padding: 4px 6px 0 0;
	font-size: 16px; text-transform: uppercase; color: #60666B;
}
#header p strong {
	display: block;
	margin: -6px -6px 0 0;
	font-size: 80px; color: #3E4146;
}
#header #search {
	//display: flex;
	//justify-content: flex-end; align-items: center;
	width:10%;
	margin:auto; 
	margin-right:10px;
	margin-bottom:-15px;
	position:absolute;
	left:0;
	bottom:-150px;
	padding: 18px 15px;
}
#header input {
	width: 180px;
	padding: 4px 3px;
	border: 1px solid #262626; border-radius: 4px;
	color: #787878;
	background: #FFF;
}
/* SIDEBAR //////////////////////////////////////////////////////////////////////////*/

#sidebar {
	margin-top:3px;
	
}

#toggle_sidebar {
	display: inline-flex;
	width: 100%;
	padding: 8px 0 0 13px;
	color: hsl(31, 100%, 56%);
	text-decoration: none;
	font-weight: bold;
	font-size: 1.2em;
	cursor: pointer;
}

#toggle_sidebar:hover {
	text-decoration: underline;
}

.sidebar-section h2 {
	font-size: 20px;
	color: #fff;
	padding: 8px 0 0 13px;
	border-bottom:1px solid #ff931f
}



.generic-list {
	margin: 3px 0 14px;
}
.sections-list li,
.generic-list li {
	display: grid; grid-template-columns: 1fr 30px;
	padding: 3px 3px 3px 3px;
}
.sections-list li {
	grid-template-areas: "section-caption section-total";
	background: no-repeat 17px 50%;
}
.generic-list li {
	grid-template-areas: "generic-caption generic-total";
	padding-left: 15px;
}
.sections-list .movie {
	#background-image: url(../images/icon-movie.png);
}
.sections-list .show {
	#background-image: url(../images/icon-show.png);
}
.sections-list li span {
	grid-area: section-caption;
}
.generic-list li span {
	grid-area: generic-caption;
}
.sections-list li em,
.generic-list li em {
	display: block;
	margin-top: -2px; padding: 3px 4px;
	font-size: 10px; font-style: normal; color: #fff; text-align: center;
	
	
}
.sections-list li em {
	grid-area: section-total;
}
.generic-list li em {
	grid-area: generic-total;
	color: #fff;
	
}
.sections-list .current,
.generic-list .current {
	color: #ff931f;
}
.sections-list .current em,
.generic-list .current em {
	
	
}
.sections-list li:hover,
.generic-list li:hover {
	color: #FFF;
	color: #FF9421;
	cursor: pointer;
}


/* MAIN //////////////////////////////////////////////////////////////////////////*/

#main {
	border-left: 1px solid #262626;
}

#section-header {
	padding: 1px 0 1px 1px;
	display:none;
	box-shadow: 0px 3px 4px 0px #000;	
}
#section-header div {
	padding: 7px 0 0x;
	margin-bottom:-1px;
	
}
#section-header h2 {
	padding-bottom: 4px;
	font-size: 20px; color: #282B2E;
}
#section-header .sidebar-section .current{
background:rgba(0, 0, 0, 0.4);
color: rgb(255,147,31);
border-radius:1px;

}
#section-header .sidebar-section li:hover{
background:rgba(0, 0, 0, 0.5);
color: rgb(255,147,31);
}
#section-header .sidebar-section,#popup_seasons_seasons{
background:rgba(255, 255, 255, 0.1);
min-height:34px;
box-shadow: 0px 3px 4px 0px #000;
}
#popup_seasons_seasons{
padding-top:5px;
}
.sticky {
  position: fixed;
  top: 0;
  width: 100%;
  #left:200px;
}
.sticky + #section_num_items{
  padding-top: 50px;
}
#section-header .sidebar-section li,#popup_seasons li{
margin:2px;
display:inline-block;
width:20%;
position:relative;
text-transform: uppercase;
height:20px;
vertical-align: middle;
transition: background-color .2s,color .2s;
padding: 5px 20px;
color: hsla(0,0%,100%,.45);
background-color: transparent;
font-size: 15px;
font-weight:600;
font-family: Open Sans Bold,Helvetica Neue,Helvetica,Arial,sans-serif;
}
#popup_seasons li{
width:unset;

}
#plex_section_list{
text-align:center;
}
#plex_section_list li{
text-align:center;
opacity:1;
}
#section_num_items{ 
color:rgb(255,147,31, 0.8);
font-weight:bold;
text-align:center;
margin-top:5px;
}
#section-header .sidebar-section em{
width:20px;
position: absolute;
right:1px;
	}

#item-list-status {
	margin: 21px 23px 48px 22px;
	padding-top:60px;
	text-align: center; color: #C9CACB;font-size: 20px; 
}


#item-list {
	margin: 10px 0px;
}
#item-list ul {
	display: flex; flex-wrap: wrap;
	justify-content: space-evenly;
}
.item:hover{

#box-shadow: 0px 0px 4px 0px #ff931f;
}
.item {
	display:grid; grid-template-columns: 1fr; grid-template-rows: auto 1fr;
	border-radius:1px;
	width: 140px;
	margin: 0 3px 10px;
	background: #262626;
	color: #fff; text-shadow: 1px 1px 1px #000;
	box-shadow: 0px 3px 3px 1px #000;
	
}
.item img {
	height: 210px;
    width: 140px;
	border-radius:1px 1px 0 0
}
.item main {
	display: flex; align-items: center;
}
.item h4 {
	width: 100%;
	padding: 5px 1px 10px;
	font-size: 12px; 
	text-align: center;
	max-width: 19ch;
	font-weight:600;
	white-space: initial;
    overflow: visible;
    text-overflow: ellipsis;
    color:#eaeaea
}
.item:hover {
	color: #FFF;  cursor: pointer;
}
.starring{
white-space: nowrap;max-width: 100ch;overflow: hidden;text-overflow: ellipsis;
}
/* POPUP //////////////////////////////////////////////////////////////////////////*/

#popup-overlay {
	display: none;
	position: absolute; top: 0; left: 0;
	width: 100%; height: 100%;
	//background: #282B2E; opacity: 0.6;
    //background: url(https://image.tmdb.org/t/p/original/z3ioibdjWZOYeXjoiabFOFOfPI3.jpg) no-repeat !important;
         
                    
}
#popup-container {
	display: none;
	position: absolute; top: 0; left: 0;
	//width: 1460px; max-height: 1000px;
	box-shadow: 0 0 8px #333538;z-index:9999;
    //background: url(https://image.tmdb.org/t/p/original/z3ioibdjWZOYeXjoiabFOFOfPI3.jpg) no-repeat !important; opacity: 0.59;
    //background-position: right top;
	//background-attachment: scroll;            
    opacity: 0.85;                
	
}

#popup-header {
	grid-column: 1 / 4;
	display: grid;
	padding: 8px 13px 8px 13px;
	background: rgba(255, 255, 255, 0.1);
	box-shadow: 0px 3px 4px 0px #000;
    opacity: 0.85;                 
                  
}
#popup-header h1{
text-shadow: 1px 1px 1px #000;
}
#popup-header h4{
color: #FF9421;
text-shadow: 1px 1px 1px #000;
}
#popup-content a.close {
  position: absolute;
  right: -16px;
  top: -12px;
  width: 25px;
  height: 22px;
  padding:3px;
}
#popup-content a.close:hover {
  color: #FF9421;
}
#popup-content a.close:before, #popup-content a.close:after {
  position: absolute;
  left: 12px;
  content: ' ';
  height: 18px;
  width: 3px;
  background-color: #FF9421;
}
#popup-content a.close:before {
  transform: rotate(45deg);
}
#popup-content a.close:after {
  transform: rotate(-45deg);
}
#popup-content{
grid-column: 3 / 2;
  grid-row: 2 / 3;
width:1000px;
text-shadow: 1px 1px 1px #000;
//background: url(https://image.tmdb.org/t/p/original/z3ioibdjWZOYeXjoiabFOFOfPI3.jpg) no-repeat !important; opacity: 0.99;
opacity: 0.69;                    
}

#popup-footer {
	display: flex; justify-content: space-between;
	padding: 9px 13px;
	color: #FFF;
}
#popup-footer span {
	display: block; width: 100%;
	font-size: 1.1em; font-weight: 600;
}
#popup-footer span.next-item {text-align:right;}
#popup-footer span:hover {
	color: #000;
	cursor: pointer;
}
#popup-inner {
	display: grid; 
	grid-template-columns: repeat(3, 1fr);
	grid-gap: 15px;
	padding: 20px 14px;
	background: #282b2e;
	box-shadow: 0 0 4px #000;
	border-radius:3px;
}
#popup-sidebar{
grid-column: 1 ;
grid-row: 2;
width:170px;
}
#popup-sidebar img {
	height: 240px;
	box-shadow: 0 0 4px #333538;
	border-radius:2px;
	box-shadow: 0 0 4px #000;
}
#popup-sidebar ul {
	margin: 14px 0;
	color:#000
}
#popup-sidebar li {
	margin-bottom: 3px;
}

#popup-content header {
	display: grid; grid-template-columns: 1fr 100px;
}
#popup-content .rating {
	display: block;
	width: 100px; height: 20px;
	background: url(../images/stars.png) no-repeat bottom right;
}
#popup-summary{
color:#fff
}
#popup-content .rating_plex.rating_50 { background-position: -98px 0; }
#popup-content .rating_plex.rating_45 { background-position: -98px -20px; }
#popup-content .rating_plex.rating_40 { background-position: -98px -40px; }
#popup-content .rating_plex.rating_35 { background-position: -98px -60px; }
#popup-content .rating_plex.rating_30 { background-position: -98px -80px; }
#popup-content .rating_plex.rating_25 { background-position: -98px -100px; }
#popup-content .rating_plex.rating_20 { background-position: -98px -120px; }
#popup-content .rating_plex.rating_15 { background-position: -98px -140px; }
#popup-content .rating_plex.rating_10 { background-position: -98px -160px; }
#popup-content .rating_plex.rating_5  { background-position: -98px -180px; }
#popup-content .rating_plex.rating_0  { background-position: -98px -200px; }

#popup-content .rating_user.rating_50 { background-position: 0 0; }
#popup-content .rating_user.rating_45 { background-position: 0 -20px; }
#popup-content .rating_user.rating_40 { background-position: 0 -40px; }
#popup-content .rating_user.rating_35 { background-position: 0 -60px; }
#popup-content .rating_user.rating_30 { background-position: 0 -80px; }
#popup-content .rating_user.rating_25 { background-position: 0 -100px; }
#popup-content .rating_user.rating_20 { background-position: 0 -120px; }
#popup-content .rating_user.rating_15 { background-position: 0 -140px; }
#popup-content .rating_user.rating_10 { background-position: 0 -160px; }
#popup-content .rating_user.rating_5  { background-position: 0 -180px; }
#popup-content .rating_user.rating_0  { background-position: 0 -200px; }

#popup-content h3 {
	font-size: 20px;
	color:#FF9421
}
#popup-content h4 {
	font-size: 16px; font-weight: 200; color: #fff; margin-top:3px;
}
#popup-content p {
	padding-top: 3; line-height: 17px;
}
#popup-content-meta {
	margin-top: 10px;
	font-size: 11px;
	color:#fff
}
#popup-content-meta li {
	padding: 1px 0;
	line-height: 14px;
}
#popup-content-meta strong {
	font-weight: bold;
	color:#FF9421;
}

#popup_seasons {
grid-column: 1 / 4;

	width:100%;
	font-size: 11px;
}
#popup_seasons article {
	display: grid; grid-template-columns: 100px 250px 1fr;
	grid-template-areas: "popup-seasons popup-episodes popup-episode";
	margin-top: 6px;
	width: 100%;
}

#popup_seasons li {
	padding: 4px;
}/*
#popup_seasons li.current,
#popup_seasons li:hover {
	background: #FF9421;
	color: #FFF;
	cursor: pointer;
}*/

#popup_seasons_seasons li {
	display: inline-flex;
	font-size: 15px; font-weight: 600;
	cursor:pointer;
}
#popup_seasons_episodes {
	grid-template-columns: repeat(3, 1fr);
}
#popup_seasons_episodes li {
	font-size: 14px;
	text-transform:none;
	width:46%;
	height:auto;
	vertical-align:top;
	cursor:pointer;
}
#popup_seasons li.current,
#popup_seasons li:hover{
color: rgb(255,147,31);

}
#popup_seasons_episode {
	grid-area: popup-episode;
	background: rgba(255, 255, 255, 0.1);
	border-radius:1px;
}
#episode_content {
	padding: 8px;
	box-shadow: 0px 3px 4px 0px #000;
}
#popup_seasons_episode h5 {
	font-size: 14px;
	color:#FF9421;
}
#popup_seasons_episode .meta {
	padding-top: 0;
	color: #eee;
}
#popup_seasons_seasons ul {
		text-align: center;
	}
/* FOOTER //////////////////////////////////////////////////////////////////////////*/

#footer {
	clear: both;
	padding: 14px;
	background: #282B2E;
	border-top: 1px solid #FF9421;
	color: #E7EBED;
	text-align:center;
}
#footer a:link, #footer a:visited { color: #E7EBED; text-decoration: none; }
#footer a:hover, #footer a:active { color: #FF9421; }
.gender {
font-size:10px;
color:#FF9421;
}
/* IPHONE STYLING //////////////////////////////////////////////////////////////////////////*/

@media only screen and (max-width: 1024px) {
body > main.container {
	display: grid; grid-template-columns: 20% 1fr; grid-gap: 2px;
	
}


}
@media only screen and (max-width: 740px) {
#header {
	display: grid;
	grid-template-columns: repeat(2, 1fr);
	height: 50px;
	background: #282B2E;
	position: relative;
}
#header h1 {
	width: 150px;
	height: 50px;
	margin-left: 16px;
	background: url(../images/logo.png) no-repeat;
	background-size: 150px 50px;
}

body > main.container {
	display: grid;
	grid-template-columns: 150px 1fr;
	grid-gap: 2px;
	box-shadow: 0px 0px 20px 10px rgba(0,0,0,0.65);
}
.item {
	width: 110px;
	margin: 3px 3px 3px;
	box-shadow: 0px 3px 3px 1px #000;
	}
.item img{

height:165px;
border-radius:1px 1px 0 0;
}
.item h4{

}
#popup-container{
width:93%;
top:5%
}
#popup-content{
width:450px;
}
.starring{
white-space: nowrap;max-width: 85ch;overflow: hidden;text-overflow: ellipsis;
}
#footer{
font-size:10px;
text-align:center;
}
}
@media only screen and (max-width: 480px) {
#header #search{
display:none;
}
.item {
	width: 113px;
	margin: 3px 1px 3px;
	height:199px;
	box-shadow: 0px 3px 3px 1px #000;
	}
.item img{

height:170px;
border-radius:1px;
}	
.item h4{

}
#popup-content{
width:100vw;
}
#popup-inner{
grid-gap:5px;
padding:20px 5px;
}
#xpopup-summary{
	max-width: 100vw;
	white-space: nowrap;
    overflow: hidden;
    text-overflow: ellipsis;
}
#popup-sidebar{
width:150px;
}
#popup-content header{
display:none;
}
#popup-content-meta{
#display:none;
}
#popup-content h4 {display:none}
	#header {
		grid-template-columns: 1fr;
		position: relative; z-index: 999;
		
	}
	#header p {
		padding: 5px 5px 5px 10px;
		height: 12px;
		/* width: 305px; */
		text-align: right;
		background: #FF9421;
	}
	#header p span,
	#header p strong {
		display: inline;
		padding: 0; margin: 0;
		font-size: 14px; color: #FFDAB2;
	}
	#header p strong {
		color: #FFF; font-weight: bold;
	}
	body > main.container {
		grid-template-columns: 1fr;
	}

	#toggle_sidebar {
		display: block;
		padding: 10px;
		font-size: 1.3em; font-weight: 600; text-align: center;
		background: #FFDAB2;
	}
	#toggle_sidebar:link,
	#toggle_sidebar:visited {
		color: #FF9421; text-decoration: none;
	}
	#toggle_sidebar:hover, #toggle_sidebar:active {
		color: #9A9A9A;
	}

	#sidebar-menu {
		display: none;
		position: fixed; top: 160px; left: 0;
		width: 100vw; height: calc(100vh - 160px); overflow: scroll;
		background-color: #e7ebed;
	}

	#section-header div {
		grid-template-columns: 1fr;
	}
	#section-header div section {
		text-align: center;
	}
	

	

	#popup-container {
		width: 1900px;
	}
	#popup-inner {
		#grid-template-columns: 1fr;
	}
	#popup-sidebar ul {
		text-align: center;
	}
	#popup-sidebar img {
		width:150px;
		
	}
	#popup-sidebar li {
		display: inline-block;
		margin: 0 3px;
	}
	#popup-content header {
		grid-template-columns: 1fr;
	}
	#popup-content h3 {
		text-align: center;
	}
	#popup_seasons article {
		grid-template-columns: 1fr 2fr;
		grid-template-areas:
		"popup-seasons popup-seasons"
		"popup-episodes popup-episode";
	}
	
	#popup_seasons_seasons li {
		display: inline-flex; margin: 0 3px;
	}
	#popup_seasons_episodes,
	#popup_seasons_episode {
		
	}
	#popup-content a.close {
 right: 5px;
  top: 5px;
}
 #popup-content p{
  overflow: hidden;
  display: -webkit-box;
  -webkit-line-clamp: 9;
  -webkit-box-orient: vertical;
 }
}














.meter {
  box-sizing: content-box;
  height: 20px; /* Can be anything */
  position: relative;
  margin: 60px 0 20px 0; /* Just for demo spacing */
  background: #555;
  border-radius: 25px;
  padding: 10px;
  box-shadow: inset 0 -1px 1px rgba(255, 255, 255, 0.3);
}
.meter > span {
  display: block;
  height: 100%;
  border-top-right-radius: 8px;
  border-bottom-right-radius: 8px;
  border-top-left-radius: 20px;
  border-bottom-left-radius: 20px;
  background-color: rgb(43, 194, 83);
  background-image: linear-gradient(
    center bottom,
    rgb(43, 194, 83) 37%,
    rgb(84, 240, 84) 69%
  );
  box-shadow: inset 0 2px 9px rgba(255, 255, 255, 0.3),
    inset 0 -2px 6px rgba(0, 0, 0, 0.4);
  position: relative;
  overflow: hidden;
}
.meter > span:after,
.animate > span > span {
  content: "";
  position: absolute;
  top: 0;
  left: 0;
  bottom: 0;
  right: 0;
  background-image: linear-gradient(
    -45deg,
    rgba(255, 255, 255, 0.2) 25%,
    transparent 25%,
    transparent 50%,
    rgba(255, 255, 255, 0.2) 50%,
    rgba(255, 255, 255, 0.2) 75%,
    transparent 75%,
    transparent
  );
  z-index: 1;
  background-size: 50px 50px;
  animation: move 2s linear infinite;
  border-top-right-radius: 8px;
  border-bottom-right-radius: 8px;
  border-top-left-radius: 20px;
  border-bottom-left-radius: 20px;
  overflow: hidden;
}

.animate > span:after {
  display: none;
}

@keyframes move {
  0% {
    background-position: 0 0;
  }
  100% {
    background-position: 50px 50px;
  }
}



.nostripes > span > span,
.nostripes > span::after {
  background-image: none;
}


    </style>
    
    
    
    
    
    <script type="text/javascript" src="http://code.jquery.com/jquery-1.9.1.min.js"></script>
    
	<script>const ready = callback => {
  if (document.readyState !== 'loading') callback();
  else document.addEventListener('DOMContentLoaded', callback);
};





function resizeIframe(obj) {
  //obj.style.height = obj.contentWindow.document.documentElement.scrollHeight + 'px';
    //obj.contentWindow.document.documentElement.scrollHeight
  //setTimeout(function(){ obj.style.height = obj.contentWindow.document.documentElement.scrollHeight + 'px'; }, 10000);
  //setTimeout(function(){  alert(obj.contentWindow.document.body.innerHTML); }, 10000);
  //setTimeout(function(){  alert(obj.contentWindow.document.body.scrollHeight); }, 5000);
    
    
      setTimeout(function(){ var theFrame = obj.contentWindow.document.body.innerHTML;
      var theCount = (theFrame.match(/Resolution/g) || []).length;
      obj.style.height = (theCount * 65) + 'px';   }, 1000);
    
    
  setTimeout(function(){ var theFrame = obj.contentWindow.document.body.innerHTML;  
  var theCount = (theFrame.match(/Resolution/g) || []).length;
  obj.style.height = (theCount * 65) + 'px';   }, 5000);
    
  setTimeout(function(){ var theFrame = obj.contentWindow.document.body.innerHTML;  
  var theCount = (theFrame.match(/Resolution/g) || []).length;
  obj.style.height = (theCount * 65) + 'px';   }, 10000);
    
  setTimeout(function(){ var theFrame = obj.contentWindow.document.body.innerHTML;  
  var theCount = (theFrame.match(/Resolution/g) || []).length;
  obj.style.height = (theCount * 65) + 'px';   }, 15000);
     
    setTimeout(function(){ var theFrame = obj.contentWindow.document.body.innerHTML;  
  var theCount = (theFrame.match(/Resolution/g) || []).length;
  obj.style.height = (theCount * 65) + 'px';   }, 20000);
  
    setTimeout(function(){ var theFrame = obj.contentWindow.document.body.innerHTML;  
  var theCount = (theFrame.match(/Resolution/g) || []).length;
  obj.style.height = (theCount * 65) + 'px';   }, 25000);
  
    
    setTimeout(function(){ var theFrame = obj.contentWindow.document.body.innerHTML;  
  var theCount = (theFrame.match(/Resolution/g) || []).length;
  obj.style.height = (theCount * 65) + 'px';   }, 30000);
  
}

function resizeIframeWidth(e){
    // Set width of iframe according to its content
    if (e.Document && e.Document.body.scrollWidth) //ie5+ syntax
        e.width = e.contentWindow.document.body.scrollWidth;
    else if (e.contentDocument && e.contentDocument.body.scrollWidth) //ns6+ & opera syntax
        e.width = e.contentDocument.body.scrollWidth + 35;
    else (e.contentDocument && e.contentDocument.body.offsetWidth) //standards compliant syntax – ie8
        e.width = e.contentDocument.body.offsetWidth + 35;
}

function autoResize(iframe) {
    $(iframe).height($(iframe).contents().find('html').height());
}


function autoResize2() {
    setTimeout("autoResize(this)", Math.floor(Math.random() * 6) + 3000);
}


function pageDOWN () {
    var simulatedEvent = new KeyboardEvent("keypress", {keyCode: 34, which: 34});
    document.getElementById("yourSearchInput").dispatchEvent(simulatedEvent);
}

function pageUP () {
    var simulatedEvent = new KeyboardEvent("keypress", {keyCode: 33, which: 33});
    document.getElementById("yourSearchInput").dispatchEvent(simulatedEvent);
}


function resizePic(obj) {
    
    	//document.getElementById("")
        setTimeout(function() { obj.style.height = 300 + 'px'; }, 3000 );
    	   
}



//setInterval(function(){
//    document.getElementById("image").style.visibility= hidden ? "visible" : "hidden";
  //  hidden = !hidden;
//},2000);





function showMovID() { 
    var curURL2 = window.location.href;   
 	var searchquery2 = (curURL2.substring(curURL2.lastIndexOf("/") + 1)); 
    searchquery2 = decodeURI(searchquery2);  
    searchquery2 = searchquery2.replace(/,/g, '');  
    searchquery2 = searchquery2.replace(/'/g, ''); 
    //alert(searchquery2);
    var csvFile = new XMLHttpRequest();
    csvFile.open("GET", "./plexServers.txt", true);
    csvFile.onreadystatechange = function() {
      if (csvFile.readyState === 4) {  // Makes sure the document is ready to parse.
        if (csvFile.status === 200) {  // Makes sure it's found the file.
          allText = csvFile.responseText;
          lines = csvFile.responseText.split("\n"); // Will separate each line into an array
          alert(allText);
        }
      }
    } 
    var tags = document.getElementsByTagName("a");
        for(var i=0;i<tags.length;i++) {
           var tags2 = (tags[i].getAttribute("href"));
           if (tags2.includes("http")) {
               //document.write("<iframe src='tags2'></iframe>"); 
               alert(tags2);
           }
        }
}    

function showMovID2() {
    setTimeout("showMovID()", Math.floor(Math.random() * 6) + 1);
}


function showBuyNow() { 
  document.getElementById("BuyNow").style.display = "inline"; 
}    

function showBuyNow2() {
    setTimeout("showBuyNow()", Math.floor(Math.random() * 6) + 3000);
}

function showFileName() { 
  document.getElementById("FileName").style.display = "inline"; 
}    

function showFileName2() {
    setTimeout("showFileName()", Math.floor(Math.random() * 6) + 3000);
}

function showFileSize() { 
  document.getElementById("FileSize").style.display = "inline"; 
}    

function showFileSize2() {
    setTimeout("showFileSize()", Math.floor(Math.random() * 6) + 3000);
}

function showBitRate() { 
  document.getElementById("BitRate").style.display = "inline"; 
}    

function showBitRate2() {
    setTimeout("showBitRate()", Math.floor(Math.random() * 6) + 3000);
}

function showVideoRes() { 
  document.getElementById("VideoRes").style.display = "inline"; 
}    

function showVideoRes2() {
    setTimeout("showVideoRes()", Math.floor(Math.random() * 6) + 3000);
}

function showVideoCodec() { 
  document.getElementById("VideoCodec").style.display = "inline"; 
}    

function showVideoCodec2() {
    setTimeout("showVideoCodec()", Math.floor(Math.random() * 6) + 3000);
}

function showAudioCodec() { 
  document.getElementById("AudioCodec").style.display = "inline"; 
}    

function showAudioCodec2() {
    setTimeout("showAudioCodec()", Math.floor(Math.random() * 6) + 3000);
}

function showAudioChannels() { 
  document.getElementById("AudioChannels").style.display = "inline"; 
}    

function showAudioChannels2() {
    setTimeout("showAudioChannels()", Math.floor(Math.random() * 6) + 3000);
}
function showAspectRatio() { 
  document.getElementById("AspectRatio").style.display = "inline"; 
}    

function showAspectRatio2() {
    setTimeout("showAspectRatio()", Math.floor(Math.random() * 6) + 3000);
}



function episode_tag(season, episode) {
  const s = season.index;
  const e = episode.index;
  let r = s < 10 ? `S0${s}` : `S${s}`;
  r += e < 10 ? `E0${e}` : `E${e}`;
  return r;
} // end func: episode_tag

function number_format(numIn) {
  let num = parseInt(numIn);
  if (num < 1000) return num;
  num = num.toString();
  const rgx = /(\d+)(\d{3})/;
  while (rgx.test(num)) {
    num = num.replace(rgx, '$1' + ',' + '$2');
  }
  return num;
} // end func: number_format

function inflect(num, single, plural) {
  if (num === 1) return single;
  if (plural) return plural;
  return `${single}s`;
} // end func: inflect

function hl_bytes_to_human(bytes) {
  const b = parseInt(bytes);
  if (b < 1024) return `${b} b`;
  let kb = b / 1024;
  if (kb < 1024) return `${Math.round(kb * 100) / 100} Kb`;
  const mb = kb / 1024;
  if (mb < 1024) return `${Math.round(mb * 100) / 100} Mb`;
  const gb = mb / 1024;
  if (gb < 1024) return `${Math.round(gb * 100) / 100} Gb`;
  const pb = gb / 1024;
  return `${Math.round(pb * 100) / 100} Pb`;
  if (bytes < 1073741824)
    return `${Math.round((bytes / 1048576) * 100) / 100} Mb`;
  kb = b / 1024;
  if (bytes < 1099511627776)
    return `${Math.round((bytes / 1073741824) * 100) / 100} Gb`;
  return `${bytes} Xb`;
} // end func: hl_bytes_to_human

// FX Function ~ https://codepen.io/gabrieleromanato/pen/frIwl
(function() {
  const FX = {
    easing: {
      linear(progress) {
        return progress;
      },
      quadratic(progress) {
        return Math.pow(progress, 2);
      },
      swing(progress) {
        return 0.5 - Math.cos(progress * Math.PI) / 2;
      },
      circ(progress) {
        return 1 - Math.sin(Math.acos(progress));
      },
      back(progress, x) {
        return Math.pow(progress, 2) * ((x + 1) * progress - x);
      },
      bounce(progress) {
        for (var a = 0, b = 1, result; 1; a += b, b /= 2) {
          if (progress >= (7 - 4 * a) / 11) {
            return (
              -Math.pow((11 - 6 * a - 11 * progress) / 4, 2) + Math.pow(b, 2)
            );
          }
        }
      },
      elastic(progress, x) {
        return (
          Math.pow(2, 10 * (progress - 1)) *
          Math.cos(((20 * Math.PI * x) / 3) * progress)
        );
      },
    },
    animate(options) {
      const start = new Date();
      const id = setInterval(function() {
        const timePassed = new Date() - start;
        let progress = timePassed / options.duration;
        if (progress > options.setTo) {
          progress = options.setTo;
        }
        options.progress = progress;
        const delta = options.delta(progress);
        options.step(delta);
        if (progress === options.setTo) {
          clearInterval(id);
          // Reset styles
          options.element.style.display =
            options.type === 'in' ? 'block' : 'none';
          options.element.style.opacity = null;
          if (options.complete) options.complete();
        }
      }, options.delay || 10);
    },
    fadeOut(element, options = { duration: 400, setTo: 1, complete: null }) {
      const to = 1;
      this.animate({
        type: 'out',
        element,
        duration: options.duration,
        setTo: options.setTo,
        delta(progress) {
          progress = this.progress;
          return FX.easing.swing(progress);
        },
        complete: options.complete,
        step(delta) {
          element.style.opacity = to - delta;
        },
      });
    },
    fadeIn(element, options = { duration: 400, setTo: 1, complete: null }) {
      const to = 0;
      this.animate({
        type: 'in',
        element,
        duration: options.duration,
        setTo: options.setTo,
        delta(progress) {
          progress = this.progress;
          return FX.easing.swing(progress);
        },
        complete: options.complete,
        step(delta) {
          element.style.opacity = to + delta;
        },
      });
    },
  };
  window.FX = FX;
})();
</script>
                                        
                                        <script>
                                        
                                        
                                        $(".meter > span").each(function () {
                                          $(this)
                                            .data("origWidth", $(this).width())
                                            .width(20)
                                            .animate(
                                              {
                                                width: $(this).data("origWidth")
                                              },
                                              36000
                                            );
                                        });

                                        
                                        </script>
	<!-- <script src="assets2/js/dark-plex3.js"></script> -->
<script src="lazysizes.min.js" async></script>

<script>

const PLEX = {
  sections: {},
  total_items: 0,
  current_section: false,
  current_item: false,
  previous_item_id: 0,
  next_item_id: 0,
  current_sort_key: 'title',
  current_sort_order: 'desc',
  current_genre: 'all',
  current_director: 'all',
  show_all_genres: false,
  show_all_directors: false,
  data_loaded: false,
  filter_timeout: false,
  filter_delay: 350,
  popup_visible: false,
  last_updated: 'none',
  

  /*!
   * Load the data from the plex-data/data.js file
   */
  load_data(aData) {
    // Check if aData is set
    if (
      !aData ||
      !aData.status ||
      aData.status !== 'success' ||
      aData.num_sections === 0
    )
      return false;
    // Loop through the sections from the obtained data
    Object.keys(aData.sections).forEach(sectionKey => {
      PLEX.sections[sectionKey] = aData.sections[sectionKey]; // Set each section
    });
    PLEX.total_items = aData.total_items; // Set the total items
    PLEX.section_display_order = aData.section_display_order; // Set the section display order
    PLEX.last_updated = aData.last_updated; // Set the last update dtm
    PLEX.data_loaded = true; // Set the data loaded bool
    PLEX.last_generated = aData.last_generated;
  }, // end func: load_data

  /*!
   * Display the sections list in the sidebar
   */
  display_sections_list() {
    // Init the section list html
    let sectionListHTML = '';
    // Loop through the section display order
    //
    PLEX.section_display_order.forEach(key => {
      const section = PLEX.sections[key]; // Get the section data
      // Add to the section list html
      sectionListHTML = '<a href="./#1"><li><span>Popular Movies</span></li></a><a href="./AM.php#1"><li data-section="1"><span>All Movies</span></li></a><a href="./ATV.php#1"><li><span>All TV Shows</span></li></a><a href="./RAE.php#1"><li><span>Recently Added Episodes</span></li></a>';
        
        
        //sectionListHTML = `<li data-section="12"><span>Recently Added Movies</span></li><a href="https://bulkup.org/responsive-plex/tv3/AM.php"><li data-section="6" class="current movie"><span>All Movies</span></li></a><a href="https://bulkup.org/responsive-plex/tv3/ATV.php"><li data-section="7"><span>All TV Shows</span></li></a><a href="https://bulkup.org/responsive-plex/tv3/RAE.php#1"><li data-section="1"><span>Recently Added Episodes</span></li></a>`;
      
       //<li data-section="12" class="movie current"><span>Recently ADDDed Movies</span></li><li data-section="6" class="movie"><span>All Movies</span></li><li data-section="7" class="show"><span>All TV Shows</span></li><li data-section="11" class="movie"><span>Recently Added Episodes</span></li>
      //<li data-section="${section.key}" class="${section.type}"><span>${section.title}</span></li>
        
    });
   
    // Update the sections list inner HTML
    PLEX._sections_list.innerHTML = sectionListHTML;
  }, // end func: display_sections_list

  /*!
   * Display a section in the main area
   */
  display_section(sectionIDIn) {
    const sectionID = parseInt(sectionIDIn);

    if (sectionID !== PLEX.current_section.key) {
      // Reset the section data
      PLEX.current_sort_key = 'title';
      PLEX.current_sort_order = 'desc';
      PLEX.current_genre = 'all';
      PLEX.current_director = 'all';
      PLEX.current_seen = 'all';
      PLEX.show_all_directors = false;
      
      // Remove any set sort list current class
      PLEX._sorts_list.querySelectorAll('li.current').forEach(sortsListLi => {
        sortsListLi.classList.remove('current');
      });
      // Remove em tags from the sorts list
      PLEX._sorts_list.querySelectorAll('li em').forEach(sortsListLiEm => {
        
        sortsListLiEm.parentNode.removeChild(sortsListLiEm);
      });
     // Add the current class to the set sort element
     PLEX._sorts_list
        .querySelectorAll(`li[data-sort="${PLEX.current_sort_key}"]`)
        .forEach(dataSortItem => {
          if (!dataSortItem.classList.contains('current'))
            dataSortItem.classList.add('current');
          dataSortItem.insertAdjacentHTML(
            'beforeend',
            `<em>${PLEX.current_sort_order}</em>`
          );
        });
    }

    PLEX.current_section = PLEX.sections[sectionID];
    window.location.hash = PLEX.current_section.key;
   PLEX._sections_list.querySelectorAll('li').forEach(sectionsListLi => {
      if (sectionsListLi.classList.contains('current'))
        sectionsListLi.classList.remove('current');
    });
    document
      .querySelectorAll(`li[data-section="${sectionID}"]`)
      .forEach(dataSectionItem => {
        if (!dataSectionItem.classList.contains('current'))
          dataSectionItem.classList.add('current');
      });
    //PLEX._section_title.innerText = PLEX.current_section.title;
    // Output the items
    PLEX.display_items();

    // Listen for click on item
    PLEX._item_list.querySelectorAll('li').forEach(itemListItem =>
      itemListItem.addEventListener('click', () => {
        // Display the selected item
        PLEX.display_item(itemListItem.dataset.item);
      })
    );

    // Output the genre list
    PLEX.display_genre_list(PLEX.current_section.genres);

    // Listen for click on genre list items
    PLEX._genre_list.querySelectorAll('li').forEach(genreListItem =>
      genreListItem.addEventListener('click', () => {
        // Change the selected genre
        PLEX.change_genre(genreListItem.dataset.genre);
      })
    );

    // Listen for click on show all genres
    PLEX._genre_list
      .querySelector('#genre_show_all')
      .addEventListener('click', () => {
        // Set show all genres as true
        PLEX.show_all_genres = true;

        // Show the hidden genres
        PLEX._genre_list
          .querySelectorAll('.genre_hidden')
          .forEach(genreHiddenElm => {
            genreHiddenElm.style.display = 'grid';
          });

        // Hide the genres "hide all" button
        PLEX._genre_list.querySelector('#genre_show_all').style.display =
          'none';

        // Show the genres "show all" button
        PLEX._genre_list.querySelector('#genre_hide_all').style.display =
          'grid';
      });

    // Listen for click on hide all genres
    PLEX._genre_list
      .querySelector('#genre_hide_all')
      .addEventListener('click', () => {
        // Set show all genres as false
        PLEX.show_all_genres = false;

        // Hide the hidden genres
        PLEX._genre_list
          .querySelectorAll('.genre_hidden')
          .forEach(genreHiddenElm => {
            genreHiddenElm.style.display = 'none';
          });

        // Show the genres "hide all" button
        PLEX._genre_list.querySelector('#genre_show_all').style.display =
          'grid';

        // Hide the genres "show all" button
        PLEX._genre_list.querySelector('#genre_hide_all').style.display =
          'none';
      });

    
         
  
  
   const itemsToShowDirectorsFor = PLEX.filter_items_by_genre(
      PLEX.current_section.items,
      PLEX.current_genre
    );
    const directors = [];
    let itemCount = 0;

    // Sort through list of directors
    Object.keys(itemsToShowDirectorsFor).forEach(key => {
      // Set item
      const item = itemsToShowDirectorsFor[key];

      // Check if director is set
      if (!item.director) return;

      // Increment item count
      itemCount += 1;

      // Add director to the array
      item.director.forEach(name => {
        if (name) {
          let director = directors[name];
          if (!director) {
            director = { director: name, count: 0 };
            directors.push(director);
            directors[name] = director;
          }
          director.count += 1;
        }
      });
    });

    // Sort the directors
    directors.sort(function(a, b) {
      if (a.count > b.count) return -1;

      if (a.count < b.count) return 1;

      if (a.director > b.director) return -1;

      if (a.director < b.director) return 1;

      return 0;
    });

    // Output the list of directors
    PLEX.display_director_list(itemCount, directors);

    // Listen for click on director list items
    PLEX._director_list.querySelectorAll('li').forEach(directorListItem =>
      directorListItem.addEventListener('click', () => {
        // Change the selected director
        PLEX.change_director(directorListItem.dataset.director);
      })
    );

    // Listen for click on show all directors
    const directorShowAllBtn = PLEX._director_list.querySelector(
      '#director_show_all'
    );
    if (directorShowAllBtn) {
      directorShowAllBtn.addEventListener('click', () => {
        // Set show all directors as true
        PLEX.show_all_directors = true;

        // Show the hidden directors
        PLEX._director_list
          .querySelectorAll('.director_hidden')
          .forEach(directorHiddenElm => {
            directorHiddenElm.style.display = 'grid';
          });

        // Hide the directors "hide all" button
        PLEX._director_list.querySelector('#director_show_all').style.display =
          'none';

        // Show the directors "show all" button
        PLEX._director_list.querySelector('#director_hide_all').style.display =
          'grid';
      });
    }

    // Listen for click on hide all directors
    const directorHideAllBtn = PLEX._director_list.querySelector(
      '#director_hide_all'
    );
    if (directorHideAllBtn) {
      directorHideAllBtn.addEventListener('click', () => {
        // Set show all directors as false
        PLEX.show_all_genres = false;

        // Hide the hidden directors
        PLEX._director_list
          .querySelectorAll('.director_hidden')
          .forEach(directorHiddenElm => {
            directorHiddenElm.style.display = 'none';
          });

        // Show the directors "hide all" button
        PLEX._director_list.querySelector('#director_show_all').style.display =
          'grid';

        // Hide the directors "show all" button
        PLEX._director_list.querySelector('#director_hide_all').style.display =
          'none';
      });
    }

    // Output the list of seen items
    //PLEX.display_seen_list('all');

    // Listen for click on seen list items
   /* PLEX._seen_list.querySelectorAll('li').forEach(seenListItem =>
      seenListItem.addEventListener('click', () => {
        // Change the selected seen status
        PLEX.change_seen(seenListItem.dataset.seen);
      })
    );*/
  }, // end func: display_section

  /*!
   * Display the genre list in the sidebar
   */
  display_genre_list(genres) {
    // Check if there are any genres set
    if (genres.length === 0) {
      // There are no genres. Hide the genres list section
      PLEX._genre_list_section.style.display = 'none';
      return;
    }

    const numToShowBeforeHiding = 5; // Set how many genres to show before hiding the rest
    let count = 0; // Init how many genres there are
    let numHidden = 0; // Init how many rows are hidden
    let listHTML = `<li data-genre="all"><em>${PLEX.current_section.num_items}</em>All</li>`; // Init the list html

    // Loop through each genre
    genres.forEach(genre => {
      count += 1; // Increment the total genre count
      // Check if needing to hide the genre
      if (count <= numToShowBeforeHiding) {
        // Add genre to the list html
        listHTML += `<li data-genre="${genre.genre}" class="genre_shown"><em>${genre.count}</em>${genre.genre}</li>`;
      } else {
        // Hide the genre
        numHidden += 1; // Increment hidden genres count
        // Add genre to the list html
        listHTML += `<li data-genre="${genre.genre}" class="genre_hidden"><em>${genre.count}</em>${genre.genre}</li>`;
      }
    });

    // Check if there are any hidden genres
    if (numHidden > 0) {
      // Output show and hide elements
      listHTML += `<li id="genre_show_all">Show ${numHidden} more...</li>`;
      listHTML += `<li id="genre_hide_all">Show fewer...</li>`;
    }

    // Update the genre list inner HTML
    PLEX._genre_list.innerHTML = listHTML;

    // Check if wanting to show all genres
    if (PLEX.show_all_genres) {
      // Hide the show all element
      const genreShowAll = document.querySelector('#genre_show_all');
      if (genreShowAll) {
        genreShowAll.style.display = 'none';
      }
      // Show all hidden genres
      document.querySelectorAll('.genre_hidden').forEach(genreHiddenElm => {
        genreHiddenElm.style.display = 'grid';
      });
    } else {
      // Hide hidden genres
      // Hide the hide all element
      const genreHideAll = document.querySelector('#genre_hide_all');
      if (genreHideAll) {
        genreHideAll.style.display = 'none';
      }
      // Hide all hidden genres
      document.querySelectorAll('.genre_hidden').forEach(genreHiddenElm => {
        genreHiddenElm.style.display = 'none';
      });
    }

    // Remove current class from current genre
    PLEX._genre_list.querySelectorAll('li.current').forEach(genreListLi => {
      genreListLi.classList.remove('current');
    });

    // Add current class to new current genre
    document
      .querySelectorAll(`li[data-genre="${PLEX.current_genre}"]`)
      .forEach(dataGenreLi => {
        if (!dataGenreLi.classList.contains('current'))
          dataGenreLi.classList.add('current');
      });

    // Show the genre list section
    PLEX._genre_list_section.style.display = 'block';
  }, // end func: display_genre_list

  /*!
   * Display the director list in the sidebar for movies
   */
  display_director_list(totalCount, directors) {
    // Check if there are any directors set
    if (directors.length === 0) {
      // There are no directors. Hide the director list section
      PLEX._director_list_section.style.display = 'none';
      return;
    }

    const numToShowBeforeHiding = 5; // Set how many directors to show before hiding the rest
    let count = 0; // Init how many directors there are
    let numHidden = 0; // Init how many rows are hidden
    let listHtml = `<li data-director="all"><em>${totalCount}</em>All</li>`; // Init the list html

    // Loop through each director
    directors.forEach(director => {
      count += 1; // Increment the total director count
      // Check if needing to hide the director
      if (count <= numToShowBeforeHiding) {
        // Add director to the list html
        listHtml += `<li data-director="${director.director}" class="director_shown"><em>${director.count}</em>${director.director}</li>`;
      } else {
        // Hide the director
        numHidden += 1; // Increment hidden director count
        // Add director to the list html
        listHtml += `<li data-director="${director.director}" class="director_hidden"><em>${director.count}</em>${director.director}</li>`;
      }
    });

    // Check if there are any hidden genres
    if (numHidden > 0) {
      // Output show and hide elements
      listHtml += `<li id="director_show_all">Show ${numHidden} more...</li>`;
      listHtml += `<li id="director_hide_all">Show fewer...</li>`;
    }

    // Update the director list inner HTML
    PLEX._director_list.innerHTML = listHtml;

    // Check if wanting to show all directors
    if (PLEX.show_all_directors) {
      // Hide the show all element
      const directorShowAll = document.querySelector('#director_show_all');
      if (directorShowAll) {
        directorShowAll.style.display = 'none';
      }
      // Show all hidden directors
      document
        .querySelectorAll('.director_hidden')
        .forEach(directorHiddenElm => {
          directorHiddenElm.style.display = 'grid';
        });
    } else {
      // Hide hidden directors
      // Hide the hide all element
      const directorHideAll = document.querySelector('#director_hide_all');
      if (directorHideAll) {
        directorHideAll.style.display = 'none';
      }
      // Hide all hidden directors
      document
        .querySelectorAll('.director_hidden')
        .forEach(directorHiddenElm => {
          directorHiddenElm.style.display = 'none';
        });
    }

    // Remove current class from current director
    PLEX._director_list
      .querySelectorAll('li.current')
      .forEach(directorListLi => {
        directorListLi.classList.remove('current');
      });

    // Add current class to new current director
    document
      .querySelectorAll(`li[data-director="${PLEX.current_director}"]`)
      .forEach(dataDirectorLi => {
        if (!dataDirectorLi.classList.contains('current'))
          dataDirectorLi.classList.add('current');
      });

    // Show the director list section
    PLEX._director_list_section.style.display = 'block';
  }, // end func: display_director_list

  /*!
   * Display the seen list in the sidebar for movies
   */
  display_seen_list() {
    // Check the current section type isn't a movie
    if (PLEX.current_section.type !== 'movie') {
      // Hide the seen list section
      PLEX._seen_list_section.style.display = 'none';
      return;
    }

    // Init the list html
    let listHTML = `<li data-seen="all"><em>${PLEX.current_section.num_items}</em>All</li>`;

    // Init the seen count
    let seenCount = 0;

    // Loop through seen items
    Object.keys(
      PLEX.filter_items_by_seen(PLEX.current_section.items, 'true')
    ).forEach(() => {
      seenCount += 1;
    });

    // Add seen items to the list html
    listHTML += `<li data-seen="true"><em>${seenCount}</em>Seen</li>`;

    // Init the unseen count
    let unseenCount = 0;

    // Loop through unseen items
    Object.keys(
      PLEX.filter_items_by_seen(PLEX.current_section.items, 'false')
    ).forEach(() => {
      unseenCount += 1;
    });

    // Add the unseen items to the list html
    listHTML += `<li data-seen="false"><em>${unseenCount}</em>Not Seen</li>`;

    // Set the seen list inner HTML
    PLEX._seen_list.innerHTML = listHTML;

    // Remove the current class from the seen list
    PLEX._seen_list.querySelectorAll('li.current').forEach(seenListLi => {
      seenListLi.classList.remove('current');
    });

    // Add current class to new current seen
    document
      .querySelectorAll(`li[data-seen="${PLEX.current_seen}"]`)
      .forEach(dataSeenLi => {
        if (!dataSeenLi.classList.contains('current'))
          dataSeenLi.classList.add('current');
      });

    // Show the seen list section
    PLEX._seen_list_section.style.display = 'block';
  }, // end func: display_seen_list

  // TODO Find out what trigger scroll is used for
  /*!
   * Display current section items
   */
  display_items() {
    // Init items as current section
    let { items } = PLEX.current_section;

    // Check if current seen is not "all"
    if (PLEX.current_seen !== 'all') {
      // Set items filtered as current seen
      items = PLEX.filter_items_by_seen(items, PLEX.current_seen);
    }

    // Check if there is a filter value set
    if (PLEX._section_filter.value !== '') {
      // Set items filtered as filter value match
      items = PLEX.filter_items_by_term(items, PLEX._section_filter.value);
    }

    // Check that current genre isn't "all"
    if (PLEX.current_genre !== 'all') {
      // Set items filtered as current genre
      items = PLEX.filter_items_by_genre(items, PLEX.current_genre);
    }

    // Check current director isn't "all"
    if (PLEX.current_director !== 'all') {
      // Set items filtered as current director
      items = PLEX.filter_items_by_director(items, PLEX.current_director);
    }

    // Reset the item list inner HTML
    PLEX._item_list.innerHTML = '';

    let numItems = 0; // Init the number of items
    let innerHTML = ''; // Init the inner HTML
	var seconds = new Date().getTime();
    
    // Loop through the current section sorts
    PLEX.current_section.sorts[
      `${PLEX.current_sort_key}_${PLEX.current_sort_order}`
    ].forEach(key => {
      // If the item is undefined, skip
      if (typeof items[key] === 'undefined') return;
      const item = items[key]; // Set the item
      const thumb =
        item.thumb === false ? 'assets/images/default.png' : item.thumb; // Set the thumb
	  
      var str22 = '';
	  var returntime = (((seconds/1000) - (item.addedAt))/60);
      //var returntime = Math.round((seconds/1000 - item.addedAt)/60);
      if(returntime < 60){ str22 = ' less than 1 minute ago';} if(60 < returntime < 3600){ str22 = Math.round(returntime) + ' mins ago';}  if(360 < returntime < 86400){ str22 = Math.round(returntime/60) + ' hours ago';} if(86400 < returntime < 604800){ str22 = Math.round(returntime/60/24) + ' days ago';}  if(604800 < returntime < 60480000000000){ str22 = Math.round(returntime/60/24/7) + ' weeks ago';}  
        
      // Set the data to the innerHTML
      //innerHTML += `<li data-item="${item.key}" class="item" title="${item.title}"><img src="${thumb}" loading="lazy" /><h4>${item.title}<br>${item.seasonepisode}<br>Added ${Math.round((seconds/1000 - item.addedAt)/60)} mins ago ${seconds}<br>${item.addedAt*1000}<br>${str22}</h4></li>`;
	  innerHTML += `<li data-item="${item.key}" class="item" title="${item.title}"  onclick="showMovID2(); showBuyNow2(); showBitRate2(); showFileName2(); showFileSize2(); showVideoRes2(); showVideoCodec2(); showAudioCodec2(); showAudioChannels2(); showAspectRatio2();"><img src="https://image.tmdb.org/t/p/w185${thumb}" loading="lazy" /><h4>${item.title}<br>(${item.release_year})</h4></li>`;  //<br>Added ${str22}</h4></li>`;
      numItems += 1; // Increment the number of items            
    });
  document.querySelector('#section_num_items').innerHTML=`Titles: `+numItems;

    // Update the item list inner HTML
    PLEX._item_list.innerHTML = innerHTML;
   // Check if there are no items
    if (numItems === 0) {
      PLEX._section_meta.innerText = 'No items in this collection'; // Update the section meta inner text
      PLEX._item_list_status.innerHTML =
        '<p>There are no items to display in this collection that matches the filters set.</p>'; // Update the item list status inner html
      PLEX._item_list_status.style.display = 'block'; // Show the item list status section
      
    } else {
      // There are items
      // Hide the item list status
      PLEX._container.style.display = 'grid';
      PLEX._section_header.style.display = 'block';
      PLEX._item_list_status.style.display = 'none';
      // Set the section meta inner text
     /* PLEX._section_meta.innerText = `${number_format(numItems)} ${inflect(
        numItems,
        'item'
      )} in this collection`;*/
    }

    // $(document).trigger("scroll");
  }, // end func: display_items

  /*!
   * Filter items by search term
   */
  filter_items_by_term(allItems, termIn) {
    // Init the term as lowercase value
    const term = termIn.toLowerCase();

    // Check if the term value is blank and return all items if it is
    if (term === '') return allItems;

    // Init items to sho
    const itemsToShow = {};

    // Loop through all items
    Object.keys(allItems).forEach(key => {
      // Set the current item title as lowercase
      const title = allItems[key].title.toLowerCase();
      // Check if the term is matched in the title and skip if not
      if (title.indexOf(term) === -1) return;
      // Add item to items to show
      itemsToShow[key] = allItems[key];
    });

    // Return items to show
    return itemsToShow;
  }, // end func: filter_items_by_term

  /*!
   * Filter items by selected genre
   */
  filter_items_by_genre(allItems, genre) {
    // Check if the genre is "all" and return all items if it is
    if (genre === 'all') return allItems;

    // Init items to show
    const itemsToShow = {};

    // Loop through all items
    Object.keys(allItems).forEach(key => {
      // Check if the genre is in the array and skip if not
      if (!allItems[key].genre || !allItems[key].genre.includes(genre)) return;
      // Add item to items to show
      itemsToShow[key] = allItems[key];
    });

    // Return items to show
    return itemsToShow;
  }, // end func: filter_items_by_genre

  /*!
   * Filter items by selected director
   */
  filter_items_by_director(allItems, director) {
    // Check if the director is "all" and return all items if it is
    if (director === 'all') return allItems;

    // Init items to show
    const itemsToShow = {};

    // Loop through all items
    Object.keys(allItems).forEach(key => {
      // Check if the director is in the array and skip if not
      if (!allItems[key].director || !allItems[key].director.includes(director))
        return;
      // Add item to items to show
      itemsToShow[key] = allItems[key];
    });

    // Return items to show
    return itemsToShow;
  }, // end func: filter_items_by_director

  /*!
   * Filter items by selected seen status
   */
  filter_items_by_seen(allItems, seen) {
    // Check if seen is set to "all" and return all items if it is
    if (seen === 'all') return allItems;

    // Init items to show
    const itemsToShow = {};

    // Loop through all items
    Object.keys(allItems).forEach(key => {
      // Check if seen is set to true and the view count is 0, skip if true
      if (seen === 'true' && allItems[key].view_count === 0) return;
      // Check if seen is set to false and the view count is greater than 0, skip if true
      if (seen === 'false' && allItems[key].view_count > 0) return;
      // Add item to items to show
      itemsToShow[key] = allItems[key];
    });

    // Return items to show
    return itemsToShow;
  },

  /*!
   * Change the selected sort order
   */
  change_sort(argNewSortKey) {
    // Init the new sort key as title
    let newSortKey = 'title';

    // Check for match on argNewSortKey
    switch (argNewSortKey) {
      case 'release': // Check for and set sort key as release
        newSortKey = 'release';
        break;
      case 'rating': // Check for and set sort key as rating
        newSortKey = 'rating';
        break;
      case 'addedAt': // Check for and set sort key as added at
        newSortKey = 'addedAt';
        break;
      default:
        // Fall back to default value
        newSortKey = 'title';
        break;
    }

    // Check if the new sort key is the same as the current sort key
    if (newSortKey === PLEX.current_sort_key) {
      // Check for and set the sort order
      PLEX.current_sort_order =
        PLEX.current_sort_order === 'desc' ? 'asc' : 'desc';
    } else {
      // Sort key is different. Set new sort key
      PLEX.current_sort_key = newSortKey;
    }

    // Remove the current class from the sorts list
    PLEX._sorts_list.querySelectorAll('li.current').forEach(sortsListLi => {
      sortsListLi.classList.remove('current');
    });

    // Remove em tags from the sorts list
    PLEX._sorts_list.querySelectorAll('li em').forEach(sortsListLiEm => {
      sortsListLiEm.parentNode.removeChild(sortsListLiEm);
    });

    // Add the current class to the set sort element
    PLEX._sorts_list
      .querySelectorAll(`li[data-sort="${PLEX.current_sort_key}"]`)
      .forEach(dataSortItem => {
        if (!dataSortItem.classList.contains('current'))
          dataSortItem.classList.add('current');
        dataSortItem.insertAdjacentHTML(
          'beforeend',
          `<em>${PLEX.current_sort_order}</em>`
        );
      });

    // Display the newly sorted section
    PLEX.display_section(PLEX.current_section.key);
  }, // end func: change_sort

  /*!
   * Change the selected genre
   */
  change_genre(genre) {
    // Check if the genre is set and skip if not
    if (typeof genre === 'undefined' || genre === PLEX.current_genre) return;

    // Set the current director to all
    PLEX.current_director = 'all';

    // Set the new current genre
    PLEX.current_genre = genre;

    // Display the new section genre selection
    PLEX.display_section(PLEX.current_section.key);
  }, // end func: change_genre

  /*!
   * Change the selected director
   */
  change_director(director) {
    // Check if the director is set and skip if not
    if (typeof director === 'undefined' || director === PLEX.current_director)
      return;

    // Set the new current director
    PLEX.current_director = director;

    // Display the new section director selection
    PLEX.display_section(PLEX.current_section.key);
  }, // end func: change_director

  /*!
   * Change the selected seen status
   */
  change_seen(seen) {
    // Check if seen is set and skip if not
    if (typeof seen === 'undefined' || seen === PLEX.current_seen) return;

    // Set the new seen value
    PLEX.current_seen = seen;

    // Display the new section with the set seen value
    PLEX.display_section(PLEX.current_section.key);
  },

  /*!
   * Display a selected item in a popup
   */
  display_item(itemIDIn) {
    // Set item ID as int
    const itemID = parseInt(itemIDIn);

    // Set the current item by the item ID
    PLEX.current_item = PLEX.current_section.items[itemID];

    // Set the window location hash
    window.location.hash = `${PLEX.current_section.key}/${PLEX.current_item.title}qqqq${PLEX.current_item.release_year}`;

    // Set the popup HTML
    const popupHTML = PLEX.generate_item_content();

    // Set popup container HTML
    PLEX._popup_container.innerHTML = popupHTML;

    // Listen for click on footer items
    PLEX._popup_container
      .querySelectorAll('#popup-footer span')
      .forEach(footerItem =>
        footerItem.addEventListener('click', () => {
          // Display the selected item
          PLEX.display_item(footerItem.dataset.item);
        })
      );

    // Add event listener to the seasons list items
    const popupSeasonSeasonsUl = document.querySelector(
      '#popup_seasons_seasons'
    );
    if (popupSeasonSeasonsUl) {
      popupSeasonSeasonsUl
        .querySelectorAll('li')
        .forEach(popupSeasonSeasonsLi =>
          popupSeasonSeasonsLi.addEventListener('click', seasonEvent => {
            // Set the current target
            const { target } = seasonEvent;
            // Remove the current class from the popup seasons seasons
            popupSeasonSeasonsUl
              .querySelectorAll('li.current')
              .forEach(seasonsListLi => {
                seasonsListLi.classList.remove('current');
              });

            // Add current class to this element
            if (!target.classList.contains('current'))
              target.classList.add('current');

            // Get the current season key
            const seasonKey = target.dataset.season;

            // Get the current season data
            const season = PLEX.current_item.seasons[seasonKey];

            // Init the season episodes list
            let innerHTML = '<ul>';

            // Loop through the episode sort order
            season.episode_sort_order.forEach(key => {
              // Get the episode data
              const episode = season.episodes[key];

              // Add the episode data to the season episodes list
              innerHTML += `<li data-season="${season.key}" data-episode="${episode.key}">${episode.index}. ${episode.title}</li>`;
            });

            // End the season episode list
            innerHTML += '</ul>';

            // Update the seasons episodes inner HTML
            document.querySelector(
              '#popup_seasons_episodes'
            ).innerHTML = innerHTML;

            // Add event listener to the episodes list items
            const popupSeasonEpisodesUl = document.querySelector(
              '#popup_seasons_episodes'
            );
            if (popupSeasonEpisodesUl) {
              popupSeasonEpisodesUl
                .querySelectorAll('li')
                .forEach(popupSeasonEpisodesLi =>
                  popupSeasonEpisodesLi.addEventListener(
                    'click',
                    episodeEvent => {
                      // Set the current target
                      const episodeTarget = episodeEvent.target;
                      // Remove the current class from the popup seasons episodes
                      popupSeasonEpisodesUl
                        .querySelectorAll('li.current')
                        .forEach(episodesListLi => {
                          episodesListLi.classList.remove('current');
                        });

                      // Add current class to this element
                      if (!episodeTarget.classList.contains('current'))
                        episodeTarget.classList.add('current');

                      // Get the current episode key
                      const episodeKey = episodeTarget.dataset.episode;

                      // Get the current episode data
                      const episode = season.episodes[episodeKey];

                      // Set the episode length in minutes
                      const minutes = Math.round(episode.duration / 60000);

                      // Set the episodes data
                      const episodeInnerHTML = `<div id="episode_content"><h5>${
                        episode.title
                      }</h5><p class="meta">${episode_tag(
                        season,
                        episode
                      )} | ${minutes} ${inflect(minutes, 'minute')} | Rated ${
                        episode.rating
                      }</p><p>${episode.summary}</p></div>`;

                      // Update the episode inner HTML
                      document.querySelector(
                        '#popup_seasons_episode'
                      ).innerHTML = episodeInnerHTML;
                    }
                  )
                );
            } // end SEASONS EPISODES CLICK
          })
        );
    } // end SEASONS SEASONS CLICK

    // Fade in the popup overlay
    FX.fadeIn(PLEX._popup_overlay, {
      duration: 400,
      setTo: 0.6,
      complete: null,
    });

    // Set the popup height and display
    PLEX._popup_overlay.style.height = `${document.body.scrollHeight}px`;

    // Listen for click on popup overlay
    PLEX._popup_overlay.addEventListener('click', () => {
      // Hide the popup
      PLEX.hide_item();
    });

    // Set popup container styling
    PLEX._popup_container.style.opacity = 0;
    PLEX._popup_container.style.display = 'block';
    PLEX._popup_container.style.top = `${document.documentElement.scrollTop +
      (document.documentElement.clientHeight -
        PLEX._popup_container.offsetHeight) /
        4}px`;
    PLEX._popup_container.style.left = `${(document.body.offsetWidth -
      PLEX._popup_container.offsetWidth) /
      2}px`;

    // Fade in popup container
    FX.fadeIn(PLEX._popup_container);

    // Listen for click on popup close
    PLEX._popup_container
      .querySelector('.close')
      .addEventListener('click', () => {
        // Hide the popup
        PLEX.hide_item();
      });
  }, // end func: display_item

  /*!
   * Generate the content to display in the popup
   */
  generate_item_content() {
    // Set popup header
    let popupHeader = `<div id="popup-header"><h1>${PLEX.current_item.title}</h1>`;
    if (PLEX.current_item.tagline !== false)
      popupHeader += `<h4>${PLEX.current_item.tagline}</h4>`;
      // Check if there is any rating set
       // Init the rating tag
    let ratingTag = '';
    if (typeof rating !== 'undefined') {
      // Init the rating class
      const ratingClass = `rating_${(Math.round(rating) / 2) * 10}`;
      // Set the rating tag
      ratingTag = `<span class="rating rating_${ratingSource} ${ratingClass}"></span>`;
    } // end RATING


   popupHeader +=`${ratingTag}</div>`
    // Get current item element
    const currentItem = PLEX._item_list.querySelector(
      `li[data-item="${PLEX.current_item.key}"]`
    );

    // Get previous item
    const previousItemID = currentItem.previousSibling
      ? parseInt(currentItem.previousSibling.dataset.item)
      : 0;

    // Get next item
    const nextItemID = currentItem.nextSibling
      ? parseInt(currentItem.nextSibling.dataset.item)
      : 0;

    PLEX.previous_item_id = previousItemID > 0 ? previousItemID : 0; // Check previous item ID
    PLEX.next_item_id = nextItemID > 0 ? nextItemID : 0; // Check next item ID

 

    const _img = currentItem.querySelector('img'); // Get the current item image
    // Check if the image dataset-src is set
    if (_img.dataset.src !== undefined) {
      _img.src = _img.dataset.src; // Set the image source
      _img.removeAttr('data-src'); // Remove the dataset-src
    }

    // Set the image thumb
    const imgThumb = _img.src;

   
    // Init the popup sidebar
    const popupSidebar = `<div id="popup-sidebar"><img src="${imgThumb}" width="200px" height="350px"/><br><button onclick="PLEX.hide_item();" style="position: fixed;"> -BACK-->>></button><br><button onclick="pageUP();" style="position: fixed;"> -PageUP</button><br><button onclick="pageDOWN();" style="position: fixed;"> -PageDOWN</button></div>`;

   

    // Check if there is a user rating set
    if (PLEX.current_item.user_rating !== false) {
      const rating = PLEX.current_item.user_rating; // Set the user rating
      const ratingSource = 'user'; // Set the rating source
    } else if (PLEX.current_item.rating !== false) {
      // Check if there is a rating set
      const { rating } = PLEX.current_item; // Set the plex rating
      const ratingSource = 'plex'; // Set the rating source
    }

    
    // Init the popup content   
    let popupContent = `<div id="popup-content"><a href="#" class="close"></a>`;
    
    
    if (PLEX.current_item.genre)
        popupContent += `<li class="gender"> ${PLEX.current_item.genre.join(
          ', '
        )}</li>`;
    // Check if there is a tagline and add it to the popup content
   
    // Check if there is a summary and add it to the popup content
    if (PLEX.current_item.summary !== false)
     //popupContent += `<div id="popup-summary"><p><strong style="color:orange;">Summary:</strong> ${PLEX.current_item.summary}</p>${PLEX.current_item.media.stream_URL0}</div>`;
     popupContent += `<div id="popup-summary"><p><strong style="color:orange;">Summary:</strong> ${PLEX.current_item.summary}</p></div>`;
      

    // Check if there are any directors, genres, roles, or media
    if (
      (PLEX.current_item.director && PLEX.current_item.director.length > 0) ||
      (typeof PLEX.current_item.genre !== 'undefined' &&
        PLEX.current_item.genre.length > 0) ||
      (PLEX.current_item.role && PLEX.current_item.role.length > 0) ||
      PLEX.current_item.media
    ) {
      // Start popup content meta
      popupContent += '<ul id="popup-content-meta">';

      // Check if there are any directors and add them to the popup content
      if (PLEX.current_item.director)
        popupContent += `<li><strong>Directed by:</strong> ${PLEX.current_item.director.join(
          ', '
        )}</li>`;

      // Check if there are any roles and add them to the popup content
      if (PLEX.current_item.role)
        popupContent += `<li class="starring"><strong>Starring:</strong> ${PLEX.current_item.role.join(
          ', '
        )}</li>`;

      // Check if there are any genres and add them to the popup content
      

      // Check if there is any media
   if (PLEX.current_item.duration > 0) {
      const minutes = Math.round(PLEX.current_item.duration / 60000); // Set the item minutes

      // Add duration to the popup sidebar meta
      popupContent += `<li><strong>Duration:</strong> ${minutes} ${inflect(
        minutes,
        'minute'
      )}</li>`;
    }
    // Check if the current item has a studio set and add it to the popup sidebar meta
    if (PLEX.current_item.studio !== false)
      popupContent += `<li><strong>Studio:</strong> ${PLEX.current_item.studio}</li>`;

    // Check if the current item has a release year set and add it to the popup sidebar meta
    if (PLEX.current_item.release_year !== false)
      popupContent += `<li><strong>Released:</strong> ${PLEX.current_item.release_year}</li>`;
	
    // Check if the current item has a content rating set and add it to the popup sidebar meta
    if((PLEX.current_item.media.stream_URL0.substring(0, PLEX.current_item.media.stream_URL0.lastIndexOf("/") + 1)) == '/lucious fox/')
    	var dropb = 'dbid:AAAJVtM3OfcqN-8d2Bt-IB2wC42pUnFpsNU';   
    
    //add this to <li> to make them show up delayed  id="BuyNow" style="display:none;"
        
    var totsize0 = (PLEX.current_item.media.total_size0/1024/1024/1024).toFixed(2);
        
    //the below will replace the search term sent to a plex server
    var plex_title_of_mov = encodeURI(PLEX.current_item.title) + 'qqqq' + encodeURI(PLEX.current_item.release_year);    
    var search_term_replaced = plex_title_of_mov.replace(/&/g, '%26');
    search_term_replaced = search_term_replaced.replace(/'/g, '%27'); //apostraphe
    search_term_replaced = search_term_replaced.replace(/,/g, '%2C'); //comma
    search_term_replaced = search_term_replaced.replace(/#/g, '%23'); //hashtag
    
    var curURL333 = window.location.href;   
 	var searchquery333 = (curURL333.substring(curURL333.lastIndexOf("/") + 1)); 
    searchquery333 = decodeURI(searchquery333);
    searchquery333 = searchquery333.replace(/,/g, '%2C');  
    searchquery333 = searchquery333.replace(/'/g, '%27');      
    searchquery333 = searchquery333.replace(/&/g, '%26');      
        
    
    var csvFile = new XMLHttpRequest();
    csvFile.open("GET", "./plexServers.txt", true);
    csvFile.onreadystatechange = function() {
      if (csvFile.readyState === 4) {  // Makes sure the document is ready to parse.
        if (csvFile.status === 200) {  // Makes sure it's found the file.
          allText = csvFile.responseText;
          lines = csvFile.responseText.split("\n"); // Will separate each line into an array
          alert(allText);
        }
      }
    }    
        
        
        
        
        
    var backgroundUrl = '';
    if (PLEX.current_item.content_rating !== false)
     backgroundUrl = ('https://image.tmdb.org/t/p/original' + PLEX.current_item.backdrop);   
     document.getElementById('popup-overlay').style.background='url(' + backgroundUrl + ')';   //(PLEX.current_item.backdrop   /aDnCTWpWMHcQxOeGWsITmoLuEGy.jpg
     document.getElementById('popup-overlay').style.backgroundSize = '100%';   
     document.getElementById('popup-overlay').style.opacity = 1.00;
     document.getElementById('main').style.opacity = 0.00; 
     document.getElementById('sidebar').style.opacity = 0.00;   
     document.getElementById('popup-overlay').style.backgroundAttachment = 'fixed';
     document.getElementById('builder').style.opacity = 0.00;
     document.getElementById('sidebar').style.opacity = 0.00;
     document.getElementById('header').style.opacity = 0.00;
        
     popupContent += `<li><strong>Rated:</strong> ${PLEX.current_item.content_rating}</li><li><strong>Release Date:</strong> ${PLEX.current_item.release_date}</li><li><strong>|</strong></li><!-- <button type="button">Press here to start stream</button> --> <br>Scraping media info from PLEX.....Please Wait 30 seconds...Links expire 2 mins after being displayed below<br><div class="meter"><span style="width: 100%"></span></div><br>
        <!-- <li id="FileName" style="display:none;"><strong>File Name:</strong> ${(PLEX.current_item.media.stream_URL0.substring(PLEX.current_item.media.stream_URL0.lastIndexOf("/"))).replace('/', '')}</li><br> -->
        <!-- <li id="FileSize" style="display:none;"><strong>File Size:</strong> ${totsize0} GB</li><br> -->
        <!-- <li id="BitRate" style="display:none;"><strong>Bit Rate:</strong> ${PLEX.current_item.media.bitrate0} KB/s</li><br> -->
        <!-- <li id="VideoRes" style="display:none;"><strong>Video Resolution:</strong> ${PLEX.current_item.media.video_resolution0}</li><br> -->
        <!-- <li id="VideoCodec" style="display:none;"><strong>Video Codec:</strong> ${PLEX.current_item.media.video_codec0}</li><br> -->
        <!-- <li id="AudioCodec" style="display:none;"><strong>Audio Codec:</strong> ${PLEX.current_item.media.audio_codec0}</li><br> -->
        <!-- <li id="AudioChannels" style="display:none;"><strong>Audio Channels:</strong> ${PLEX.current_item.media.audio_channels0}</li><br> -->
         <!--<li id="AspectRatio" style="display:none;"><strong>Aspect Ratio:</strong> ${PLEX.current_item.media.aspect_ratio0}</li><br> -->
         <!--<li id="linksss" style="display:block;"><strong>Plex URL:</strong> <a href="https://9f482e7bf03a5831.plex.direct:32403/search?query=${encodeURI(PLEX.current_item.title)}&X-ex-ken=yL51rMJ3G8">${PLEX.current_item.key}</a>  </li><br> -->
         <!-- <li id="linkssss" style="display:block;"><strong>Plex URL2:</strong> <a href="https://8a8a56040b945940.plex.direct:42504/search?query=${search_term_replaced}&X-ex-ken=i_tZKxDgZ">${PLEX.current_item.key}</a>  </li><br> -->
         
              
              
             
             <?php       
                @ini_set("output_buffering", "Off");
                @ini_set('implicit_flush', 1);
                @ini_set('zlib.output_compression', 0);
                @ini_set('max_execution_time',1200);
        		header( 'Content-type: text/html; charset=utf-8' );
        		$newarray = array();
                $row = 1;
				//$variables = '';       		
				print_r($link4);
        		for($www = 0; $www < 75; $www++){
                if (($handle = fopen("./r/result$www.php", "r")) !== FALSE) {
                    while (($data = fgetcsv($handle, 100000, ",")) !== FALSE) {
                        $num = count($data);
                        /* echo "<p> $num fields in line $row: <br /></p>\n";  */
                        $row++;
                        for ($c=0; $c < $num; $c++) {
                            if($c != 1){ /* was testjs5.php before */
                            	echo "<iframe src='./testjs8.php?dd=" . $data[$c] . "qqqq";  ?>${search_term_replaced}<?php
                            }else{
                            	echo  "qqqq" . $data[$c] . "' frameborder='0' scrolling='no' onload='resizeIframe(this);' height='65px' width='1100px'  id='helloplease' loading='lazy' ></iframe>"; 
                            }
                            //print_r($varaibles);
                        } //base64 encode the URLs plus random number as encryption/obfuscation
                        //echo ">Test</a><br />\n"; <img src='https://image.tmdb.org/t/p/w185/qRyy2UmjC5ur9bDi3kpNNRCc5nc.jpg' height='4300px' onload='resizePic(this);' id='" . $www . $num . $row . "' /> <br>
                    }
                    fclose($handle);  
                };
                
                    
                    
                    
                }

                ?>  
                    
                
             
         <a href="#"><img src="playbutton.png" height="50px" width="50px" /></a><br><p>
         <img src="closebutton.png"  onclick="PLEX.hide_item();" height="50px" width="auto"/></p>`;
 
        
    
        
        
    // Check if the current item has multiple seasons set and add it to the popup sidebar meta
    if (PLEX.current_item.num_seasons > 0)
      popupContent += `<li><strong>Seasons:</strong> ${PLEX.current_item.num_seasons}</li>`;

    // Check if the current item has multiple episodes set and add it to the popup sidebar meta
    if (PLEX.current_item.num_episodes > 0)
      popupContent += `<li><strong>Episodes:</strong> ${PLEX.current_item.num_episodes}</li>`;

    // Check if the current item has a view count set and add it to the popup sidebar meta
    if (PLEX.current_item.view_count > 0)
      popupContent += `<li><strong>Watched:</strong> ${
        PLEX.current_item.view_count
      } ${inflect(PLEX.current_item.view_count, 'time')}</li>`;

      // Close the popup content meta
      popupContent += '</ul>';
    } // end CONTENT META

    // Check if there is any seasons++++++++++++++++++++++++++++++++++++++++++++++++++++++++++
    var popupSeasons=``;
if (PLEX.current_item.num_seasons && PLEX.current_item.num_seasons > 0) {
      // Start the season browser
      popupSeasons += `<div id="popup_seasons"><section id="popup_seasons_seasons"><ul>`;

      // Loop through the seasons sort order
      PLEX.current_item.season_sort_order.forEach(key => {
        const season = PLEX.current_item.seasons[key];
        popupSeasons += `<li data-season="${season.key}">${season.title}</li>`;
      });

      // Start the season episodes
      popupSeasons += `</ul></section><section id="popup_seasons_episodes"></section><section id="popup_seasons_episode"></section></div>`;
    } // end SEASON BROWSER
 
    popupContent += '</div>';
    // /+++++++++++++++++++++++++++++++++++++++++++++++++++++++++
    return `<div id="popup-outer"><div id="popup-inner">${popupHeader}${popupSidebar}${popupContent}${popupSeasons}</div></div>`;
  }, // end func: generate_item_content

  /*!
   * Hide the currently open popup
   */
  hide_item() {
    PLEX.popup_visible = false; // Set popup visible to false
    window.location.hash = PLEX.current_section.key; // Set hash to current section
    FX.fadeOut(PLEX._popup_overlay); // Fade out popup overlay
    FX.fadeOut(PLEX._popup_container); // Fade out popup container
    document.getElementById('main').style.opacity = 1.00;
    document.getElementById('sidebar').style.opacity = 1.00;    
    document.getElementById('builder').style.opacity = 1.00;
    document.getElementById('header').style.opacity = 1.00;  
  }, // end func: hide_item

  
  

    
  /*!
   * Run plex class (constructor)
   */
  run() {
    var curURL = window.location.href;   
 	var searchquery = (curURL.substring(curURL.lastIndexOf("/") + 1)); 
    searchquery = decodeURI(searchquery);
    searchquery = searchquery.replace(/,/g, '');  
    searchquery = searchquery.replace(/'/g, 'A');  
    
    document.getElementById('builder').onkeydown = function(e){
    if(e.keyCode == 13){
        this.form.submit();
        alert('submit');
   	}
	};  
      
      
      
    if (!PLEX.data_loaded) {
      // No data loaded. Fetch data file
      fetch('./u/' + searchquery + '.php')
        .then(response => {
          // Handle data
          if (response.ok) {
            response.text().then(data => {
              // Remove starting string
              let rawPlexData = data
                .replace('var raw_plex_data = ', '')
                .trimStart();
              // Remove semi-colon from end
              rawPlexData = rawPlexData
                .trimEnd()
                .substring(0, rawPlexData.length - 1);
              // Parse the plex data
              rawPlexData = JSON.parse(rawPlexData);
              // Load the data into the script
              PLEX.load_data(rawPlexData);
              return PLEX.run();
            });
          } else {
            throw new Error(
              `Error obtaining the Plex data: ${response.statusText}`
            );
          }
        })
        .catch(error => {
          // Handle error
          console.error(error);
        });
      return;
    }

    // Check for menu status
    const sidebarMenu = document.querySelector('#sidebar-menu');
    const menuStatus = localStorage.getItem('peMenuStatus');
    

    // Get/Set Elements
    //PLEX._total_items = document.querySelector('#total_items');
    PLEX._last_updated = document.querySelector('#last_updated');
    PLEX._sections_list = document.querySelector('#plex_section_list');
    PLEX._sorts_list = document.querySelector('#plex_sort_list');
    PLEX._genre_list_section = document.querySelector(
      '#plex_genre_list_section'
    );
    PLEX._genre_list_section.style.display = 'none';
    PLEX._genre_list = document.querySelector('#plex_genre_list');
    PLEX._director_list_section = document.querySelector(
      '#plex_director_list_section'
    );
    PLEX._director_list_section.style.display = 'none';
    PLEX._director_list = document.querySelector('#plex_director_list');
    //PLEX._seen_list_section = document.querySelector('#plex_seen_list_section');
    //PLEX._seen_list = document.querySelector('#plex_seen_list');
    PLEX._section_title = document.querySelector('#section-header h2');
    PLEX._section_meta = document.querySelector('#section-header p');
    PLEX._section_filter = document.querySelector('#header input');
    PLEX._container = document.querySelector('#container');
    PLEX._item_list_status = document.querySelector('#item-list-status');
    PLEX._item_list = document.querySelector('#item-list ul');
    PLEX._section_header = document.querySelector('#section-header');
    PLEX._popup_overlay = document.querySelector('#popup-overlay');
    PLEX._popup_container = document.querySelector('#popup-container');

    // Set page variables
    //PLEX._total_items.innerText = number_format(PLEX.total_items);
    PLEX._last_updated.innerText = PLEX.last_updated;
    PLEX.display_sections_list();

    /*
     * Add event listeners
     */

    // Listen for click on section list items
    PLEX._sections_list.querySelectorAll('li').forEach(sectionsListItem =>
      sectionsListItem.addEventListener('click', () => {
        // Display the selected section
        PLEX.display_section(sectionsListItem.dataset.section);
      })
    );

    // Listen for click on sort list items
    PLEX._sorts_list.querySelectorAll('li').forEach(sortListItem =>
      sortListItem.addEventListener('click', () => {
        // Change the selected sort
        PLEX.change_sort(sortListItem.dataset.sort);
      })
    );

    // Keyup on filter (search) input
    PLEX._section_filter.addEventListener('keyup', () => {
      // Display the filtered items in the section
      PLEX.display_section(PLEX.current_section.key);
    });

    // Listen for keyup on the document
    document.addEventListener('keyup', event => {
      // If shift key, meta key, alt key, or control key was pressed, skip
      if (event.shiftKey || event.metaKey || event.altKey || event.ctrlKey)
        return;

      // Check which key was pressed and fire function if match found
      switch (event.which) {
		case 27: // esc
        case 88: // x
          PLEX.hide_item();
          break;
        case 74: // j
        /* case 37: // arrow left
          if (PLEX.previous_item_id > 0) {
            PLEX.display_item(PLEX.previous_item_id);
          }
          break; */
        case 75: // k
        /* case 39: // arrow right
          if (PLEX.next_item_id > 0) {
            PLEX.display_item(PLEX.next_item_id);
          } else if (!PLEX.popup_visible) {
            // Show first item if none others
            const firstItem = parseInt(
              PLEX._item_list.querySelector('li:first-child').dataset.item
            );
            // firstItem = parseInt(firstItem[0].dataset.item);
            if (firstItem > 0) PLEX.display_item(firstItem);
          }
          break; */
        default:
          break;
      }
    });

    // Get the window hash
    const { hash } = window.location;
    // Check if the hash is empty
    if (hash !== '') {
      // Set regex to only return numbers
      const regex = new RegExp('#([0-9]+)/?([0-9]+)?/?');

      // Execute regex to return array of set number(s)
      const m = regex.exec(hash);

      // Select display if valid regex match
      if (m !== null) {
        const m1 = parseInt(m[1]); // Set match 1 (section)
        const m2 = parseInt(m[2]); // Set match 2 (item)
        if (m1 > 0) PLEX.display_section(m1); // If section is valid, display section
        if (m2 > 0) PLEX.display_item(m2); // If item is valid, display item
      } else {
        // Trigger "click" of first section
        PLEX._sections_list.querySelector('li:first-child').click();
      }
    } else {
      // Trigger "click" of first section
      PLEX._sections_list.querySelector('li:first-child').click();
    }
  }, // end func: run
}; // end class: PLEX
</script>
	<script>
		ready(() => {
			PLEX.run();
		});
	</script>
</head>
<!-- 
This file is modified for Dark Mode template created by Dragos
https://github.com/themsk666/Plex-Export-Dark
 -->
<body>
	<header id="header">
		<h1><span>Plex Export</span></h1>
		<section id="search">
						<input placeholder="Search..." type="text" />
					</section>
     
     <form id="builder" action="apigetter8-4.php" method="GET">
     <input type="text" name="s" id="first_name" placeholder="Search" class="searchField">
     <!-- <textarea name="s" rows="2" cols="10"></textarea> -->
     <input type="hidden" name ="id" value="<%= request.getParameter("s_param")%> <!-- "> -->
     <input type="submit" name ="submit" style="width:50px; height:30px;" value="Search">
     
	 </form>


     
	</header><!-- end #header -->
	<div id="item-list-status">
				Loading data from PLEX...
			</div>
	<main class="container" id="container" style="display:none">
          
		<aside id="sidebar">
			
			<section id="sidebar-menu">
				<!-- end .sidebar-section -->
				<div class="sidebar-section">
					<h2>Listing by...<a href="./" style="color:white;">Refresh</a></h2>
					<ul class="generic-list" id="plex_sort_list">
						<!--  <a href="#" style="color:orange;">Recently Added Episodes</a>  -->
     					<li class="current" data-sort="title"><em>asc</em>Title</li>
     					<!-- <li data-sort="rating">Rating</li> -->
						<!-- <li data-sort="release">Release Date</li>  -->
						<li data-sort="addedAt">Added Date</li>
					</ul>
				</div><!-- end .sidebar-section -->
				
				<div class="sidebar-section" id="plex_genre_list_section">
					<h2>Genre</h2>
					<ul class="generic-list" id="plex_genre_list"></ul>
				</div><!-- end .sidebar-section -->
				<div class="sidebar-section" id="plex_director_list_section">
					<h2>Directors</h2>
					<ul class="generic-list" id="plex_director_list"></ul>
				</div><!-- end .sidebar-section -->
			</section>
		</aside><!-- end #sidebar -->
		<main id="main">
		
			
				
					<section id="section-header">
					 <div class="sidebar-section">
					 <ul class="sections-list" id="plex_section_list">	
     					
					</ul>	</div>
					
				
			</section><!-- end .section-header -->
			<div id="section_num_items"></div>
			
			<div id="item-list">
				<ul></ul>
			</div>
		</main><!-- end #main -->
	</main><!-- end #container -->
	<footer id="footer">
		<p>PLEX Export By MSK  | <span id="last_updated"></span> 
	 </p></footer><!-- end #footer -->
	<div id="popup-overlay"></div>
	<div id="popup-container"></div>
<script>
	window.onscroll = function() {myFunction()};
var header = document.getElementById("section-header");
var sticky = header.offsetTop;
function myFunction() {
  if (window.pageYOffset > sticky) {
   // header.classList.add("sticky");
  } else {
   // header.classList.remove("sticky");
  }
} 
</script>
                                     
</body>

</html>
