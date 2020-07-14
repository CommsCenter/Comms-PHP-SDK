<?php namespace CommsCenter\Comms\Endpoint;

use Pckg\Api\Endpoint;
use Pckg\Api\Endpoint\HttpQl;

/**
 * Class Newsletters
 * @package CommsCenter\Comms\Endpoint
 */
class Newsletters extends Endpoint
{

    /**
     * We will use HTTPQL (not REST) here.
     */
    use HttpQl;

    protected $path = 'newsletters';

    /**
     * @return string[]
     */
    public function getCreateDefaults()
    {
        return [
            'type_id' => 'default',
            'active' => true,
        ];
    }

}