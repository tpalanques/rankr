<?php declare(strict_types=1);

namespace Rankr\View;

use Rankr\View\_Type\ViewWithProperties;

class Error extends ViewWithProperties {

    /**
     * @return string
     */
    public function render(): string {
        return "<h1>" . $this->getProperty('code') . ' - ' . $this->getProperty('message') . "</h1>";
    }
}
