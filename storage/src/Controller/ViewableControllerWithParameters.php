<?php declare(strict_types=1);

namespace Rankr\Controller;

abstract class ViewableControllerWithParameters extends ViewableController {

    /**
     * @param $view
     * @param $koView
     * @param array|null $parameters
     * @param array|null $mandatoryParameters
     */
    public function __construct($okView, $koView, array $parameters = null, array $mandatoryParameters = null) {
        $view = $this->parametersAreSet($parameters, $mandatoryParameters) ? $okView : $koView;
        parent::__construct($view);
    }

    /**
     * @param array $array
     * @param array $parameters
     * @return bool
     */
    private function parametersAreSet(array $array, array $parameters): bool {
        foreach ($parameters as $parameter) {
            if (!array_key_exists($parameter, $array)) {
                return false;
            }
        }
        return true;
    }
}
