<!DOCTYPE html>
<html>
    <head>
        <title>Grupo 06 Ingenieria de Software 2do S. 2013</title>
        <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
        <link rel="stylesheet" type="text/css" href="mystyle.css">
        <meta name="keywords" content="HTML, CSS, PHP, UTEM, Ingenieria de software, Ayudantia">
        <meta name="description" content="Web de integrantes de grupo 6 de Ingenieria de software 2do semestre UTEM 2013">
        <meta http-equiv="refresh" content="60">
    </head>

    <?php
    $fondo = $_POST['color'];    
    
    if($fondo == 'Rojo')
        echo "<body class='cbody1'>";
    
    if($fondo == 'Azul')
        echo "<body class='cbody2'>";
    
    if(!$fondo)
        echo "<body class='cbody3'>";
    ?>

    <div class="divnueva">
        <header>  
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
                <br><a href="http://github.com/Pedro-Salas-Vergara">Cuenta en GitHub</a></p>
            </div>
            <div class="clear"></div>  
         </div>
         <aside>
            <form name="input" action="#" method="post">
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
                <br>
                <br>
            <?php 
                    $frase1="<p class='sangria'><i>El comunismo no priva al hombre de la libertad de apropiarse del fruto de su trabajo, 
                        lo único de lo que lo priva es de la libertad de esclavizar a otros por medio de tales apropiaciones.</i></p>
                        <p align='right'>Karl Marx.</p>"; 
                    $frase2="Oli2";
                    $frase3="Oli2";
                    $frase4="Oli4";
                    $frase5="Oli5";
                    $frase6="Oli6";
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
            </aside> 
                <div class="clear"></div>       
                <div>
                <div class="clear"></div>
                </div>
                <footer>
                    <div class="footerfl"><p class="Pflotados">Desarrollada por Estudiantes de la Universidad Tecnológica metropolitana - 2do.S.2013</p></div>
                </footer>
            </div>
        </div>
    </body>
</html>