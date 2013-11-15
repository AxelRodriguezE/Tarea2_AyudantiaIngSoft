<!DOCTYPE html>
<html>
    <head>
        <title>Grupo 06 Ingenieria de Software 2do S. 2013</title>
        <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
        <link rel="stylesheet" type="text/css" href="mystyle.css">
        <meta name="keywords" content="HTML, CSS, PHP, UTEM, Ingenieria de software, Ayudantia">
        <meta name="description" content="Web de integrantes de grupo 6 de Ingenieria de software 2do semestre UTEM 2013">
        <meta http-equiv="refresh" content="30">
    </head>

    <?php
    $fondo = $_POST['color'];    
    
    if($fondo == 'Gris')
        echo "<body class='cbody1'>";
    
    if($fondo == 'Azul')
        echo "<body class='cbody2'>";
    
    if(!$fondo)
        echo "<body class='cbody3'>";
    ?>

    <div class="divnueva">
        <header>  
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
                <br><a href="http://github.com/Pedro-Salas-Vergara">Cuenta en GitHub</a></p>
            </div>
            <div class="clear"></div>  
         </div>
         <aside>
            <form name="input" action="#" method="post">
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
