<?php
require_once("conexion.php");
   if(isset($_SESSION['ustatus'])){
            if($_SESSION['ustatus']!='active'){
                  header('location:index.php');
            }
            if($_SESSION['userid']==2){ 
                  header("location:votante.php");  }
      }else{ header("location:index.php"); }     
?>
<!DOCTYPE html>
<html lang='es-co'>
      <head>
            <meta charset='utf-8'/>
            <title>Sv Simple Elections</title>
             <link rel='shortcut icon' href='img/fav.jpg'/>
            <link rel='stylesheet' type='text/css' href='estilo.css'/>
      </head>      
      <body>
            <header>
                  <h1>Elecciones personero estudiantil</h1>
                  <h5>ACOINPREV</h5>
            </header>        
               <div id='imagecandidates'>                                        
                     <form name='frmcandidates' method='POST'>
                        Resultados                           
                      <input type='button' name='btncerrarsesion' value='Cerrar Sesión' id='btncerrarsesion' id='btncerrarsesion'/>    
                     </form>
               </div>
      </body>
</html>