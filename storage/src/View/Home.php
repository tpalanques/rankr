<?php declare(strict_types=1);

namespace Rankr\View;

use Rankr\View\_Type\View;

class Home extends View {
    /**
     * @return string
     */
    public function render(): string {
        return "<h1>Welcome to Rankr!</h1>";
    }
}
