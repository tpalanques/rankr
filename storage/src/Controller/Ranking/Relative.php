<?php declare(strict_types=1);

namespace Rankr\Controller\Ranking;

use Rankr\Controller\_Type\ViewableWithProperties;
use Rankr\Model\UserCompilation;
use Rankr\View\Error\MissingParameters;
use Rankr\View\Ranking;

class Relative extends ViewableWithProperties {
    const MANDATORY_PROPERTIES = ['position'];

    public function __construct($properties) {
        parent::__construct(
            Ranking::class,
            MissingParameters::class,
            $properties,
            self::MANDATORY_PROPERTIES
        );
        $ranking = $this->getRanking(
            (int) $this->getProperty('position')
        );
        $this->saveViewProperty(
            'ranking',
            $ranking
        );
        $this->setViewStatus(true);
    }

    private function getRanking(int $position): array {
        $users = (new UserCompilation())->getOrdered();
        return array_key_exists($position-1, $users) ? $users[$position-1] : [];
    }

}
