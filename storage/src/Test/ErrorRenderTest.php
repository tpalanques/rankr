<?php declare(strict_types=1);

namespace Rankr\Test;

use Rankr\Controller\Error as ErrorController;

class ErrorRenderTest extends Base {
    public function testRender(): void {
        $code = 404;
        $message = 'Not found';
        $this->assertTrue(true);
        $sut = new ErrorController($code, $this->getConfigPath());
        $this->assertEquals(
            $sut->render(),
            $code . ' - ' . $message,
            'Error not properly rendering'
        );
    }
}
