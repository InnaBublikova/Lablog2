<!doctype html>
<html> 
<head> 
	<meta charset="utf-8" />
	<title>404</title>
	<style>/*
TABLE OF CONTENT

1. common page styles
2. styles for illustration elements
3. animations
*/

/*
COMMON PAGE STYLES
*/
body{
	margin:0px;
	padding:0px;
	overflow:hidden;
	background: #F7F7F7;
	height:100%;
}
/*
STYLES FOR ILLUSTRATION ELEMENTS
*/
#level{
	width:100%;
	height:1px;
	position:absolute;
	top:50%;
}
#content{
	text-align:center;
	margin-top:-327px;
}
#gears{
	width:478px;
	height:655px;
	position:relative;
	display:inline-block;
	vertical-align:middle;
}
#gears-static{
	background:url(gears.png) no-repeat -363px -903px;
	width:329px;
	height:602px;
	position:absolute;
	bottom:5px;
	right:0px;
	opacity:0.4;
}
#title{
	vertical-align:middle;
	color:#9EB7B5;
	width:43%;
	display:inline-block;
}
#title h1{
	font-family: 'PTSansNarrowBold', sans-serif;
	font-size:2.4em;
}
#title p{
	font-family: sans-serif;
	font-size:1.2em;
	line-height:148%;
}


/*gear-system-1*/
#gear15{
	background: url(gears.png) no-repeat 0 -993px; 
	width: 321px; 
	height: 321px;
	position:absolute;
	left:45px;
	top:179px;
	
	-webkit-animation: rotate-back 24000ms linear infinite;
	-moz-animation: rotate-back 24000ms linear infinite;
	-ms-animation: rotate-back 24000ms linear infinite;
	animation: rotate-back 24000ms linear infinite;
}

#gear14{
	background: url(gears.png) no-repeat 0 -856px; 
	width: 87px; 
	height: 87px;
	position:absolute;
	left:162px;
	top:296px;
}

#gear13{
	background: url(gears.png) no-repeat 0 -744px; 
	width: 62px; 
	height: 62px; 
	position:absolute;
	left:174px;
	top:309px;
	
	-webkit-animation: rotate 8000ms linear infinite;
	-moz-animation: rotate 8000ms linear infinite;
	-ms-animation: rotate 8000ms linear infinite;
	animation: rotate 8000ms linear infinite;
}

/*gear-system-2*/
#gear10{
	background: url(gears.png) no-repeat 0 -184px;
	width: 122px; 
	height: 122px;
	position:absolute;
	left:175px;
	top:0;
	
	-webkit-animation: rotate-back 8000ms linear infinite;
	-moz-animation: rotate-back 8000ms linear infinite;
	-ms-animation: rotate-back 8000ms linear infinite;
	animation: rotate-back 8000ms linear infinite;
}

#gear3{
	background: url(gears.png) no-repeat 0 -1493px;
	width: 85px; 
	height: 84px;
	position:absolute;
	left:194px;
	top:19px;
	
	-webkit-animation: rotate 10000ms linear infinite;
	-moz-animation: rotate 10000ms linear infinite;
	-ms-animation: rotate 10000ms linear infinite;
	animation: rotate 10000ms linear infinite;
}


/*gear-system-3*/
#gear9{
	background: url(gears.png) no-repeat -371px -280px; 
	width: 234px; 
	height: 234px;
	position:absolute;
	left:197px;
	top:96px;
	
	-webkit-animation: rotate 12000ms linear infinite;
	-moz-animation: rotate 12000ms linear infinite;
	-ms-animation: rotate 12000ms linear infinite;
	animation: rotate 12000ms linear infinite;
}

#gear7{
	background: url(gears.png) no-repeat -371px 0; 
	width: 108px; 
	height: 108px;
	position:absolute;
	left:260px;
	top:159px;
	
	-webkit-animation: rotate-back 10000ms linear infinite;
	-moz-animation: rotate-back 10000ms linear infinite;
	-ms-animation: rotate-back 10000ms linear infinite;
	animation: rotate-back 10000ms linear infinite;
}

/*gear-system-4*/
#gear6{
	background: url(gears.png) no-repeat 0 -1931px; 
	width: 134px; 
	height: 134px;
	position:absolute;
	left:305px;
	bottom:212px;
	
	-webkit-animation: rotate-back 10000ms linear infinite;
	-moz-animation: rotate-back 10000ms linear infinite;
	-ms-animation: rotate-back 10000ms linear infinite;
	animation: rotate-back 10000ms linear infinite;
}

#gear4{
	background: url(gears.png) no-repeat 0 -1627px; 
	width: 69px; 
	height: 69px;
	position:absolute;
	left:337px;
	bottom:245px;
	
	-webkit-animation: rotate-back 10000ms linear infinite;
	-moz-animation: rotate-back 10000ms linear infinite;
	-ms-animation: rotate-back 10000ms linear infinite;
	animation: rotate-back 10000ms linear infinite;
}

/*gear-system-5*/
#gear12{
	background: url(gears.png) no-repeat 0 -530px; 
	width: 164px; 
	height: 164px;
	position:absolute;
	left:208px;
	bottom:85px;
	
	-webkit-animation: rotate 8000ms linear infinite;
	-moz-animation: rotate 8000ms linear infinite;
	-ms-animation: rotate 8000ms linear infinite;
	animation: rotate 8000ms linear infinite;
}

#gear11{
	background: url(gears.png) no-repeat 0 -356px; 
	width: 125px; 
	height: 124px;
	position:absolute;
	left:228px;
	bottom:105px;
	
	-webkit-animation: rotate-back 10000ms linear infinite;
	-moz-animation: rotate-back 10000ms linear infinite;
	-ms-animation: rotate-back 10000ms linear infinite;
	animation: rotate-back 10000ms linear infinite;
}

#gear8{
	background: url(gears.png) no-repeat -371px -158px; 
	width: 72px; 
	height: 72px;
	position:absolute;
	left:254px;
	bottom:131px;
	
	-webkit-animation: rotate 6000ms linear infinite;
	-moz-animation: rotate 6000ms linear infinite;
	-ms-animation: rotate 6000ms linear infinite;
	animation: rotate 6000ms linear infinite;
}

/*gear1*/
#gear1{
	background: url(gears.png) no-repeat 0 0; 
	width: 135px; 
	height: 134px;
	position:absolute;
	left:83px;
	bottom:111px;
	
	-webkit-animation: rotate-back 10000ms linear infinite;
	-moz-animation: rotate-back 10000ms linear infinite;
	-ms-animation: rotate-back 10000ms linear infinite;
	animation: rotate-back 10000ms linear infinite;
}


/*gear-system-6*/
#gear5{
	background: url(gears.png) no-repeat 0 -1746px; 
	width: 134px; 
	height: 135px;
	position:absolute;
	left:22px;
	top:108px;
	
	-webkit-animation: rotate 10000ms linear infinite alternate;
	-moz-animation: rotate 10000ms linear infinite alternate;
	-ms-animation: rotate 10000ms linear infinite alternate;
	animation: rotate 10000ms linear infinite alternate;
}

#gear2{
	background: url(gears.png) no-repeat 0 -1364px; 
	width: 80px; 
	height: 79px;
	position:absolute;
	left:49px;
	top:136px;
	
	-webkit-animation: rotate-back 10000ms linear infinite alternate;
	-moz-animation: rotate-back 10000ms linear infinite alternate;
	-ms-animation: rotate-back 10000ms linear infinite alternate;
	animation: rotate-back 10000ms linear infinite alternate;
}

/*weight*/
#weight{
	background: url(gears.png) no-repeat -371px -564px; 
	width: 34px; 
	height: 92px;
	position:absolute;
	left:1px;
	bottom:0;
	
	-webkit-animation: up 10000ms linear infinite alternate;
	-moz-animation: up 10000ms linear infinite alternate;
	-ms-animation: up 10000ms linear infinite alternate;
	animation: up 10000ms linear infinite alternate;
}


/*chain*/
#chain-circle{
	background: url(gears.png) no-repeat -371px -706px; 
	width:146px; 
	height:147px;
	position:absolute;
	left:17px;
	top:102px;
	
	-webkit-animation: rotate 10000ms linear infinite alternate;
	-moz-animation: rotate 10000ms linear infinite alternate;
	-ms-animation: rotate 10000ms linear infinite alternate;
	animation: rotate 10000ms linear infinite alternate;
}
#chain{
	width:1px;
	height:380px;
	border-left:2px dotted #D9D9D9;
	position:absolute;
	left:17px;
	top:175px;
	opacity:0.7;
	
	-webkit-animation: collapse 10000ms linear infinite alternate;
	-moz-animation: collapse 10000ms linear infinite alternate;
	-ms-animation: collapse 10000ms linear infinite alternate;
	animation: collapse 10000ms linear infinite alternate;
}

/*ANIMATIONS*/
/*rotate*/

@-moz-keyframes rotate {
 from {
   -moz-transform: rotate(0deg);
   transform: rotate(0deg);
 }
 to {
   -moz-transform: rotate(360deg);
   transform: rotate(360deg);
 }
}

@-webkit-keyframes "rotate" {
 from {
   -webkit-transform: rotate(0deg);
   transform: rotate(0deg);
 }
 to {
   -webkit-transform: rotate(360deg);
   transform: rotate(360deg);
 }
}

@-ms-keyframes "rotate" {
 from {
   -ms-transform: rotate(0deg);
   transform: rotate(0deg);
 }
 to {
   -ms-transform: rotate(360deg);
   transform: rotate(360deg);
 }
}

@-o-keyframes "rotate" {
 from {
   -o-transform: rotate(0deg);
   transform: rotate(0deg);
 }
 to {
   -o-transform: rotate(360deg);
   transform: rotate(360deg);
 }
}
@keyframes rotate{
 from {
    -webkit-transform: rotate(0deg);
   	-moz-transform: rotate(0deg);
   	-o-transform: rotate(0deg);
   	-ms-transform: rotate(0deg);
   	transform: rotate(0deg);
 }
 to {
    -webkit-transform: rotate(360deg);
   	-moz-transform: rotate(360deg);
   	-o-transform: rotate(360deg);
   	-ms-transform: rotate(360deg);
   	transform: rotate(360deg);
 }
}
/*rotate-back*/
@-moz-keyframes rotate-back {
 from {
   -moz-transform: rotate(0deg);
   transform: rotate(0deg);
 }
 to {
   -moz-transform: rotate(-360deg);
   transform: rotate(-360deg);
 }
}

@-webkit-keyframes "rotate-back" {
 from {
   -webkit-transform: rotate(0deg);
   transform: rotate(0deg);
 }
 to {
   -webkit-transform: rotate(-360deg);
   transform: rotate(-360deg);
 }
}

@-ms-keyframes "rotate-back" {
 from {
   -ms-transform: rotate(0deg);
   transform: rotate(0deg);
 }
 to {
   -ms-transform: rotate(-360deg);
   transform: rotate(-360deg);
 }
}

@-o-keyframes "rotate-back" {
 from {
   -o-transform: rotate(0deg);
   transform: rotate(0deg);
 }
 to {
   -o-transform: rotate(-360deg);
   transform: rotate(-360deg);
 }
}
@keyframes rotate-back {
 from {
    -webkit-transform: rotate(0deg);
   	-moz-transform: rotate(0deg);
   	-o-transform: rotate(0deg);
   	-ms-transform: rotate(0deg);
   	transform: rotate(0deg);
 }
 to {
    -webkit-transform: rotate(-360deg);
   	-moz-transform: rotate(-360deg);
   	-o-transform: rotate(-360deg);
   	-ms-transform: rotate(-360deg);
   	transform: rotate(-360deg);
 }
}
/*weight up*/
@-moz-keyframes up {
 from {
   bottom: 0px;
 }
 to {
   bottom: 340px;
 }
}

@-webkit-keyframes "up" {
 from {
   bottom: 0px;
 }
 to {
   bottom: 340px;
 }
}

@-ms-keyframes "up" {
 from {
   bottom: 0px;
 }
 to {
   bottom: 340px;
 }
}

@-o-keyframes "up" {
 from {
   bottom: 0px;
 }
 to {
   bottom: 340px;
 }
}
@keyframes up {
 from {
    bottom: 0px;
 }
 to {
    bottom: 340px;
 }
}
/*chain up and down*/

@-moz-keyframes collapse {
 from {
   height: 387px;
 }
 to {
   height: 48px;
 }
}

@-webkit-keyframes "collapse" {
 from {
   height: 387px;
 }
 to {
   height: 48px;
 }
}

@-ms-keyframes "collapse" {
 from {
   height: 387px;
 }
 to {
   height: 48px;
 }
}

@-o-keyframes "collapse" {
 from {
   height: 387px;
 }
 to {
   height: 48px;
 }
}
@keyframes collapse {
 from {
    height: 387px;
 }
 to {
    height: 48px;
 }
}</style>
</head> 
<body>
	<div id="level">
		<div id="content">
			<div id="gears">
				<div id="gears-static"></div>
				<div id="gear-system-1">
					<div id="gear15"><img src="img/gears.png" alt=""></div>
					<div id="gear14"></div>
					<div id="gear13"></div>
				</div>
				<div id="gear-system-2">
					<div id="gear10"></div>
					<div id="gear3"></div>
				</div>
				<div id="gear-system-3">
					<div id="gear9"></div>
					<div id="gear7"></div>
				</div>
				<div id="gear-system-4">
					<div id="gear6"></div>
					<div id="gear4"></div>
				</div>
				<div id="gear-system-5">
					<div id="gear12"></div>
					<div id="gear11"></div>
					<div id="gear8"></div>
				</div>
				<div id="gear1"></div>
				<div id="gear-system-6">
					<div id="gear5"></div>
					<div id="gear2"></div>
				</div>
				<div id="chain-circle"></div>
				<div id="chain"></div>
				<div id="weight"></div>
			</div>
			<div id="title">
				<h1>Упс! Что-то пошло не так(((</h1>
				<p>Техподдержка уже в пути. Попробуйте вернуться на страницу через какое-то время.</p>
			</div>
		</div>
	</div>
</body>
</html>



