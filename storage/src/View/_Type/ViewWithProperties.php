<?php declare(strict_types=1);

namespace Rankr\View\_Type;

abstract class ViewWithProperties extends View {
    private array $properties;

    public function __construct(bool $status, $properties) {
        $this->properties = $properties;
        parent::__construct($status);
    }

    /**
     * @param string $propertyName
     * @return mixed|null
     */
    protected function getProperty(string $propertyName) {
        return array_key_exists($propertyName, $this->properties) ? $this->properties[$propertyName] : null;
    }

    /**
     * @return array
     */
    protected function getProperties(): array {
        return $this->properties;
    }
}
