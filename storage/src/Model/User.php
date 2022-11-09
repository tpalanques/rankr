<?php declare(strict_types=1);

namespace Rankr\Model;

use Rankr\Model\DAO\User as UserDao;

class User {
    private array $user;
    private UserDao $userDao;

    /**
     * @param int $userId
     */
    public function __construct(int $userId) {
        $this->userDao = new UserDao();
        if (!$this->userDao->getUserById($userId)) {
            $this->userDao->addUser($userId);
        }
        $this->user = $this->userDao->getUserById($userId);
    }

    /**
     * @return int
     */
    public function getId(): int {
        return $this->user['id'];
    }

    /**
     * @return int
     */
    public function getScore(): int {
        return $this->user['score'];
    }

    /**
     * @param int $score
     * @return void
     */
    public function setScore(int $score): void {
        $this->userDao->setScore($this->getId(), $score);
    }
}
