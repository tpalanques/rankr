<?php declare(strict_types=1);

namespace Rankr\View;

abstract class View {
    private array $properties;

    /**
     * @param array $properties
     */
    public function __construct(array $properties = []) {
        $this->properties = $properties;
    }

    /**
     * @param string $propertyName
     * @return mixed|null
     */
    protected function getProperty(string $propertyName) {
        return array_key_exists($propertyName,$this->properties) ? $this->properties[$propertyName] : null;
    }

    /**
     * @return array
     */
    protected function getProperties(): array {
        return $this->properties;
    }

    abstract public function render();

}
