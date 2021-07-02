<?php namespace CommsCenter\Comms\Endpoint;

use Pckg\Api\Endpoint;
use Pckg\Api\Endpoint\HttpQl;

/**
 * Class Stores
 * @package CommsCenter\Comms\Endpoint
 */
class Stores extends Endpoint
{

    protected $path = 'stores';

    public function connect($data): bool
    {
        return !!$this->getApi()->postApi('comms/hub/connect', $data)->getApiResponse('success');
    }

    public function ping(): bool
    {
        return !!$this->getApi()->postApi('comms/hub/ping')->getApiResponse('success');
    }

    public function installShare(string $type, string $uuid): bool
    {
        return !!$this->getApi()->postApi('library/share/' . $type . '/add', ['uuid' => $uuid])->getApiResponse('success');
    }
}
