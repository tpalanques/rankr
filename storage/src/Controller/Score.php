<?php declare(strict_types=1);

namespace Rankr\Controller;

use Rankr\View\Score\SuccessFull;
use Rankr\View\Score\Error;

class Score extends ViewableWithParameters {
    const MANDATORY_PARAMETERS = ['score', 'user'];
    private $score;
    private $user;

    public function __construct($parameters) {
        parent::__construct(
            SuccessFull::class,
            Error::class,
            $parameters,
            self::MANDATORY_PARAMETERS
        );
        $this->score = $parameters['score'];
        $this->user = $parameters['user'];
    }
}
