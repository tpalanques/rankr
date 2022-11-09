<?php declare(strict_types=1);

namespace Rankr\Controller;

class Config {
    const CONFIG_FILE_EXTENSION = '.json';
    const CONFIG_FILE_PATH = 'config/';

    private string $path;

    /**
     * @param $name string name of the file that will be loaded. Extension will be loaded automatically
     */
    public function __construct(string $name) {
        $this->path = self::CONFIG_FILE_PATH . rtrim($name, self::CONFIG_FILE_EXTENSION) . self::CONFIG_FILE_EXTENSION;
    }

    /**
     * Reads the configuration file and returns its content in an array
     * @return array
     */
    public function get(): array {
        return json_decode(file_get_contents($this->path), true);
    }
}
