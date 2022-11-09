<?php declare(strict_types=1);

namespace Rankr\View\Score;

use Rankr\View\_Type\ViewWithProperties;

class SuccessFull extends ViewWithProperties {
    /**
     * @return string
     */
    public function render(): string {
        return "<h1>Scoring!</h1>";
    }
}
