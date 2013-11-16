<!-- 
    Document   : index.php
    Created on : 13-nov-2013, 23:13:29
    Author     : AxelRodriguez, NicolasOyarzun, PedroSalas
    Description:
        Desarrollo de un sitio en PHP + HTML5 + CSS3 para la tarea 2 de ayudantia de ing. de software.
-->

<!DOCTYPE html>
<html>
    <head>
        <title>Grupo 06 Ingenieria de Software 2do S. 2013</title>
        <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
        <link rel="stylesheet" type="text/css" href="mystyle.css">
        <meta name="keywords" content="HTML, CSS, PHP, UTEM, Ingenieria de software, Ayudantia">
        <meta name="description" content="Web de integrantes de grupo 6 de Ingenieria de software 2do semestre UTEM 2013">
<<<<<<< HEAD
        <meta http-equiv="refresh" content="60">
=======
        <meta http-equiv="refresh" content="30">
>>>>>>> b737e510bddecfc4313421c331884610b7e57e92
    </head>

    <?php
    $fondo = $_POST['color'];    
    
<<<<<<< HEAD
    if($fondo == 'Rojo')
=======
    if($fondo == 'Gris')
>>>>>>> b737e510bddecfc4313421c331884610b7e57e92
        echo "<body class='cbody1'>";
    
    if($fondo == 'Azul')
        echo "<body class='cbody2'>";
    
    if(!$fondo)
        echo "<body class='cbody3'>";
    ?>

    <div class="divnueva">
        <header>  
<<<<<<< HEAD
            Grupo 06 Ingeniería de Software UTEM
        </header>        
        <div id="contenedor-mains">
            <div class="flotados">
                <br><img src="images/axel.jpg" alt="Axel Rodriguez Espinoza" width="90%" height="300">
                <p class="Pflotados">Axel Rodríguez Espinoza<br>
                <br>22 años<br>
                <br>Estudiante de Ingeniería en <br>Informática UTEM<br>
                <br><a href="http://github.com/AxelRodriguezE">Cuenta en GitHub</a></p>
            </div>
            <div class="flotados">
                <br><img src="images/nico.jpg" alt="Nicolas Oyarzun Hernandez" width="90%" height="300">
                <p class="Pflotados">Nicolas Oyarzún Hernandez<br>
                <br>24 años<br>
                <br>Estudiante de Ingeniería Civil en Computación m. Informática UTEM<br>
                <br><a href="http://github.com/Nikooo2h">Cuenta en GitHub</a></p>
            </div>
            <div class="flotados">
                <br><img src="images/pedro.jpg" alt="Pedro Salas Vergara" width="90%" height="300">
                <p class="Pflotados">Pedro Salas Vergara<br>
                <br>24 años<br>
                <br>Estudiante de Ingeniería Civil en Computación m. Informática UTEM<br>
=======
            Titulo para mi tarea
        </header>        
        <div id="contenedor-mains">
            <div class="flotados">
                <p class="Pflotados">Axel RodrÃ­guez Espinoza<br>
                <br>22 aÃ±os<br>
                <br>Estudiante de IngenierÃ­a en <br>InformÃ¡tica UTEM<br>
                <br><a href="http://github.com/AxelRodriguezE">Cuenta en GitHub</a></p>
            </div>
            <div class="flotados">
                <p class="Pflotados">Nicolas OyarzÃºn Hernandez<br>
                <br>24 aÃ±os<br>
                <br>Estudiante de IngenierÃ­a Civil en ComputaciÃ³n m. InformÃ¡tica UTEM<br>
                <br><a href="http://github.com/Nikooo2h">Cuenta en GitHub</a></p>
            </div>
            <div class="flotados">
                <p class="Pflotados">Pedro Salas Vergara<br>
                <br>24 aÃ±os<br>
                <br>Estudiante de IngenierÃ­a Civil en ComputaciÃ³n m. InformÃ¡tica UTEM<br>
>>>>>>> b737e510bddecfc4313421c331884610b7e57e92
                <br><a href="http://github.com/Pedro-Salas-Vergara">Cuenta en GitHub</a></p>
            </div>
            <div class="clear"></div>  
         </div>
         <aside>
            <form name="input" action="#" method="post">
<<<<<<< HEAD
                <p>Personaliza tu color de fondo:<br>
                <input type="radio" name="color" value="Azul" checked>Azul<br>
                <input type="radio" name="color" value="Rojo">Rojo<br> 
                <input type="submit" value="Cambiar color">
            </form>
            <p>
                <b>Ficha Técnica Grupo 06</b>
                <br>
                Ingeniería de Software 
                <br>
                Estudiantes de la Universidad Tecnológica Metropolitana.
                <br></p>
                <p class="Pflotados">Pagina desarrollada en HTML5, CSS3 y PHP.</p>
                <a href="http://github.com/AxelRodriguezE/Tarea2_AyudantiaIngSoft">
                    <img src="images/GitHub.png" alt="GitHub del Sitio" width="50" height="50"></a>
            <?php 
                    $frase1="<p class='sangria' align='right'><i>El comunismo no priva al hombre de la libertad de apropiarse del fruto de su trabajo, 
                        lo único de lo que lo priva es de la libertad de esclavizar a otros por medio de tales apropiaciones.</i></p>
                        <p align='right'>Carlos Marx.</p>"; 
                    $frase2="<p class='sangria' alighn='right'><i>Sueña y serás libre en espíritu, lucha y serás libre en vida.</i></p>
                        <p align='right'>Ché Guevara.</p>";
                    $frase3="<p class='sangria' align='right'><i>La libertad no es poder elegir entre unas pocas opciones impuestas, sino tener el control de tu propia vida. La libertad no es elegir quien será tu amo, es no tener amo.</i></p>
                        <p align='right'>Richard Stallman.</p>";
                    $frase4="<p class='sangria' align='right'><i>El propósito de los medios masivos … no es tanto informar y reportar lo que sucede, sino más bien dar forma a la opinión pública de acuerdo a las agendas del poder corporativo dominante.</i></p>
                        <p align='right'>Noam Chomsky.</p>";
                    $color=rand(1,6);
                    switch ($color) {
                    case 1:
                        echo "<p>$frase2</p>";
                        break;
                    case 2:
                        echo "<p>$frase3</p>";
                        break;
                    case 3:
                        echo "<p>$frase4</p>";
                        break;
                    default:
                        echo "<p>$frase1</p>";
                    }
                ?>  
            </aside> 
                <div class="clear"></div>       
                <div>
                <div class="clear"></div>
                </div>
                <footer>
                    <div class="footerfl"><p class="Pflotados">Desarrollada por Estudiantes de la Universidad Tecnológica Metropolitana - 2do.S.2013</p></div>
                </footer>
            </div>
        </div>
    </body>
</html>
=======
                <a>Personaliza tu color de fondo:</a><br>
                <input type="radio" name="color" value="Gris" checked><a>Gris</a> 
                <input type="radio" name="color" value="Azul"><a>Azul</a>
                <input type="submit" value="Cambiar color">
            </form>
            </aside> 
             <div class="clear"></div>      
               
    <div>
 <div class="clear"></div>
                <?php 
                    $frase1="El comunismo no priva al hombre de la libertad de apropiarse del fruto de su trabajo, 
                        lo Ãºnico de lo que lo priva es de la libertad de esclavizar a otros por medio de tales apropiaciones. 
                        <p align='right'>Karl Marx.</p>"; 
                    $frase2="Oli2";
                    $frase3="Oli2";
                    $frase4="Oli4";
                    $frase5="Oli5";
                    $frase6="Oli6";
                    /*Sacamos el nÂº aleatorio.*/
                    $color=rand(1,6);
                    /*Y con el bucle marcamos el color del nÂº, que es una imagen guardada en nuestra carpeta de objetos.*/
                    switch ($color) {
                    case 1:
                    echo "<p>$frase2</p>";
                    break;
                    case 2:
                    echo "<p>$frase3</p>";
                    break;
                    case 3:
                    echo "<p>$frase4</p>";
                    break;
                    case 4:
                    echo "<p>$frase5</p>";
                    break;
                    case 5:
                    echo "<p>$frase6</p>";
                    break;
                    default:
                    echo "<p>$frase1</p>";
                    }
                ?>  
            </div>
          
        <footer>desarrollador por wns de la u</footer>
            </div>
    
        </div>
    </body>
</html>
>>>>>>> b737e510bddecfc4313421c331884610b7e57e92
