<?php
class order
{
    public $advcampaign_id = '';  //  1       // 1 - �������� �� �������    id ��������
    public $order_id = '';        // [18]                                   id ������ � ��������
    public $status = '';          //  "approved"     �������� �� �������    ������ ������
    public $cart = '';          //    [15]                                  ����� ������
    public $currency = '';      // "USD" -      �������� �� �������         ������
    public $action_date = '';   // [11]                                     ����� �������� ������
                                        // [2] Event Type == Winning Bid (Revenue)
}
