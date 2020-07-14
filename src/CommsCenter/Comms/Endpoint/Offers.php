<?php namespace CommsCenter\Comms\Endpoint;

use Pckg\Api\Endpoint;
use Pckg\Api\Endpoint\HttpQl;

/**
 * Class Offers
 * @package CommsCenter\Comms\Endpoint
 */
class Offers extends Endpoint
{

    /**
     * We will use HTTPQL (not REST) here.
     */
    use HttpQl;

    protected $path = 'offers';

}