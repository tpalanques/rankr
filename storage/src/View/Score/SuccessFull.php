<?php declare(strict_types=1);

namespace Rankr\View\Score;

use Rankr\View\View;

class SuccessFull extends View {
    /**
     * @return string
     */
    public function render(): string {
        return "<h1>Scoring!</h1>";
    }
}
