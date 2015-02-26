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
       
        include_once("facturaCollector.php");
        $factObj = new facturaCollector();
        $objfact = $factObj->readfacruras();

       ?>

       <table >
               <caption> <strong> Facturas</strong> </caption>
               <thead >
                  <tr >
                     <th >Código</th>
                     <th  >Descripcion</th>
                     <th >Total</th>
                  </tr>
               </thead>
       </table> 

       <div >
              <table  >
               <tbody>
                <?php
                 foreach ($objfact as $objfact2){
                  echo "<tr>";
                  echo "<td class='tbl_cod'>".$objfact2->getid() ."</td>";
                  echo "<td class='tbl_nombre'>".$objfact2->getDescripcion()."</td>";
                  echo "<td>".$objfact2->gettotal()."&nbsp;</td>";
                  echo "</tr>"; 
                 }
                ?> 
                 
               </tbody>
              </table>
             </div>
       

</div>
   
  <div><a href="FACTURA.htm">NUEVO</a>  </br> </br> </div>
  

 </body>

</html>