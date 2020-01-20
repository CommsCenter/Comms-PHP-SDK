<?php namespace CommsCenter\Comms\Endpoint;

use Pckg\Api\Endpoint;

class EmailTemplate extends Endpoint
{

    public function all()
    {
        return $this->getAndDataResponse('email-templates', 'emailTemplates');
    }

}