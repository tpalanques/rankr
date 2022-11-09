<?php declare(strict_types=1);

namespace Rankr\Controller;

class Router {
    const CONFIG = 'route';
    private string|null $route;
    private Config $errorConfig;

    /**
     * @param string $url
     * @param Config $routeConfig
     * @param Config $errorConfig
     */
    public function __construct(string $url, Config $routeConfig, Config $errorConfig) {
        $this->errorConfig = $errorConfig;
        $routes = $routeConfig->get();
        $url = $this->purgeRoute($url);
        $this->route = array_key_exists($url, $routes) ? $routes[$url] : null;
    }

    /**
     * Gets the controller related to a URL based in $this->routeConfig
     * If no route is found Error controller is returned (with code 404)
     * If controller related to URL doesn't exist Error controller is returned
     * (with code 501)
     * @return ViewableController
     */
    public function route(): ViewableController {
        if (!$this->route) {
            return new Error(Error::TYPE_404, $this->errorConfig);
        }
        $controller = 'Rankr\\Controller\\' . $this->route;
        if (!class_exists($controller)) {
            return new Error(Error::TYPE_501, $this->errorConfig);
        }
        return new $controller($_GET);
    }

    /**
     * Cleans a given URL from any undesired characters
     * @param string $url
     * @return string
     */
    private function purgeRoute(string $url): string {
        return (string) strtok(rtrim($url, '/'), '?');
    }
}
