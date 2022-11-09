<?php declare(strict_types=1);

namespace Rankr\View;

use Rankr\View\_Type\ViewWithProperties;

class Dump extends ViewWithProperties {

    /**
     * @return string
     */
    public function render(): string {
        r($this->getProperty('db'));
        return '';
    }
}
