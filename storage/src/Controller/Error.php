<?php declare(strict_types=1);

namespace Rankr\Controller;

use Rankr\View\Error as ErrorView;

class Error extends ViewableController {

    public function __construct(int $code, string $message) {
        parent::__construct(new ErrorView($code, $message));
    }
}
