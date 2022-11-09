<?php declare(strict_types=1);

namespace Rankr\Controller;

use Rankr\Controller\_Type\Viewable;
use Rankr\View\Home as HomeView;

class Home extends Viewable {
    public function __construct() {
        parent::__construct(HomeView::class);
    }
}
