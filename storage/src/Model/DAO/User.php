<?php declare(strict_types=1);

namespace Rankr\Model\DAO;

class User {
    const TABLE = 'user';

    public function __construct() {
        if (!array_key_exists(self::TABLE, $_SESSION)) {
            $this->buildTable();
        }
    }

    public function addUser(int $userId): void {
        r('userAdded: ' . $userId);
        $_SESSION[self::TABLE][$userId] = [
            'id' => $userId,
            'score' => 0
        ];
    }

    private function buildTable(): void {
        $_SESSION[self::TABLE] = [];
    }

    /**
     * @param int $userId
     * @return mixed|null
     */
    public function getUserById(int $userId): ?array {
        return array_key_exists($userId, $_SESSION[self::TABLE]) ? $_SESSION[self::TABLE][$userId] : null;
    }

    /**
     * @param int $userId
     * @param int $score
     * @return void
     */
    public function setScore(int $userId, int $score): void {
        $_SESSION[self::TABLE][$userId]['score'] = $score;
    }
}
