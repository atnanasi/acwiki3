<?php
//Magazine theme 1.00
//http://opensourcetemplates.org/
echo <<< EOT
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="chrome=1">
	<meta name="description" content="{$Description}">
	<meta name="keywords" content="{$Keyword}">
	<meta name="robots" content="{$Robots}">
	<meta http-equiv="Content-Style-Type" content="{$Styletype}">
	<meta http-equiv="Content-Script-Type" content="{$Scripttype}">
	<meta name="author" content="{$Author}">
	<meta name="generator" content="{$Generator}">
	
	<title>{$Wikiname}</title>
	<link href="theme/{$Theme}/stylesheets/style.css" rel="stylesheet" type="text/css" />
</head>

<body>
<div id="wrapper">
	<div id="branding">
		<h1><a href="index.php?q=index">{$Wikiname}</a></h1>
		<ul class="topNav">
		{$Topmenu}
		</ul><br class="clear" />
	</div>
	<div id="contant">
		<div class="contant_1">
			<div class="contant_1_left">
				<h2>
					{$Pagetitle}
					<span>{$Pagedate}</span>
				</h2>
				{$Pagetext}
			</div>
		<div class="sideBar">
			<div class="sideBarListBox">
				<img src="theme/{$Theme}/images/sideBarListBoxTop.png" alt="" width="240" height="10" />
				<ul>
					{$Sidebar}
				</ul>
				<img src="theme/{$Theme}/images/sideBarListBoxBottom.png" alt="" width="240" height="10" />
			</div>
		<div class="sideBarItem">
			<h3>Blogroll</h3>
			<ul>
				<li><a href="#">Category One</a></li>
				<li class="cat002"><a href="#" >There are many</a></li>
				<li class="cat003"><a href="#">Lorem Ipsum available</a></li>
				<li class="cat003"><a href="#">If you are going</a></li>
				<li class="cat003"><a href="#">All the Lorem Ipsum</a></li>
				<li class="cat003"><a href="#">200 Latin words</a></li>
				<li class="cat003"><a href="#">It uses a dictionary</a></li>
				<li class="cat003"><a href="#">Lorem ipsum dolor</a></li>
				<li class="cat003"><a href="#">Latin professor at</a></li>
			</ul>
		</div>
	<div>
	</div>
</div>
<br class="clear" />
</div>
</div>

<div id="footerContainer">
	<p>
	{$Footer}
	</p>
</div>
</body>
</html>
EOT;

