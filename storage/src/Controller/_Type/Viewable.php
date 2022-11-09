<?php declare(strict_types=1);

namespace Rankr\Controller\_Type;

abstract class Viewable {
    private string $viewClasName;
    private array $viewProperties = [];

    /**
     * @param $view
     */
    public function __construct($view) {
        $this->viewClasName = $view;
    }

    private function getViewProperties(): array{
        return $this->viewProperties;
    }

    public function render() {
        $view = new $this->viewClasName($this->getViewProperties());
        return $view->render();
    }

    /**
     * @param $key
     * @param $value
     * @return void
     */
    protected function saveViewProperty(string $key, array|int|string $value): void {
        $this->viewProperties[$key] = $value;
    }
}
