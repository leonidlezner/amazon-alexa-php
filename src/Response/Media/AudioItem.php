<?php

namespace Alexa\Response\Media;

class AudioItem
{
    private $stream = [];

    public function setStream($url, $token)
    {
        $this->stream = [
            'url' => $url,
            'token' => $token,
            'offsetInMilliseconds' => 0
        ];
    }

    public function render()
    {
        return [
            'stream' => $this->stream,
        ];
    }

}
