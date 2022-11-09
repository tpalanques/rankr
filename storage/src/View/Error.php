<?php declare(strict_types=1);

namespace Rankr\View;

class Error extends View {
    private int $code;
    private string $message;

    /**
     * @param array $parameters
     */
    public function __construct(array $parameters) {
        //int $code, string $message todo check what needs to be done in here
        $this->code = $parameters['code'];
        $this->message = $parameters['message'];
    }

    /**
     * @return string
     */
    public function render(): string {
        return "<h1>" . $this->code . ' - ' . $this->message . "</h1>";
    }
}
