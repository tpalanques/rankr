<?php declare(strict_types=1);

namespace Rankr\Controller;

use Rankr\Controller\_Type\Viewable;
use Rankr\View\Dump as DumpView;

class Dump extends Viewable {

    public function __construct() {
        $this->saveViewProperty('db', $_SESSION);
        parent::__construct(DumpView::class, $this->isReady());
    }

    /**
     * @return bool
     */
    private function isReady(): bool{
        return isset($_SESSION);
    }
}
