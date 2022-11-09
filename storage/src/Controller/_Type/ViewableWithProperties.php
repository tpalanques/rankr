<?php declare(strict_types=1);

namespace Rankr\Controller\_Type;

use Rankr\View\_Type\View;

abstract class ViewableWithProperties extends Viewable {

    /**
     * @param string $okView
     * @param string $koView
     * @param array|null $parameters
     * @param array|null $mandatoryParameters
     */
    public function __construct(string $okView, string $koView, array $parameters = null, array $mandatoryParameters = null) {
        $view = $this->propertiesSet($parameters, $mandatoryParameters) ? $okView : $koView;
        parent::__construct($view);
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
