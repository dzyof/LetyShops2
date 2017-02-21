<?php
require('order.php');

interface parserFile
{
    public function pars($fileName);
}



class parsXml implements parserFile
{
    public function pars($fileName)
    {
        $languages = simplexml_load_file($fileName); // $string = "xml.xml"
        $arr = [];
        foreach ($languages->stat as $stat) {
            if($stat->advcampaign_id && $stat->order_id &&  $stat->status &&  $stat->cart && $stat->currency && $stat->action_date ){
                $order = new order();
                $order->advcampaign_id = $stat->advcampaign_id;
                $order->order_id = $stat->order_id;
                $order->status = $stat->status;
                $order->cart = $stat->cart;
                $order->currency = $stat->currency;
                $order->action_date = $stat->action_date;
                array_push($arr, $order);
            }
        }
        return $arr;
    }
}

class parsCsv implements parserFile
{
    public function pars($fileName)    {
        $f = fopen($fileName, "rt") or die("Ошибка!");
        for ($i=0; $data=fgetcsv($f,1000,";"); $i++) {
            $num = count($data);
            $arr = [];

            for ($c = 0; $c < $num; $c++) {
                $piecesString = explode("\t", $data[$c]);

                for ($k = 0; $k < count( $piecesString) ; $k++) {
                    if($piecesString[2] =="Winning Bid (Revenue) -" && $piecesString[18]  && $piecesString[15] && $piecesString[11] )
                        $order = new order();
                    $order = new order();
                    $order->advcampaign_id = 1;
                    $order->order_id = $piecesString[18];
                    $order->status = "approved";
                    $order->cart = $piecesString[15];
                    $order->currency = "USD";
                    $order->action_date = $piecesString[11];
                    array_push($arr, $order);
                }
            }
        }
        fclose($f);

        return $arr;
    }

}