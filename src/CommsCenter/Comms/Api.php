<?php namespace CommsCenter\Comms;

use CommsCenter\Comms\Endpoint\EmailTemplate;
use CommsCenter\Comms\Endpoint\PacketPictures;
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
            RequestOptions::TIMEOUT => 15,
            RequestOptions::VERIFY => false,
        ];
    }

    public function emailTemplates()
    {
        return new EmailTemplate($this);
    }

    public function packetPictures()
    {
        return new PacketPictures($this);
    }

}