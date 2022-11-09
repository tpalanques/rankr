<?php declare(strict_types=1);

namespace Rankr\Test;

use Rankr\Controller\Config;
use Rankr\Controller\Router;

/**
 * @coversRouterClass \Rankr\Controller\Router
 */
class CoversRouterClassTest extends Base {
    const CONTROLLER_PREFIX = 'Rankr\Controller\\';
    private string $existingUrl = 'some/url';
    private string $nonExistingUrl = 'non/existing/url';
    private string $existingController = 'Home';
    private string $nonExistingController = 'Error';
    private array $errorConfig = [
        404 => 'Not found',
        501 => 'Not Implemented'
    ];
    private array $routerConfig = [];

    protected function setUp(): void {
        parent::setUp();
        $this->routerConfig = [
            $this->existingUrl => $this->existingController
        ];
    }

    /**
     * A valid URL needs to route to a valid Controller
     * @covers ::route
     */
    public function test_valid_route(): void {
        $sut = new Router(
            $this->existingUrl,
            $this->getConfigMock($this->routerConfig),
            $this->getConfigMock($this->errorConfig)
        );
        $this->assertEquals(
            self::CONTROLLER_PREFIX . $this->existingController,
            get_class($sut->route()),
            "Can't properly route URI to controller"
        );
    }

    /**
     * A valid URL needs to route to a valid Controller
     * @covers ::route
     */
    public function test_non_valid_route(): void {
        $sut = new Router(
            $this->nonExistingUrl,
            $this->getConfigMock($this->routerConfig),
            $this->getConfigMock($this->errorConfig)
        );
        $this->assertEquals(
            self::CONTROLLER_PREFIX . $this->nonExistingController,
            get_class($sut->route()),
            "Invalid URL not routed to Error controller"
        );
    }

    /**
     * Creates test double for \Rankr\Controller\Config
     * @param array $config
     * @return Config
     */
    private function getConfigMock(array $config): Config {
        $mock = $this->getMockBuilder(Config::class)
            ->onlyMethods(['get'])
            ->disableOriginalConstructor()
            ->getMock();
        $mock->method('get')->willReturn($config);
        return $mock;
    }

}
