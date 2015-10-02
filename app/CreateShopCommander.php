<?php
/**
 * Created by PhpStorm.
 * User: root
 * Date: 6/22/15
 * Time: 11:59 PM
 */

namespace App;



class CreateShopCommander {

    public $shop_name;

    public $userId;


    function __construct($shop_name, $userId)
    {
        $this->shop_name = $shop_name;

    }
}


