<?php
  $bg = array('blkplaid.jpg', 'regshow.jpg', 'initial2.jpg', 'texture.jpg', 'city.jpg'); // array of filenames
  $i = rand(0, count($bg)-1); // generate random number size of the array
  $selectedBg = "$bg[$i]"; // set variable equal to which random filename was chosen
?>

button.link {
	background: none;
	border: none;
	width: 100%;
}

body {
	background: url('/images/<?php echo $selectedBg; ?>') no-repeat;
	background-size: cover;
	font-size: 1.5em;
	font-family: 'Aldrich', sans-serif;	
}

li {
	list-style: none;
}

.bold {
	font-weight: bold;
}

.bottom {
	position:fixed;
	bottom:0px;
	height:30px;
	width:100%;
	margin: 0px auto;
}

.content {
	border: solid 4px black;
	background-color: #E5E5E8;
	width: 95%;
	opacity: 0.8;
	margin: 10px;
	padding: 15px;
	font-family: 'Aldrich', sans-serif;	

	/*-webkit-transform: skew(-15deg);
	   -moz-transform: skew(-15deg);
	     -o-transform: skew(-15deg);*/
}

.content a {
	color: blue;
}

.david_main_page {
	/*background-image: url('/images/blkplaid.jpg');*/
	/*height: 100%;*/
	margin: 20px;
}

.david_sidebar {
	/*background-image: url('/images/texture.jpg');*/
	padding: 10px;
	/*height: 100%;*/
}

.david_sidebar ul li {
	list-style: none;
	border: solid 4px black;
	margin: 10px;
	padding: 10px;
}

.h_nice {
	font-family: 'Aldrich', sans-serif;	
	color: white;
	text-shadow: -1px 0 black, 0 1px black, 2px 0 black, 0 -1px black;
	margin: 0px auto;
	display: inline-block;
}

.imgthumb {
	padding: 3px;
	border: solid 2px black;
	margin: 10px;
	max-width: 200px;
	max-height: auto;
}

.italic {
	font-style: italic;
}

.parallel li{
	/*width: 150px;*/
	/*height: 100px;*/
	/*-webkit-transform: skew(-15deg);
	   -moz-transform: skew(-15deg);
	     -o-transform: skew(-15deg);*/
	background: #E5E5E8;
	color: black;
	opacity: 0.8;
	font-weight: bold;
	/*font-family: 'Racing Sans One';*/
	/*font-family: 'Aldrich', sans-serif;*/
	font-size: 20px;
	overflow: hidden;
}

.parallel li:hover {
	background: #F7F7F8;
	color: red;
	opacity: 1;
}

.portfolio_list_description:hover{
	color: red;
	/*text-decoration: none;*/
}

.portfolio_list_description {
	color: #333399;
	display: inline-block;
	font-family: 'Aldrich', sans-serif;	
}
