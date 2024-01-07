<?php
namespace App\Repository;

use App\Moduls\User;
use App\RepositoryInterfaces\UserRepositoryInterface;

class DBUsersRepository implements UserRepositoryInterface{

    public function all()
    {
        return User::all();
    }
    public function create($attributes)
    {
     
    }
}