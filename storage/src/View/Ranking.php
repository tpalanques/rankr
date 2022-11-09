<?php declare(strict_types=1);

namespace Rankr\View;

use Rankr\View\_Type\ViewWithProperties;

class Ranking extends ViewWithProperties {

    /**
     * @return string
     */
    public function render(): string {
        r($this->getProperty('ranking'));
        return '';
    }
}
