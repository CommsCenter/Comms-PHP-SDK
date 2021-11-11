<?php namespace CommsCenter\Comms;

use CommsCenter\Comms\Endpoint\EmailTemplate;
use CommsCenter\Comms\Endpoint\News;
use CommsCenter\Comms\Endpoint\Newsletters;
use CommsCenter\Comms\Endpoint\Offers;
use CommsCenter\Comms\Endpoint\PacketPictures;
use CommsCenter\Comms\Endpoint\Packets;
use CommsCenter\Comms\Endpoint\Stores;
use CommsCenter\Comms\Endpoint\Users;
use GuzzleHttp\RequestOptions;
use Pckg\Api\Api as PckgApi;
use Pckg\Api\Endpoint;

/**
 * Class Api
 *
 * @package CommsCenter\Comms
 */
class Api extends PckgApi
{

    const API_KEY_HEADER = 'X-Comms-API-Key';

    /**
     * Api constructor.
     *
     * @param $endpoint
     * @param $apiKey
     */
    public function __construct(?string $endpoint, ?string $apiKey)
    {
        $this->requestOptions = [
            RequestOptions::TIMEOUT => 25,
            RequestOptions::VERIFY => false,
        ];

        if ($endpoint) {
            $this->setEndpoint($endpoint);
        }

        if ($apiKey) {
            $this->setApiKey($apiKey);
        }
    }

    public function setEndpoint(string $endpoint): self
    {
        if (strpos($endpoint, '//') === false) {
            $endpoint = 'https://' . $endpoint . '.id.startcomms.com/api/';
        }

        return parent::setEndpoint($endpoint);
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
     * @return Packets
     */
    public function packets(array $data = [])
    {
        return new Packets($this, $data);
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

    /**
     * @return Users
     */
    public function stores($data = []): Stores
    {
        return new Stores($this, $data);
    }
}
