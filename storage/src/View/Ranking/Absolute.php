<?php declare(strict_types=1);

namespace Rankr\View\Ranking;

use Rankr\View\_Type\ViewWithProperties;

class Absolute extends ViewWithProperties {

    /**
     * @return string
     */
    public function render(): string {
        r($this->getProperty('ranking'));
        return '';
    }
}
