<?php
require('parserFile.php');
require('dbOperations.php');

//по API приходить файл чи назва файлу ....
//    $file = "xml.xml";
$file = "xml.xml";
//  я точно не знав що прийде з АРІ топу типчасово просто читав з файлу,
//  нижче приблизний приклад перевырки вхыдних данних
//    if($file == " *.xml "  ) {
//      $parser  =  new parsXml()  ;
//
//        }elseif($file == " *.csv "  ){
//        $parser  =  new parsCsv();
//  }

$parser  =  new parsXml()  ;
//$parser  =  new parsCsv()  ;
$sql = new db();
$arrayy = $parser->pars($file);
//$arrayy =$parser->parsCsv($file);



$sql->insertSql($arrayy);

