<?php declare(strict_types=1);

namespace Rankr\Test;

use Rankr\Controller\Config;
use Rankr\Controller\Error;

class ErrorRenderTest extends Base {
    public function testRender(): void {
        $code = 404;
        $message = '404 - Not found';
        $sut = new Error($code, new Config(Error::CONFIG, $this->getBaseConfigPath()));
        $render = $sut->render();
        $this->assertEquals(
            $render,
            $message,
            'Error not properly rendering'
        );
    }
}
