<?php

namespace CommsCenter\Comms\Helper;

use CommsCenter\Comms\Api;

trait CommunicatesWithStore
{
    /**
     * @return Api
     */
    public function getStoreApi(): Api
    {
        $config = config('comms.store', []);

        return resolve(Api::class, [
            'endpoint' => $config['endpoint'],
            'apiKey' => $config['auth']['apiKey'],
        ]);
    }

    /**
     * @return Api
     */
    public function makeStoreApi(string $endpoint, string $apiKey): Api
    {
        return new Api($endpoint, $apiKey);
    }
}
