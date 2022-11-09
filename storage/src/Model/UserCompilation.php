<?php declare(strict_types=1);

namespace Rankr\Model;

use Rankr\Model\DAO\User as UserDao;

class UserCompilation {
    private array $users;
    private UserDao $userDao;

    public function __construct() {
        $this->userDao = new UserDao();
        $this->users = $this->userDao->getUsers();
    }

    public function getOrdered(): array {
        array_multisort($this->users, SORT_DESC, array_column($this->users,'score'));
        return $this->users;
    }
}
