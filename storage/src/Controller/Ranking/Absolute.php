<?php declare(strict_types=1);

namespace Rankr\Controller\Ranking;

use Rankr\Controller\_Type\Viewable;
use Rankr\Model\UserCompilation;
use Rankr\View\Ranking\Absolute as AbsoluteView;

class Absolute extends Viewable {
    public function __construct() {
        parent::__construct(AbsoluteView::class);
        $this->saveViewProperty('ranking', $this->getRanking());
    }

    private function getRanking(): array {
        return (new UserCompilation())->getOrdered();
    }

}
