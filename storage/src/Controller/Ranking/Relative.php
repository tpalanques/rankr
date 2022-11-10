<?php declare(strict_types=1);

namespace Rankr\Controller\Ranking;

use Rankr\Controller\_Type\ViewableWithProperties;
use Rankr\Model\UserCompilation;
use Rankr\View\Error\MissingParameters;
use Rankr\View\Ranking\Relative as RelativeView;

class Relative extends ViewableWithProperties {
    const MANDATORY_PROPERTIES = ['position'];

    public function __construct($properties) {
        parent::__construct(
            RelativeView::class,
            MissingParameters::class,
            $properties,
            self::MANDATORY_PROPERTIES
        );
        $this->saveViewProperty(
            'ranking',
            $this->getRanking(
                (int) $this->getProperty('position')
            )
        );
    }

    private function getRanking(int $position): array {
        $users = (new UserCompilation())->getOrdered();
        return array_key_exists($position,$users) ? $users[$position] : [];
    }

}
