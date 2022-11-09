<?php declare(strict_types=1);

namespace Rankr\Controller\Score;

use Rankr\Controller\_Type\ViewableWithProperties;
use Rankr\Model\User;
use Rankr\View\Score\SuccessFull;
use Rankr\View\Score\Error;

class Add extends ViewableWithProperties {
    const MANDATORY_PROPERTIES = ['score', 'user'];

    public function __construct($properties) {
        parent::__construct(
            SuccessFull::class,
            Error::class,
            $properties,
            self::MANDATORY_PROPERTIES
        );
        $this->add(
            (int) $this->getProperty('user'),
            (int) $this->getProperty('score')
        );
    }

    private function add(int $userId, int $score): void {
        $user = new User($userId);
        $user->addScore($score);
    }
}
