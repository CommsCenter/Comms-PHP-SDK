<?php namespace CommsCenter\Comms\Endpoint;

use Pckg\Api\Endpoint;
use Pckg\Api\Endpoint\HttpQl;

/**
 * Class Packets
 * @package CommsCenter\Comms\Endpoint
 */
class Packets extends Endpoint
{

    /**
     * We will use HTTPQL (not REST) here.
     */
    use HttpQl;

    protected $path = 'packets';

}
