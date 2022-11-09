<?php declare(strict_types=1);

namespace Rankr\Test;

use Rankr\Controller\Config;
use Rankr\Controller\Error;

/**
 * @coversRouterClass \Rankr\Controller\Error
 */
class ErrorTest extends Base {
    /**
     * @covers ::render
     */
    public function test_render(): void {
        $code = 404;
        $message = '<h1>404 - Not found</h1>';
        $sut = new Error($code, new Config(Error::CONFIG, $this->getBaseConfigPath()));
        $render = $sut->render();
        $this->assertEquals(
            $message,
            $render,
            'Error not properly rendering'
        );
    }
}
