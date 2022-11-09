<?php declare(strict_types=1);

namespace Rankr\View\_Type;

abstract class View {
    public function __construct() {
    }

    abstract public function render();
}
