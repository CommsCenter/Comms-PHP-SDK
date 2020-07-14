<?php namespace CommsCenter\Comms\Provider;

use CommsCenter\Comms\Api;
use Pckg\Framework\Config;
use Pckg\Framework\Provider;

class Comms extends Provider
{

    public function services()
    {
        return [
            Api::class => function (Config $config) {
                $details = $config->get('comms.api.auth');

                return new Api($details['endpoint'], $details['apiKey']);
            }
        ];
    }

}