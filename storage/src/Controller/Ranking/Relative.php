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
        $ranking = (new UserCompilation())->getOrdered();
        $position = (int) $this->getProperty('position');
        $round = (int) $this->getProperty('round');
        $this->saveViewProperty(
            'ranking',
            $this->filter($ranking, $position, $round)
        );
        $this->setViewStatus(true);
    }

    /**
     * @param array $users
     * @param $position
     * @param $round
     * @return array
     */
    private function filter(array $users, $position, $round): array {
        $filteredUsers = [];
        $startPosition = $position - $round;
        $endPosition = $position + $round;

        for($i = $startPosition; $i <= $endPosition; $i++){
            if(array_key_exists($i,$users)){
                $filteredUsers[] = $users[$i];
            }
        }
        return $filteredUsers;
    }
}
