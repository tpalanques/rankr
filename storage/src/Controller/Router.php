<?php declare(strict_types=1);

namespace Rankr\Controller;

class Router {
    private string $route;

    /**
     * @param string $url
     * @param string $rootConfigPath base path where configs are stored
     */
    public function __construct(string $url, string $rootConfigPath = '') {
        $routes = (new Config('route', $rootConfigPath))->get();
        $url = $this->purgeRoute($url);
        $this->route = array_key_exists($url, $routes) ? $routes[$url] : null;
    }

    /**
     * @return ViewableController
     */
    public function route(): ViewableController {
        if (!$this->route) {
            return new Error(Error::ERROR_404);
        }
        $controller = 'Controller\\' . $this->route;
        if (class_exists($controller)) {
            return new $controller();
        }
        return new Error(Error::ERROR_501);
    }

    /**
     * Cleans a given URL from any undesired characters
     * @param string $url
     * @return string
     */
    private function purgeRoute(string $url): string {
        return rtrim($url, '/');
    }
}
