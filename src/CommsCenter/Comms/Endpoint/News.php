<?php namespace CommsCenter\Comms\Endpoint;

use Pckg\Api\Endpoint;
use Pckg\Api\Endpoint\HttpQl;

/**
 * Class News
 * @package CommsCenter\Comms\Endpoint
 */
class News extends Endpoint
{

    /**
     * We will use HTTPQL (not REST) here.
     */
    use HttpQl;

    protected $path = 'news';

}