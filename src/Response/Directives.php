<?php

namespace Alexa\Response;

class Directives
{
    public $directives = null;

    public function __construct()
    {
        $this->directives = [];
    }

    public function add($directive)
    {
        $this->directives[] = $directive;
    }

    public function render()
    {
        $rendered_directives = [];

        foreach ($this->directives as $directive) {
            $rendered_directives[] = $directive->render();
        }

        return $rendered_directives;
    }
}
