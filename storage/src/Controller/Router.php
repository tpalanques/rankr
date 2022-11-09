<?php declare(strict_types=1);

namespace Rankr\Controller;

class Router {
    private $route = null;

    /**
     * Router constructor.
     */
    public function __construct(string $url) {
        $routes = (new Config('route'))->get();
        $url = $this->purgeRoute($url);
        $this->route = array_key_exists($url, $routes) ? $routes[$url] : null;
    }

    public function route(): ViewableController {
        if (!$this->route) {
            return new Error(404, 'Page not found');
        }
        $controller = 'Controller\\' . $this->route;
        if (class_exists($controller)) {
            return new $controller();
        }
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
