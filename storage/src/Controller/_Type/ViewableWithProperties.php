<?php declare(strict_types=1);

namespace Rankr\Controller\_Type;

use Rankr\View\_Type\View;

abstract class ViewableWithProperties extends Viewable {
    private array $properties;
    /**
     * @param string $okView
     * @param string $koView
     * @param array|null $properties
     * @param array|null $mandatoryProperties
     */
    public function __construct(string $okView, string $koView, array $properties = null, array $mandatoryProperties = null) {
        $this->properties = $properties;
        $view = $this->propertiesSet($properties, $mandatoryProperties) ? $okView : $koView;
        parent::__construct($view);
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

    /**
     * @param array $array
     * @param array $parameters
     * @return bool
     */
    private function propertiesSet(array $array, array $parameters): bool {
        foreach ($parameters as $parameter) {
            if (!array_key_exists($parameter, $array)) {
                return false;
            }
        }
        return true;
    }
}
