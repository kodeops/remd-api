<?php
namespace kodeops\remd\Services;

use kodeops\remd\Request;

class Registry
{
    const ENDPOINT = 'https://registry-es.remd.tech/api/1';
    const SERVICE = 'registry';
    const KEY = 'REMD_PAW_REGISTRY_KEY';

    public static function valuate(array $params)
    {
        return Request::do(
            self::SERVICE,
            self::ENDPOINT . '/valuate', 
            'GET', 
            env(self::KEY),
            $params
        );
    }

    public static function queue(array $params)
    {
        return Request::do(
            self::SERVICE,
            self::ENDPOINT . '/valuate/queue', 
            'GET', 
            env(self::KEY),
            $params
        );
    }
}