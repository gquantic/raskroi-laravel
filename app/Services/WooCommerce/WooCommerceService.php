<?php

namespace App\Services\WooCommerce;

use Automattic\WooCommerce\Client;

class WooCommerceService
{
    public Client $client;

    public function __construct()
    {
        $this->client = new Client(
            config('wooconfig.WOOCOMMERCE_STORE_URL'),
            config('wooconfig.WOOCOMMERCE_CONSUMER_KEY'),
            config('wooconfig.WOOCOMMERCE_CONSUMER_SECRET'),
            [
                'version' => 'wc/v3',
            ]
        );

        return $this;
    }
}
