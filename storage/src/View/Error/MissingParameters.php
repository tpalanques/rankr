<?php declare(strict_types=1);

namespace Rankr\View\Error;

use Rankr\View\_Type\ViewWithProperties;

class MissingParameters extends ViewWithProperties {
    /**
     * @return string
     */
    public function render(): string {
        return json_encode([
            'error'=> true,
            'msg' => 'Missing parameters'
        ]);
    }
}
