<?php

include_once('factura.php');
include_once('Collector.php');

class facturaCollector extends Collector
{
  
  
  function createfactura($DESCRIP, $total)
                           {    
    $insertrow = self::$db->insertRow("INSERT INTO leccion.factura (ID, DESCRIPCION, TOTAL) 
                                          VALUES (?,?,?)", 
                                          array(null, "{$DESCRIP}", "{$total}"
                                                ));
  }  

  function readfacruras() {
    $rows = self::$db->getRows("SELECT * FROM leccion.factura ");        
    $arrayfactura= array();        
    foreach ($rows as $c){
      $aux = new factura($c{'ID'},$c{'DESCRIPCION'},$c{'TOTAL'});
      array_push($arrayfactura, $aux);
    }
    return $arrayfactura;        
  }

   

}
?>

