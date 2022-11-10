<?php declare(strict_types=1);

namespace Rankr\View\Ranking;

use Rankr\View\_Type\ViewWithProperties;

class Relative extends ViewWithProperties {

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
