<?php declare(strict_types=1);

namespace Rankr\Controller;

use Rankr\View\Home as HomeView;

class Home extends ViewableController {
    public function __construct() {
        parent::__construct(new HomeView());
    }
}
