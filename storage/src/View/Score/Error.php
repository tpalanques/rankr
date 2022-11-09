<?php declare(strict_types=1);

namespace Rankr\View\Score;

use Rankr\View\View;

class Error extends View {
    /**
     * @return string
     */
    public function render(): string {
        return "<h1>Can't score, some parameters are missing</h1>";
    }
}
