<?php namespace CommsCenter\Comms\Endpoint;

use Pckg\Api\Endpoint;
use Pckg\Api\Endpoint\HttpQl;

/**
 * Class Users
 * @package CommsCenter\Comms\Endpoint
 */
class Users extends Endpoint
{

    /**
     * We will use HTTPQL (not REST) here.
     */
    use HttpQl;

    protected $path = 'users';

    /**
     * @return array|int[]
     */
    public function getCreateDefaults()
    {
        return [
            'user_group_id' => 2, // user
        ];
    }

    /**
     * @param $newsletterId
     */
    public function subscribeToNewsletter($newsletterId)
    {
        return $this->api->request('POST', 'http-ql?path=newsletters_users&action=merge', [
            'user_id' => $this->id,
            'newsletter_id' => $newsletterId,
        ]);
    }

}