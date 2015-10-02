<?php
/**
 * Created by PhpStorm.
 * User: root
 * Date: 6/23/15
 * Time: 11:27 AM
 */

namespace App;


class ShopRepository {


    public function save(Shop $shop, $userId)
    {
        $shop->save();

        User::findOrFail($userId)->shops()->save($shop);


    }
}