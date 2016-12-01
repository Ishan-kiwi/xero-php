<?php

namespace Calcinai\XeroPHP\Application;

use Calcinai\XeroPHP\Application;

class PartnerApplication extends Application
{
    protected static $_type_config_defaults = [
        'xero' => [
            'site'     => 'https://api-partner.network.xero.com',
            'base_url' => 'https://api-partner.network.xero.com',
        ]
    ];
}