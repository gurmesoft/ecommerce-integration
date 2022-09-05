<?php

class BaseService
{
    public function __construct()
    {
        $config = array(
            'ShopUrl' => 'yunusdev.myshopify.com',
            'ApiKey' => 'a617f311b6ced54b11061083b763ced6',
            'SharedSecret' => '27dff53fc771c2bd80071f2e6e9d2225',
            'Curl' => array(
                CURLOPT_TIMEOUT => 10,
                CURLOPT_FOLLOWLOCATION => true
            )
        );

        PHPShopify\ShopifySDK::config($config);

        //your_authorize_url.php
        $scopes = 'read_products,write_products,read_script_tags,write_script_tags';
        //This is also valid
        //$scopes = array('read_products','write_products','read_script_tags', 'write_script_tags'); 
        $redirectUrl = 'https://kargoentegrator.gurmeapps.local/authenticate';

        \PHPShopify\AuthHelper::createAuthRequest($scopes, $redirectUrl, null, null, true);

        PHPShopify\ShopifySDK::config($config);
        $accessToken = \PHPShopify\AuthHelper::getAccessToken();
    }
}
