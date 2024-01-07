<?php
namespace App\RepositoryInterfaces;

interface UserRepositoryInterface{
    public function all();
    public function create($attributes);
}