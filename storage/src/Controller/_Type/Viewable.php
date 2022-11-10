<?php declare(strict_types=1);

namespace Rankr\Controller\_Type;

abstract class Viewable {
    private string $viewClasName;
    private bool $viewStatus;
    private array $viewProperties = [];

    /**
     * @param $view
     * @param bool $viewStatus
     */
    public function __construct($view, bool $viewStatus = true) { //todo typehint view to View?
        $this->viewClasName = $view;
        $this->viewStatus = $viewStatus;
    }

    /**
     * @return array
     */
    private function getViewProperties(): array {
        return $this->viewProperties;
    }

    /**
     * @return bool
     */
    private function getViewStatus(): bool {
        return $this->viewStatus;
    }

    public function render() {
        $view = new $this->viewClasName($this->getViewStatus(), $this->getViewProperties());
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

    protected function setViewStatus(bool $status): void {
        $this->viewStatus = $status;
    }
}
