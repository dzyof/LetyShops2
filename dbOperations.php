<?php

class db{
    public function insertSql($Object) {

//           ------ це частина не унифікована ---------------
//        $link = mysql_connect('localhost', 'root', '');
//        if (!$link) {
//            die('ERROR ' . mysql_error());
//        }
//        for($i = 0; $i < count($Object); $i++ ){
//           $advcampaign_id =  $Object[$i]->advcampaign_id;
//          echo  (int)$advcampaign_id.">advcampaign_id";
//            //  echo $Object[i];
//            $link = mysql_connect('localhost', 'root', '');
//            if (!$link) {
//                die('ERROR ' . mysql_error());
//            } else{
//                $sql = mysql_query("INSERT INTO LetyShops.test (advcampaign_id, order_id,status,cart,currency,action_date )
//                                    VALUES (". (int)$Object[$i]->advcampaign_id .",".(int)$Object[$i]->  order_id.",'".(string)$Object[$i]-> status."',".(int)$Object[$i]-> cart.",'".(string)$Object[$i]->  currency."','".(string)$Object[$i]->action_date."')");
//
//                if ($sql) {
//                    echo "<p>succes add</p>";
//                } else {
//
//                    echo "<p>error add </p>";
//                    return true;
//                }
//            }
//        }

        $link = mysql_connect('localhost', 'root', '');
        if (!$link) {
            die('ERROR ' . mysql_error());
        }
        for($i = 0; $i < count($Object); $i++ ){
            $link = mysql_connect('localhost', 'root', '');
            if (!$link) {
                die('ERROR ' . mysql_error());
            } else{
                $sql = mysql_query("INSERT INTO LetyShops.test (advcampaign_id, order_id,status,cart,currency,action_date )
                                    VALUES (". (int)$Object[$i]->advcampaign_id .",".(int)$Object[$i]->  order_id.",'".(string)$Object[$i]-> status."',".(int)$Object[$i]-> cart.",'".(string)$Object[$i]->  currency."','".(string)$Object[$i]->action_date."')
                    ON DUPLICATE KEY UPDATE status ='".(string)$Object[$i]-> status."'  ,cart = ".(int)$Object[$i]-> cart." ,currency = '".(string)$Object[$i]->  currency."',action_date = '".(string)$Object[$i]->action_date."' ");
                if ($sql) {
                    echo "<p>succes add</p>";
                } else {
                    echo "<p>error add </p>";
                    return true;
                }
            }
        }
    }

}