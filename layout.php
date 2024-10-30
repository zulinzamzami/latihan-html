<!DOCTYPE html>
<html>
<head>
	<title>Layout Zulin</title>
	<link rel="stylesheet" href="style.css">
</head>

<body>
	<header>
		<h1>Zulin Nafisah Zam Zami</h1>
	</header>
	<div class="container">
        <div style="display: flex; justify-content: flex-start;">
		<aside class="sidebar">
			<h2>Sidebar</h2>
			<ul>
				<li><a href="layout.php?a=profil">Biodata</a></li>
				<li><a href="layout.php?a=Input">Input Nama</a></li>
				<li><a href="layout.php?a=formulir">Formulir</a></li>
				<li><a href="layout.php?a=tabel">Tabel</a></li>
				<li><a href="https://smkn1bawang.sch.id">Web smkn1bawang</a></li>
				<li><a href="https://pplg.smkn1bawang.sch.id">Web PPLG</a></li>
			<ul>
		</aside>
		<main class="content" >
			<!--<h2>Konten</h2>
			<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>-->
            <?php
            switch ($_GET['a']){
				case "profil":
					require "biodata.html";
					break;

				case "Input":
					require "latihanjs.html";
					break;
				
				case "formulir":
					require "latihanform.html";
					break;

				case "tabel":
					require "latihantabel.html";
					break;
            }
            ?>

		</main> 
	</div>
</div>
	<footer>
		<p>&copy; 2024 Website Saya</p>
	</footer>
</body>
</html>