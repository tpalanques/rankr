<?php declare(strict_types=1);

namespace Rankr\View;

class Error {
    private $code;
    private $message;

    /**
     * @param int $code
     * @param string $message
     */
    public function __construct(int $code, string $message) {
        $this->code = $code;
        $this->message = $message;
    }

    /**
     * @return void
     */
    public function render(): string {
        return $this->code . ' - ' . $this->message;
    }
}
