<?php namespace CommsCenter\Comms;

use CommsCenter\Comms\Endpoint\EmailTemplate;
use CommsCenter\Comms\Endpoint\News;
use CommsCenter\Comms\Endpoint\Newsletters;
use CommsCenter\Comms\Endpoint\Offers;
use CommsCenter\Comms\Endpoint\PacketPictures;
use CommsCenter\Comms\Endpoint\Users;
use GuzzleHttp\RequestOptions;
use Pckg\Api\Api as PckgApi;

/**
 * Class Api
 *
 * @package CommsCenter\Comms
 */
class Api extends PckgApi
{

    /**
     * Api constructor.
     *
     * @param $endpoint
     * @param $apiKey
     */
    public function __construct($endpoint, $apiKey)
    {
        $this->endpoint = $endpoint;
        $this->apiKey = $apiKey;

        $this->requestOptions = [
            RequestOptions::HEADERS => [
                'X-Comms-API-Key' => $this->apiKey,
            ],
            RequestOptions::TIMEOUT => 25,
            RequestOptions::VERIFY => false,
        ];
    }

    /**
     * @return EmailTemplate
     */
    public function emailTemplates()
    {
        return new EmailTemplate($this);
    }

    /**
     * @return PacketPictures
     */
    public function packetPictures()
    {
        return new PacketPictures($this);
    }

    /**
     * @return News
     */
    public function news()
    {
        return new News($this);
    }

    /**
     * @return Offers
     */
    public function offers()
    {
        return new Offers($this);
    }

    /**
     * @return Newsletters
     */
    public function newsletters()
    {
        return new Newsletters($this);
    }

    /**
     * @return Users
     */
    public function users()
    {
        return new Users($this);
    }

}