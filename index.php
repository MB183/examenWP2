<!DOCTYPE html>
<html lang="fr">
<head>
	<meta charset="utf-8">
	<title>exam2</title>
	<link rel="stylesheet" type="text/css" href="<?php echo get_stylesheet_uri(); ?>">
    <?php wp_head(); ?>
</head>
<header class="tete">
    <div id="nav">
       <!--  <li class="li"><strong>A POPOS</strong></li>
        <li class="li"><strong>SOLUTIONS</strong></li>
        <li class="li"><strong>PORTFOLIO</strong></li>
        <li class="li"><strong>CLIENTS</strong></li>
        <li class="li"><strong>BLOG</strong></li>
        <li class="li"><strong>JOB</strong></li>
        <li class="li"><strong>CONTACT</strong></li>

        <ul id="logoTotal">
            <img id="logoIMG" class="logo" src="<?php echo get_stylesheet_directory_uri(); ?>/images/logo.jpg">
            <ul class="logoText">
                <liclass="textLogoTitre"><span style="color:lightskyblue">GRETA</span><span style="color: yellowgreen">WEB</span></li>
                <liclass="textLogoContenu"><span style="color: yellowgreen">green</span><span style="color: lightskyblue">coding</span></li>
            </ul>
        </ul> -->

       <!--  <li><img class="menuBar" src="<?php echo get_stylesheet_directory_uri(); ?>/images/menuBar.png"></li>
 -->
    </div>
     <?php get_header(); ?>
</header>
<body>
	<div class="bar">
		<div class="ariane">
			<ul class="arianeText">
				<li><a href="/">home</a> &gt; </li>
				<li><a href="/presentation">présentation</a></li>
			</ul>
		</div>

		<h1>L'AGENCE WEB DU GRETA... C'EST NOUS !</h1>
	</div>
	<div class="contents">
        <div class="box">
            <li><img class="imagebox" src="<?php echo get_stylesheet_directory_uri(); ?>/images/sql.jpg"></li>
            <li class="textContent">
                <p class="title">Nos solutions SQL Optimisées</p>
                <p>Découvrez comment une BDD conçue pour être optimisée augmente vos performances tout en respectant l'environnement</p>
            </li>
        </div>

        <div  class="box">
            <li class="textContent">
                <p class="title">Le meileur pour les navigateurs</p>
                <p>Découvrez comment un code JS moins gourmand en terme de ressources offre une meilleure expérience utilisateur</p>
            </li>
            <li class="bottom"><img class="imagebox" src="<?php echo get_stylesheet_directory_uri(); ?>/images/js.jpg"></li>
        </div>

        <div class="box">
            <li><img class="imagebox" src="<?php echo get_stylesheet_directory_uri(); ?>/images/php.jpg"></li>
            <li class="textContent">
                <p class="title">Boostez votre serveur</p>
                <p>Augmentez les performances de votre serveur sans augmenter sa mémoire ou son CPU : en optimisant votre code, tout simplement !</p>
            </li>
        </div>

        <div class="box">
            <li><img class="imagebox" src="<?php echo get_stylesheet_directory_uri(); ?>/images/css.jpg"></li>
            <li class="textContent">
                <p class="title">Alliez beauté et performance</p>
                <p>Avec des feuilles de style bien conçues, améliorez le temps de chargement de vos pages</p>
            </li>
        </div>

        <div class="box">
            <li class="textContent">
                <p class="title">Des pages à la struture optimum</p>
                <p>Grâce à une structure bien pensée. vos pages sont mieux indexées par les moteurs de recherche</p>
            </li>
            <li class="bottom"><img class="imagebox" src="<?php echo get_stylesheet_directory_uri(); ?>/images/html.jpg"></li>
        </div>

        <div class="box">
            <li><img class="imagebox" src="<?php echo get_stylesheet_directory_uri(); ?>/images/wp.jpg"></li>
            <li class="textContent">
                <p class="title">Gérez votre site de façon simple</p>
                <p>Cette page est tellement belle que j'offre un café à Sylvain(expresso, sans surcre)</p>
            </li>
        </div>
	</div>
    <?php wp_footer(); ?>
</body>
</html>