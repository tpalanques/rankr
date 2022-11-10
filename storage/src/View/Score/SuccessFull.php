<?php declare(strict_types=1);

namespace Rankr\View\Score;

use Rankr\View\_Type\ViewWithProperties;

class SuccessFull extends ViewWithProperties {
    /**
     * @return string
     */
    public function render(): string {
        if($this->getResponseStatus()){
            return json_encode([
                'error'=> false,
                'msg' => ''
            ]);
        }
        return json_encode([
            'error'=> true,
            'msg' => 'We found some error :('
        ]);
    }
}
