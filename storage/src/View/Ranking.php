<?php declare(strict_types=1);

namespace Rankr\View;

use Rankr\View\_Type\ViewWithProperties;

class Ranking extends ViewWithProperties {

    /**
     * @return string
     */
    public function render(): string {
        if ($this->getResponseStatus()) {
            return json_encode([
                'error' => false,
                'msg' => $this->getProperty('ranking')
            ]);
        }
        return json_encode([
            'error'=> true,
            'msg' => 'We found some error :('
        ]);
    }
}
