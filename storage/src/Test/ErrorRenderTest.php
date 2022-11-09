<?php declare(strict_types=1);

namespace Rankr\Test;

use PHPUnit\Framework\TestCase;
use Rankr\View\Error;

class ErrorRenderTest extends TestCase {
    public function testRender(): void {
        $code = 404;
        $message = 'Not found';
        $this->assertTrue(true);
        $sut = new Error($code, $message);
        $this->assertEquals(
            $sut->render(),
            $code . ' - ' . $message,
            'Error not properly rendering'
        );
    }
}
