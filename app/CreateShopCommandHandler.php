<?php
/**
 * Created by PhpStorm.
 * User: root
 * Date: 6/23/15
 * Time: 12:10 AM
 */

namespace App;

use Laracasts\Commander\CommandHandler;

use Laracasts\Commander\Events\DispatchableTrait;


class CreateShopCommandHandler implements CommandHandler {

    use DispatchableTrait;

    protected $shopRepository;

    function __construct(ShopRepository $shopRepository)
    {
        $this->shopRepository = $shopRepository;
    }

    public function handle($command)
    {
        $shop = Shop::create($command->shop_name);

        $shop = $this->shopRepository->save($shop, $command->userId);

        $this->dispatchEventsFor($shop);

        return $shop;
    }

} 