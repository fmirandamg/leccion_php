<!DOCTYPE HTML>

<html lang = "es">
 <head>
   <title>Gasolin</title>

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
       $RUC=$_POST["RUC"];
       $cantidad=$_POST["cantidad"];
       $precio=$_POST["precio"];
       $cantxprec=$cantidad * $precio;
       $IVA=$cantxprec * 0.12;
       $total=$cantxprec + $IVA;


         echo "<B> Nombres: </B>" . htmlspecialchars($nombre) . "<br><br>" ;
         echo "<B> R.U.C.: </B>" . htmlspecialchars($RUC) . "<br><br>" ;
         echo "<B> Cantidad x Precio: </B>" . htmlspecialchars($cantxprec) . "<br><br>" ;
         echo "<B> IVA: </B>" . htmlspecialchars($IVA) . "<br><br>" ;
         echo "<B> Total: </B>" . htmlspecialchars($total) . "<br><br>" ;


       ?>
       <div><a href="gasolina.htm">Regresar</a>  </br> </br> </div>

</div>
   
  
  

 </body>

</html>