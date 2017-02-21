<?php
class order
{
    public $advcampaign_id = '';  //  1       // 1 - значення по дефалту    id магазина
    public $order_id = '';        // [18]                                   id заказа в магазине
    public $status = '';          //  "approved"     значення по дефалту    статус заказа
    public $cart = '';          //    [15]                                  сумма заказа
    public $currency = '';      // "USD" -      значення по дефалту         валюта
    public $action_date = '';   // [11]                                     время создания заказа
                                        // [2] Event Type == Winning Bid (Revenue)
}
