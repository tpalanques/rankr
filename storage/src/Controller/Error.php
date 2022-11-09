<?php declare(strict_types=1);

namespace Rankr\Controller;

use Rankr\View\Error as ErrorView;

class Error extends ViewableController {

    public const CONFIG = 'httpStatusCode';
    public const TYPE_404 = 404;
    public const TYPE_501 = 501;

    /**
     * @param int $code
     * @param Config $config
     */
    public function __construct(int $code, Config $config) {
        $statusCodes = $config->get();
        if (array_key_exists($code, $statusCodes)) {
            parent::__construct(new ErrorView($code, $statusCodes[$code]));
        }
    }
}
