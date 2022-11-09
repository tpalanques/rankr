<?php declare(strict_types=1);

namespace Rankr\Controller;

use Rankr\View\Score as ScoreView;

class Score extends ViewableController {
    public function __construct() {
        parent::__construct(new ScoreView());
    }
}
