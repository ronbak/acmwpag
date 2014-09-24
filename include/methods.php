<?php
/**
 * Created by PhpStorm.
 * User: Diego F. Vanegas
 * Date: 23/09/2014
 * Time: 07:05 PM
 */
$integrantes = [
    array( "Diego Gomez", "CEO", "https://scontent-a.xx.fbcdn.net/hphotos-xap1/t1.0-9/60573_472733149739_365699_n.jpg"),
    array( "Diego Rodriguez", "VP", "https://fbcdn-sphotos-f-a.akamaihd.net/hphotos-ak-xap1/t1.0-9/10169336_10152361844514313_3204006109685667910_n.jpg"),
    array( "Diego Vanegas", "PR", "https://fbcdn-sphotos-c-a.akamaihd.net/hphotos-ak-xfa1/t1.0-9/10552535_10152542599777908_500766573686849000_n.jpg"),
    array( "David Paternina", "Dev Team", "https://scontent-a.xx.fbcdn.net/hphotos-xfa1/t31.0-8/920030_10203024644829913_5829924610810653281_o.jpg"),
    array( "Camilo Ortiz", "Dev Team", "https://fbcdn-sphotos-c-a.akamaihd.net/hphotos-ak-xaf1/v/t1.0-9/1923237_56412902876_6923041_n.jpg?oh=2507a0f1b32abe8ac74bc1c4060fa131&oe=5476E048&__gda__=1417559734_8f11e0bf036ee0f8776ce87c46fe606d"),
];

$tamanoIntegrantes = count($integrantes);

$proyectos = [
  array("AcademiCal (<a title='Horariolab' href='http://horario.uniandes.edu.co' target='_blank'>Horariolab</a>)",
      'El proyecto <a title="Horariolab" href="http://horario.uniandes.edu.co" target="_blank">Horariolab</a> empez&oacute; en 2011 con la fundaci&oacute;n del Cap&iacute;tulo ACM, y con el impulso de un peque&ntilde;o grupo de estudiantes motivados que ten&iacute;an el prop&oacute;sito de aprender, experimentar, lograr algo m&aacute;s de lo que se hace normalmente en clase, y a&uacute;n m&aacute;s importantemente: hacer lo que les gusta! Adem&aacute;s de esto se buscaba que el proyecto tuviera un impacto positivo y visible sobre la comunidad universitaria, atacando un problema con el que sufr&iacute;amos todos: planear horario.
Horariolab es una aplicaci&oacute;n web  desarrollada por estudiantes que facilita la b&uacute;squeda de cursos y la planeaci&oacute;n de horario para estudiantes de la Universidad de los Andes: es como un “search engine” para cursos, m&aacute;s una interfaz sencilla y amigable de calendario para planear el horario. De &eacute;sta forma se evita el proceso lento y tedioso para planear horario en el que los estudiantes deb&iacute;an navegar listas inmensas de ofertas de cursos y planear su horario de forma dificil: en una hoja de papel o Excel. El principal prop&oacute;sito de Horariolab es que sea sumamente f&aacute;cil construir uno o m&aacute;s horarios de clases, utilizando herramientas gr&aacute;ficas e interactivas para lograrlo, y as&iacute; agilizar el registro de cursos en Banner.
Agradecemos a los m&aacute;s de 10,000 estudiantes que se registraron y utilizaron Horariolab en este periodo de construcci&oacute;n de horario (2013-1)! M&aacute;s de la mitad del total de estudiantes de pregrado. Muchas gracias a todas las personas que han mandado comentarios y sugerencias, TODAS las tenemos en cuenta.',
      'images/horariolab.jpg'),
    array("<a title='ClasifiTeca' href='http://clasificados.uniandes.edu.co' target='_blank'>ClasifiTeca</a> - Clasificados Uniandes",
        '<a title="ClasifiTeca" href="http://clasificados.uniandes.edu.co" target="_blank">ClasifiTeca</a> es una iniciativa estudiantil que surgi&oacute; dentro del <a title="Startup Criollo" href="http://acm.uniandes.edu.co/startupcriollo">Startup Criollo</a>, un evento del Cap&iacute;tulo ACM. El proyecto surgi&oacute; con la motivaci&oacute;n de resolver un problema constante en la Universidad: encontrar libros para las clases. Se pretend&iacute;a resolver el problema a trav&eacute;s de una plataforma en la que fuera f&aacute;cil intercambiar libros usados o comprar y vender libros.<br><br>
            Desde ese entonces la aplicaci&oacute;n ha evolucionado para convertirse en una comunidad que le permita a los estudiantes intercambiar, comprar y vender cualquier tipo de elementos Universitarios a trav&eacute;s de anuncios. Se ha convertido en un lugar m&aacute;s abierto donde se pueden vender y comprar desde libros, calculadoras o batas, hasta clases de taekwondo.',
        'images/clasifiteca.png'),
    array("Bootcamps",
        'El proyecto bootcamps nace a trav&eacute;s de el inter&eacute;s propio de los estudiantes por aprender instrumentos de tecnolog&iacute;as que no alcanzan a ofrecerse en el espacio acad&eacute;mico, pero que son de gran utilidad para la el desarrollo del mundo actual.
            Los bootcamps son espacios que se desarrollar&aacute;n cada 2 semanas, donde los estudiantes de cualquier carrera que est&eacute;n motivados e interesados por aprender podr&aacute;n compartir una experiencia con otros estudiantes interesados. Contamos con el apoyo de profesores que nos apoyan con su conocimiento y con su inter&eacute;s.
            Cabe aclarar que los bootcamps NO SON CLASES. Nosotros aprendemos y disfrutamos de lo que hacemos en comunidad. Los bootcamps permiten no solamente aprender, sino
practicar, desarrollar y conocer personas interesadas en lo que nos gusta hacer. As&iacute; mismo los bootcamps permiten el desarrollo de ideas de innovaci&oacute;n y de formaci&oacute;n de equipos, con los cuales se pueden desarrollar proyectos tanto para la universidad como individuales y as&iacute; lograr emprender.
Los temas que se aprenden son escogidos por la comunidad, y los workshops no son solo divertidos, sino competitivos. As&iacute; que si te interesa dar lo mejor de t&iacute;, deber&iacute;as probarlos!

Para esto, se desarrollar&aacute; una aplicaci&oacute;n web de ACM Developers, en el cual todas las personas de la comunidad reunen conocimiento de los temas que se aprenden, y mediante tutoriales, informaci&oacute;n, ejemplos, ayudas, demos e informaci&oacute;n que encontremos, se armar&aacute; un repositorio en el que cualquier persona pueda acceder y practicar en cualquier momento. ACM Developers ofrece un repositorio central de informaci&oacute;n educativa de nuevas tecnolog&iacute;as web y m&oacute;viles para que cualquier interesado pueda aprender y desarrollar individualmente.',
        'images/bootcamps.png'),
];

$tamanoProyectos = count($proyectos);

?>