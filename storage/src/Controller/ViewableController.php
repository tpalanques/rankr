<?php declare(strict_types=1);

namespace Rankr\Controller;

abstract class ViewableController {
    private $view;

    /**
     * @param $view
     */
    public function __construct($view) {
        $this->view = $view;
    }

    public function render() {
        return (new $this->view)->render();
    }
}
