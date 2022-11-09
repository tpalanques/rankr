<?php declare(strict_types=1);

namespace Rankr\Controller\Score;

use Rankr\Controller\_Type\ViewableWithProperties;
use Rankr\Model\User;
use Rankr\View\Score\SuccessFull;
use Rankr\View\Score\Error;

class Set extends ViewableWithProperties {
    const MANDATORY_PROPERTIES = ['score', 'user'];

    public function __construct($properties) {
        parent::__construct(
            SuccessFull::class,
            Error::class,
            $properties,
            self::MANDATORY_PROPERTIES
        );
        $this->set(
            (int) $this->getProperty('user'),
            (int) $this->getProperty('score')
        );
    }
    private function set(int $userId, int $score): void {
        $user = new User($userId);
        $user->setScore($score);
    }
}
