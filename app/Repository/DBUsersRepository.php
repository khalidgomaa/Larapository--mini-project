<?php
namespace App\Repository;


use App\Models\User;
use App\RepositoryInterfaces\UserRepositoryInterface;

class DBUsersRepository implements UserRepositoryInterface{

    public function all()
    {
        return User::all();
    }
    public function create($attributes)
    {
     return User::create($attributes);
    }
}