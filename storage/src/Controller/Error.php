<?php declare(strict_types=1);

namespace Rankr\Controller;

use Rankr\View\Error as ErrorView;

class Error extends ViewableController {

    public const ERROR_404 = 404;
    public const ERROR_501 = 501;

    /**
     * @param int $code
     */
    public function __construct(int $code) {
        $statusCodes = (new Config('httpStatusCode'))->get();
        if (array_key_exists($code, $statusCodes)) {
            parent::__construct(new ErrorView($code, $statusCodes[$code]));
        }
    }
}
