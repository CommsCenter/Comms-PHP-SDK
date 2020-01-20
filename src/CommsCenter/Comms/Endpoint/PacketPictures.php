<?php namespace CommsCenter\Comms\Endpoint;

use Pckg\Api\Endpoint;

class PacketPictures extends Endpoint
{

    public function all()
    {
        return $this->getAndDataResponse('email-templates', 'emailTemplates');
    }

    public function upload(string $local, array $data)
    {
        $f = fopen($local, 'r');

        return $this->api->request('POST', 'packet-pictures/upload', [
            'multipart' => collect($data)->map(function($value, $key) {
                return [
                    'name'     => $key,
                    'contents' => $value,
                ];
            })->push(['name' => 'file', 'contents' => $f])->all(),
        ]);
    }

}