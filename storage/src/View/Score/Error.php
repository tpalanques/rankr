<?php declare(strict_types=1);

namespace Rankr\View\Score;

class Error {
    /**
     * @return string
     */
    public function render(): string {
        return "<h1>Can't score, some parameters are missing</h1>";
    }
}
