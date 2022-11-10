<?php declare(strict_types=1);

namespace Rankr\View\_Type;

abstract class View {
    private bool $responseStatus;

    /**
     * @param $responseStatus
     */
    public function __construct($responseStatus) {
        $this->responseStatus = $responseStatus;
    }

    abstract public function render();

    protected function getResponseStatus(): bool{
        return $this->responseStatus;
    }
}
