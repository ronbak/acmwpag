<!DOCTYPE HTML>
<!--
	Big Picture by Pixelarity
	pixelarity.com @pixelarity
	License: pixelarity.com/license
-->
<html>

<?php
    include "include/methods.php";
?>
	<head>
		<title>ACM Uniandes</title>
        <link rel="icon" type="image/png" href="images/acm.png">
		<meta http-equiv="content-type" content="text/html; charset=utf-8" />
		<meta name="description" content="" />
		<meta name="keywords" content="" />
		<!--[if lte IE 8]><script src="css/ie/html5shiv.js"></script><![endif]-->
		<script src="js/jquery.min.js"></script>
		<script src="js/jquery.poptrox.min.js"></script>
		<script src="js/jquery.scrolly.min.js"></script>
		<script src="js/jquery.scrollgress.min.js"></script>
		<script src="js/skel.min.js"></script>
		<script src="js/init.js"></script>
		<noscript>
			<link rel="stylesheet" href="css/skel.css" />
			<link rel="stylesheet" href="css/style.css" />
			<link rel="stylesheet" href="css/style-wide.css" />
			<link rel="stylesheet" href="css/style-normal.css" />
		</noscript>
        <link rel="stylesheet" href="css/ACMStyles.css" />
		<!--[if lte IE 8]><link rel="stylesheet" href="css/ie/v8.css" /><![endif]-->
	</head>
	<body>

		<!-- Header -->
			<header id="header">

				<!-- Logo -->
					<h1 id="logo">ACM Uniandes</h1>
				
				<!-- Nav -->
					<nav id="nav">
						<ul>
							<li><a href="#intro">Intro</a></li>
							<li><a href="#one">Que Hacemos</a></li>
							<li><a href="#two">Quienes Somos</a></li>
                            <li><a href="#members">Miembros</a></li>
							<li><a href="#work">Nuestros Proyectos</a></li>
							<li><a href="#contact">Contáctanos</a></li>
						</ul>
					</nav>

			</header>
			
		<!-- Intro -->
			<section id="intro" class="main style1 dark fullscreen">
				<div class="content container small">
					<header>
						<h2>Hola</h2>
					</header>
					<p>Bienvenido a la p&aacute;gina del Cap&iacute;tulo Estudiantil ACM Uniandes</p>
                    <img style="width: 13em" src="images/acm.png">
					<footer>
						<a href="#one" class="button style2 down">More</a>
					</footer>
				</div>
			</section>
		
		<!-- One -->
			<section id="one" class="main style2 right dark fullscreen">
				<div class="content box style2">
					<header>
						<h2>Que Hacemos</h2>
					</header>
					<p>Desarrollamos aplicaciones que benefician a la comunidad o solo por el gusto de programar.</p>
				</div>
				<a href="#two" class="button style2 down anchored">Next</a>
			</section>
		
		<!-- Two -->
			<section id="two" class="main style2 left dark fullscreen">
				<div class="content box style2">
					<header>
						<h2>Quienes Somos</h2>
					</header>
					<p>Somos una comunidad de estudiantes apasionados por la programación y por ayudar a la comunidad a la que pertenecemos.</p>
				</div>
				<a href="#members" class="button style2 down anchored">Next</a>
			</section>

        <!-- Members -->
        <section id="members" class="main style3 primary">
            <div class="content container">
                <header>
                    <h2>Miembros</h2>
                    <p></p>
                </header>

                <!-- Lightbox Gallery  -->
                <div class="container small gallery">

                    <?php
                    if ($tamanoIntegrantes > 6)
                    {
                        if (fmod($tamanoIntegrantes, 2)== 0)
                        {
                            $i = 0;
                            while ($i < $tamanoIntegrantes)
                            {
                                echo '
                                        <div class="row flush images">
								            <div class="6u profilePic"><a href="'.$integrantes[$i][2].'" class="image fit from-left"><img src="'.$integrantes[$i][2].'" title="'.$integrantes[$i][0].' - '.$integrantes[$i][1].'" alt="" /></a></div>
								            <div class="6u profilePic"><a href="'.$integrantes[$i+1][2].'" class="image fit from-right"><img src="'.$integrantes[$i+1][2].'" title="'.$integrantes[$i+1][0].' - '.$integrantes[$i+1][1].'" alt="" /></a></div>
							            </div>
                                        ';
                                $i += 2;
                            }
                        }

                        else
                        {
                            $i = 0;
                            while ($i < ($tamanoIntegrantes - 1))
                            {
                                echo '
                                        <div class="row flush images">
								            <div class="6u profilePic"><a href="'.$integrantes[$i][2].'" class="image fit from-left"><img src="'.$integrantes[$i][2].'" title="'.$integrantes[$i][0].' - '.$integrantes[$i][1].'" class="profilePic" alt="" /></a></div>
								            <div class="6u profilePic"><a href="'.$integrantes[$i+1][2].'" class="image fit from-right"><img src="'.$integrantes[$i+1][2].'" title="'.$integrantes[$i+1][0].' - '.$integrantes[$i+1][1].'" class="profilePic" alt="" /></a></div>
							            </div>
                                        ';
                                $i += 2;
                            }

                            echo '
                                        <div class="row flush images">
								            <div class="6u profilePic"><a href="'.$integrantes[($tamanoIntegrantes - 1)][2].'" class="image fit from-left"><img src="'.$integrantes[($tamanoIntegrantes - 1)][2].'" title="'.$integrantes[($tamanoIntegrantes - 1)][0].' - '.$integrantes[($tamanoIntegrantes - 1)][1].'" class="profilePic" alt="" /></a></div>
								            <div class="6u profilePic"><a href="images/fulls/04.jpg" class="image fit from-right"><img src="images/thumbs/04.jpg" title="Proyecto en Construcción" class="profilePic" alt="" /></a></div>
							            </div>
                                        ';
                        }
                    }
                    else
                    {
                        $arr = 6 - $tamanoIntegrantes;
                        if (fmod($tamanoIntegrantes, 2)== 0)
                        {
                            $i = 0;
                            while ($i < $tamanoIntegrantes)
                            {
                                echo '
                                        <div class="row flush images">
								            <div class="6u" id="profileDiv"><a href="'.$integrantes[$i][2].'" class="image fit from-left"><img src="'.$integrantes[$i][2].'" title="'.$integrantes[$i][0].' - '.$integrantes[$i][1].'" class="profilePic" alt="" /></a></div>
								            <div class="6u" id="profileDiv"><a href="'.$integrantes[$i+1][2].'" class="image fit from-right"><img src="'.$integrantes[$i+1][2].'" title="'.$integrantes[$i+1][0].' - '.$integrantes[$i+1][1].'" class="profilePic" alt="" /></a></div>
							            </div>
                                        ';
                                $i += 2;
                            }
                            while ($arr > 0)
                            {
                                echo '
                                        <div class="row flush images">
								            <div class="6u" id="profileDiv"><a href="images/fulls/05.jpg" class="image fit from-left"><img src="images/thumbs/05.jpg" title="Proyecto en Construcción" class="profilePic" alt="" /></a></div>
								            <div class="6u" id="profileDiv"><a href="images/fulls/06.jpg" class="image fit from-right"><img src="images/thumbs/06.jpg" title="Proyecto en Construcción" class="profilePic" alt="" /></a></div>
							            </div>
                                        ';
                                $arr -= 2;
                            }
                        }
                        else
                        {
                            $i = 0;
                            while ($i < ($tamanoIntegrantes - 1))
                            {
                                echo '
                                        <div class="row flush images">
								            <div class="6u" id="profileDiv"><a href="'.$integrantes[$i][2].'" class="image fit from-left"><img src="'.$integrantes[$i][2].'" title="'.$integrantes[$i][0].' - '.$integrantes[$i][1].'" class="profilePic" alt="" /></a></div>
								            <div class="6u" id="profileDiv"><a href="'.$integrantes[$i+1][2].'" class="image fit from-right"><img src="'.$integrantes[$i+1][2].'" title="'.$integrantes[$i+1][0].' - '.$integrantes[$i+1][1].'" class="profilePic" alt="" /></a></div>
							            </div>
                                        ';
                                $i += 2;
                            }
                            echo '
                                    <div class="row flush images">
								        <div class="6u" id="profileDiv"><a href="'.$integrantes[($tamanoIntegrantes - 1)][2].'" class="image fit from-left"><img src="'.$integrantes[($tamanoIntegrantes - 1)][2].'" title="'.$integrantes[($tamanoIntegrantes - 1)][0].' - '.$integrantes[($tamanoIntegrantes - 1)][1].'" class="profilePic" alt="" /></a></div>
								        <div class="6u" id="profileDiv"><a href="images/fulls/02.jpg" class="image fit from-right"><img src="images/thumbs/02.jpg" title="Proyecto en Construcción" class="profilePic" alt="" /></a></div>
							        </div>
                                    ';
                            $arr -=1;
                            while ($arr > 1)
                            {
                                echo '
                                        <div class="row flush images">
								            <div class="6u" id="profileDiv"><a href="images/fulls/01.jpg" class="image fit from-left"><img src="images/thumbs/05.jpg" title="Proyecto en Construcción" class="profilePic" alt="" /></a></div>
								            <div class="6u" id="profileDiv"><a href="images/fulls/02.jpg" class="image fit from-right"><img src="images/thumbs/06.jpg" title="Proyecto en Construcción" class="profilePic" alt="" /></a></div>
							            </div>
                                        ';
                                $arr -= 2;
                            }
                        }
                    }
                    ?>
                </div>

            </div>
        </section>

		<!-- Work -->
			<section id="work" class="main style3 primary">
				<div class="content container">
					<header>
						<h2>Nuestros Proyectos</h2>
						<p>Estos son los proyectos que hemos desarrollado</p>
					</header>
					
					<!-- Lightbox Gallery  -->
						<div class="container small gallery">

                            <?php
                            if ($tamanoProyectos > 6)
                            {
                                if (fmod($tamanoProyectos, 2)== 0)
                                {
                                    $i = 0;
                                    while ($i < $tamanoProyectos)
                                    {
                                        echo '
                                        <div class="row flush images">
								            <div class="6u" id="projectsDiv"><a href="'.$proyectos[$i][2].'" class="image fit from-left"><img src="'.$proyectos[$i][2].'" title="'.$proyectos[$i][0].'" alt="" /></a></div>
								            <div class="6u" id="projectsDiv"><a href="'.$proyectos[$i+1][2].'" class="image fit from-right"><img src="'.$proyectos[$i+1][2].'" title="'.$proyectos[$i+1][0].'" alt="" /></a></div>
							            </div>
                                        ';
                                        $i += 2;
                                    }
                                }

                                else
                                {
                                    $i = 0;
                                    while ($i < ($tamanoProyectos - 1))
                                    {
                                        echo '
                                        <div class="row flush images">
								            <div class="6u" id="projectsDiv"><a href="'.$proyectos[$i][2].'" class="image fit from-left"><img src="'.$proyectos[$i][2].'" title="'.$proyectos[$i][0].'" alt="" /></a></div>
								            <div class="6u" id="projectsDiv"><a href="'.$proyectos[$i+1][2].'" class="image fit from-right"><img src="'.$proyectos[$i+1][2].'" title="'.$proyectos[$i+1][0].'" alt="" /></a></div>
							            </div>
                                        ';
                                        $i += 2;
                                    }

                                    echo '
                                        <div class="row flush images">
								            <div class="6u" id="projectsDiv"><a href="'.$proyectos[($tamanoProyectos - 1)][2].'" class="image fit from-left"><img src="'.$proyectos[($tamanoProyectos - 1)][2].'" title="'.$proyectos[($tamanoProyectos - 1)][0].'" alt="" /></a></div>
								            <div class="6u" id="projectsDiv"><a href="images/fulls/04.jpg" class="image fit from-right"><img src="images/thumbs/04.jpg" title="Proyecto en Construcción" alt="" /></a></div>
							            </div>
                                        ';
                                }
                            }

                            else
                            {
                                $arr = 6 - $tamanoProyectos;

                                if (fmod($tamanoProyectos, 2)== 0)
                                {
                                    $i = 0;
                                    while ($i < $tamanoProyectos)
                                    {
                                        echo '
                                        <div class="row flush images">
								            <div class="6u" id="projectsDiv"><a href="'.$proyectos[$i][2].'" class="image fit from-left"><img src="'.$proyectos[$i][2].'" title="'.$proyectos[$i][0].'" alt="" /></a></div>
								            <div class="6u" id="projectsDiv"><a href="'.$proyectos[$i+1][2].'" class="image fit from-right"><img src="'.$proyectos[$i+1][2].'" title="'.$proyectos[$i+1][0].'" alt="" /></a></div>
							            </div>
                                        ';
                                        $i += 2;
                                    }
                                    while ($arr > 0)
                                    {
                                        echo '
                                        <div class="row flush images">
								            <div class="6u" id="projectsDiv"><a href="images/fulls/05.jpg" class="image fit from-left"><img src="images/thumbs/05.jpg" title="Proyecto en Construcción" alt="" /></a></div>
								            <div class="6u" id="projectsDiv"><a href="images/fulls/06.jpg" class="image fit from-right"><img src="images/thumbs/06.jpg" title="Proyecto en Construcción" alt="" /></a></div>
							            </div>
                                        ';
                                        $arr -= 2;
                                    }
                                }

                                else
                                {
                                    $i = 0;
                                    while ($i < ($tamanoProyectos - 1))
                                    {
                                        echo '
                                        <div class="row flush images">
								            <div class="6u" id="projectsDiv"><a href="'.$proyectos[$i][2].'" class="image fit from-left"><img src="'.$proyectos[$i][2].'" title="'.$proyectos[$i][0].'" alt="" /></a></div>
								            <div class="6u" id="projectsDiv"><a href="'.$proyectos[$i+1][2].'" class="image fit from-right"><img src="'.$proyectos[$i+1][2].'" title="'.$proyectos[$i+1][0].'" alt="" /></a></div>
							            </div>
                                        ';
                                        $i += 2;
                                    }

                                    echo '
                                    <div class="row flush images">
								        <div class="6u" id="projectsDiv"><a href="'.$proyectos[($tamanoProyectos - 1)][2].'" class="image fit from-left"><img src="'.$proyectos[($tamanoProyectos - 1)][2].'" title="'.$proyectos[($tamanoProyectos - 1)][0].'" alt="" /></a></div>
								        <div class="6u" id="projectsDiv"><a href="images/fulls/02.jpg" class="image fit from-right"><img src="images/thumbs/02.jpg" title="Proyecto en Construcción" alt="" /></a></div>
							        </div>
                                    ';

                                    $arr -=1;
                                    while ($arr > 1)
                                    {
                                        echo '
                                        <div class="row flush images">
								            <div class="6u" id="projectsDiv"><a href="images/fulls/01.jpg" class="image fit from-left"><img src="images/thumbs/05.jpg" title="Proyecto en Construcción" alt="" /></a></div>
								            <div class="6u" id="projectsDiv"><a href="images/fulls/02.jpg" class="image fit from-right"><img src="images/thumbs/06.jpg" title="Proyecto en Construcción" alt="" /></a></div>
							            </div>
                                        ';
                                        $arr -= 2;
                                    }


                                }
                            }

                            ?>
						</div>

				</div>
			</section>
			
		<!-- Contact -->
			<section id="contact" class="main style3 secondary">
				<div class="content container">
					<header>
						<h2>Cont&aacute;ctanos</h2>
						<p>Si quieres hacer parte del grupo o dejarnos un comentario llena el siguiente formulario y nosotros te contactamos</p>
					</header>
					<div class="box container small">
					
					<!-- Contact Form -->
							<form method="post" action="#">
								<div class="row half">
									<div class="6u"><input type="text" name="name" placeholder="Name" /></div>
									<div class="6u"><input type="email" name="email" placeholder="Email" /></div>
								</div>
								<div class="row half">
									<div class="12u"><textarea name="message" placeholder="Message" rows="6" style="resize: none"></textarea></div>
								</div>
								<div class="row">
									<div class="12u">
										<ul class="actions">
											<li><input type="submit" value="Send Message" /></li>
										</ul>
									</div>
								</div>
							</form>

					</div>
				</div>
			</section>
			
		<!-- Footer -->
			<footer id="footer">

				<!-- Icons -->
					<ul class="actions">
						<li><a href="https://twitter.com/ACMUniandes" class="icon fa-twitter"><span class="label">Twitter</span></a></li>
						<li><a href="https://facebook.com/ACMUniandes" class="icon fa-facebook"><span class="label">Facebook</span></a></li>
						<li><a href="https://plus.google.com/u/0/106882729180584555937/" class="icon fa-google-plus"><span class="label">Google+</span></a></li>
					</ul>

				<!-- Menu -->
					<ul class="menu">
						<li>&copy; <?php echo date("Y"); ?>. Cap&iacute;tulo estudiantil ACM - Universidad de los Andes.</li>
					</ul>
			
			</footer>

	</body>
</html>