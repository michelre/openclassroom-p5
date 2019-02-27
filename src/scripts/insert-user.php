<?php

namespace App\Scripts;
include_once __DIR__ . '/../model/User.php';
include_once __DIR__ . '/../dao/BaseDao.php';
include_once __DIR__ . '/../dao/UserDao.php';
use App\Dao\UserDao;
use App\Model\User;



$user = new User();
$user->setLogin('root');
$user->setPassword("root");

$userDao = new UserDao();
$userDao->create($user);

