<?php declare(strict_types=1);

namespace Rankr\Test;

use PHPUnit\Framework\TestCase;

class Base extends TestCase{
    const CONFIG_PATH = 'src/';

    protected function getBaseConfigPath(): string{
        return self::CONFIG_PATH;
    }
}
