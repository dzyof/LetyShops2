<?php
require('parserFile.php');
require('dbOperations.php');

//�� API ��������� ���� �� ����� ����� ....
//    $file = "xml.xml";
$file = "xml.xml";
//  � ����� �� ���� �� ������ � �в ���� ��������� ������ ����� � �����,
//  ����� ���������� ������� ��������� ������� ������
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

