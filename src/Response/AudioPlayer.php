<?php
namespace Alexa\Response;

use Alexa\Response\Media\AudioItem;

class AudioPlayer
{
    private $typePrefix = 'AudioPlayer.';
    private $action = 'PLAY';
    private $text = '';

    public function __construct()
    {
        $this->audioItem = new AudioItem;
    }

    public function setAction($action)
    {
        $this->action = $action;
    }

    private function getType()
    {
        return $this->typePrefix . $this->action;
    }

    public function getAudioItem()
    {
        return $this->audioItem;
    }

    public function render()
    {
        return [
            'type' => $this->getType(),
            'playBehavior' => 'ENQUEUE',
            'audioItem' => $this->audioItem->render(),
        ];
    }
}
