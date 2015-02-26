<!DOCTYPE HTML>

<html lang = "es">
 <head>
   <title>Factura</title>

   <meta charset="utf-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1">
   <meta name="Francisco" content="Francisco Miranda">

    <!-- Bootstrap core CSS -->
 </head>

 <body >

 <div >
       <?php
       $nombre=$_POST["nombre"];
       $total=$_POST["total"];

       include_once("facturaCollector.php");

          $usuarioObj = new facturaCollector();
          $usuarioObj->createfactura($nombre,$total);
       

         echo "<B> Descripcion: </B>" . htmlspecialchars($nombre) . "<br><br>" ;
         echo "<B> total: </B>" . htmlspecialchars($total) . "<br><br>" ;

         echo "<B> Registro Grabado Exitosamente </B> </br></br>";
         

       ?>
       <div><a href="factura_pres.php">Regresar</a>  </br> </br> </div>

</div>
   
  
  

 </body>

</html>