<?php declare(strict_types=1);

namespace Rankr\View\Ranking;

use Rankr\View\_Type\ViewWithProperties;

class Error extends ViewWithProperties {
    /**
     * @return string
     */
    public function render(): string {
        return "<h1>Can't rank, some parameters are missing</h1>";
    }
}
