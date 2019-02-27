<?php

namespace App\Dao;

use App\Model\User;
use PDO;

class UserDao extends BaseDao
{

    /**
     * @param User $user
     * @return bool
     */
    public function create($user)
    {
        $stmt = $this->db->prepare('INSERT INTO `user`(login, password) VALUES(?, ?)');
        return $stmt->execute([$user->getLogin(), password_hash($user->getPassword(), PASSWORD_BCRYPT)]);
    }

    public function findById($userId)
    {
        $query = $this->db->prepare('SELECT * FROM `user` WHERE id = ?');
        $query->setFetchMode(PDO::FETCH_CLASS, 'App\Model\User');
        $query->execute([$userId]);
        return $query->fetch();
    }

    public function findByLogin($login)
    {
        $query = $this->db->prepare('SELECT * FROM `user` WHERE login = ?');
        $query->setFetchMode(PDO::FETCH_CLASS, 'App\Model\User');
        $query->execute([$login]);
        return $query->fetch();
    }

}
