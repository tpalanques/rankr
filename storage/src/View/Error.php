<?php declare(strict_types=1);

namespace Rankr\View;

class Error extends View {
    private int $code;
    private string $message;

    /**
     * @param int $code
     * @param string $message
     */
    public function __construct(int $code, string $message) {
        $this->code = $code;
        $this->message = $message;
    }

    /**
     * @return string
     */
    public function render(): string {
        return "<h1>" . $this->code . ' - ' . $this->message . "</h1>";
    }
}
