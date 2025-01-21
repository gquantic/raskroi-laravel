<?php

namespace App\Services\WooCommerce;

class WooCatalogueService extends WooCommerceService
{
    public function __construct()
    {
        parent::__construct();
    }

    public function getProducts()
    {
        $content = file_get_contents('http://ltmaster.ru/wp-json/wc/v3/products?category=76&per_page=100&consumer_key=ck_0fe19a044fcb213c5f657e0c7d72eeec84679d5e&consumer_secret=cs_8f1a2a979506f0b4a908a3d6250f041c7d560bd5');
        dd($content);
    }
}
